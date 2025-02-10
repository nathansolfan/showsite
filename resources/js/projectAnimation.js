import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// Wait for the DOM to load before running the animation
document.addEventListener("DOMContentLoaded", () => {
    gsap.utils.toArray(".project-box").forEach((box) => {
        gsap.from(box, {
            scrollTrigger: {
                trigger: box,
                start: "top 80%", // Start when 80% of it is visible
                end: "top 30%", // Ends when it reaches 30% of viewport
                scrub: true, // Smooth scrolling effect
            },
            x: 200, // Move from right
            opacity: 0, // Start invisible
            duration: 1.5,
            ease: "power2.out",
        });
    });
});
