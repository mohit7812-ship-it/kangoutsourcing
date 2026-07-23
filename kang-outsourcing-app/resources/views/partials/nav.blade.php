<header class="site-header">
    <div class="container nav">
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('images/logo.png') }}" alt="Kang Outsourcing logo">
            <span class="brand-text">
                <span class="name">KANG OUTSOURCING</span><br>
                <span class="tag">Smart Solutions. Stronger Together.</span>
            </span>
        </a>

        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('portfolio.index') }}" class="{{ request()->routeIs('portfolio.*') ? 'active' : '' }}">Portfolio</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>

        <div class="nav-cta">
            <a href="tel:+918110066711" class="nav-phone">+91 81100 66711</a>
            <a href="{{ route('contact') }}" class="btn btn-gold">Get a Quote</a>
            <button class="nav-toggle" aria-label="Toggle menu">&#9776;</button>
        </div>
    </div>
</header>
