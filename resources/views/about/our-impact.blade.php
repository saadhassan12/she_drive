@extends('layout.master')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}" />
@endsection
@section('title', 'our-impact SheDrives')

@section('content')

<div class="main-content-in main-content">
    <div class="content-box">
      <div class="content-services d-flex br-40">
        <div class="content-ser rep-0 br-40 col-100">
          <div class="ser-img">
            <img class="w-100" src="assets/images/in_local_cover.webp" alt="">
          </div>
          <div class="cus-content">
            <!-- <div class="btn-1 mt-2">Services</div> -->
            <h1 class="head text-pri mt-3">Services</h1>
            <a href="" class="btn is-pri">Read more</a>
          </div>
        </div>
        <div class="card d-flex jc-f-sb mt-60 px-3">
          <div class="w-50 mt-1">
            <h5 class="head1">We are driving change in communities by empowering people</h5>
          </div>
          <div class="w-40 mt-1 d-flex br-40 p-1">
            <p class="line-h head3">Our mission is challenging injustice to make the world a fairer place for 1bn+
              people by 2030</p>
          </div>
        </div>
      </div>
    </div>
    <div class="content-box mt-80 px-3">
      <div class="content-statics d-flex">
        <div class="card col-33 ml-1 mt-3">
          <h1 class="head1 pt-3">798</h1>
          <p class="pt-3">Projects</p>
        </div>
        <div class="card col-33 ml-1 mt-3">
          <h1 class="head1 pt-3">798</h1>
          <p class="pt-3">Countries</p>
        </div>
        <div class="card col-33 ml-1 mt-3">
          <h1 class="head1 pt-3">8</h1>
          <p class="pt-3">International Awards for Applicants Worldwide</p>
        </div>
      </div>
    </div>
    <div class="content-box mt-80 px-3">
      <div class="map d-flex ai-c jc-c">
        <img src="assets/images/map.svg" class="w-100" alt="">
        <div class="map-marker map-latin bg-green">
          <h1 class="head4">3</h1>
          <p class="f-size-09">Projects in Latin America</p>
        </div>
        <div class="map-marker map-africa bg-primary">
          <h1 class="head4">2</h1>
          <p class="f-size-09">Projects in Latin Africa</p>
        </div>
        <div class="map-marker map-cis bg-green ">
          <h1 class="head4">3</h1>
          <p class="f-size-09">Projects in Latin CIS</p>
        </div>
        <div class="map-marker map-asia bg-primary">
          <h1 class="head4">3</h1>
          <p class="f-size-09">Projects in Latin Asia</p>
        </div>

      </div>
    </div>
    <div class="content-box bg-primary">
      <div class="card-par d-flex jc-f-sb p-3">
        <div class="col-45 card">
          <h5 class="head text-light">To maximize our positive impact, we created a hub called <span
              class="text-pri">inVision</span></h5>
        </div>
        <div class="col-45 mt-1 d-flex br-40 card">
          <p class=" head2 text-light">inVision challenges the unjust allocation of resources in education,
            creative industries, startups and sports by supporting unprivileged groups in these areas</p>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-services d-flex br-40">
        <div class="card-par d-flex jc-f-sb mt-60 px-3">
          <div class="col-25 mt-1 card">
            <h5 class="head1">Education</h5>
          </div>
          <div class="col-65 mt-1 d-flex br-40 p-1 card">
            <p class="line-h">Knowledge should not be an exclusive and expensive privilege for the few - instead it
              should be available for the many. Our answer is to make education more accessible for undeveloped
              countries and communities</p>
          </div>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-review px-3">
        <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
          <div class="card w-50 br-40 d-flex ai-c jc-c">
            <img class="w-100" src="assets/images/education.svg" alt="">
          </div>
          <div class="card w-25 p-3 br-40 bg-light mt-1">
            <h2 class="my-2">Prices are fair</h2>
            <p class="mb-2">People agree on a win-win price for both sides. Fair pay always inspires quality work</p>
            <a href="" class="text-sec">Read more</a>
          </div>
          <div class="card w-25 p-3 br-40 bg-light mt-1">
            <h2 class="my-2">Prices are fair</h2>
            <p>People agree on a win-win price for both sides. Fair pay always inspires quality work</p>
          </div>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-services d-flex br-40">
        <div class="card d-flex jc-f-sb mt-60 px-3">
          <div class="w-25 mt-1 card">
            <h5 class="head1">Startups</h5>
          </div>
          <div class="w-65 mt-1 d-flex br-40 p-1 card">
            <p class="line-h">The startup world began as an opportunity hub, but has become elitist,
              glamorous, and, as a result, inaccessible to new blood. It is not fair for your location
              or even gender to stand as barriers in launching a tech startup. We are here to change that</p>
          </div>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-review px-3">
        <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
          <div class="card w-25 p-3 br-40 bg-light mt-1">
            <h2 class="my-2">Prices are fair</h2>
            <p class="mb-2">People agree on a win-win price for both sides. Fair pay always inspires quality work</p>
            <a href="" class="text-sec">Read more</a>
          </div>
          <div class="card w-25 p-3 br-40 bg-light mt-1">
            <h2 class="my-2">Prices are fair</h2>
            <p>People agree on a win-win price for both sides. Fair pay always inspires quality work</p>
            <a href="" class="text-sec">Read more</a>
          </div>
          <div class="card w-50 br-40 d-flex ai-c jc-c">
            <img class="w-100" src="assets/images/education.svg" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-services d-flex br-40">
        <div class="card d-flex jc-f-sb mt-120 px-3">
          <div class="w-25 mt-1 card">
            <h5 class="head1">Сreative industries</h5>
          </div>
          <div class="w-60 mt-1 d-flex br-40 p-1 card">
            <p class="line-h">The global art and filmmaking scene is led by the most powerful markets and is
              not as diverse, fair, and welcoming to creators from underserved countries. There is a lack of
              relevant education and low visibility for local artists worldwide. Our programs aim to reduce
              inequality in the creative industries</p>
          </div>
          <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
            <div class="card w-50 br-40 d-flex ai-c jc-c">
              <img class="w-100" src="assets/images/creative.webp" class="w-80" alt="">
            </div>
            <div class="card w-50 p-3 br-40 bg-light">
              <h2 class="my-2">Prices are fair</h2>
              <p class="mb-2">An international project consisting of film awards and training labs aimed at supporting
                filmmakers from the developing film industries</p>
              <a href="" class="text-sec">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-services d-flex br-40">
        <div class="card d-flex jc-f-sb mt-120 px-3">
          <div class="w-25 mt-1">
            <h5 class="head1">Sport</h5>
          </div>
          <div class="w-60 mt-1 d-flex br-40 p-1">
            <p class="line-h">Sport is way more crucial and less accessible for kids from remote areas and
              adults with a physical disability. To challenge this injustice, we started global programs aimed
              at increasing the inclusiveness and accessibility of sports for those who need it most</p>
          </div>
          <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
            <div class="card w-25 p-3 br-40 bg-light mt-1">
              <h2 class="my-2">Prices are fair</h2>
              <p class="mb-2">An international project consisting of film awards and training labs aimed at supporting
                filmmakers from the developing film industries</p>
              <a href="" class="text-sec">Read more</a>
            </div>
            <div class="card w-25 p-3 br-40 bg-light mt-1">
              <h2 class="my-2">Prices are fair</h2>
              <p class="mb-2">An international project consisting of film awards and training labs aimed at supporting
                filmmakers from the developing film industries</p>
              <a href="" class="text-sec">Read more</a>
            </div>
            <div class="card w-50 br-40 d-flex ai-c jc-c">
              <img class="w-100" src="assets/images/creative.webp" class="w-80" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-box bg-primary">
      <div class="content-review px-2">
        <div class="card d-flex jc-f-sb p-2">
          <div class="w-100">
            <h5 class="head6 text-light">My team and I will <span class="text-pri">keep challenging injustice</span>
              and empowering more communities as shedrive continues to grow. We have big plans</h5>
          </div>
        </div>
        <div class="card d-flex ai-c p-2 mb-2">
          <div class="icon b-br-2 bg-light"></div>
          <p class="px-2 text-light">Ammaz farooqi, CEO shedrive</p>
        </div>
      </div>
    </div>
  </div>
@endsection
