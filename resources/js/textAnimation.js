import gsap from "gsap";
import { TextPlugin } from "gsap/TextPlugin";

gsap.registerPlugin(TextPlugin);

document.addEventListener('DOMContentLoaded', () => {
    // Select the element with the id "driver"
    const driverElement = document.getElementById('driver');

    // Check that the element exists before applying the animation
    if (!driverElement) {
        console.error('Element with id "driver" not found');
        return;
    };

    // save original text
    const originalText = driverElement.textContent;
    const newText = "Projects keep coming";

    // initial state
    let isToggled = false;

    gsap.to(driverElement ,{
        duration:2,
        text: newText,
        ease: 'none',
        onComplete: () => {isToggled = true}
    })

    // click event
    driverElement.addEventListener('click', () => {
        if (isToggled) {
            // if new test is currently displayed, animate back
            gsap.to(driverElement, {
                duration: 2,
                text: originalText,
                ease: "none",
                onComplete: () => { isToggled = false }
            })
        } else {
            // if original text, animate again to new one
            gsap.to(driverElement, {
                duration: 2,
                text: newText,
                ease: "none",
                onComplete: () => { isToggled = true}
            })
        }
    })
});
