import './bootstrap';
import Alpine from 'alpinejs';
import Lenis from 'lenis';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;
Alpine.start();

const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    orientation: 'vertical',
    gestureOrientation: 'vertical',
    smoothWheel: true,
    wheelMultiplier: 1,
    touchMultiplier: 1.5,
});

lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time) => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);

document.addEventListener('DOMContentLoaded', () => {
    const revealItems = document.querySelectorAll('.reveal');
    revealItems.forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, y: 60 },
            {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                },
            }
        );
    });

    const scaleItems = document.querySelectorAll('.reveal-scale');
    scaleItems.forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, scale: 0.9 },
            {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                },
            }
        );
    });

    const counters = document.querySelectorAll('.counter');
    counters.forEach((counter) => {
        const target = parseInt(counter.dataset.target);
        const duration = parseInt(counter.dataset.duration) || 2000;
        gsap.fromTo(counter,
            { textContent: 0 },
            {
                textContent: target,
                duration: duration / 1000,
                ease: 'power2.out',
                snap: { textContent: 1 },
                scrollTrigger: {
                    trigger: counter,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                },
            }
        );
    });

    const parallaxItems = document.querySelectorAll('.parallax');
    parallaxItems.forEach((el) => {
        gsap.to(el, {
            y: () => window.innerHeight * 0.15,
            ease: 'none',
            scrollTrigger: {
                trigger: el,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
            },
        });
    });

    const staggerItems = document.querySelectorAll('.stagger-children');
    staggerItems.forEach((parent) => {
        const children = parent.children;
        gsap.fromTo(children,
            { opacity: 0, y: 40 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.15,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: parent,
                    start: 'top 80%',
                    toggleActions: 'play none none none',
                },
            }
        );
    });

    const marquees = document.querySelectorAll('.marquee');
    marquees.forEach((marquee) => {
        const content = marquee.querySelector('.marquee-content');
        if (content) {
            const clone = content.cloneNode(true);
            marquee.appendChild(clone);
            gsap.to([content, clone], {
                xPercent: -100,
                repeat: -1,
                duration: 30,
                ease: 'none',
            });
        }
    });

    const nav = document.querySelector('.nav');
    if (nav) {
        ScrollTrigger.create({
            start: 'top -80px',
            onUpdate: (self) => {
                if (self.direction === 1 && self.progress > 0.1) {
                    nav.classList.add('nav-scrolled');
                } else {
                    nav.classList.remove('nav-scrolled');
                }
            },
        });
    }
});

if (typeof tippy !== 'undefined') {
    document.querySelectorAll('[data-tippy-content]').forEach((el) => {
        tippy(el);
    });
}
