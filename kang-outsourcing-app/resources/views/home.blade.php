@extends('layouts.app')

@section('title', 'Kang Outsourcing — Web, Mobile & SaaS Development Partner')
@section('meta_description', 'Kang Outsourcing designs and builds web platforms, mobile apps and SaaS products for clients across Australia, the USA and the UK, delivered in your time zone.')

@section('content')

<section class="hero">
    <div class="container hero-inner">
        <div class="eyebrow">Global Outsourcing Partner</div>
        <h1>Smart solutions, built <span class="accent">stronger together.</span></h1>
        <p class="lead">Kang Outsourcing designs and engineers web platforms, mobile apps and SaaS products for ambitious businesses across Australia, the USA and the UK — with a team that works inside your time zone, not around it.</p>
        <div class="hero-actions">
            <a href="{{ route('contact') }}" class="btn btn-gold">Start a Project</a>
            <a href="{{ route('portfolio.index') }}" class="btn btn-outline">View Our Work</a>
        </div>
        <div class="hero-stats">
            <div><strong>6+</strong><span>Platforms Delivered</span></div>
            <div><strong>3</strong><span>Regions Served</span></div>
            <div><strong>24/5</strong><span>Time-Zone Coverage</span></div>
        </div>
    </div>
</section>

<div class="region-strip">
    <div class="container">
        <span>Now serving clients in <strong>Australia</strong></span>
        <span><strong>United States</strong></span>
        <span><strong>United Kingdom</strong></span>
        <span>— available in your working hours</span>
    </div>
</div>

<section>
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">What We Do</div>
            <h2>End-to-end product delivery, not just development</h2>
            <p>From the first workflow diagram to a live, scaling platform — we own the outcome, not just the codebase.</p>
        </div>
        <div class="grid-3">
            <div class="card">
                <div class="num">01</div>
                <h3>Web &amp; API Development</h3>
                <p>Laravel and modern JavaScript builds engineered for scale — clean architecture, documented APIs, and infrastructure that grows with you.</p>
            </div>
            <div class="card">
                <div class="num">02</div>
                <h3>Mobile Applications</h3>
                <p>Flutter and React Native apps for marketplaces, booking platforms and service businesses, shipped to both app stores.</p>
            </div>
            <div class="card">
                <div class="num">03</div>
                <h3>SaaS &amp; Multi-Role Platforms</h3>
                <p>Subscription-based platforms with role-based dashboards, payments, and admin control — built the way EPIIC, CUSPIX and Trippy were.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-alt">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">Selected Work</div>
            <h2>Platforms we've taken from brief to production</h2>
        </div>
        <div class="grid-3">
            @foreach($caseStudies as $slug => $cs)
                <a href="{{ route('portfolio.show', $slug) }}" class="pf-card">
                    <span class="industry">{{ $cs['industry'] }}</span>
                    <h3>{{ $cs['title'] }}</h3>
                    <p class="tagline">{{ $cs['tagline'] }}</p>
                    <p class="summary">{{ \Illuminate\Support\Str::limit($cs['summary'], 120) }}</p>
                    <p class="pf-more">View case study &rarr;</p>
                </a>
            @endforeach
        </div>
        <div class="text-center" style="margin-top:48px;">
            <a href="{{ route('portfolio.index') }}" class="btn btn-outline">See All Case Studies</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">Built Around Your Clock</div>
            <h2>One team, three time zones, zero delay</h2>
            <p>We structure delivery around AEST, EST/PST and GMT working hours so you get live updates and calls when your day is actually running.</p>
        </div>
        <div class="tz-panel">
            <div class="zone">
                <strong>Australia</strong>
                <span>AEST / AEDT overlap for daily standups and reviews</span>
            </div>
            <div class="zone">
                <strong>United States</strong>
                <span>EST &amp; PST coverage for evening and weekend syncs</span>
            </div>
            <div class="zone">
                <strong>United Kingdom</strong>
                <span>GMT / BST slots for morning check-ins</span>
            </div>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Have a project in mind?</h2>
        <p>Tell us what you're building — we'll respond with a clear plan, not a sales pitch.</p>
        <a href="{{ route('contact') }}" class="btn btn-gold">Talk to Our Team</a>
    </div>
</section>

@endsection
