import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// Animate project boxes on scroll
document.addEventListener("DOMContentLoaded", () => {
    gsap.utils.toArray(".project-box").forEach((box) => {
        gsap.from(box, {
            scrollTrigger: {
                trigger: box,
                start: "top 80%", // Start when 80% of it is visible
                end: "top 30%", // Ends when it reaches 30% of viewport
                scrub: true, // Smooth scrolling effect
            },
            scale: 0.95, // Slightly zoom in instead of x movement
            opacity: 0, // Fade in
            autoAlpha: 0, // Ensures display is properly handled
            duration: 1.2,
            ease: "power2.out",
        });
    });
});
