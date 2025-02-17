import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {

    const scrollText = document.querySelector('.scroll-text');
    const scrollText2 = document.getElementById('line2')
    const scrollText3 = document.getElementById('line3')

    const container = document.querySelector('.scroll-text-container');

    if (scrollText && container) {
        const containerWidth = container.offsetWidth;
        const textWidth = scrollText.offsetWidth;

        // Calculate a factor based on text width vs. container width.
        // This value will help you set the scroll distance.
        const baseDuration = 20; // Base "time" if text width equals container width.
        const computedTime = baseDuration * (textWidth / containerWidth);

        // Decide on a scroll distance. For example, assume 100 pixels of scroll per second of computed time.
        const scrollDistance = computedTime * 65;

        gsap.to(scrollText, {
            x: -textWidth,
            ease: 'linear',
            scrollTrigger: {
                trigger: container,
                start: 'top center',         // When the container reaches the top of the viewport.
                end: `+=${scrollDistance}`,// The scroll distance over which the text scrolls.
                scrub: true,              // Smoothly ties the tween's progress to the scrollbar.
                // pin: true,                // Pin the container during the scroll.
                // markers: true,         // Uncomment to see visual markers for debugging.
            }
        });

        gsap.to(scrollText2, {
            x: textWidth,
            ease: 'linear',
            scrollTrigger: {
                trigger: container,
                start: 'top center',         // When the container reaches the top of the viewport.
                end: `+=${scrollDistance}`,// The scroll distance over which the text scrolls.
                scrub: true,              // Smoothly ties the tween's progress to the scrollbar.
                // pin: true,                // Pin the container during the scroll.
                // markers: true,         // Uncomment to see visual markers for debugging.
            }
        });

        gsap.to(scrollText3, {
            x: -textWidth,
            ease: 'linear',
            scrollTrigger: {
                trigger: container,
                start: 'top top',         // When the container reaches the top of the viewport.
                end: `+=${scrollDistance}`,// The scroll distance over which the text scrolls.
                scrub: true,              // Smoothly ties the tween's progress to the scrollbar.
                // pin: true,                // Pin the container during the scroll.
                // markers: true,         // Uncomment to see visual markers for debugging.
            }
        });


    }
});
