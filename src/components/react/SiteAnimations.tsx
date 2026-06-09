import { useEffect } from 'react';

export default function SiteAnimations() {
  useEffect(() => {
    let lenis: any;
    let cleanup: (() => void)[] = [];

    async function init() {
      try {
        const LenisMod = await import('lenis');
        const Lenis = LenisMod.default || LenisMod;
        lenis = new Lenis({
          duration: 1.2,
          easing: (t: number) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
          orientation: 'vertical',
          smoothWheel: true,
          wheelMultiplier: 1,
          touchMultiplier: 1.5,
        });

        function raf(time: number) {
          lenis.raf(time);
          requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
      } catch (e) {
        console.warn('Lenis not available:', e);
      }

      try {
        const gsapMod = await import('gsap');
        const gsap = gsapMod.default || gsapMod;
        const { ScrollTrigger } = await import('gsap/ScrollTrigger');
        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray('.gsap-reveal').forEach((el: any) => {
          gsap.fromTo(el,
            { y: 60, opacity: 0 },
            {
              y: 0, opacity: 1, duration: 0.8, ease: 'power3.out',
              scrollTrigger: { trigger: el, start: 'top 85%', toggleActions: 'play none none reverse' }
            }
          );
        });

        gsap.utils.toArray('.parallax-bg').forEach((el: any) => {
          gsap.fromTo(el,
            { y: '-10%' },
            {
              y: '10%', ease: 'none',
              scrollTrigger: { trigger: el.parentElement, start: 'top bottom', end: 'bottom top', scrub: true }
            }
          );
        });

        gsap.utils.toArray('.count-up').forEach((el: any) => {
          const target = parseInt(el.getAttribute('data-target') || '100', 10);
          gsap.fromTo(el,
            { textContent: 0, snap: { textContent: 1 } },
            {
              textContent: target, duration: 2, ease: 'power2.out',
              scrollTrigger: { trigger: el, start: 'top 90%' }
            }
          );
        });

        cleanup.push(() => ScrollTrigger.getAll().forEach((st: any) => st.kill()));

        document.querySelectorAll('.mouse-follow-glow').forEach((el) => {
          const handleMouseMove = (e: MouseEvent) => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            (el as HTMLElement).style.setProperty('--mouse-x', `${x}px`);
            (el as HTMLElement).style.setProperty('--mouse-y', `${y}px`);
          };
          el.addEventListener('mousemove', handleMouseMove);
          cleanup.push(() => el.removeEventListener('mousemove', handleMouseMove));
        });
      } catch (e) {
        console.warn('GSAP not available:', e);
      }
    }

    init();

    return () => {
      if (lenis) lenis.destroy();
      cleanup.forEach((fn) => fn());
    };
  }, []);

  return null;
}
