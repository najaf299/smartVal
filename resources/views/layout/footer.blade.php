<footer class="bg-ink-950 text-ink-300">
    <div class="container-x grid gap-12 py-16 md:grid-cols-2 lg:grid-cols-12">

        {{-- Brand --}}
        <div class="lg:col-span-4">
            <a href="{{ route('home') }}" class="inline-flex" aria-label="{{ __('app.brand_full') }}">
                <img src="{{ asset('assets/images/logo-footer.png') }}" alt="{{ __('app.brand_full') }}"
                    class="h-14 w-auto" width="243" height="90">
            </a>

            <p class="mt-5 max-w-sm text-sm leading-relaxed">{{ __('app.footer_tagline') }}</p>

            <div class="mt-6">
                <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-white">{{ __('app.footer_follow') }}
                </p>
                <div class="mt-3 flex items-center gap-3">
                    <a href="{{ __('app.whatsapp_url') }}" target="_blank" rel="noopener" aria-label="WhatsApp"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-ink-800 text-white transition-colors hover:bg-brand-600">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413" />
                        </svg>
                    </a>
                    <a href="{{ __('app.facebook_url') }}" target="_blank" rel="noopener" aria-label="Facebook"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-ink-800 text-white transition-colors hover:bg-brand-600">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="{{ __('app.instagram_url') }}" target="_blank" rel="noopener" aria-label="Instagram"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-ink-800 text-white transition-colors hover:bg-brand-600">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="2" width="20" height="20" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Quick links --}}
        <div class="lg:col-span-2">
            <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-white">{{ __('app.footer_quick') }}</p>
            <ul class="mt-4 space-y-2.5 text-sm font-semibold">
                <li><a href="{{ route('home') }}"
                        class="transition-colors hover:text-brand-300">{{ __('app.home') }}</a></li>
                <li><a href="{{ route('about') }}"
                        class="transition-colors hover:text-brand-300">{{ __('app.about') }}</a></li>
                <li><a href="{{ route('services') }}"
                        class="transition-colors hover:text-brand-300">{{ __('app.services') }}</a></li>
                <li><a href="{{ route('contact') }}"
                        class="transition-colors hover:text-brand-300">{{ __('app.contact') }}</a></li>
            </ul>
        </div>

        {{-- Services --}}
        <div class="lg:col-span-3">
            <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-white">
                {{ __('app.footer_services_h') }}</p>
            <ul class="mt-4 space-y-2.5 text-sm font-semibold">
                @foreach (['bookkeeping', 'annual', 'payroll', 'tax', 'cfo', 'advisory'] as $svc)
                    <li>
                        <a href="{{ route('services') }}#{{ $svc }}"
                            class="transition-colors hover:text-brand-300">{{ __('app.svc_' . $svc . '_title') }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Contact --}}
        <div class="lg:col-span-3">
            <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-white">{{ __('app.footer_contact_h') }}
            </p>
            <ul class="mt-4 space-y-3.5 text-sm font-semibold">
                <li>
                    <a href="{{ __('app.map_url') }}" target="_blank" rel="noopener"
                        class="flex items-start gap-3 transition-colors hover:text-brand-300">
                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand-400" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span>{{ __('app.address_line1') }}<br>{{ __('app.address_line2') }}</span>
                    </a>
                </li>
                <li>
                    <a href="tel:{{ __('app.phone_href') }}"
                        class="flex items-center gap-3 transition-colors hover:text-brand-300">
                        <svg class="h-4 w-4 shrink-0 text-brand-400" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        {{ __('app.phone') }}
                    </a>
                </li>
                <li>
                    <a href="mailto:{{ __('app.email') }}"
                        class="flex items-center gap-3 transition-colors hover:text-brand-300">
                        <svg class="h-4 w-4 shrink-0 text-brand-400" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        {{ __('app.email') }}
                    </a>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand-400" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 6v6l4 2" />
                    </svg>
                    <span>{{ __('app.hours_weekdays') }}<br>{{ __('app.hours_weekend') }}</span>
                </li>
            </ul>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-ink-800">
        <div
            class="container-x flex flex-col items-center justify-between gap-3 py-6 text-center text-[13px] font-semibold sm:flex-row sm:text-left">
            <p>© {{ date('Y') }} {{ __('app.brand_full') }}. {{ __('app.footer_rights') }}</p>
            <p class="text-ink-500">{{ __('app.footer_org') }}</p>
        </div>
    </div>
</footer>
