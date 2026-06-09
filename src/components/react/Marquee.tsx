import { useEffect, useRef, type ReactNode } from 'react';

interface Props {
  children: ReactNode;
  direction?: 'left' | 'right';
  speed?: number;
  className?: string;
}

export default function Marquee({ children, direction = 'left', speed = 30, className = '' }: Props) {
  const containerRef = useRef<HTMLDivElement>(null);
  const innerRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const container = containerRef.current;
    const inner = innerRef.current;
    if (!container || !inner) return;

    let animationId: number;
    let pos = 0;
    const dir = direction === 'left' ? -1 : 1;

    const animate = () => {
      pos += dir * 0.5;
      const threshold = inner.scrollWidth / 2;
      if (Math.abs(pos) >= threshold) pos = 0;
      inner.style.transform = `translateX(${pos}px)`;
      animationId = requestAnimationFrame(animate);
    };

    animationId = requestAnimationFrame(animate);
    return () => cancelAnimationFrame(animationId);
  }, [direction]);

  return (
    <div ref={containerRef} className={`overflow-hidden ${className}`}>
      <div ref={innerRef} className="flex gap-8 will-change-transform" style={{ width: 'max-content' }}>
        {children}
        {children}
      </div>
    </div>
  );
}
