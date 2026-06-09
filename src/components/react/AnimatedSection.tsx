import { useEffect, useRef, type ReactNode } from 'react';

interface Props {
  children: ReactNode;
  className?: string;
  animation?: 'fade-up' | 'fade-in' | 'fade-left' | 'fade-right' | 'reveal' | 'scale-in' | 'slide-up-blur' | 'stagger-fade';
  delay?: number;
  threshold?: number;
  staggerIndex?: number;
}

export default function AnimatedSection({ children, className = '', animation = 'fade-up', delay = 0, threshold = 0.1, staggerIndex }: Props) {
  const ref = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const el = ref.current;
    if (!el) return;
    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          el.style.transitionDelay = `${delay}ms`;
          el.classList.add('visible');
          observer.unobserve(el);
        }
      },
      { threshold, rootMargin: '0px 0px -40px 0px' }
    );
    observer.observe(el);
    return () => observer.disconnect();
  }, [delay, threshold]);

  return (
    <div ref={ref} className={`${animation} ${className}`} style={staggerIndex !== undefined ? { transitionDelay: `${staggerIndex * 80}ms` } : undefined}>
      {children}
    </div>
  );
}
