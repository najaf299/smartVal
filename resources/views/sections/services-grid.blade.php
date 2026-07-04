{{-- All 12 services. Compact cards by default; pass ['detailed' => true] for the
    full listing with bullet points and anchor ids (used on the Services page). --}}
@php
    $services = [
        'bookkeeping', 'annual', 'payroll', 'tax', 'vat', 'invoicing',
        'formation', 'cfo', 'reporting', 'advisory', 'digital', 'audit',
    ];
    $detailed = $detailed ?? false;
@endphp

<div class="grid gap-5 sm:grid-cols-2 {{ $detailed ? 'lg:gap-6' : 'lg:grid-cols-3' }}">
    @foreach ($services as $slug)
        <article @if ($detailed) id="{{ $slug }}" @endif
            class="reveal group rounded-2xl border border-ink-100 bg-white p-6 shadow-card transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-soft {{ $detailed ? 'sm:p-8 scroll-mt-28' : '' }}">

            <div class="{{ $detailed ? 'flex items-center gap-4 sm:gap-5' : '' }}">
            <span class="card-icon {{ $detailed ? 'h-16 w-16 rounded-2xl [&_svg]:h-8 [&_svg]:w-8' : '' }} group-hover:bg-brand-600 group-hover:text-white">
                @switch($slug)
                    @case('bookkeeping')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 7v14" />
                            <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />
                        </svg>
                    @break

                    @case('annual')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                            <path d="M14 2v5h5" />
                            <path d="m9 15 2 2 4-4" />
                        </svg>
                    @break

                    @case('payroll')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    @break

                    @case('tax')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="4" y="2" width="16" height="20" rx="2" />
                            <path d="M8 6h8" />
                            <path d="M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                        </svg>
                    @break

                    @case('vat')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                    @break

                    @case('invoicing')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z" />
                            <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                            <path d="M12 17.5v-11" />
                        </svg>
                    @break

                    @case('formation')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" />
                            <path
                                d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" />
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" />
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
                        </svg>
                    @break

                    @case('cfo')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="7" width="20" height="14" rx="2" />
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        </svg>
                    @break

                    @case('reporting')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                            <path d="M18 17V9" />
                            <path d="M13 17V5" />
                            <path d="M8 17v-3" />
                        </svg>
                    @break

                    @case('advisory')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1.3.5 2.6 1.5 3.5.8.8 1.3 1.5 1.5 2.5" />
                            <path d="M9 18h6" />
                            <path d="M10 22h4" />
                        </svg>
                    @break

                    @case('digital')
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z" />
                        </svg>
                    @break

                    @default
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                            <path d="m8 11 2 2 4-4" />
                        </svg>
                @endswitch
            </span>

            <h3 class="{{ $detailed ? 'text-2xl leading-tight sm:text-[26px]' : 'mt-5 text-lg' }} font-extrabold text-ink-950">{{ __('app.svc_' . $slug . '_title') }}</h3>
            </div>
            <p class="{{ $detailed ? 'mt-5' : 'mt-2.5' }} text-[15px] leading-relaxed text-ink-600">{{ __('app.svc_' . $slug . '_short') }}</p>

            @if ($detailed)
                <p class="mt-5 text-[13px] font-extrabold uppercase tracking-wide text-brand-700">
                    {{ __('app.svc_includes') }}</p>
                <ul class="mt-3 space-y-2">
                    @foreach ([1, 2, 3, 4] as $b)
                        <li class="flex items-start gap-2.5 text-[15px] font-medium text-ink-700">
                            <svg class="mt-0.5 h-4.5 w-4.5 shrink-0 text-brand-500" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 5 5 9-11" />
                            </svg>
                            {{ __('app.svc_' . $slug . '_b' . $b) }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </article>
    @endforeach
</div>
