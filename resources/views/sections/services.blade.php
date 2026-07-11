@extends('layout.app')

@section('title', __('app.meta_services_title'))
@section('meta_description', __('app.meta_services_desc'))

@section('content')

    @include('sections.page-hero', [
        'title' => __('app.services_hero_title'),
        'subtitle' => __('app.services_hero_text'),
    ])

    {{-- Intro + all 12 services, detailed cards with bullets + anchor ids --}}
    <section class="py-16 sm:py-24">
        <div class="container-x">
            <div class="reveal mx-auto max-w-3xl text-center">
                <span class="kicker justify-center">{{ __('app.services_kicker') }}</span>
                <h2 class="section-title">{{ __('app.services_title') }}</h2>
                <p class="mt-4 text-lg leading-relaxed text-ink-600">{{ __('app.services_page_intro') }}</p>
            </div>

            <div class="mt-12">
                @include('sections.services-grid', ['detailed' => true])
            </div>
        </div>
    </section>

    @include('sections.process')

    @include('sections.faq')

    @include('sections.cta')

@endsection
