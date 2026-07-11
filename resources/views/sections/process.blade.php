<section class="py-16 sm:py-24">
    <div class="container-x">
        <div class="reveal mx-auto max-w-2xl text-center">
            <span class="kicker justify-center">{{ __('app.process_kicker') }}</span>
            <h2 class="section-title">{{ __('app.process_title') }}</h2>
            <p class="mt-4 text-lg leading-relaxed text-ink-600">{{ __('app.process_text') }}</p>
        </div>

        <ol class="mt-14 grid gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-6">
            @foreach ([1, 2, 3, 4] as $i)
                <li class="reveal relative text-center lg:text-left" style="transition-delay: {{ ($i - 1) * 90 }}ms">
                    @if ($i < 4)
                        <span
                            class="absolute -right-6 left-14 top-7 hidden border-t-2 border-dashed border-brand-200 lg:block"
                            aria-hidden="true"></span>
                    @endif

                    <span
                        class="relative z-10 mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-600 text-xl font-extrabold text-white shadow-lg shadow-brand-600/25 lg:mx-0">
                        {{ $i }}
                    </span>
                    <h3 class="mt-5 text-lg font-extrabold text-ink-950">{{ __('app.process_' . $i . '_title') }}
                    </h3>
                    <p class="mt-2 text-[15px] leading-relaxed text-ink-600">
                        {{ __('app.process_' . $i . '_text') }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
