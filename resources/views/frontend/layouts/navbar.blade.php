<nav class="include-nav">
    <ul>
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ Request::is('/about_us') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
        <li class="{{ Request::is('/contact_us') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
        <li class="{{ Request::is('/portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}">portfolio</a></li>
        <li class="{{ Request::is('/portfolio_details') ? 'active' : '' }}"><a href="{{ route('portfolio_details') }}">Portfolio details</a></li>
        <li class="{{ Request::is('/services') ? 'active' : '' }}"><a href="{{ route('services') }}">services</a></li>
        <li class="{{ Request::is('/blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
        <li class="{{ Request::is('/blog_details') ? 'active' : '' }}"><a href="{{ route('blog_details') }}">Blog details</a></li>
    </ul>
</nav>