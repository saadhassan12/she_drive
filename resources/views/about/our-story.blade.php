@extends('layout.master')
@section('title', 'About SheDrives')


@section('content')

    {{--html goes here--}}
    <div class="main-content-in main-content">
        <div class="content-services d-flex br-40 w-100">
          <div class="content-ser br-40 w-100">
            <div class="ser-img">
              <img class="w-100" src="{{ asset('assets/images/about_us_1.jpg') }}" alt="">
            </div>
            <div class="cus-content">
              <!-- <div class="btn-1 mt-2">Services</div> -->
              <h1 class="head text-pri mt-3"><span class="text-">sheDrive —Our values center around Respect</span></h1>
            </div>
          </div>
        </div>
        <div class="content-box">
          <div class="content-review px-2">
            <div class="d-flex jc-f-sb f-wrap bg-10 mt-60">
              <a href="" class="card w-48 p-3 br-40 bg-light text-dark mt-1">
                <div >
                  <div class="">
                    <h3 class="head3 mb-2">sheDrive’s Vision</h3>
                    <p>Our vision is to revolutionize transportation by providing a safe, inclusive, and empowering
                        ride-hailing experience for women and transgender individuals. We aim to foster a community
                         where every journey is marked by respect, equality, and security.
                    </p>
                  </div>
                </div>
              </a>
              <a href="" class="card w-48 p-3 br-40 bg-light text-dark mt-1">
                <div >
                  <div class="">
                    <h3 class="head3 mb-2">sheDrive’s Mission</h3>
                    <p>Our mission is to deliver a secure and empowering ride-hailing experience exclusively for women and transgender
                        individuals. We are committed to creating a safer, more inclusive transportation option
                        by providing exceptional service, leveraging advanced safety features, and promoting respect and equality in every ride.</p>
                  </div>

                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="content-box">
            <div class="content-review px-2">
              <div class="d-flex jc-f-sb f-wrap br-40 bg-light mt-60">
                  <div class="card w-48 p-3 text-dark mt-1">
                      {{-- <h3 class="head3 mb-2">sheDrive’s Vision</h3> --}}
                      <p> Empowering safe and inclusive rides for women and transgender
                        individuals, every journey with SheDrives is a step towards a more equitable future
                      </p>
                      {{-- <img class="w-100" src="{{ asset('') }}"assets/images/vision.svg" alt=""> --}}
                  </div>
                  <div class="card w-48 p-3 br-40 bg-light text-dark mt-1">
                      <img class="w-70" src="{{ asset('assets/images/aboutus.jpeg') }}" alt="">
                  </div>
              </div>
            </div>
          </div>
        <div class="content-box mt-80 bg-primary">
            <style>
                .card{
                    text-align: left;
                }
            </style>
          <div class="content-review px-3 py-3">
            <div class="head1 mt-60 text-light">sheDrive <span class="text-pri">Values:</span></div>
            <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-regular fa-thumbs-up text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Safety</h2>
                <p class="text-light f-size-09">Our top priority is the security and well-being of both
                     our passengers and drivers, guaranteeing safe and dependable transport throughout every journey.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-solid fa-user-shield text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Empowerment</h2>
                <p class="text-light f-size-09">We are committed to uplifting women and transgender individuals by offering
                    significant employment opportunities and supporting their financial autonomy.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Diversity and Respect</h2>
                <p class="text-light f-size-09">We embrace and celebrate diversity, working to create a respectful and
                     valued environment for everyone, regardless of gender identity.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-regular fa-face-smile text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Our Values</h2>
                <p class="text-light f-size-09">Our core values center around respect and equality, ensuring that
                     every interaction is marked by fairness and consideration.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-regular fa-face-smile text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Expert Drivers and Support Staff</h2>
                <p class="text-light f-size-09">We employ expert drivers and support staff who are trained to deliver
                     safe and reliable transportation while ensuring a positive experience.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-regular fa-face-smile text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Cutting-Edge Features</h2>
                <p class="text-light f-size-09">Our platform includes cutting-edge features designed to provide real-time
                    tracking, emergency support, and seamless communication.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-regular fa-face-smile text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Community Impact</h2>
                <p class="text-light f-size-09">We are committed to empowering local communities by creating job
                    opportunities and supporting local initiatives.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-regular fa-face-smile text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Driving Social Change </h2>
                <p class="text-light f-size-09">Our goal is to drive social change by advocating for inclusivity and
                    safety in transportation, positively impacting society.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-regular fa-face-smile text-light"></i></div>
                <h2 class="head3 my-2 text-pri">Our Commitment</h2>
                <p class="text-light f-size-09">We are committed to continuous improvement, regularly evaluating and
                    enhancing our services to better meet the needs of our users.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 bg-sec mt-1">
                <div class="icon b-br-2 mb-1"><i class="fa-regular fa-face-smile text-light"></i></div>
                <h2 class="head3 my-2 text-pri">User-Centric Approach</h2>
                <p class="text-light f-size-09">Our approach is user-centric, focusing on delivering a service that
                    meets and exceeds the expectations of both passengers and drivers.
                </p>
              </div>
              <div class="card w-25 p-3 br-40 mt-1">
              </div>
              <div class="card w-25 p-3 br-40  mt-1">
              </div>
            </div>

          </div>
        </div>
        <div class="content-box">
          <div class="content-services d-flex br-40">
            <div class="card d-flex jc-f-sb mt-60 px-3">
              <div class="w-30 mt-1">
                <h1 class="head1">About us</h1>
              </div>
              <div class="card w-70 mt-1 d-flex br-40 p-1">
                <p class="mb-2">sheDrive activates the standard of equality.</p>
                <p>SheDrives is more than a business; it is a movement towards gender equality and social inclusion.
                     We are dedicated to challenging societal norms and breaking down barriers, ensuring that women
                        and transgender individuals can navigate our cities freely and securely.

                </p>
                <a href="" class="text-sec py-2">See all</a>
              </div>
            </div>
          </div>
        </div>
        <div class="content-box px-2">
          <div class="content-services mt-80 d-flex jc-c br-40 bg-primary text-pri">
            <div class="p-3 text-center w-80">
              <div class="card">
                <h1 class="head6  text-center">Why Choose Us?</h1>
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
        <div class="content-box mt-60 px-3">
          <div class="content-review d-flex py-2">
            <div class="d-flex jc-f-sb f-wrap bg-10 mt-60">
              <div class="card w-33 p-3 br-40 bg-light mt-1">
                <div class="icon b-br-2"><i class="fa-regular fa-thumbs-up"></i></div>
                <h2 class="my-2">Transparent terms</h2>
                <p>Total transparency brings back the feeling of control. There are no algorithms or price manipulation.
                   Drivers see the exact route before accepting, they can also choose which rides to respond to and passengers are free to choose a driver</p>
              </div>
              <div class="card w-33 p-3 br-40 bg-light mt-1">
                <div class="icon b-br-2"><i class="fa-solid fa-user-shield"></i></div>
                <h2 class="my-2">Cost is always fair </h2>
                <p>The cost of services with sheDrive is fair. This is because our people-to-people model allows users to agree amongst themselves on a price
                  that satisfies both parties</p>
              </div>
              <div class="card w-33 p-3 br-40 bg-light mt-1">
                <div class="icon b-br-2"> <i class="fa-regular fa-face-smile"></i></div>
                <h2 class="my-2">Direct payments</h2>
                <p>Passengers pay drivers directly. This allows us to reduce costs and maintain lower fares. The payment for the services for the
                  providers is also the lowest in the market</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
