@extends('layouts.app')

@section('title', 'Services — Kang Outsourcing')
@section('meta_description', 'Web development, mobile apps, SaaS platforms, UI/UX design and digital marketing services from Kang Outsourcing.')

@section('content')

<section class="hero" style="padding:90px 0 70px;">
    <div class="container hero-inner">
        <div class="eyebrow">Services</div>
        <h1>Everything it takes to ship a real product.</h1>
        <p class="lead">From the first wireframe to a platform running in production, we cover the full stack of what a modern digital product needs.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="grid-3">
            <div class="card">
                <div class="num">01</div>
                <h3>Web Development</h3>
                <p>Laravel and modern front-end builds — marketing sites, client portals, and internal tools engineered for maintainability.</p>
            </div>
            <div class="card">
                <div class="num">02</div>
                <h3>Mobile App Development</h3>
                <p>Flutter and cross-platform apps for booking, marketplace and field-service use cases, published to both app stores.</p>
            </div>
            <div class="card">
                <div class="num">03</div>
                <h3>SaaS &amp; Platform Engineering</h3>
                <p>Multi-role platforms with subscriptions, wallets, approval workflows and admin dashboards — built to run a real business, not a demo.</p>
            </div>
            <div class="card">
                <div class="num">04</div>
                <h3>API &amp; Systems Integration</h3>
                <p>Payment gateways, SMS/email providers, CRMs and third-party APIs wired cleanly into your platform's backend.</p>
            </div>
            <div class="card">
                <div class="num">05</div>
                <h3>UI/UX &amp; Product Design</h3>
                <p>Interface design grounded in how the product will actually be used — not templates, but workflows built around real user roles.</p>
            </div>
            <div class="card">
                <div class="num">06</div>
                <h3>Ongoing Support &amp; Scaling</h3>
                <p>Server setup, performance tuning and infrastructure planning so your platform stays fast as usage grows.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-alt">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">How We Deliver</div>
            <h2>A process built around clarity</h2>
        </div>
        <div class="grid-3">
            <div class="card">
                <div class="num">Discover</div>
                <h3>Scope &amp; workflow mapping</h3>
                <p>We map user roles and business logic before a single screen is designed, so the build matches how the business actually runs.</p>
            </div>
            <div class="card">
                <div class="num">Build</div>
                <h3>Iterative development</h3>
                <p>Work ships in reviewable stages with regular demos — no black-box development, no surprise at the end.</p>
            </div>
            <div class="card">
                <div class="num">Launch</div>
                <h3>Deploy &amp; support</h3>
                <p>We handle server setup and go-live, then stay on for support as your platform scales with real users.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Ready to scope your project?</h2>
        <p>Send us a brief and we'll come back with a clear plan and timeline.</p>
        <a href="{{ route('contact') }}" class="btn btn-gold">Get a Quote</a>
    </div>
</section>

@endsection
