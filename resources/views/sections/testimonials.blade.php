<section class="py-16 sm:py-24">
    <div class="container-x">
        <div class="reveal mx-auto max-w-2xl text-center">
            <span class="kicker justify-center">{{ __('app.testimonials_kicker') }}</span>
            <h2 class="section-title">{{ __('app.testimonials_title') }}</h2>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            @foreach ([1, 2, 3] as $i)
                <figure class="reveal flex flex-col rounded-2xl border border-ink-100 bg-white p-7 shadow-card"
                    style="transition-delay: {{ ($i - 1) * 90 }}ms">
                    <div class="flex items-center gap-1 text-amber-400" aria-hidden="true">
                        @for ($s = 0; $s < 5; $s++)
                            <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2l2.94 5.95 6.57.96-4.75 4.63 1.12 6.54L12 17l-5.88 3.09 1.12-6.55L2.5 8.9l6.56-.95L12 2z" />
                            </svg>
                        @endfor
                    </div>

                    <blockquote class="mt-4 flex-1 text-[15px] leading-relaxed text-ink-700">
                        “{{ __('app.testimonial_' . $i . '_text') }}”
                    </blockquote>

                    <figcaption class="mt-6 flex items-center gap-3.5 border-t border-ink-100 pt-5">
                        <img src="{{ asset('assets/images/illustrations/avatar-' . $i . '.svg') }}" alt=""
                            class="h-11 w-11 rounded-full object-cover" width="96" height="96" loading="lazy">
                        <div>
                            <p class="text-sm font-extrabold text-ink-950">
                                {{ __('app.testimonial_' . $i . '_name') }}</p>
                            <p class="text-[13px] font-semibold text-ink-500">
                                {{ __('app.testimonial_' . $i . '_meta') }}</p>
                        </div>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>
