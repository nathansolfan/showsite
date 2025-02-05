import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function() {
    const planet = document.getElementById("first-planet");
    if (planet) {
      planet.addEventListener("mouseenter", () => {
        planet.classList.add("paused");
      });
      planet.addEventListener("mouseleave", () => {
        planet.classList.remove("paused");
      });
    }
  });
