@extends('layout.master')
@section('title', 'SheDrives book')

@section('content')

<div class="main-content px-3">
    <div class="content-box bg-primary ">
        <div class=" py-3 px-4 d-flex">
          <div class="container-img col-50">
            <!-- <img src="" alt=""> -->
            <img src="assets/images/Vector (1).svg" class="w-100" alt="" />
          </div>
          <div class="container-header px-3 col-50">
            <h1 class="head6 text-light ">From Underdog to <span class="text-pri">Global Company</span></h1>
            <p class="text-light my-2">
                The true history of the technological phenomenon that is shedrive, as told by its CEO
            </p>
            <p class="text-light my-2">
                The true history of the technological phenomenon that is shedrive, as told by its CEO
            </p>
            <p class="text-light my-2">
                The true history of the technological phenomenon that is shedrive, as told by its CEO
            </p>
            <p class="text-light my-2">
                The true history of the technological phenomenon that is shedrive, as told by its CEO
            </p>
            <h3 class="head5 text-pri">Free Download</h3>
            <a href="" class="btn is-outline-pri text-pri mt-2">Text</a>
            <a href="" class="btn is-outline-pri text-light mt-2 mx-2">Audio</a>
          </div>
        </div>
    </div>
    <div class="content-box">
        <div class="content-review px-3">
        <div class="head1 mt-60">Reviews</div>
        <div class="d-flex jc-f-sb f-wrap bg-10 mt-4">
            <div class="card col-33 p-3 br-40 bg-light">
            <p>To be 100% committed to our vision and mission. To earn money using fair trade principles, and run
                sustainable non-profit programs. Act ethically and do no evil</p>
            </div>
            <div class="card col-33 p-3 br-40 bg-light">
            <p>To be professional, effective and initiative-taking. Achieve more with optimal costs. Make continuous
                improvements and innovate</p>
            </div>
            <div class="card col-33 p-3 br-40 bg-light">
            <p>To be user-centric and improve loyalty, safety, and emotional connection to our brand. Relentlessly
                develop the team and hire the best people. Maintain a culture of inclusivity, mutual support, and
                personal growth</p>
            </div>

        </div>

        </div>
    </div>
    <div class="content-box">
        <div class="content-review-b px-2 mt-80">
          <div class="card d-flex jc-c p-2">
            <div class="w-70">
              <h5 class="head3 line-h text-center">“With this book, my aim is to inspire readers to cultivate their potential and make a positive impact on the world, regardless of their circumstances. In my own journey, challenging injustices has emerged as a powerful catalyst in forging our extraordinary narrative.”</h5>
            </div>
            <div class="card w-100 p-2 mb-2">
                <div class="icon bg-light">
                    <img src="assets/images/Mask_group.png" class="w-100 " alt="">
                </div>
                <p class="px-2 mt-2">Ammaz Farooqi, CEO shedrive</p>
              </div>
          </div>

        </div>
    </div>
    <div class="content-box my-80 px-3">
        <div class="content-download-app-b bg-primary br-40 px-3 py-8">
          <div class="d-flex">
            <div class="col-50">
                <h3 class="head6 text-pri">Free Download</h3>
                <a href="" class="btn is-outline-pri text-pri mt-2">Text</a>
                <a href="" class="btn is-outline-pri mt-2 mx-2">Audio</a>
            </div>
            <div class="col-50">
              <a href="">
                <img src="assets/images/" alt="">
              </a>
            </div>

          </div>

        </div>
      </div>
</div>

@endsection
