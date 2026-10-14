/* Lädt News, Team und Bilder aus dem Ordner content/ (bearbeitbar über Pages CMS). */
(function () {
  "use strict";

  function esc(s) {
    return String(s == null ? "" : s).replace(/[&<>"']/g, function (c) {
      return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c];
    });
  }
  function src(p) { return p ? String(p).replace(/^\/+/, "") : ""; }
  function load(name) {
    return fetch("content/" + name + ".json", { cache: "no-cache" }).then(function (r) {
      if (!r.ok) throw new Error(name);
      return r.json();
    });
  }
  function initials(name) {
    var parts = String(name).replace(/,.*$/, "").split(/\s+/).filter(function (w) {
      return w && !/\.$/.test(w) && !/^\(/.test(w) && !/^(BD|BDS|RL|pL)$/.test(w);
    });
    if (!parts.length) return "";
    return (parts[0][0] + (parts.length > 1 ? parts[parts.length - 1][0] : "")).toUpperCase();
  }
  function fmtDate(d) {
    var m = /^(\d{4})-(\d{2})-(\d{2})/.exec(d || "");
    return m ? m[3] + "." + m[2] + "." + m[1] : "";
  }
  function paras(t) {
    return String(t || "").split(/\n+/).filter(Boolean).map(function (p) { return "<p>" + esc(p) + "</p>"; }).join("");
  }
  function setImg(el, path, alt) {
    var s = src(path);
    if (!s) return;
    var img = new Image();
    img.onload = function () {
      img.alt = alt || "";
      img.loading = "lazy";
      el.textContent = "";
      el.appendChild(img);
      el.classList.add("has-img");
    };
    img.src = s;
  }

  /* Bilder auf festen Plätzen */
  var bildEls = document.querySelectorAll("[data-bild]");
  if (bildEls.length) {
    load("bilder").then(function (b) {
      bildEls.forEach(function (el) { setImg(el, b[el.getAttribute("data-bild")], el.getAttribute("aria-label")); });
    }).catch(function () {});
  }

  /* News */
  var newsEls = document.querySelectorAll("[data-news]");
  if (newsEls.length) {
    load("news").then(function (n) {
      var list = (n.beitraege || []).slice().sort(function (a, b) { return String(b.datum).localeCompare(String(a.datum)); });
      newsEls.forEach(function (el) {
        var lim = el.getAttribute("data-news");
        var items = lim === "all" ? list : list.slice(0, parseInt(lim, 10) || 3);
        var tones = ["", " y", " r"];
        el.innerHTML = items.length ? items.map(function (p, i) {
          var big = lim !== "all" && i === 0 ? " big" : "";
          return '<article class="post' + big + '">' +
            '<div class="img' + tones[i % 3] + '" data-label="Foto folgt" role="img" aria-label="' + esc(p.titel) + '"></div>' +
            '<div class="body"><span class="meta">' + esc(p.kategorie) + (p.datum ? " · " + fmtDate(p.datum) : "") + "</span>" +
            "<h3>" + esc(p.titel) + "</h3>" + paras(p.text) + "</div></article>";
        }).join("") : "<p>Noch keine News.</p>";
        el.querySelectorAll(".post").forEach(function (art, i) { setImg(art.querySelector(".img"), items[i].bild, items[i].titel); });
      });
    }).catch(function () {
      newsEls.forEach(function (el) { el.innerHTML = "<p>Die News konnten nicht geladen werden.</p>"; });
    });
  }

  /* Team */
  var leitungEl = document.querySelector("[data-leitung]");
  var cardsEl = document.getElementById("teacher-cards");
  if (leitungEl || cardsEl) {
    load("team").then(function (t) {
      if (leitungEl) {
        leitungEl.innerHTML = (t.leitung || []).map(function (p) {
          return '<div class="person"><div class="avatar" aria-hidden="true">' + esc(initials(p.name)) + "</div>" +
            "<h3>" + esc(p.name) + '</h3><span class="role">' + esc(p.rolle) + "</span>" +
            (p.telefon ? '<span class="tel">' + esc(p.telefon) + "</span>" : "") + "</div>";
        }).join("");
        leitungEl.querySelectorAll(".avatar").forEach(function (a, i) { setImg(a, t.leitung[i].foto, t.leitung[i].name); });
      }
      if (cardsEl) {
        var lehrer = t.lehrer || [];
        var n = document.querySelector("[data-lehrer-anzahl]");
        if (n) n.textContent = lehrer.length;
        cardsEl.innerHTML = lehrer.map(function (p) {
          return '<article class="card"><div class="avatar sm" aria-hidden="true">' + esc(initials(p.name)) + "</div>" +
            "<div><h3>" + esc(p.name) + '</h3><p class="subj">' + esc(p.faecher || "Fächer folgen") + "</p></div></article>";
        }).join("");
        cardsEl.querySelectorAll(".avatar").forEach(function (a, i) { setImg(a, lehrer[i].foto, lehrer[i].name); });
        var q = document.getElementById("teacher-search"), empty = document.getElementById("teacher-empty");
        var cards = [].slice.call(cardsEl.children);
        q.addEventListener("input", function () {
          var v = q.value.trim().toLowerCase(), hits = 0;
          cards.forEach(function (c) { var ok = c.textContent.toLowerCase().indexOf(v) > -1; c.hidden = !ok; if (ok) hits++; });
          empty.hidden = hits > 0;
        });
      }
    }).catch(function () {
      if (cardsEl) cardsEl.innerHTML = "<p>Das Team konnte nicht geladen werden.</p>";
    });
  }
})();
