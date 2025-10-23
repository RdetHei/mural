document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll("a");
  links.forEach(link => {
    link.addEventListener("mouseenter", () => {
      link.classList.add("transition", "scale-105");
    });
    link.addEventListener("mouseleave", () => {
      link.classList.remove("scale-105");
    });
  });
});
