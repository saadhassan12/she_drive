@extends('layout.master')
@section('title', 'fright-delivery SheDrives')

@section('content')

<div class="main-content-in main-content">
    <div class="content-box">
        <div class="content-services d-flex br-40">
            <div class="content-ser br-40" style="height: 400px">
              <div class="ser-img">
                <img class="w-100" style="height: 400px" src="assets/images/city_cover.webp" alt="">
              </div>
              <div class="cus-content">
                  <h1 class="head text-light mt-3">Best way <span class="text-pri">from city to city</span></h1>
                  <a href="" class="btn is-pri mt-3">Request Now</a>
                  <a href="" class="btn is-light mt-3">Download the app</a>
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
                  <img class="w-100" src="assets/images/city_vertical.svg" alt="">
                </div>
                <p class="head3 text-center">city rides</p>
              </div>
            </a>
            <a href="" class="card w-25 p-3 br-40 bg-light mt-1">
              <div >
                <div class="">
                  <img class="w-100" src="assets/images/growth.svg" alt="">
                </div>
                <p class="head3 text-center">Coutier delivery</p>
              </div>
            </a>
            <a href="" class="card w-25 p-3 br-40 bg-light mt-1">
              <div>
                <div class="">
                  <img class="w-100" src="assets/images/sports.svg" alt="">
                </div>
                <p class="head3 text-center">freight delivery</p>
              </div>
            </a>
            <a href="" class="card w-25 p-3 br-40 bg-light mt-1">
              <div >
                <div class="mb-1">
                  <img class="w-100" src="assets/images/career.svg" alt="">
                </div>
                <p class="head3 text-center">City to city</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    <div class="content-box mt-80 px-3">
        <div class="content-statics d-flex">
            <div class="card col-25 ml-1 mt-3">
            <h1 class="head1 pt-3">798</h1>
            <p class="pt-3">mln app installs</p>
            </div>
            <div class="card col-25 ml-1 mt-3">
            <h1 class="head1 pt-3">798</h1>
            <p class="pt-3">cities</p>
            </div>
            <div class="card col-25 ml-1 mt-3">
            <h1 class="head1 pt-3">798</h1>
            <p class="pt-3">Countries</p>
            </div>
            <div class="card col-25 ml-1 mt-3">
            <h1 class="head1 pt-3">798</h1>
            <p class="pt-3">Employees</p>
            </div>
        </div>
    </div>
    <div class="content-box mt-80">
        <div class="content-review px-3">
          <div class="head1 mt-60">The app for affordable freight delivery</div>
          <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
            <div class="card w-33 p-3 br-40 bg-light mt-1">
              <div class="icon b-br-2 mb-1"><i class="fa-regular fa-thumbs-up"></i></div>
              <h2 class="head3 my-2">Your fare</h2>
              <p>You can offer your fare or accept a driver's offer</p>
            </div>
            <div class="card w-33 p-3 br-40 bg-light mt-1">
              <div class="icon b-br-2 mb-1"><i class="fa-solid fa-user-shield"></i></div>
              <h2 class="head3 my-2">Transport any cargo</h2>
              <p>Transport heavier items and things that take up a lot of space</p>
            </div>
            <div class="card w-33 p-3 br-40 bg-light mt-1">
              <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile"></i></div>
              <h2 class="head3 my-2">Movers’ services</h2>
              <p>In the request form, you can choose the ‘Movers needed’ option</p>
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
    <div class="content-box bg-light mt-80">
        <div class="content-app p-3">
          <div class="content-section card-par">
            <div class="col-50">
              <div class="d-flex">
                <div class="logo w-25"><img class="w-100" src="assets/images/logo-only.svg" alt=""></div>
                <div class="ml-1 w-50">
                  <p>sheDrives App</p>
                  <div class="star-img"></div>
                </div>
              </div>
              <h1 class="head1 mt-3 card">Mobile App</h1>
              <p class="mt-1 card">Freedom of choice and movement – one app for rides, cargo, and delivery.</p>
            </div>
            <div class="app-img w-50 p-0">
              <!-- <img src="assets/images/mobile_app.webp" alt=""> -->
            </div>
          </div>
        </div>
    </div>
    <div class="content-box mt-80 px-3">
        <div class="content-helpq">
          <h1 class="head1"><span class="highlight ">How</span> to get started</h1>
          <div class="card-help card-par ai-c jc-c mt-60">
            <div class="w-50">
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
