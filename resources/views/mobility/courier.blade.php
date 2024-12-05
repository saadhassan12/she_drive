@extends('layout.master')
@section('title', 'courier-delivery SheDrives')

@section('content')

<div class="main-content-in main-content">
    <div class="content-box">
        <div class="content-services d-flex br-40">
            <div class="content-ser br-40">
              <div class="ser-img" >
                <img class="w-100" src="assets/images/delivery_id.webp" alt="">
              </div>
              <div class="cus-content card-par ai-e">
                <h1 class="head text-light mt-3 w-55">Courier delivery <span class="text-pri">at your price</span></h1>
                <div class="w-40">
                  <div class="form-group bg-light br-10 p-2">
                    <h3>Confirm your phone number and fill out the application</h3>
                    <div class="container py-2">
                        <form action="/action_page.php">
                          <input type="text" id="name" name="name" placeholder="Your name">

                          <input type="text" id="company_name" name="company_name" placeholder="Company name">

                            <input type="text" id="cname" name="cname" placeholder="City">

                            <input type="phone" id="phone" name="phone" placeholder="Your Phone number">

                            <div class="my-2">
                              <input type="radio" id="Business" name="Business" value="JavaScript">
                              <label for="Business">I'm Business representative</label>
                            </div>

                            <div class="my-2">
                              <input type="radio" id="courier" name="courier" value="JavaScript">
                              <label for="courier">I am a courier and I want to work with you</label>
                            </div>


                            <input type="submit" value="Submit" class="mt-2 bg-pri br-10 w-100">
                            <p class="f-size-09 mt-1 text-blue">By sending your request you accept our Privacy Policy, agree to receive marketing communications from sheDrive via SMS and calls, and agree to chat with us via WhatsApp</p>

                        </form>
                     </div>
                </div>
                </div>
            </div>

            </div>
          </div>
    </div>
    <div class="content-box">
        <div class="content-review px-2">
          <div class="d-flex jc-f-sb f-wrap bg-10 mt-60">
            <a href="" class="card w-25 p-3 br-40 bg-light mt-1">
              <div >
                <div class="">
                  <img src="assets/images/city_vertical.svg" alt="">
                </div>
                <p class="head3 text-center">city rides</p>
              </div>
            </a>
            <a href="" class="card w-25 p-3 br-40 bg-light mt-1">
              <div >
                <div class="">
                  <img src="assets/images/growth.svg" alt="">
                </div>
                <p class="head3 text-center">Coutier delivery</p>
              </div>
            </a>
            <a href="" class="card w-25 p-3 br-40 bg-light mt-1">
              <div>
                <div class="">
                  <img src="assets/images/sports.svg" alt="">
                </div>
                <p class="head3 text-center">freight delivery</p>
              </div>
            </a>
            <a href="" class="card w-25 p-3 br-40 bg-light mt-1">
              <div >
                <div class="mb-1">
                  <img src="assets/images/career.svg" alt="">
                </div>
                <p class="head3 text-center">City to city</p>
              </div>
            </a>
          </div>
        </div>
    </div>
    <div class="content-box mt-80">
        <div class="content-review px-3">
          <div class="head1 mt-60">The app for affordable delivery</div>
          <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
            <div class="card w-33 p-3 br-40 bg-light mt-1">
              <div class="icon b-br-2 mb-1"><i class="fa-regular fa-thumbs-up"></i></div>
              <h2 class="head3 my-2">Offer your fare</h2>
              <p>Find a driver who accepts your offer or accept a driver’s offer instead</p>
            </div>
            <div class="card w-33 p-3 br-40 bg-light mt-1">
              <div class="icon b-br-2 mb-1"><i class="fa-solid fa-user-shield"></i></div>
              <h2 class="head3 my-2">Choose a driver</h2>
              <p>You’ll see the driver’s rating and how many rides they’ve done</p>
            </div>
            <div class="card w-33 p-3 br-40 bg-light mt-1">
              <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile"></i></div>
              <h2 class="head3 my-2">Be secure in your choice</h2>
              <p>We verify every driver’s basic info and documents before they join the app</p>
            </div>
          </div>

        </div>
    </div>
    <div class="content-box mt-80 bg-primary">
        <div class="content-review px-3 py-3">
          <div class="head1 mt-60 text-light">Businesses <span class="text-pri">choose sheDrive Couriers</span></div>
          <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
            <div class="card w-33 p-3 br-40 bg-sec mt-1">
              <div class="icon b-br-2 mb-1"><i class="fa-regular fa-thumbs-up text-light"></i></div>
              <h2 class="head3 my-2 text-light">Delivery 24/7</h2>
              <p class="text-light">Order delivery at any time that is convenient for you</p>
            </div>
            <div class="card w-33 p-3 br-40 bg-sec mt-1">
              <div class="icon b-br-2 mb-1"><i class="fa-solid fa-user-shield text-light"></i></div>
              <h2 class="head3 my-2 text-light">Your package tracking</h2>
              <p class="text-light">Track the route of the courier in the app</p>
            </div>
            <div class="card w-33 p-3 br-40 bg-sec mt-1">
              <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile text-light"></i></div>
              <h2 class="head3 my-2 text-light">Fast package delivery</h2>
              <p class="text-light">Usually couriers pick up a package within 10 minutes</p>
            </div>
          </div>

        </div>
    </div>
    <div class="content-box mt-80 px-3">
        <div class="content-helpq">
          <h1 class="head1"><span class="highlight ">How</span> to get started</h1>
          <div class="card-help card-par ai-c jc-c mt-60">
            <div class="w-50 tips-card">
              <li class="d-flex ai-c">
                <i class="fa-solid fa-1"></i>
                <a href="">
                <h4>Download sheDrive</h4>
                <p>Rest Assured, there's aspecilist for you</p>
                </a>
              </li>
              <li class="d-flex ai-c">
                <i class="fa-solid fa-2"></i>
                <a href="">
                <h4>Open Intercity rides</h4>
                <p>Rest Assured, there's aspecilist for you</p>
                </a>
              </li>
              <li class="d-flex ai-c">
                <i class="fa-solid fa-3"></i>
                <a href="">
                <h4>Offer your fare</h4>
                <p>Rest Assured, there's aspecilist for you</p>
                </a>
              </li>
              <li class="d-flex ai-c">
                <i class="fa-solid fa-3"></i>
                <a href="">
                <h4>Offer your fare</h4>
                <p>Rest Assured, there's aspecilist for you</p>
                </a>
              </li>
              <a href="" class="btn is-pri">Download the app</a>
            </div>
            <div class="card-img w-33">
              <img class="w-100" src="assets/images/courier_consumer_2.svg" alt="">
            </div>
          </div>
        </div>
      </div>
</div>

@endsection
