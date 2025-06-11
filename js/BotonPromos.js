document.addEventListener("DOMContentLoaded", () => {
  const dropdown = document.querySelector(".promo-dropdown");
  const button = dropdown.querySelector(".promo-btn");
  const menu = dropdown.querySelector(".promo-menu");

  button.addEventListener("click", (e) => {
    e.stopPropagation();
    button.classList.toggle("active");
    menu.classList.toggle("visible");
  });

  document.addEventListener("click", (e) => {
    if (!dropdown.contains(e.target)) {
      button.classList.remove("active");
      menu.classList.remove("visible");
    }
  });
});
