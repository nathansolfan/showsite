import gsap from "gsap";
import TextPlugin from "gsap/TextPlugin";

gsap.registerPlugin(TextPlugin);

document.addEventListener("DOMContentLoaded", () => {
    console.log("GSAP Text Animation Script Loaded ✅");

    const titleElements = document.querySelectorAll("[id$='title-text']"); // Selects all title elements

    titleElements.forEach((title) => {
        console.log(`Animating ${title.id}...`);

        gsap.to(title, {
            duration: 2,
            text: { value: title.innerText, delimiter: "" },
            ease: "power1.out",
            onComplete: () => console.log(`Animation Completed for ${title.id} ✅`),
        });
    });
});
