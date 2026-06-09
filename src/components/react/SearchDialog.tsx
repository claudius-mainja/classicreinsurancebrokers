import { useEffect, useRef, useState, type FormEvent } from 'react';

function loadPagefind(): Promise<any> {
  return new Promise((resolve, reject) => {
    if ((window as any).pagefind) {
      resolve((window as any).pagefind);
      return;
    }
    const script = document.createElement('script');
    script.src = '/pagefind/pagefind.js';
    script.onload = () => resolve((window as any).pagefind);
    script.onerror = reject;
    document.head.appendChild(script);
  });
}

export default function SearchDialog() {
  const [open, setOpen] = useState(false);
  const [query, setQuery] = useState('');
  const [results, setResults] = useState<{ url: string; title: string; excerpt: string }[]>([]);
  const [loading, setLoading] = useState(false);
  const inputRef = useRef<HTMLInputElement>(null);
  const pagefindRef = useRef<any>(null);

  useEffect(() => {
    if (open) {
      loadPagefind().then((pf) => { pagefindRef.current = pf; });
      setTimeout(() => inputRef.current?.focus(), 100);
    }
  }, [open]);

  useEffect(() => {
    if (!open) { setQuery(''); setResults([]); }
  }, [open]);

  useEffect(() => {
    const handleKeyDown = (e: KeyboardEvent) => {
      if ((e.ctrlKey || e.metaKey) && e.key === 'k') { e.preventDefault(); setOpen(true); }
      if (e.key === 'Escape') setOpen(false);
    };
    document.addEventListener('keydown', handleKeyDown);
    return () => document.removeEventListener('keydown', handleKeyDown);
  }, []);

  const handleSearch = async (e?: FormEvent) => {
    e?.preventDefault();
    if (!query.trim()) return;
    setLoading(true);
    try {
      const pf = pagefindRef.current || await loadPagefind();
      const search = await pf.search(query);
      const raw = await Promise.all(search.results.map((r: any) => r.data()));
      setResults(raw.map((r: any) => ({ url: r.url, title: r.meta?.title || r.title, excerpt: r.excerpt })));
    } catch {
      setResults([]);
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    if (query.trim().length >= 2) handleSearch();
  }, [query]);

  if (!open) return null;

  return (
    <div class="fixed inset-0 z-[100] flex items-start justify-center pt-[15vh]">
      <div class="fixed inset-0 bg-black/60 backdrop-blur-sm" onClick={() => setOpen(false)} />
      <div class="relative w-full max-w-lg rounded-xl border border-white/10 bg-neutral-900 shadow-2xl shadow-black/50 overflow-hidden">
        <form onSubmit={handleSearch} class="flex items-center gap-3 border-b border-white/10 px-5 py-4">
          <svg class="h-5 w-5 shrink-0 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
          <input
            ref={inputRef}
            type="text"
            value={query}
            onChange={(e) => setQuery(e.target.value)}
            placeholder="Search products, services, articles..."
            class="flex-1 bg-transparent text-sm text-white outline-none placeholder:text-neutral-600"
          />
          <kbd class="hidden rounded-md border border-white/10 bg-neutral-800 px-2 py-0.5 text-[11px] text-neutral-500 sm:inline">ESC</kbd>
        </form>
        <div class="max-h-80 overflow-y-auto p-2">
          {loading && (
            <div class="flex items-center justify-center py-8">
              <div class="h-6 w-6 animate-spin rounded-full border-2 border-primary-500 border-t-transparent" />
            </div>
          )}
          {!loading && query && results.length === 0 && (
            <p class="py-8 text-center text-sm text-neutral-500">No results found for "{query}"</p>
          )}
          {results.map((r, i) => (
            <a
              key={i}
              href={r.url}
              onClick={() => setOpen(false)}
              class="block rounded-lg px-4 py-3 transition-colors hover:bg-neutral-800"
            >
              <p class="text-sm font-medium text-white">{r.title}</p>
              <p class="mt-0.5 text-xs text-neutral-500 line-clamp-2">{r.excerpt}</p>
            </a>
          ))}
        </div>
      </div>
    </div>
  );
}
