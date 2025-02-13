import gsap from "gsap";
import { TextPlugin } from "gsap/TextPlugin";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(TextPlugin, ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    // Select the element with the id "driver"
    const driverElement = document.getElementById('driver');

    if (!driverElement) {
        console.error('Element with id "driver" not found');
        return;
    }

    // Save original text and define the new text
    const originalText = driverElement.textContent;
    const newText = "Projects keep coming";

    // Instead of running the tween immediately, tie it to the scroll position.
    gsap.to(driverElement, {
        duration: 2,
        text: newText,
        ease: "none",
        scrollTrigger: {
            trigger: driverElement, // When the driver element is in view
            start: "top center",     // Adjust as needed (e.g., when the top of the element reaches the center of the viewport)
            end: "bottom center",    // Adjust as needed
            scrub: true,
            markers: true            // This will show markers for debugging
        }
    });

    // Toggle the text on click (this remains independent of scrollTrigger)
    let isToggled = false;
    driverElement.addEventListener('click', () => {
        if (isToggled) {
            gsap.to(driverElement, {
                duration: 2,
                text: originalText,
                ease: "none",
                onComplete: () => { isToggled = false; }
            });
        } else {
            gsap.to(driverElement, {
                duration: 2,
                text: newText,
                ease: "none",
                onComplete: () => { isToggled = true; }
            });
        }
    });
});
