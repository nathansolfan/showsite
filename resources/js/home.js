import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// Set initial position on the right
document.addEventListener("DOMContentLoaded", () => {
    const square = document.getElementById("animated-square");
    square.style.left = "auto";
    square.style.right = "200px"; // Starts from the right side
});

// Function to create a smoke trail effect
// Function to create a smoke trail effect
// Function to create a smoke trail effect
function createSmokeTrail(x, y) {
    const smoke = document.createElement("div");
    smoke.classList.add("smoke-trail");
    document.body.appendChild(smoke);

    gsap.set(smoke, {
        position: "absolute",
        top: `${y}px`,
        left: `${x}px`,
        opacity: 1,
        scale: gsap.utils.random(0.8, 1.5), // Different sizes
    });

    gsap.to(smoke, {
        y: gsap.utils.random(-20, 20), // Moves randomly up/down
        x: gsap.utils.random(-20, 20), // Moves randomly left/right
        opacity: 0, // Fades out
        scale: gsap.utils.random(1.5, 2.5), // Expands while fading
        duration: 1.5, // Lasts longer before fading
        ease: "power2.out",
        onComplete: () => smoke.remove() // Removes after animation
    });
}



// Timeline for zig-zag movement with smoke trail
// Timeline for zig-zag movement with smoke trail
const tl = gsap.timeline({
    scrollTrigger: {
        trigger: "body",
        start: "top top",
        end: "bottom bottom",
        scrub: true, // Smooth scrolling effect
        pin: false,
    },
    onUpdate: () => {
        const square = document.getElementById("animated-square");
        const rect = square.getBoundingClientRect();
        createSmokeTrail(rect.left + 10, rect.top + 10);
        createSmokeTrail(rect.left + 15, rect.top + 15); // Creates extra smoke for better effect
    }
});



// Zig-zag movement with randomized direction
tl.to("#animated-square", { y: 150, x: 200, rotation: 30, scale: 1.1, duration: 1 })
  .to("#animated-square", { y: 300, x: -150, rotation: -20, scale: 1.2, duration: 1 })
  .to("#animated-square", { y: 500, x: 100, rotation: 45, scale: 1.3, duration: 1 })
  .to("#animated-square", { y: 700, x: -100, rotation: -30, scale: 1, duration: 1 })
  .to("#animated-square", { y: window.innerHeight - 100, x: 50, rotation: 0, scale: 1, duration: 1 });
