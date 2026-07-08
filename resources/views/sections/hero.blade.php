<section class="relative overflow-hidden bg-gradient-to-b from-brand-50/70 via-white to-white">
    <div class="pointer-events-none absolute inset-0" aria-hidden="true">
        <div class="absolute -top-32 right-[-8%] h-96 w-96 rounded-full bg-brand-200/40 blur-3xl"></div>
        <div class="absolute bottom-0 left-[-8%] h-72 w-72 rounded-full bg-brand-100/50 blur-3xl"></div>
    </div>

    <div class="container-x relative grid items-center gap-12 py-14 sm:py-20 lg:grid-cols-2 lg:gap-16 lg:py-24">

        {{-- Copy --}}
        <div class="max-w-xl">
            <span
                class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white px-4 py-1.5 text-[13px] font-bold text-brand-700 shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-brand-400 opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-brand-500"></span>
                </span>
                {{ __('app.hero_badge') }}
            </span>

            <h1 class="mt-6 text-4xl font-extrabold leading-[1.08] tracking-tight text-ink-950 sm:text-5xl xl:text-6xl">
                {{ __('app.hero_title_1') }}
                <span class="relative whitespace-nowrap text-brand-600">
                    {{ __('app.hero_title_em') }}
                    <svg class="absolute -bottom-1.5 left-0 h-2.5 w-full text-brand-300" viewBox="0 0 200 9"
                        fill="none" preserveAspectRatio="none" aria-hidden="true">
                        <path d="M2 7c50-5 146-5 196 0" stroke="currentColor" stroke-width="4"
                            stroke-linecap="round" />
                    </svg>
                </span>
                {{ __('app.hero_title_2') }}
            </h1>

            <p class="mt-6 text-lg leading-relaxed text-ink-600">{{ __('app.hero_lead') }}</p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('contact') }}" class="btn-primary btn-lg">
                    {{ __('app.hero_cta') }}
                    <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ route('services') }}" class="btn-outline btn-lg">{{ __('app.hero_cta_2') }}</a>
            </div>

            <ul class="mt-9 space-y-2.5">
                @foreach (['hero_point_1', 'hero_point_2', 'hero_point_3'] as $point)
                    <li class="flex items-center gap-2.5 text-[15px] font-semibold text-ink-700">
                        <svg class="h-5 w-5 shrink-0 text-brand-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">
                            <circle cx="12" cy="12" r="10" stroke-opacity="0.25" />
                            <path d="m8.5 12.5 2.5 2.5 5-6" />
                        </svg>
                        {{ __('app.' . $point) }}
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Visual --}}
        <div class="relative mx-auto w-full max-w-lg lg:max-w-none">
            <div class="overflow-hidden rounded-3xl border border-ink-100 bg-brand-50 shadow-soft">
                <img src="{{ asset('assets/images/illustrations/hero-bookkeeping.svg') }}" alt="{{ __('app.brand_name') }}"
                    class="aspect-[4/3] w-full object-contain" width="960" height="439" fetchpriority="high">
            </div>

            {{-- Floating card: services --}}
            <div
                class="absolute -bottom-5 left-1/2 w-[88%] -translate-x-1/2 rounded-2xl border border-ink-100 bg-white/95 p-4 shadow-card backdrop-blur sm:-bottom-6 sm:left-auto sm:right-6 sm:w-auto sm:translate-x-0">
                <div class="flex items-center gap-3.5">
                    <span class="card-icon !bg-brand-600 !text-white">
                        <svg class="h-5.5 w-5.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m9 11 3 3 8-8" />
                            <path d="M20 12v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h9" />
                        </svg>
                    </span>
                    <div>
                        <p class="text-sm font-extrabold text-ink-950">{{ __('app.hero_card_title') }}</p>
                        <p class="mt-0.5 text-[13px] font-semibold text-ink-500">{{ __('app.hero_card_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
