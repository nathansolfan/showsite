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
            trigger: driverElement,
            start: "top center",
            end: "bottom 80%",  // Adjusted end value stops the tween earlier
            scrub: true,
            // markers: true  // Enable markers for debugging
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

    const testElement = document.getElementById('test');

    gsap.to(testElement, {
        duration: 2,
        text: newText,
        ease: "none",

    });



});


