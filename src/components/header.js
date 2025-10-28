import "./mobile-menu";

document.querySelectorAll(".has-sub-menu > a").forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const parent = link.parentElement;
    parent.classList.toggle("open");
  });
});
