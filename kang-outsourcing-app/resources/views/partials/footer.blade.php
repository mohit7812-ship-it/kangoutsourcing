<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="brand" style="margin-bottom:16px;">
                    <img src="{{ asset('images/logo.png') }}" alt="Kang Outsourcing logo" style="height:44px;">
                </a>
                <p>Kang Outsourcing is a full-fledged IT and digital services partner delivering web, mobile, SaaS and marketing solutions to ambitious brands across Australia, the USA, the UK and beyond.</p>
            </div>

            <div>
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4>Case Studies</h4>
                <ul>
                    @foreach(array_slice(config('case_studies'), 0, 4, true) as $slug => $cs)
                        <li><a href="{{ route('portfolio.show', $slug) }}">{{ $cs['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4>Get in Touch</h4>
                <ul>
                    <li><a href="tel:+918110066711">+91 81100 66711</a></li>
                    <li><a href="mailto:info@kangoutsourcing.com.au">info@kangoutsourcing.com.au</a></li>
                    <li style="color:#8a97b4;">Serving AU · US · UK time zones</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Kang Outsourcing. All rights reserved.</span>
            <span>Smart Solutions. Stronger Together.</span>
        </div>
    </div>
</footer>
