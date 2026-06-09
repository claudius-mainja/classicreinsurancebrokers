import { useState, type ReactNode } from 'react';

interface Item {
  id: string;
  title: string;
  content: ReactNode;
}

interface Props {
  items: Item[];
  className?: string;
}

export default function Accordion({ items, className = '' }: Props) {
  const [openId, setOpenId] = useState<string | null>(items[0]?.id || null);

  return (
    <div className={`space-y-3 ${className}`}>
      {items.map((item) => {
        const isOpen = openId === item.id;
        return (
          <div
            key={item.id}
            class={`rounded-xl border ${
              isOpen ? 'border-primary-500/30 bg-primary-500/5' : 'border-white/10 bg-white/5'
            } transition-all duration-300`}
          >
            <button
              onClick={() => setOpenId(isOpen ? null : item.id)}
              class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left"
            >
              <span class="text-sm font-medium text-white">{item.title}</span>
              <svg
                class={`h-4 w-4 shrink-0 text-neutral-500 transition-transform duration-300 ${
                  isOpen ? 'rotate-180 text-primary-400' : ''
                }`}
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div
              class={`overflow-hidden transition-all duration-300 ${
                isOpen ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0'
              }`}
            >
              <div class="px-6 pb-5 text-sm leading-relaxed text-neutral-400">
                {item.content}
              </div>
            </div>
          </div>
        );
      })}
    </div>
  );
}
