<footer class="main-footer mt-80 bg-primary">
    <div class="footer-header card-par jc-f-sb">
        <div class="w-20 mb-2">
            <img src="assets\images\14-removebg-logo.png" class="w-50" alt="">
        </div>
        <div class="w-80 card-par">
            <div class="w-25 card">
                {{-- <h1 class="head2 mb-2 text-light">Home</h1></h1> --}}
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our.story') }}">About us</a></li>
            </div>
            <div class="w-25 card">
                <li><a href="{{ route('safety') }}">Safety</a></li>
                <li><a href="{{ route('career') }}">Career</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
            </div>
            <div class="w-25 card">
                <li><a href="{{ route('privacy') }}">Privacy policy</a></li>
                <li><a href="{{ route('terms.uses')}}">Terms</a></li>
                <li><a href="{{ route('delete-account') }}">Delete Account</a></li>
            </div>
        </div>
    </div>
    <div class="footer-body card-par jc-f-sb">
        <div class="w-33 card">
            <div class=" social-icons">
                <a href="https://www.tiktok.com/@shedrives_pakistan?_t=8on6QPhEd3H&_r=1"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61560156579887&mibextid=LQQJ4d"><i class="fa-brands fa-facebook"></i> </a>
                <a href="https://www.instagram.com/shedrives_pakistan?igsh=MWEzNmZxbTJwNGkxYw%3D%3D&utm_source=qr"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <p class="pt-2 text-left">sheDrive is an online aggregator. We do not participate in cooperations between our users: they
                create and perform all requests in our app on their own</p>
            <p class="pt-2 text-left">© Technical Team, 2024</p>
        </div>
    </div>
    {{-- <div class="footer-end p-3 card-par w-100">
        <li><a href="{{ route('privacy') }}">Privacy policy</a></li>
        <li><a href="{{ route('terms.uses')}}">Terms</a></li>
    </div> --}}
</footer>
