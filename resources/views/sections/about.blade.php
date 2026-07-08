@extends('layout.app')

@section('title', __('app.meta_about_title'))
@section('meta_description', __('app.meta_about_desc'))

@section('content')

    @include('sections.page-hero', [
        'title' => __('app.about_hero_title'),
        'subtitle' => __('app.about_hero_text'),
    ])

    {{-- Who we are --}}
    <section class="py-16 sm:py-24">
        <div class="container-x">
            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
                <div class="reveal">
                    <span class="kicker">{{ __('app.about_kicker') }}</span>
                    <h2 class="section-title">{{ __('app.about_title') }}</h2>
                    <p class="mt-6 text-lg leading-relaxed">{{ __('app.about_p1') }}</p>
                    <p class="mt-4 leading-relaxed">{{ __('app.about_p2') }}</p>

                    <ul class="mt-8 space-y-3.5">
                        @foreach (['about_point_1', 'about_point_2', 'about_point_3'] as $point)
                            <li class="flex items-start gap-3">
                                <span
                                    class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-100 text-brand-700">
                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span>
                                <span class="font-medium text-ink-800">{{ __('app.' . $point) }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="reveal relative mx-auto w-full max-w-lg lg:max-w-none">
                    <img src="{{ asset('assets/images/illustrations/about-team.svg') }}" alt="{{ __('app.brand_full') }}"
                        class="aspect-[4/3] w-full rounded-3xl bg-brand-50 object-contain shadow-soft" loading="lazy">
                    <img src="{{ asset('assets/images/illustrations/about-receipt.svg') }}" alt=""
                        class="absolute -bottom-8 -left-6 hidden w-44 rounded-2xl border-4 border-white bg-white object-contain p-3 shadow-card sm:block lg:w-52"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Values --}}
    <section class="bg-ink-50 py-16 sm:py-24">
        <div class="container-x">
            <div class="reveal mx-auto max-w-2xl text-center">
                <span class="kicker">{{ __('app.values_kicker') }}</span>
                <h2 class="section-title">{{ __('app.values_title') }}</h2>
            </div>

            @php
                $values = [
                    ['key' => 1, 'icon' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['key' => 2, 'icon' => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178zM15 12a3 3 0 11-6 0 3 3 0 016 0z'],
                    ['key' => 3, 'icon' => 'M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z'],
                    ['key' => 4, 'icon' => 'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18'],
                ];
            @endphp

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($values as $value)
                    <div class="reveal group rounded-3xl border border-ink-100 bg-white p-7 transition-shadow duration-300 hover:shadow-card">
                        <span class="card-icon group-hover:bg-brand-600 group-hover:text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $value['icon'] }}" />
                            </svg>
                        </span>
                        <h3 class="mt-5 text-lg font-extrabold text-ink-950">
                            {{ __('app.value_' . $value['key'] . '_title') }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-500">
                            {{ __('app.value_' . $value['key'] . '_text') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mission --}}
    <section class="py-16 sm:py-24">
        <div class="container-x">
            <div
                class="reveal relative overflow-hidden rounded-3xl border border-brand-100 bg-brand-50 px-6 py-14 text-center sm:px-16 sm:py-20">
                <div class="pointer-events-none absolute -left-24 -top-24 h-64 w-64 rounded-full bg-brand-200/50 blur-3xl"
                    aria-hidden="true"></div>
                <div class="pointer-events-none absolute -bottom-24 -right-24 h-64 w-64 rounded-full bg-brand-200/50 blur-3xl"
                    aria-hidden="true"></div>

                <h2 class="relative text-3xl font-extrabold tracking-tight text-ink-950 sm:text-4xl">
                    {{ __('app.mission_title') }}</h2>
                <p class="relative mx-auto mt-5 max-w-2xl text-lg leading-relaxed text-ink-600">
                    {{ __('app.mission_text') }}</p>
            </div>
        </div>
    </section>

    @include('sections.cta')

@endsection
