document.addEventListener("DOMContentLoaded", () => {
  const hamburgerBtn = document.querySelector(".hamburger button");
  const mobileMenu = document.querySelector(".mobile-menu");

  if (hamburgerBtn && mobileMenu) {
    hamburgerBtn.addEventListener("click", () => {
      mobileMenu.style.display =
        mobileMenu.style.display === "grid" ? "none" : "grid";
    });
  }

  const subMenuToggles = mobileMenu.querySelectorAll(".has-sub-menu > a");

  subMenuToggles.forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      e.preventDefault();
      const subMenu = anchor.nextElementSibling;
      if (subMenu) {
        subMenu.style.display =
          subMenu.style.display === "flex" ? "none" : "flex";
      }
    });
  });
});
