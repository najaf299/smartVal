<section class="bg-ink-50/60 py-16 sm:py-24">
    <div class="container-x">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

            {{-- Visual --}}
            <div class="reveal relative order-last mx-auto w-full max-w-lg lg:order-first lg:max-w-none">
                <div class="overflow-hidden rounded-3xl border border-ink-100 bg-brand-50 shadow-soft">
                    <img src="{{ asset('assets/images/illustrations/why-checked.svg') }}" alt="{{ __('app.why_title') }}"
                        class="aspect-[5/6] w-full object-contain object-bottom sm:aspect-square" width="960" height="960"
                        loading="lazy">
                </div>

                <div
                    class="absolute -bottom-5 left-4 rounded-2xl border border-ink-100 bg-white p-4 shadow-card sm:left-6">
                    <div class="flex items-center gap-3">
                        <span class="card-icon !bg-brand-600 !text-white">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 6v6l4 2" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-sm font-extrabold text-ink-950">{{ __('app.stat_2_value') }}</p>
                            <p class="text-[13px] font-semibold text-ink-500">{{ __('app.stat_2_label') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Copy + feature list --}}
            <div>
                <div class="reveal">
                    <span class="kicker">{{ __('app.why_kicker') }}</span>
                    <h2 class="section-title">{{ __('app.why_title') }}</h2>
                    <p class="mt-4 text-lg leading-relaxed text-ink-600">{{ __('app.why_text') }}</p>
                </div>

                <div class="mt-9 grid gap-4 sm:grid-cols-2">
                    @foreach ([1, 2, 3, 4, 5, 6] as $i)
                        <div class="reveal flex items-start gap-3.5 rounded-2xl border border-ink-100 bg-white p-4.5 shadow-card"
                            style="transition-delay: {{ ($i - 1) * 60 }}ms">
                            <svg class="mt-0.5 h-5.5 w-5.5 shrink-0 text-brand-500" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M21.8 10A10 10 0 1 1 17 3.34" />
                                <path d="m9 11 3 3L22 4" />
                            </svg>
                            <div>
                                <h3 class="text-[15px] font-extrabold text-ink-950">
                                    {{ __('app.why_' . $i . '_title') }}</h3>
                                <p class="mt-1 text-sm leading-relaxed text-ink-600">
                                    {{ __('app.why_' . $i . '_text') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
