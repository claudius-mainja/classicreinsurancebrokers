import { useEffect, useState } from 'react';

export default function ReadingProgress() {
  const [progress, setProgress] = useState(0);

  useEffect(() => {
    const handleScroll = () => {
      const scrollTop = document.documentElement.scrollTop;
      const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      setProgress(scrollHeight > 0 ? (scrollTop / scrollHeight) * 100 : 0);
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <div class="fixed top-0 left-0 right-0 z-[60] h-0.5 bg-white/5">
      <div
        class="h-full bg-gradient-to-r from-primary-500 to-primary-400 transition-all duration-150"
        style={{ width: `${progress}%` }}
      />
    </div>
  );
}
