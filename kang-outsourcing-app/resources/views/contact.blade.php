@extends('layouts.app')

@section('title', 'Contact Kang Outsourcing')
@section('meta_description', 'Get in touch with Kang Outsourcing — serving clients across Australia, the USA and the UK.')

@section('content')

<section class="hero" style="padding:90px 0 70px;">
    <div class="container hero-inner">
        <div class="eyebrow">Contact</div>
        <h1>Let's talk about your project.</h1>
        <p class="lead">We're available across Australia, US and UK working hours. Send us a message and we'll come back with next steps — not a sales script.</p>
    </div>
</section>

<section style="padding-top:0;">
    <div class="container grid-2">

        <div>
            @if(session('status'))
                <div class="status-ok">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="form-grid">
                    <div class="field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="field">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                    </div>
                    <div class="field">
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="">Select a country</option>
                            <option value="Australia">Australia</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label for="message">Tell us about your project</label>
                    <textarea id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-gold">Send Message</button>
            </form>
        </div>

        <div>
            <div class="card" style="margin-bottom:24px;">
                <h3>Direct Contact</h3>
                <p style="margin-bottom:10px;"><a href="tel:+918110066711" style="color:var(--gold-300);">+91 81100 66711</a></p>
                <p><a href="mailto:info@kangoutsourcing.com.au" style="color:var(--gold-300);">info@kangoutsourcing.com.au</a></p>
            </div>
            <div class="card">
                <h3>Time Zones We Cover</h3>
                <p style="margin-bottom:10px;">Australia — AEST / AEDT</p>
                <p style="margin-bottom:10px;">United States — EST / PST</p>
                <p>United Kingdom — GMT / BST</p>
            </div>
        </div>

    </div>
</section>

@endsection
