function toggleDarkMode() {
  const body = document.body;
  const btn = document.getElementById("dark-mode-btn");

  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    btn.textContent = "☼";
    localStorage.setItem("theme", "dark");
  } else {
    btn.textContent = "☾";
    localStorage.setItem("theme", "light");
  }
}

// Applique le thème sauvegardé au chargement de la page
(function () {
  const theme = localStorage.getItem("theme");
  if (theme === "dark") {
    document.body.classList.add("dark");
    document.addEventListener("DOMContentLoaded", function () {
      const btn = document.getElementById("dark-mode-btn");
      if (btn) btn.textContent = "☼";
    });
  }
})();
