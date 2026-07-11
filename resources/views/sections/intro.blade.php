<section class="py-16 sm:py-20">
    <div class="container-x">
        <div class="reveal mx-auto max-w-3xl text-center">
            <span class="kicker justify-center">{{ __('app.intro_kicker') }}</span>
            <h2 class="section-title">{{ __('app.intro_title') }}</h2>
            <p class="mt-5 text-lg leading-relaxed text-ink-600">{{ __('app.intro_text') }}</p>
        </div>

        <dl class="reveal mt-12 grid grid-cols-2 gap-4 sm:gap-6 lg:grid-cols-4">
            @foreach ([4, 3, 2, 1] as $i)
                <div class="rounded-2xl border border-ink-100 bg-ink-50/60 p-6 text-center">
                    <dd class="text-3xl font-extrabold text-brand-600 sm:text-4xl">
                        {{ __('app.stat_' . $i . '_value') }}</dd>
                    <dt class="mt-2 text-[13px] font-bold text-ink-600 sm:text-sm">
                        {{ __('app.stat_' . $i . '_label') }}</dt>
                </div>
            @endforeach
        </dl>
    </div>
</section>
