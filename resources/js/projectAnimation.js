import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// Animate project boxes on scroll
document.addEventListener("DOMContentLoaded", () => {
    gsap.utils.toArray(".project-box").forEach((box) => {
        gsap.from(box, {
            scrollTrigger: {
                trigger: box,
                start: "top 70%", // Start when 80% of it is visible
                end: "top 30%", // Ends when it reaches 30% of viewport
                scrub: true, // Smooth scrolling effect
            },
            scale: 0.8, // Slightly zoom in instead of x movement
            opacity: 0, // Fade in
            autoAlpha: 0, // Ensures display is properly handled
            duration: 10,
            ease: "back.out(1.7)"
        });
    });
});


// gsap.registerPlugin(ScrollTrigger)
// gsap.defaults({ease: "none" , duration: 2})

// const tl = gsap.timeline();
// tl.from(".orange", {xPercent: -100})
// .from(".purple", {xPercent: 100})
// .from(".green", {yPercent: -100})

// ScrollTrigger.create({
//     animation: tl,
//     trigger: "#container",
//     start: "top top",
//     end: "+=4000",
//     scrub: true,
//     pin: true,
//     anticipatePin:1
// })
