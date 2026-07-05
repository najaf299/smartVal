{{-- ============ Top bar ============ --}}
<div class="bg-ink-950 text-white">
    <div class="container-x flex h-10 items-center justify-between gap-4 text-[13px] font-semibold">
        <div class="flex items-center gap-5 min-w-0">
            <a href="tel:{{ __('app.phone_href') }}"
                class="inline-flex items-center gap-1.5 text-ink-100 hover:text-brand-300 transition-colors">
                <svg class="h-3.5 w-3.5 text-brand-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                {{ __('app.phone') }}
            </a>
            <a href="mailto:{{ __('app.email') }}"
                class="hidden sm:inline-flex items-center gap-1.5 text-ink-100 hover:text-brand-300 transition-colors">
                <svg class="h-3.5 w-3.5 text-brand-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="16" x="2" y="4" rx="2" />
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                </svg>
                {{ __('app.email') }}
            </a>
        </div>

        <div class="flex items-center gap-4 shrink-0">
            <span class="hidden md:inline text-ink-300">{{ __('app.hours_weekdays') }}</span>
            <div class="flex items-center gap-1" aria-label="Language">
                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        class="rounded-md px-2 py-0.5 uppercase tracking-wide transition-colors {{ LaravelLocalization::getCurrentLocale() === $localeCode ? 'bg-brand-600 text-white' : 'text-ink-300 hover:text-white' }}">
                        {{ strtoupper($localeCode) }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- ============ Main header ============ --}}
<header id="site-header"
    class="sticky top-0 z-50 bg-white border-b border-ink-100 transition-shadow [&.is-scrolled]:shadow-md">
    <div class="container-x flex h-18 items-center justify-between gap-6 py-3">

        <a href="{{ route('home') }}" class="shrink-0" aria-label="{{ __('app.brand_full') }}">
            <img src="{{ asset('assets/images/logo_final.png') }}" alt="{{ __('app.brand_full') }}"
                class="h-11 w-auto sm:h-12" width="355" height="90">
        </a>

        <nav class="hidden lg:flex items-center gap-1 font-bold text-[15px]" aria-label="Main">
            @foreach ([
        'home' => __('app.home'),
        'about' => __('app.about'),
        'services' => __('app.services'),
        'contact' => __('app.contact'),
    ] as $routeName => $label)
                <a href="{{ route($routeName) }}"
                    class="relative rounded-full px-4 py-2 transition-colors {{ Route::is($routeName) ? 'text-brand-700 bg-brand-50' : 'text-ink-800 hover:text-brand-700 hover:bg-ink-50' }}">
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3">
            <a href="{{ route('contact') }}" class="btn-primary btn-md hidden sm:inline-flex">
                {{ __('app.get_started') }}
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                </svg>
            </a>

            <button id="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-panel"
                aria-label="{{ __('app.menu') }}"
                class="lg:hidden inline-flex h-11 w-11 items-center justify-center rounded-xl border border-ink-200 text-ink-900 hover:bg-ink-50 transition-colors">
                <svg data-icon="open" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.2" stroke-linecap="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg data-icon="close" class="h-5 w-5 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.2" stroke-linecap="round">
                    <path d="M6 6l12 12M18 6L6 18" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile panel --}}
    <div id="nav-panel" class="nav-panel lg:hidden border-t border-ink-100 bg-white">
        <div>
            <nav class="container-x flex flex-col gap-1 py-4 font-bold" aria-label="Mobile">
                @foreach ([
        'home' => __('app.home'),
        'about' => __('app.about'),
        'services' => __('app.services'),
        'contact' => __('app.contact'),
    ] as $routeName => $label)
                    <a href="{{ route($routeName) }}"
                        class="rounded-xl px-4 py-3 transition-colors {{ Route::is($routeName) ? 'bg-brand-50 text-brand-700' : 'text-ink-800 hover:bg-ink-50' }}">
                        {{ $label }}
                    </a>
                @endforeach

                <a href="{{ route('contact') }}" class="btn-primary btn-lg mt-3 w-full">
                    {{ __('app.get_started') }}
                </a>

                <div class="mt-4 flex flex-col gap-2 border-t border-ink-100 pt-4 text-sm font-semibold text-ink-600">
                    <a href="tel:{{ __('app.phone_href') }}" class="hover:text-brand-700">{{ __('app.call_us') }}:
                        {{ __('app.phone') }}</a>
                    <a href="mailto:{{ __('app.email') }}" class="hover:text-brand-700">{{ __('app.email_us') }}:
                        {{ __('app.email') }}</a>
                </div>
            </nav>
        </div>
    </div>
</header>
