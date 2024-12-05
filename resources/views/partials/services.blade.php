@extends('layout.master')
@section('title', 'Services SheDrives')

@section('content')

<div class="main-content-in">
    <div class="content-box">
      <div class="content-services d-flex br-40">
        <div class="content-ser br-40 col-100">
          <div class="ser-img">
            <img class="w-100" src="{{ asset('assets/images/our_services_1.jpg') }}" alt="">
          </div>
          <div class="cus-content">
            <!-- <div class="btn-1 mt-2">Services</div> -->
            <h1 class="head text-pri mt-3">Our Services</h1>
          </div>
        </div>
        <div class="card-par d-flex jc-f-sb mt-60 px-3">
          <div class="card col-55 mt-1">
            <h1 class="head text-left">Only trusted specialists and orders</h1>
          </div>
          <div class="card col-40 mt-1 d-flex br-40 p-1">
            <p class="line-h text-left">Here to help you complete any task fast and at a fair price
              Find customers and specialists fast. Search for someone to help, or get orders and offer your price.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="content-box bg-dark mt-80">
      <div class="content px-3 py-8">
        <h1 class="head1 text-light"><span class="text-pri">Offers Safe,</span>
             Reliable transportation for Women and Transgender communities,
             ensuring secure and comfortable journeys for every trip</h1>
      </div>
    </div>
    {{-- <div class="content-box mt-80 px-3">
      <div class="content-helpq">
        <h1 class="head1"><span class="highlight ">Sounds great!</span> How does it work?</h1>
        <div class="card-help d-flex ai-c jc-c mt-80">
          <div class="col-50 card-in">
            <li class="d-flex ai-s">
              <i class="fa-solid fa-1 col-10"></i>
              <a href="" class="col-70">
              <h4>Create any order</h4>
              <p>Rest Assured, there's aspecilist for you</p>
              </a>
            </li>
            <li class="d-flex ai-s">
                <i class="fa-solid fa-2 col-10"></i>
                <a href="" class="col-70">
                <h4>Create any order</h4>
                <p>Rest Assured, there's aspecilist for you</p>
                </a>
            </li>
            <li class="d-flex ai-s">
                <i class="fa-solid fa-3 col-10"></i>
              <a href="" class="col-70">
                <h4>Create any order</h4>
                <p>Rest Assured, there's aspecilist for you</p>
              </a>
            </li>
          </div>
          <div class="card-img">
            <img class="w-100" src="{{ asset('assets/images/consumer_customer1.jpeg') }}" alt="">
          </div>
        </div>
      </div>
    </div> --}}
    <div class="content-box bg-dark pr mt-80">
      <div class="content-download-app px-3 py-8">
        <a href="">
          <div class="col-60">
            <h1 class="head text-light">Download our free <span class="text-pri">app</span></h1>
            <div class="mt-4"><a href="" class="btn-2">Download the App</a></div>
          </div>
        </a>

      </div>
    </div>
  </div>

@endsection
