import { useEffect, useRef, useState } from 'react';
import { products } from '../../data/products';
import { specialties } from '../../data/specialties';
import { site } from '../../data/site';

export default function Navbar() {
  const [open, setOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);
  const [servicesOpen, setServicesOpen] = useState(false);
  const [mobServices, setMobServices] = useState(false);
  const closeTimer = useRef<ReturnType<typeof setTimeout>>();

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 40);
    window.addEventListener('scroll', onScroll, { passive: true });
    return () => window.removeEventListener('scroll', onScroll);
  }, []);

  useEffect(() => {
    if (open) document.body.style.overflow = 'hidden';
    else document.body.style.overflow = '';
    return () => { document.body.style.overflow = ''; };
  }, [open]);

  const handleMouseEnter = () => {
    if (closeTimer.current) clearTimeout(closeTimer.current);
    setServicesOpen(true);
  };
  const handleMouseLeave = () => {
    closeTimer.current = setTimeout(() => setServicesOpen(false), 150);
  };

  return (
    <nav class={`navbar ${scrolled ? 'scrolled' : ''}`}>
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="hidden lg:flex items-center justify-between border-b border-white/5 py-2 text-xs text-neutral-500">
          <div class="flex items-center gap-6">
            <a href="tel:{site.phoneRaw}" class="flex items-center gap-1.5 hover:text-primary-400 transition-colors">
              <svg class="h-3.5 w-3.5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              {site.phone}
            </a>
            <a href="mailto:{site.email}" class="flex items-center gap-1.5 hover:text-primary-400 transition-colors">
              <svg class="h-3.5 w-3.5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              {site.email}
            </a>
          </div>
          <span class="flex items-center gap-1.5">
            <svg class="h-3.5 w-3.5 text-primary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            {site.address.street}, {site.address.street2}, {site.address.city}
          </span>
        </div>
        <div class="flex h-16 items-center justify-between lg:h-20">
          <a href="/" class="flex items-center gap-2 shrink-0">
            <img src="/images/logo.png" alt={site.name} class="h-8 w-auto lg:h-9" />
          </a>

          <div class="hidden lg:flex lg:items-center lg:gap-1">
            <a href="/" class="nav-link px-3 py-2">Home</a>
            <a href="/about" class="nav-link px-3 py-2">About</a>
            <a href="/careers" class="nav-link px-3 py-2">Careers</a>

            <div class="relative" onMouseEnter={handleMouseEnter} onMouseLeave={handleMouseLeave}>
              <a href="/services" class="nav-link px-3 py-2 inline-flex items-center gap-1">
                Services
                <svg class="h-3 w-3 transition-transform duration-200" style={{ transform: servicesOpen ? 'rotate(180deg)' : 'rotate(0deg)' }} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
              </a>
              {servicesOpen && (
                <div class="absolute left-0 top-full w-[680px] z-50">
                  <div class="mt-2 overflow-hidden rounded-2xl border border-white/10 bg-neutral-900 shadow-xl shadow-black/50 backdrop-blur-xl">
                    <div class="grid grid-cols-2 divide-x divide-white/10">
                      <div class="p-6">
                        <h3 class="text-xs font-semibold uppercase tracking-widest text-primary-400">Reinsurance Products</h3>
                        <ul class="mt-4 space-y-0.5">
                          {products.map((p) => (
                            <li key={p.slug}>
                              <a href={`/services/product/${p.slug}`} class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-primary-500/10 hover:text-primary-400">
                                {p.name}
                              </a>
                            </li>
                          ))}
                        </ul>
                      </div>
                      <div class="p-6">
                        <h3 class="text-xs font-semibold uppercase tracking-widest text-primary-400">Specialty Risk Insurance</h3>
                        <ul class="mt-4 space-y-0.5">
                          {specialties.map((s) => (
                            <li key={s.slug}>
                              <a href={`/services/specialty/${s.slug}`} class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-primary-500/10 hover:text-primary-400">
                                {s.name}
                              </a>
                            </li>
                          ))}
                        </ul>
                      </div>
                    </div>
                    <div class="border-t border-white/10 bg-neutral-800/50 px-6 py-3">
                      <a href="/services" class="text-sm font-semibold text-primary-400 hover:text-primary-300 transition-colors">View all services &rarr;</a>
                    </div>
                  </div>
                </div>
              )}
            </div>

            <a href="/blog" class="nav-link px-3 py-2">Insights</a>

            <a href="/contact" class="nav-link px-3 py-2">Contact</a>
          </div>

          <div class="hidden lg:flex lg:items-center lg:gap-3">
            <a href={site.companyProfile} target="_blank" class="btn btn-dark text-sm">Company Profile</a>
            <a href="/contact" class="btn btn-primary text-sm">Get a Quote</a>
          </div>

          <button onClick={() => setOpen(!open)} class="relative z-50 flex h-10 w-10 items-center justify-center rounded-full transition-colors hover:bg-white/5 text-neutral-300 lg:hidden" aria-label="Toggle menu">
            {!open ? (
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            ) : (
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            )}
          </button>
        </div>
      </div>

      {open && (
        <div class="border-t border-white/5 bg-neutral-950 lg:hidden">
          <div class="mx-auto max-w-7xl px-6 py-6 space-y-1">
            <a href="/" onClick={() => setOpen(false)} class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-300 hover:bg-primary-500/10 hover:text-primary-400">Home</a>
            <a href="/about" onClick={() => setOpen(false)} class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-300 hover:bg-primary-500/10 hover:text-primary-400">About</a>
            <a href="/careers" onClick={() => setOpen(false)} class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-300 hover:bg-primary-500/10 hover:text-primary-400">Careers</a>

            <div>
              <button onClick={() => setMobServices(!mobServices)} class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-base font-medium text-neutral-300 hover:bg-primary-500/10 hover:text-primary-400">
                Services
                <svg class="h-4 w-4 transition-transform duration-200" style={{ transform: mobServices ? 'rotate(180deg)' : 'rotate(0deg)' }} fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              {mobServices && (
                <div class="mt-1 space-y-1 pl-4">
                  <p class="px-4 pt-3 text-xs font-semibold uppercase tracking-widest text-primary-400">Reinsurance Products</p>
                  {products.map((p) => (
                    <a key={p.slug} href={`/services/product/${p.slug}`} onClick={() => setOpen(false)} class="block rounded-lg px-4 py-2 text-sm text-neutral-400 hover:bg-primary-500/10 hover:text-primary-400">{p.name}</a>
                  ))}
                  <p class="px-4 pt-3 text-xs font-semibold uppercase tracking-widest text-primary-400">Specialty Risk Insurance</p>
                  {specialties.map((s) => (
                    <a key={s.slug} href={`/services/specialty/${s.slug}`} onClick={() => setOpen(false)} class="block rounded-lg px-4 py-2 text-sm text-neutral-400 hover:bg-primary-500/10 hover:text-primary-400">{s.name}</a>
                  ))}
                </div>
              )}
            </div>

            <a href="/blog" onClick={() => setOpen(false)} class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-300 hover:bg-primary-500/10 hover:text-primary-400">Insights</a>
            <a href="/contact" onClick={() => setOpen(false)} class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-300 hover:bg-primary-500/10 hover:text-primary-400">Contact</a>

            <div class="pt-4 border-t border-white/5 mt-4">
              <a href="/contact" onClick={() => setOpen(false)} class="btn btn-primary w-full justify-center">Get a Quote</a>
              <a href={site.companyProfile} target="_blank" onClick={() => setOpen(false)} class="btn btn-dark w-full justify-center mt-2">Company Profile</a>
            </div>
          </div>
        </div>
      )}
    </nav>
  );
}
