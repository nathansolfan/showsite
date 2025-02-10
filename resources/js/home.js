import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// Set initial position to the right
document.addEventListener("DOMContentLoaded", () => {
    const square = document.getElementById("animated-square");
    square.style.left = "auto";
    square.style.right = "10px"; // Start from the right
});

gsap.to("#animated-square", {
    scrollTrigger: {
        trigger: "body",
        start: "top top",
        end: "bottom bottom",
        scrub: true,
        pin: false,
    },
    y: window.innerHeight - 100, // Move down
    // x: -window.innerWidth + 100, // Move LEFT instead of right
    rotation: 360, // Rotate
    scale: 1.5, // Scale up
    backgroundColor: "#4F46E5", // Change color
    ease: "power2.out",
});
