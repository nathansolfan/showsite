import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// Set initial position on the right
document.addEventListener("DOMContentLoaded", () => {
    const square = document.getElementById("animated-square");
    square.style.right = "200px"; // Starts from the right side
});

// Timeline for zig-zag movement
gsap.timeline({
    scrollTrigger: {
        trigger: "body",
        start: "top top",
        end: "bottom bottom",
        scrub: true, // Smooth scrolling effect
    }
})
.to("#animated-square", { y: 150, x: 200, rotation: 30, scale: 1.1, duration: 1 })
.to("#animated-square", { y: 300, x: -150, rotation: -20, scale: 1.2, duration: 1 })
.to("#animated-square", { y: 500, x: 100, rotation: 45, scale: 1.3, duration: 1 })
.to("#animated-square", { y: 700, x: -100, rotation: -30, scale: 1, duration: 1 })
.to("#animated-square", { y: window.innerHeight - 100, x: 50, rotation: 0, scale: 1, duration: 1 });
