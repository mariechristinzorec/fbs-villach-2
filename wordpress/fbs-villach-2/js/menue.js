(function () {
  var btn = document.querySelector(".menu-toggle");
  var head = btn && btn.closest("header");
  if (!btn || !head) return;
  function setze(offen) {
    head.classList.toggle("menu-open", offen);
    btn.setAttribute("aria-expanded", offen ? "true" : "false");
  }
  btn.addEventListener("click", function () { setze(btn.getAttribute("aria-expanded") !== "true"); });
  document.querySelectorAll("#hauptmenue a").forEach(function (a) { a.addEventListener("click", function () { setze(false); }); });
  document.addEventListener("keydown", function (e) { if (e.key === "Escape") { setze(false); btn.focus(); } });
  window.addEventListener("resize", function () { if (window.innerWidth > 860) setze(false); });
})();
