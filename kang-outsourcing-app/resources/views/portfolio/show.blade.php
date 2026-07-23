@extends('layouts.app')

@section('title', $project['title'].' Case Study — Kang Outsourcing')
@section('meta_description', $project['summary'])

@section('content')

<section class="cs-hero">
    <div class="container">
        <span class="industry-tag">{{ $project['industry'] }}</span>
        <h1>{{ $project['title'] }}</h1>
        <p class="tagline">{{ $project['tagline'] }}</p>
    </div>
</section>

<section>
    <div class="container">

        <div class="cs-meta">
            <div>
                <div class="label">Industry</div>
                <div class="value">{{ $project['industry'] }}</div>
            </div>
            <div>
                <div class="label">Technology Stack</div>
                <div class="value">{{ implode(', ', $project['stack']) }}</div>
            </div>
            <div>
                <div class="label">Delivered By</div>
                <div class="value">Kang Outsourcing</div>
            </div>
        </div>

        <div class="cs-block">
            <h2>Overview</h2>
            <p style="font-size:16px; color:var(--slate-300); max-width:760px;">{{ $project['summary'] }}</p>
        </div>

        <div class="cs-block">
            <h2>The Challenge</h2>
            <ul class="cs-list">
                @foreach($project['challenges'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

        <div class="cs-block">
            <h2>The Solution</h2>
            <p style="font-size:15.5px; color:var(--slate-300); max-width:760px;">{{ $project['solution'] }}</p>
        </div>

        <div class="cs-block">
            <h2>Key Features</h2>
            <ul class="cs-list">
                @foreach($project['features'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

        <div class="cs-block mb-0">
            <h2>Outcome</h2>
            <p style="font-size:15.5px; color:var(--slate-300); max-width:760px;">{{ $project['outcome'] }}</p>
        </div>

        <div class="cs-nav-others">
            <h3>More case studies</h3>
            <div class="grid-3">
                @foreach(array_slice($others, 0, 3, true) as $oslug => $ocs)
                    <a href="{{ route('portfolio.show', $oslug) }}" class="pf-card">
                        <span class="industry">{{ $ocs['industry'] }}</span>
                        <h3>{{ $ocs['title'] }}</h3>
                        <p class="tagline">{{ $ocs['tagline'] }}</p>
                        <p class="pf-more">View case study &rarr;</p>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Building something similar?</h2>
        <p>Tell us your workflow — we'll tell you how we'd build it.</p>
        <a href="{{ route('contact') }}" class="btn btn-gold">Start a Project</a>
    </div>
</section>

@endsection
