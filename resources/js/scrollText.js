import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
  const scrollText = document.querySelector('.scroll-text');
  const scrollText2 = document.getElementById('line2');
  const scrollText3 = document.getElementById('line3');
  const container = document.querySelector('.scroll-text-container');

  if (scrollText && scrollText2 && scrollText3 && container) {
    // Compute each text element's width individually
    const textWidth1 = scrollText.offsetWidth;
    const textWidth2 = scrollText2.offsetWidth;
    const textWidth3 = scrollText3.offsetWidth;

    const containerWidth = container.offsetWidth;

    // Calculate a factor based on the first text width vs. container width.
    const baseDuration = 20; // Base "time" if text width equals container width.
    const computedTime = baseDuration * (textWidth1 / containerWidth);
    const scrollDistance = computedTime * 65;

    console.log({ textWidth1, textWidth2, textWidth3, containerWidth, computedTime, scrollDistance });

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: container,
        start: 'top center',
        pin: true,

        end: `+=${scrollDistance * 1.5}`,
        scrub: true,
        markers: true, // Enable markers for debugging
      }
    });

    // Animate each line in sequence using its own width value with explicit durations:
    tl.to(scrollText, { x: -textWidth1, ease: 'linear', duration: 1 })
      .to(scrollText2, { x: textWidth2, ease: 'linear', duration: 1 })
      .to(scrollText3, { x: -textWidth3, ease: 'linear', duration: 1 });
  }
});


// gsap.to(scrollText, {
//     x: -textWidth,
//     ease: 'linear',
//     scrollTrigger: {
//         trigger: container,
//         start: 'top center',         // When the container reaches the top of the viewport.
//         end: `+=${scrollDistance}`,// The scroll distance over which the text scrolls.
//         scrub: true,              // Smoothly ties the tween's progress to the scrollbar.
//         // pin: true,                // Pin the container during the scroll.
//         // markers: true,         // Uncomment to see visual markers for debugging.
//     }
// });

// gsap.to(scrollText2, {
//     x: textWidth,
//     ease: 'linear',
//     scrollTrigger: {
//         trigger: container,
//         start: 'top center',         // When the container reaches the top of the viewport.
//         end: `+=${scrollDistance}`,// The scroll distance over which the text scrolls.
//         scrub: true,              // Smoothly ties the tween's progress to the scrollbar.
//         // pin: true,                // Pin the container during the scroll.
//         // markers: true,         // Uncomment to see visual markers for debugging.
//     }
// });

// gsap.to(scrollText3, {
//     x: -textWidth,
//     ease: 'linear',
//     scrollTrigger: {
//         trigger: container,
//         start: 'top top',         // When the container reaches the top of the viewport.
//         end: `+=${scrollDistance}`,// The scroll distance over which the text scrolls.
//         scrub: true,              // Smoothly ties the tween's progress to the scrollbar.
//         // pin: true,                // Pin the container during the scroll.
//         // markers: true,         // Uncomment to see visual markers for debugging.
//     }
// });
