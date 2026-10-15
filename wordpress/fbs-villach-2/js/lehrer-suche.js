(function () {
  var q = document.getElementById("teacher-search");
  if (!q) return;
  var cards = [].slice.call(document.querySelectorAll("#teacher-cards .card"));
  var empty = document.getElementById("teacher-empty");
  q.addEventListener("input", function () {
    var v = q.value.trim().toLowerCase(), hits = 0;
    cards.forEach(function (c) { var ok = c.textContent.toLowerCase().indexOf(v) > -1; c.hidden = !ok; if (ok) hits++; });
    empty.hidden = hits > 0;
  });
})();
