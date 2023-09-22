// Function to check which section is in the viewport
function checkActiveSection() {
  const scrollPosition = window.scrollY + window.innerHeight / 2;
  const buttons = document.querySelectorAll(".nav-buttons[href]");
  
  buttons.forEach(function(button) {
    const targetId = button.getAttribute("href");
    const targetSection = document.querySelector(targetId);
    
    if (targetSection) {
      const sectionTop = targetSection.offsetTop;
      const sectionBottom = sectionTop + targetSection.offsetHeight;

      if (scrollPosition >= sectionTop && scrollPosition <= sectionBottom) {
        buttons.forEach(function(btn) {
          btn.classList.remove("active");
        });
        button.classList.add("active");
      }
    }
  });
}

// Add a scroll event listener to check the active section on scroll
window.addEventListener("scroll", checkActiveSection);

// Function to handle button click and scrolling
function scrollToSection(event) {
  event.preventDefault();
  const targetId = this.getAttribute("href");
  const targetSection = document.querySelector(targetId);

  if (targetSection) {
    window.scrollTo({
      top: targetSection.offsetTop,
      behavior: "smooth"
    });

    document.querySelector(".nav-buttons.active").classList.remove("active");
    this.classList.add("active");
  }
}

// Add click event listeners to navbar buttons
const buttons = document.querySelectorAll(".nav-buttons[href]");
buttons.forEach(function(button) {
  button.addEventListener("click", scrollToSection);
});
