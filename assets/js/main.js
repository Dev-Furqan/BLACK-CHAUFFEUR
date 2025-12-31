(() => {
  const btn = document.querySelector(".navToggle");
  const mobile = document.getElementById("mobileNav");
  if (!btn || !mobile) return;

  btn.addEventListener("click", () => {
    mobile.classList.toggle("is-open");
  });
})();
document.querySelectorAll(".faqBtn").forEach((btn) => {
  btn.addEventListener("click", () => {
    const item = btn.closest(".faqItem");
    item.classList.toggle("is-open");

    const expanded = btn.getAttribute("aria-expanded") === "true";
    btn.setAttribute("aria-expanded", String(!expanded));
  });
});
