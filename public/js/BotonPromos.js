document.addEventListener("DOMContentLoaded", () => {
  const dropdown = document.querySelector(".promo-dropdown");
  const button = dropdown.querySelector(".promo-btn");

  button.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdown.classList.toggle("active");
  });

  document.addEventListener("click", (e) => {
    if (!dropdown.contains(e.target)) {
      dropdown.classList.remove("active");
    }
  });
});
