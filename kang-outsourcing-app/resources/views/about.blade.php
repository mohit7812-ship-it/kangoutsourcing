@extends('layouts.app')

@section('title', 'About Kang Outsourcing')
@section('meta_description', 'Kang Outsourcing is a global technology outsourcing partner serving clients across Australia, the USA and the UK.')

@section('content')

<section class="hero" style="padding:90px 0 70px;">
    <div class="container hero-inner">
        <div class="eyebrow">About Us</div>
        <h1>We build the technology behind ambitious businesses.</h1>
        <p class="lead">Kang Outsourcing is an IT and digital services partner delivering premium web, mobile, design and marketing solutions — from healthcare and logistics platforms to SaaS marketplaces and government-grade compliance systems.</p>
    </div>
</section>

<section>
    <div class="container grid-2">
        <div>
            <div class="eyebrow">Our Approach</div>
            <h2>Product thinking, not just delivery</h2>
            <p style="color:var(--slate-400); font-size:15.5px;">Every platform we've shipped — from a talent-sourcing SaaS to a national customs compliance system — started with the same question: what does this business actually need to run better? We design the workflow first, then build the software around it, so what we ship gets used, not shelved.</p>
        </div>
        <div>
            <div class="eyebrow">Where We Work</div>
            <h2>Global delivery, local hours</h2>
            <p style="color:var(--slate-400); font-size:15.5px;">We work with businesses across Australia, the United States and the United Kingdom, structuring our schedules around your time zone so communication never becomes the bottleneck. Reach us any time at <a href="mailto:info@kangoutsourcing.com.au" style="color:var(--gold-300);">info@kangoutsourcing.com.au</a> or <a href="tel:+918110066711" style="color:var(--gold-300);">+91 81100 66711</a>.</p>
        </div>
    </div>
</section>

<section class="section-alt">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">What Guides Us</div>
            <h2>Principles behind every build</h2>
        </div>
        <div class="grid-3">
            <div class="card">
                <div class="num">01</div>
                <h3>Built for Scale</h3>
                <p>Every platform is architected with growth in mind — from role-based access control to modular backend services that don't need a rewrite at 10x users.</p>
            </div>
            <div class="card">
                <div class="num">02</div>
                <h3>Full Transparency</h3>
                <p>Admin dashboards, audit trails and clear approval workflows are standard on every build — you always know what's happening and why.</p>
            </div>
            <div class="card">
                <div class="num">03</div>
                <h3>Real Ownership</h3>
                <p>We treat every engagement like it's our own product — proactive updates, honest timelines, and code you fully own at handover.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Let's build something that actually gets used.</h2>
        <p>Tell us about your business and we'll map out the right approach.</p>
        <a href="{{ route('contact') }}" class="btn btn-gold">Start the Conversation</a>
    </div>
</section>

@endsection
