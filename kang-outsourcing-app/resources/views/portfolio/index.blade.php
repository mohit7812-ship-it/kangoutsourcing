@extends('layouts.app')

@section('title', 'Portfolio & Case Studies — Kang Outsourcing')
@section('meta_description', 'Case studies from Kang Outsourcing — SaaS, healthcare, logistics and marketplace platforms built for clients across Australia, the USA and the UK.')

@section('content')

<section class="hero" style="padding:90px 0 70px;">
    <div class="container hero-inner">
        <div class="eyebrow">Portfolio</div>
        <h1>Platforms we've taken from brief to production.</h1>
        <p class="lead">A look at the systems we've engineered — each one built around real workflows for real businesses, not a template dressed up for a portfolio.</p>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container">
        <div class="grid-3">
            @foreach($caseStudies as $slug => $cs)
                <a href="{{ route('portfolio.show', $slug) }}" class="pf-card">
                    <span class="industry">{{ $cs['industry'] }}</span>
                    <h3>{{ $cs['title'] }}</h3>
                    <p class="tagline">{{ $cs['tagline'] }}</p>
                    <p class="summary">{{ \Illuminate\Support\Str::limit($cs['summary'], 140) }}</p>
                    <div class="stack">
                        @foreach(array_slice($cs['stack'], 0, 3) as $tech)
                            <span class="chip">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <p class="pf-more">View case study &rarr;</p>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Want a platform like this built for you?</h2>
        <p>We'll scope your project the same way — workflow first, then the build.</p>
        <a href="{{ route('contact') }}" class="btn btn-gold">Start a Project</a>
    </div>
</section>

@endsection
