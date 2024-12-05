<header class="header">
    <div class="header-content">
        <div class="logo">
            <a href="{{ route('home') }}">
                {{-- <h1 class="head5 text-pri">sheDrive</h1> --}}
                <img src="{{ asset('assets\images\14-removebg-logo.png') }}" alt="">
            </a>
        </div>
        <nav class="nav" >
            <li class="dropdown" >
                <a href="{{ route('home')}}" class="dropbtn">Home</a>
            </li>
            {{-- <div class="dropdown-links">
                <li><a href="{{ route('city.rides')}}">City rides</a></li>
                <li><a href="{{ route('city.to.city')}}">City to city</a></li>
                <li><a href="{{ route('courier')}}">Courier delivery</a></li>
                <li><a href="{{ route('fright.delivery')}}">Fright delivery</a></li>
            </div> --}}
            <li><a href="{{ route('services')}}">Services</a></li>
            <li><a href="{{ route('safety')}}">Safety</a></li>
            <li class="dropdown-a">
                <div> <a href="{{ route('our.story')}}" class="dropbtn">About us</a></div>
            </li>
            {{-- <div class="dropdown-links">
                <li><a href="{{ route('our.story')}}">Our origin and values</a></li>
                <li><a href="{{ route('impact')}}">Our impact</a></li>
                <li><a href="{{ route('contacts')}}">Contacts</a></li>
                <li><a href="{{ route('blogs')}}">Blog</a></li>
                <li><a href="{{ route('newsroom') }}">Newsroom</a></li>
                <li><a href="{{ route('book') }}">sheDrive book</a></li>
                <li><a href="{{ route('ventures') }}">New ventures</a></li>
            </div> --}}
            <li><a href="{{ route('contact-us') }}">Contact-Us</a></li>
            <li><a href="{{ route('career') }}">Career</a></li>
        </nav>
        <div class="toggle-button active" id="toggle-button" >
            ☰
        </div>
        <div class="nav-cta">
{{--            <div class="lan-dd">--}}
{{--                En--}}
{{--            </div>--}}
            <div>
                <a href="driver.html" class="btn is-outline-pri ">Become a Driver</a>
            </div>
        </div>
    </div>
    <div class="sidebar" id="nav-links">
        <li><a href="#" class="dropbtn">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="safety.html">Safety</a></li>
        <li><div><a href="About.html" class="dropbtn-a">About us</a></div></li>
        <li><a href="Career.html">Career</a></li>
        <div class="w-100 mt-2">
            <a href="driver.html" class="btn is-outline-pri w-100">Become a Driver</a>
        </div>
    </div>
</header>


