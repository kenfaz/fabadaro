  const menuBtn = document.querySelector(".menu-btn");
  const mobileNav = document.querySelector("#mobileNav");

  if (menuBtn) {
    menuBtn.addEventListener("click", () => {
      mobileNav.classList.toggle("show");
    });
  }