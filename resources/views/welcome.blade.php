@extends('layout.master')
@section('content')
    <div class="content-box bg-primary ">
        <div class="content py-3 px-4">
            <div class="container-img">
                <!-- <img src="" alt=""> -->
                <!-- <img src="assets/images/car-avatar-1.png" alt="" /> -->
            </div>
            <div class="container-header mx-2">
                <h1 class="head3 text-light ">Pakistan’s Pioneer Female and Transgender Ride-Hailing Service
                </h1>
                <p class="text-light my-1">
                    SheDrive ensuring every ride is as comfortable as it is safe.

                </p>
            </div>
            <div class="container-btn ac-c jc-c mx-2">
                <a class="btn-1" href="{{ route('bookings') }}">Book Now
                    <i class="fa-solid fa-hand-pointer ml-1" style="rotate: -40deg; font-size:1.3rem;"></i>
                    {{-- <img src="{{ asset('assets/images/arrowUp.svg') }}" class="mx-1" alt=""> --}}
                </a>
            </div>
        </div>
    </div>
    <div class="content-box my-1">
        <div class="content-slider py-4 px-4" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
            {{-- <div class="content-header">
                <li><a href="#">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('impact') }}">Impact</a></li>
            </div> --}}
            <div class="content-section py-4">
                <div>
                    <h1 class="head1">For Women and Transgenders Only</h1>
                </div>
                <div class="mt-4"><a href="" class="btn-2">Download the App</a></div>

            </div>
        </div>
    </div>
    <div class="content-box mt-80">
        <div class="content-statics d-flex">
            <div class="content-header">
                <h1 class="head5 w-90">SheDrives is challenging social injustice by empowering women and transgender
                    individuals on the road. We're driving change to create a fairer world for 1 billion people.
                     Join us in making equality a reality, one ride at a time.
                </h1>
            </div>
            {{-- <div class="card col-33 ml-1 mt-3">
                <h1 class="head1 pt-3">798</h1>
                <p class="pt-3">Cities</p>
            </div>
            <div class="card col-33 ml-1 mt-3">
                <h1 class="head1 pt-3">798</h1>
                <p class="pt-3">Countries</p>
            </div>
            <div class="card col-33 ml-1 mt-3">
                <h1 class="head1 pt-3">798</h1>
                <p class="pt-3">mln app installs</p>
            </div> --}}
        </div>
    </div>
    <div class="content-box bg-light mt-80">
        <div class="content-saftey px-4">
            <div class="content-section d-flex  py-4">
                <div class="col-65">
                    <h1 class="head1">Safety First</h1>
                    <p class="my-3">And safety for everyone. sheDrive prioritizes safety from both seats – passenger and driver –
                        while working diligently on new safety features. We are also encouraging everyone to adhere to safety
                        guidelines</p>
                    <a href="#" class="text-sec">Know more</a>
                </div>
                <div class="safety-img w-30 d-flex jc-f-e">
                    <img class="w-70" src="{{ asset('assets/images/services-img.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="content-box bg-light mt-80">
        <div class="content-app">
            <div class="content-section d-flex card-par">
                <div class="col-50 card p-3">
                    <div class="d-flex p-3">
                        <div class="logo col-10"><img src="{{ asset('assets/images/14-removebg-logo.png') }}" class="w-100" alt=""></div>
                        <div class="ml-1">
                            <div class="star-img"></div>
                        </div>
                    </div>
                    <div class="d-flex p-3">
                        <h1 class="head1 mt-3">Mobile App</h1>
                        <p class="mt-1">Freedom of choice and movement – one app for rides, cargo, and delivery.</p>
                        <a href="" class="btn is-pri mt-2">Download the App</a>
                    </div>

                </div>
                <div class="app-img col-50 p-0" style="background-image: url('assets/images/mobile-app.png'); background-repeat:no-repeat">
                    {{-- <img class="w-20" src="{{ asset('assets/images/mobile-app.jpeg') }}" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="content-box bg-primary mt-80">
        <div class="content-services px-3 py-3 d-flex br-40">
            <div class="content-ser br-40 col-100" style="height: 400px">
                <div class="ser-img">
                    <img class="w-100" style="height: 400px" src="{{ asset('') }}"assets/images/mobility_widget.webp" alt="">
                </div>
                <div class="cus-content">
                    <a class="btn-1 mt-2">Services</a>
                    <h1 class="head1 text-light ">Services</h1>
                </div>
            </div>
            <div class="card d-flex jc-f-sb card-par">
                <div class="card col-45 mt-1">
                    <p class="text-light">Offer-your-price service to complete any task fast, and for a fair fee</p>
                </div>
                <div class="card col-55 mt-1 d-flex bg-sec br-40 p-1">
                    <div class="card-header col-70 mt-3">
                        <h2 class="head3 text-light">Specialists</h2>
                        <p class="text-light">Choose any category, from cleaning to repair and construction</p>
                        <a href="#" class="text-sec">Know More</a>
                    </div>
                    <div class="card-img col-30">
                        <img src="{{ asset('') }}"assets/images/specialists.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="content-box mt-80">
        <div class="content-review d-flex py-2">
            <div class="col-100">
                <h2 class="head1 w-100">People stick with us because</h2>
            </div>

            <div class="d-flex jc-f-sb f-wrap bg-10 mt-80 card-par">
                <div class="card col-33 p-3 br-40 bg-light">
                    <div class="icon b-br-2"><i class="fa-regular fa-thumbs-up"></i></div>
                    <h2 class="my-2">The process is fast and clear</h2>
                    <p>People contact each other directly with no middleman, and discuss all the details quickly</p>
                </div>
                <div class="card col-33 p-3 br-40 bg-light">
                    <div class="icon b-br-2"><i class="fa-solid fa-user-shield"></i></div>
                    <h2 class="my-2">All specialists are rated</h2>
                    <p>People can choose any specialist based on his rating points and reviews</p>
                </div>
                <div class="card col-33 p-3 br-40 bg-light">
                    <div class="icon b-br-2"> <i class="fa-regular fa-face-smile"></i></div>
                    <h2 class="my-2">Prices are fair</h2>
                    <p>People agree on a win-win price for both sides. Fair pay always inspires quality work</p>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="content-box bg-primary mt-80">
        <div class="content-impact px-3 py-3 d-flex br-40">
            <div class="content-imp br-40 col-100">
                <div class="imp-img">
                    <img class="w-100" src="{{ asset('') }}"assets/images/mobility_widget.webp" alt="">
                </div>
                <div class="cus-content">
                    <div class="btn-1 mt-2">Impact</div>
                    <h1 class="head1 text-light ">inVision Impact Projects</h1>
                </div>
            </div>
            <p class="text-light my-2">We are driving change in communities by empowering people</p>
            <div class="d-flex card-par">
                <div class="card col-25 mr-1 bg-sec br-40 ">
                    <img src="{{ asset('') }}"assets/images/car.svg" alt="">
                    <div class="mt-1">
                        <h2 class="head3 text-light">City Rides</h2>
                        <p class="text-light">Choose a driver and offer your fare a ride</p>
                        <a href="#" class="text-sec">Know More</a>
                    </div>
                </div>
                <div class="card col-25 mr-1 bg-sec br-40">
                    <img src="{{ asset('') }}"assets/images/car.svg" alt="">
                    <div class="mt-1">
                        <h2 class="head3 text-light">Courier delivery</h2>
                        <p class="text-light">Choose a driver and offer your fare a ride</p>
                        <a href="" class="text-sec">Know More</a>
                    </div>
                </div>
                <div class="card col-25 mr-1 bg-sec br-40">
                    <img src="{{ asset('') }}"assets/images/car.svg" alt="">
                    <div class="mt-1"></div>
                    <h2 class="head3 text-light">Fright delivery</h2>
                    <p class="text-light">Choose a driver and offer your fare a ride</p>
                    <a href="" class="text-sec">Know More</a>
                </div>
                <div class="card col-25 bg-sec br-40">
                    <img src="{{ asset('') }}"assets/images/car.svg" alt="">
                    <div class="mt-1">
                        <h2 class="head3 mt-1 text-light">City to city</h2>
                        <p class="text-light">Choose a driver and offer your fare a ride</p>
                        <a href="" class="text-sec">Know More</a>
                    </div>
                </div>
            </div>
            <a href="" class="btn-2">Know More</a>
        </div>
    </div> --}}
    {{-- <div class="content-box mt-80">
        <div class="content-statics d-flex">
            <div class="content-header">
                <h1 class="col-70">sheDrive challenges injustices by providing access to fair and equitable services in
                    mobility and beyond, forging a profound impact in communities through visionary non-profit initiatives
                </h1>
            </div>
            <a href="" class="btn-2">Download App</a>
        </div>
    </div> --}}
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            console.log("Hello, She Drives!");
        });
    </script>

@endsection
