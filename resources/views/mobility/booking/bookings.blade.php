@extends('layout.master')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/scss/pages/bookings.css') }}" />
@endsection
@section('title', 'Ride Booking SheDrives')

@section('content')
<style>
    #showKeyHtml{
        display: none;
    }
</style>

    <div class="content-box ">
        <div class="bg-blur p-3">
            <div class="content-services br-40">
            <div class="content-ser-2 br-40 col-100 pt-3">
                <div class="cus-content d-flex ai-c jc-c text-center">
                <h1 class="head1 w-80 text-light m-3">we're your trusted partner for all your delivery needs.
                </h1>
                {{-- <p class="w-80 text-light my-2">Explore hundreds of intercity routes. Suggest your price and choose one of our verified drivers</p> --}}
                </div>
                <div class="bg-light form-control mt-60">
                    {{-- <a href="" class="butt">Private ride</a>
                    <a href="" class="butt">Shared ride</a> --}}
                    <form class="form-inline mt-60" action="/action_page.php" >

                        <input type="email" id="email" placeholder="Enter email" name="email">

                        <input type="password" id="pwd" placeholder="Enter password" name="pswd">

                        <input type="date" name="date" placeholder="when">

                        <input type="number" name="passenger" placeholder="Passenger">

                        <input type="text" name="offer" placeholder="offer your fare">

                        <button type="submit">find a driver</button>
                    </form>
                </div>
                <div>
                    <h2></h2>
                </div>
            </div>
            </div>
        </div>
    </div>
    {{-- <div class="content-2 my-80 w-100">
        <div class="content-review-2 p-2">
            <h1 class="head1">Popular routes</h1>
          <div class="jc-f-sb f-wrap br-10 mt-60 card-par">
            <a href="" class="card p-3 br-10 bg-light">
              <div>
                <p class="head3">Gujranwala to Lahore</p>
                <p class="text-grey">from 3750 PKR</p>
              </div>
            </a>
            <a href="" class="card p-3 br-10 bg-light">
                <div>
                  <p class="head3">Gujranwala to Lahore</p>
                  <p class="text-grey">from 3750 PKR</p>
                </div>
              </a>
              <a href="" class="card p-3 br-10 bg-light">
                <div>
                  <p class="head3">Gujranwala to Lahore</p>
                  <p class="text-grey">from 3750 PKR</p>
                </div>
              </a>
          </div>
          <div class="d-flex jc-f-sb f-wrap br-10 mt-60 card-par" id="showKeyHtml">
            <a href="" class="card col-33 p-3 br-10 bg-light">
              <div>
                <p class="head3">Gujranwala to Lahore</p>
                <p class="text-grey">from 3750 PKR</p>
              </div>
            </a>
            <a href="" class="card col-33 p-3 br-10 bg-light">
                <div>
                  <p class="head3">Gujranwala to Lahore</p>
                  <p class="text-grey">from 3750 PKR</p>
                </div>
              </a>
              <a href="" class="card col-33 p-3 br-10 bg-light">
                <div>
                  <p class="head3">Gujranwala to Lahore</p>
                  <p class="text-grey">from 3750 PKR</p>
                </div>
              </a>
          </div>
          <div class="showKeyWrapper"></div>
          <div class="d-flex ai-f-e jc-f-e m-4">
            <a href="" class="mt-2 text-blue" id="showKeys">Show more</a>
          </div>
        </div>
    </div> --}}
    <div class="content-2 px-2">
        <div class="mt-80 d-flex jc-c br-40 bg-primary text-pri">
            <div class="p-3 text-center w-80">
            <div class="card">
                <h1 class="head6 text-center">Why Choose Us?</h1>
            </div>
            <div class="card mt-1 d-flex jc-f-sb br-40">
                <p class="mb-2 text-light head3 text-center">Choose SheDrives for a ride-hailing experience that prioritizes safety, empowerment,
                    and inclusivity. We are dedicated to providing a service that supports and values every individual,
                    making every journey a step towards a better future.
                </p>
            </div>
            </div>
        </div>
    </div>
    <div class="content-2 mt-80 p-3">
        <h1 class="head1">We care about safety</h1>
        <div class="jc-f-sb mt-60 px-3 card-par">
            <div class="col-45 mt-1 br-40 p-1">
              <img class="w-70" src="{{ asset('assets/images/aboutus.JPEG') }}" alt="">
            </div>
            <div class="col-45 mt-1">
                <div class="mt-1">
                    <h1 class="head3">Your Safety</h1>
                    <p class="my-2">We aim to keep you protected on the go. From real-time
                         trip monitoring to emergency support features, we ensure your ride is as safe as it is convenient.</p>
                </div>
                <div class="mt-1">
                    <h1 class="head3">Safe Rides for All</h1>
                    <p class="my-2">SheDrives offers secure, respectful transportation for women and transgender
                        passengers, ensuring every ride is as comfortable as it is safe.</p>
                </div>
                <div class="mt-1">
                    <h1 class="head3">Your Journey, Your Choice</h1>
                    <p class="my-2">With SheDrives, you have the power to choose a female
                        or transgender driver, making your ride secure and tailored to your needs.</p>
                </div>
            </div>
          </div>
    </div>
    {{-- <div class="content-2 mt-80 p-3 w-100 ">
        <h1 class="head1">How dose it work?</h1>
        <div class="content-card-2 d-flex jc-f-sb mt-60 card-par">
            <div class="card mt-1">
                <div class="bg-light br-10 p-2">
                    <div>
                        <div class="icon"></div>
                        <p class="f-size-09">Michael 4.9</p>
                        <p class="f-size-09">Hyundai Accent, 2012</p>
                    </div>
                    <div class="ai-e card-par jc-f-sb">
                        <div class="card col-70 d-flex mt-1">
                            <p class="f-size-09">25 August, 17:00</p>
                            <p class="mx-1 f-size-09">100</p>
                            <p class="f-size-09">for 1 passenger</p>
                        </div>
                        <div class="card-btn d-flex mt-1">
                            <a href="" class="butt-1 bg-grey">Decline</a>
                            <a href="" class="butt-1 bg-pri">Accept</a>
                        </div>
                    </div>
                </div>
                <div class="bg-light br-10 p-3 mt-1">
                    <div>
                        <div class="icon"></div>
                        <p class="f-size-09">Michael 4.9</p>
                        <p class="f-size-09">Hyundai Accent, 2012</p>
                    </div>
                    <div class="ai-e card-par jc-f-sb">
                        <div class="col-70 d-flex mt-1">
                            <p class="f-size-09">25 August, 17:00</p>
                            <p class="mx-1 f-size-09">100</p>
                            <p class="f-size-09">for 1 passenger</p>
                        </div>
                        <div class="card-btn d-flex mt-1">
                            <a href="" class="butt-1 bg-grey">Decline</a>
                            <a href="" class="butt-1 bg-pri">Accept</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card px-3 mt-1">
                <div class="d-flex">
                    <div class="">
                      <li class="d-flex ai-s my-3">
                        <div class="icon col-5 b-br-2 text-center mr-1"><i class="fa-solid fa-1"></i></div>
                        <p class="col-85 ">Fill in the order form</p>
                      </li>
                      <li class="d-flex ai-s my-3">
                        <div class="icon col-5 b-br-2 text-center mr-1"><i class="fa-solid fa-2"></i></div>
                        <div class="col-85">
                           <p >Wait for offers from drivers</p>
                        </div>
                      </li>
                      <li class="d-flex ai-s my-3">
                        <div class="icon col-5 b-br-2 text-center mr-1"><i class="fa-solid fa-3"></i></div>
                        <div class="col-85">
                          <p>Accept the best offer</p>
                        </div>
                      </li>
                      <li class="d-flex ai-s my-3">
                        <div class="icon col-5 b-br-2 text-center mr-1"> <i class="fa-solid fa-4"></i></div>
                        <div class="col-85">
                          <p class="col-85">Call the driver and discuss us</p>
                        </div>
                      </li>
                    </div>
                  </div>

            </div>
          </div>
    </div> --}}
    <div class="content-2 my-80 px-3 w-100">
        <div class="content-download-app br-40 px-3 bg-primary">
          <div class="card-par">
            <div class="card w-60 py-8">
              <a href="">
                <h1 class="head text-light">Download our free app</h1>
                <div class="mt-3"><a href="" class="btn-2 bg-pri">Download App</a></div>
              </a>
            </div>
            <div class="w-40" style="background-image: url('assets/images/mobile-app2.png'); background-repeat:no-repeat;">
              <a href="">
                <img src="" alt="">
              </a>
            </div>

          </div>

        </div>
      </div>


@endsection
