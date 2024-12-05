@extends('layout.master')
{{-- @section('style')
<link rel="stylesheet" href="{{ asset('assets/css/pages/venture.css') }}" />
@endsection --}}
@section('title', 'SheDrives book')

@section('content')

<div class="main-content-in main-content bg-dark">
    <div class="content-box px-3">
        <div class="content-services d-flex br-40">
          <div class="content-ser br-40 col-100">
            <div class="ser-img">
              <img class="w-100" src="assets/images/nv-cover-img-1376.png" alt="">
            </div>
            <div class="cus-content">
              <!-- <div class="btn-1 mt-2">Services</div> -->
              <h1 class="head4 w-80 text-light mt-3">Investing in Companies across Emerging Markets</h1>
              <p class="w-60 text-light">shedrive, the world's second-largest* ridesharing app, is here to help businesses scale internationally while challenging injustice globally</p>

              <a href="#apply_job" class="btn is-pri mt-4">Apply</a>
            </div>
          </div>
        </div>
    </div>
    <div class="content-box mt-80 px-3 mx-3" id="offer">
        <div class="content-statics d-flex">
          <div class="content-header-1 w-100">
            <h1 class="head1 text-light">Supporting Companies to become Scaleups through our unique scaling expertise</h1>
          </div>
          <div class="card col-50 ml-1 mt-4 text-light b-bt-2">
            <h1 class="head2 pt-3">$Up to</h1>
            <h1 class="head4 pt-3">$100M</h1>
            <p class="pt-3">mln app installs</p>
          </div>
          <div class="card col-50 ml-1 mt-4 text-light b-bt-2">
            <h1 class="head2 pt-3">Downloads</h1>
            <h1 class="head4 pt-3">200M+</h1>
            <p class="pt-3">cities</p>
          </div>
          <div class="card col-50 ml-1 mt-4 text-light b-bt-2">
            <h1 class="head2 pt-3">Potential countries to enter</h1>
            <h1 class="head4 pt-3">45+</h1>
            <p class="pt-3">Localized "on the ground" support for marketing, business development, HR, finance, and legal</p>
          </div>
          <div class="card col-50 ml-1 mt-4 text-light b-bt-2">
            <h1 class="head2 pt-3">$Up to</h1>
            <h1 class="head1 pt-3">Be part of
                a top-tier company</h1>
            <p class="pt-3">Create meaningful synergies with shedrive globally</p>
          </div>
        </div>
    </div>
    <div class="content-box card-par jc-f-sb mt-80 bg-gradient px-3" id="seek">
        <div class="card mt-4 w-40 text-light">
            <h1 class="head">We focus on companies that are <span class="text-pri"> growing fast and making a big impact</span></h1>
            <a href="" class="btn-ap bg-pri text-dark mt-4">Apply</a>
        </div>
        <div class="card w-50 mt-4 text-light">
            <div class="d-flex ">
                <div class="icon "><i class="fa-solid fa-wand-magic-sparkles"></i>   </div>
                <div class="p-2">
                    <h3 class="head5 pb-1">Similar values</h3>
                    <p>Like shedrive, you aim to change the world for the betters</p>
                </div>
            </div>
            <div class="d-flex ">
                <div class="icon "><i class="fa-solid fa-sack-dollar"></i></div>
                <div class="p-2">
                    <h3 class="head5 pb-1">Series A</h3>
                    <p>Like shedrive, you aim to change the world for the betters</p>
                </div>
            </div>
            <div class="d-flex ">
                <div class="icon "><i class="fa-solid fa-wand-magic-sparkles"></i>   </div>
                <div class="p-2">
                    <h3 class="head5 pb-1">Organic fast growth</h3>
                    <p>Like shedrive, you aim to change the world for the betters</p>
                </div>
            </div>
            <div class="d-flex ">
                <div class="icon "><i class="fa-solid fa-wand-magic-sparkles"></i>   </div>
                <div class="p-2">
                    <h3 class="head5 pb-1">Healthy economics</h3>
                    <p>You can demonstrate effective LTV, CAC, and retention</p>
                </div>
            </div>
            <div class="d-flex ">
                <div class="icon "><i class="fa-solid fa-wand-magic-sparkles"></i>   </div>
                <div class="p-2">
                    <h3 class="head5 pb-1">Emerging markets</h3>
                    <p>You operate in at least one of LATAM, MENA,  </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box mt-80 px-3">
        <div class="map d-flex ai-c jc-c">
          <img src="assets/images/map.svg" class="w-100" alt="">
          <div class="map-marker map-latin">
            <p class="f-size-09">Latam</p>
          </div>
          <div class="map-marker map-africa">
            <p class="f-size-09">Mena</p>
          </div>
          <div class="map-marker map-cis">
            <p class="f-size-09">SEA</p>
          </div>
          <div class="map-marker map-asia">
            <p class="f-size-09">Central Asia</p>
          </div>

        </div>
    </div>
    <div class="content-box mt-80 px-3" id="approach">
        <div class="content-statics d-flex">
          <div class="content-header-1 w-100">
            <h1 class="head1 text-light">How <span class="text-pri">we work</span></h1>
          </div>
          <div class="card col-100 ml-1 mt-4 text-light b-bt-2 d-flex jc-f-sb ai-c">
            <h1 class="head5 pt-3 col-45">Your partners at every step</h1>
            <p class="pt-3 col-45">Connect with people that trust your vision, while providing stability and support. Gain access to new market opportunities, with strong backing.</p>
          </div>
          <div class="card col-100 ml-1 mt-4 text-light b-bt-2 d-flex jc-f-sb ai-c">
            <h1 class="head5 pt-3 col-45">Your partners at every step</h1>
            <p class="pt-3 col-45">Connect with people that trust your vision, while providing stability and support. Gain access to new market opportunities, with strong backing.</p>
          </div>
          <div class="card col-100 ml-1 mt-4 text-light b-bt-2 d-flex jc-f-sb ai-c">
            <h1 class="head5 pt-3 col-45">Your partners at every step</h1>
            <p class="pt-3 col-45">Connect with people that trust your vision, while providing stability and support. Gain access to new market opportunities, with strong backing.</p>
          </div>
        </div>
    </div>
    <div class="content-box card-par jc-f-sb mt-80 bg-primary p-3" id="team">
        <div class="card mt-4 w-40 text-light">
            <h1 class="head1">We were the ‘underdogs’ once. Now we will help others using our unique experience</h1>
            <a href="" class="text-sec mt-3">About sheDrive mission and values</a>
        </div>
        <div class="card w-50 mt-4 text-light">
            <div class="d-flex py-1">
                <div class="icon col-30"><img src="assets/images/head-img.png" class="w-100" alt=""></div>
                <div class="px-2 col-65">
                    <h3 class="head3 pb-1">Andries Smit</h3>
                    <p class="text-grey my-2">20+ years experience in venturing</p>
                    <a href="" class="text-sec">LinkedIn</a>
                </div>
            </div>
            <div class="d-flex py-1">
                <div class="icon col-30"><img src="assets/images/head-img.png" class="w-100" alt=""></div>
                <div class="px-2 col-65">
                    <h3 class="head3 pb-1">Andries Smit</h3>
                    <p class="text-grey my-2">20+ years experience in venturing</p>
                    <a href="" class="text-sec">LinkedIn</a>
                </div>
            </div>
            <div class="d-flex py-1">
                <div class="icon col-30"><img src="assets/images/head-img.png" class="w-100" alt=""></div>
                <div class="px-2 col-65">
                    <h3 class="head3 pb-1">Andries Smit</h3>
                    <p class="text-grey my-2">20+ years experience in venturing</p>
                    <a href="" class="text-sec">LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box mt-120">
        <div class="content-initiatives px-3">
            <div class="card d-flex ai-e jc-f-sb">
                <div class="w-40">
                  <h1 class="head text-light">Fighting social injustice</h1>
                </div>
                <div class="w-40">
                    <p class="text-light">shedrive makes the world a fairer place through fair prices, job opportunities and visionary non-profit initiatives
                    </p>
                </div>
              </div>
          <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
            <div class="card w-25 br-40 bg-primary text-light mt-1">
              <div class="image-eg"></div>
              <div class="p-3">
                <h2 class="my-2">Education</h2>
                <p class="f-size-09">shedrive illuminates the streets of Cairo and Alexandria with special billboards, to help people feel safe in their neighborhoods at night. Especially while waiting for their cars</p>
              </div>
            </div>
            <div class="card w-25 br-40 bg-primary text-light mt-1">
              <div class="image-mex"></div>
              <div class="p-3">
                <h2 class="my-2">Sport</h2>
                <p class="f-size-09">3 out of 4 women have experienced some type of violence or harassment in public transport. shedrive came up with an educational program for drivers</p>
              </div>
            </div>
            <div class="card w-25 br-40 bg-primary text-light mt-1">
              <div class="image-pk"></div>
              <div class="p-3">
                <h2 class="my-2">IT awards</h2>
                <p class="f-size-09">People agree on a win-win price for both sides. Fair pay always inspires quality work</p>
              </div>
            </div>
            <div class="card w-25 br-40 bg-primary text-light mt-1">
                <div class="image-mex"></div>
                <div class="p-3">
                  <h2 class="my-2">Art</h2>
                  <p class="f-size-09">3 out of 4 women have experienced some type of violence or harassment in public transport. shedrive came up with an educational program for drivers</p>
                </div>
              </div>
          </div>
        </div>
    </div>
    <div class="content-box px-3 w-100 mt-80">
        <div class="content-download-app bg-primary br-40 px-3 py-8">
          <div class="card-par">
            <div class="w-70 card">
              <a href="">
                <h1 class="head5 text-light">Are you an individual investor, fund investor, or organization that would like to get involved?</h1>
                <p class="my-2 text-light">We're always interested in partnerships that align with our goals, whether it's an event, promotion, or any other project</p>
                <div class="mt-3"><a href="" class="btn is-pri">Download the App</a></div>
              </a>
            </div>
            <div class="w-25 card">
              <a href="">
                <img src="assets/images/" alt="">
              </a>
            </div>

          </div>

        </div>
    </div>
    <div class="content-box mt-120 px-3 w-100">
        <div class="content-download-app br-40 px-3">
          <div class="d-flex">
            <div class="w-70 card">
              <a href="">
                <h1 class="head text-light">Trusted by our investors**</h1>
              </a>
            </div>
            <div class="d-flex jc-f-sb f-wrap bg-10 mt-4">
                <div class="card w-25 br-40 text-light d-flex ai-c">
                  <div class="p-3">
                    <img class="w-100" src="assets/images/bond.svg" alt="">
                  </div>
                </div>
                <div class="card w-25 br-40 text-light d-flex ai-c">
                    <div class="p-3">
                      <img class="w-100" src="assets/images/bond.svg" alt="">
                    </div>
                  </div>
                  <div class="card w-25 br-40 text-light d-flex ai-c">
                    <div class="p-3">
                      <img class="w-100" src="assets/images/bond.svg" alt="">
                    </div>
                  </div>
                  <div class="card w-25 br-40 text-light d-flex ai-c">
                    <div class="p-3">
                      <img class="w-100" src="assets/images/bond.svg" alt="">
                    </div>
                  </div>
                </div>
          </div>
        </div>
    </div>
</div>

@endsection
