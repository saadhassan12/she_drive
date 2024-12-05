@extends('layout.master')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}" />
@endsection
@section('title', 'SheDrives contact')
@section('content')

<div class="main-content-in main-content">
    <div class="content-box">
        <div class="content-services d-flex br-40">
          <div class="content-ser rep-0 br-40 col-100">
            <div class="ser-img">
              <img class="w-100" src="{{ asset('assets/images/services_3.JPG') }}" alt="">
            </div>
            <div class="cus-content">
              <!-- <div class="btn-1 mt-2">Services</div> -->
              <h1 class="head text-light mt-3">Our <span class="text-pri">Contacts</span></h1>
            </div>
          </div>
          <div class="card d-flex jc-f-sb mt-60 px-3 w-100">
            <div class="w-70 mt-1 card text-left">
              <h5 class="head1">We are always here for you</h5>
              <p class="mt-60 f-size-09">Please share your feedback or report a problem</p>
              <a href="contact-form.html" class="btn is-pri my-2">Contact us</a>
            </div>
            {{-- <div class="w-30">
              <img src="assets/images/contacts_icon_1.svg" class="w-100" alt="">
            </div> --}}
          </div>
        </div>
    </div>
    <div class="content-box mt-80 px-3">
        <div class="content-review d-flex py-2">
          <div class="w-100">
            <h2 class="head1 w-100">Teams</h2>
          </div>
          <div class="d-flex jc-f-sb w-100 mt-80">
            <div class="card w-33 p-3 br-40 bg-light mt-1">
                <div class="my-2">
                    <p>Support Team</p>
                    <a href="https://SheDrivesapp.com/contacts/support" class="text-blue">SheDrivesapp.com</a>
                </div>
                <div class="my-2">
                    <p>Policy and Government Relations</p>
                    <a href="" class="text-blue">gr@shedrive.com</a>
                </div>
            </div>
            <div class="card w-33 p-3 br-40 bg-light mt-1">
                <div class="my-2">
                    <p>Collaboration and Advertising</p>
                    <a href="https://SheDrivesapp.com/contacts/support" class="text-blue">SheDrivesapp.com</a>
                </div>
                <div class="my-2">
                    <p>PR Department</p>
                    <a href="" class="text-blue">gr@shedrive.com</a>
                </div>
            </div>
            <div class="card w-33 p-3 br-40 bg-light mt-1">
                <div class="my-2">
                    <p>Cyber Security</p>
                    <a href="https://SheDrivesapp.com/contacts/support" class="text-blue">SheDrivesapp.com</a>
                </div>
            </div>
          </div>
        </div>
    </div>
    {{-- <div class="content-box">
        <div class="content-review px-3">
          <div class="mt-120">
            <h1 class="head1 col-50">Our office</h1>
          </div>
          <div class="d-flex f-wrap jc-f-sb bg-10 mt-40">
            <p class="f-size-09 w-100 py-2">Headquarters: 800 West El Camino Real, Suite 180, Mountain View, CA 94040</p>
            <div class="card card-d col-33 br-40 bg-light">
              <img class="w-100" src="assets/images/horror-story.jpeg" alt="">
            </div>
            <div class="card card-d col-33 br-40 bg-light">
              <img class="w-100" src="assets/images/trees.jpeg" alt="">
            </div>
            <div class="card card-d col-33 br-40 bg-light">
              <img class="w-100" src="assets/images/office-work.jpeg" alt="">
            </div>
            <!-- <div class="card card-d col-3 br-40 bg-light">
                  <img class="w-100" src="assets/images/horror-story.jpeg" alt="">
                </div> -->

          </div>

        </div>
    </div> --}}
    {{-- <div class="content-box my-80 px-3">
        <div class="content-download-app bg-primary br-40 px-3 py-3">
          <div class="d-flex">
            <div class="">
                <h1 class="head text-light">Partner up <span class="text-pri">with sheDrive</span></h1>
                <p class="mt-2 text-light">We are always looking for new opportunities for development and cooperation, and we will carefully consider every proposal</p>
                <div class="mt-3"><a href="" class="btn is-pri  ">Become a partner</a></div>
            </div>
          </div>
        </div>
    </div> --}}
</div>

@endsection
