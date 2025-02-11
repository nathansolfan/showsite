import gsap from "gsap";
import { TextPlugin } from "gsap/TextPlugin";

gsap.registerPlugin(TextPlugin);

document.addEventListener('DOMContentLoaded', () => {
    // Select the element with the id "driver"
    const driverElement = document.getElementById('driver');

    // Check that the element exists before applying the animation
    if (driverElement) {

        // Store the original text so we can revert back later
        const originalText = driverElement.textContent;

        gsap.to(driverElement, {
            duration: 2,
            text: "Projects keep coming", // New text to animate in
            ease: "none",
        });

        // Add a click event listener that animates the text back to the original
        driverElement.addEventListener('click', () => {
            gsap.to(driverElement, {
                duration: 2,
                text: originalText,
                ease: "none"
            })
        })
    } else {
        console.error('Element with id "driver" not found.');
    }
});
