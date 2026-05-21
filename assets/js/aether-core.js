/**
 * Aetheris Matrix Runtime Animation Core
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Structural Fluid Scroll Management & Header Physics
    const header = document.getElementById('masthead');
    if(header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                header.classList.add('py-3', 'bg-black/70', 'border-white/10');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('py-3', 'bg-black/70', 'border-white/10');
                header.classList.add('h-20');
            }
        });
    }

    // 2. High-Fidelity Entrance Sequencing (GSAP Framework Integration)
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Run sequential load animations on critical components
        gsap.to('.entry-anim', {
            opacity: 1,
            y: 0,
            duration: 1.2,
            stagger: 0.2,
            ease: "power4.out",
            delay: 0.2
        });

        // 3. Elastic Magnetic Cursor Attraction Physics Matrix
        const targets = document.querySelectorAll('.magnetic-target');
        targets.forEach((btn) => {
            btn.addEventListener('mousemove', (e) => {
                const boundary = btn.getBoundingClientRect();
                const forceX = e.clientX - boundary.left - boundary.width / 2;
                const forceY = e.clientY - boundary.top - boundary.height / 2;

                gsap.to(btn, {
                    x: forceX * 0.35,
                    y: forceY * 0.35,
                    duration: 0.3,
                    ease: "power3.out"
                });
            });

            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, {
                    x: 0,
                    y: 0,
                    duration: 0.6,
                    ease: "elastic.out(1, 0.4)"
                });
            });
        });
    }
});
                  
