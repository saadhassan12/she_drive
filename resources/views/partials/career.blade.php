@extends('layout.master')
@section('content')
    <div class="main-content-in main-content">
        <div class="content-box">
            <div class="content-services d-flex br-40">
                <div class="content-car br-40 col-100">
                    <div class="car-img">
                        <img class="w-100" src="{{ asset('assets/images/career-1.JPG')}}" alt="">
                    </div>
                    <div class="cus-content">
                        <h1 class="head text-darkx1 mt-3">Career at <span class="text-pri">SheDrive's</span></h1>
                        <div class="btn-p mt-2"><a href="" class="btn is-pri ">See open roles</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-box mt-80 p-3">
            <div class="content-statics d-flex">
                <div class="content-header-1">
                    <h1 class="head5">Become part of a leading tech company that values human principles and fosters
                         a contemporary work environment. We provide attractive compensation and work alongside a
                          team of skilled professionals dedicated to innovation and excellence.
                    </h1>
                </div>
                {{-- <div class="card col-25 ml-1 mt-3">
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
                </div> --}}
            </div>
        </div>
        {{-- <div class="content-box">
            <div class="content-review px-3">
                <div class="head1 mt-60">Our Services</div>
                <div class="d-flex jc-f-sb f-wrap bg-10 mt-80" id="slider">
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="icon b-br-2 mb-1"><i class="fa-regular fa-thumbs-up"></i></div>
                        <p>City rides</p>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="icon b-br-2 mb-1"><i class="fa-solid fa-user-shield"></i></div>
                        <p>City to city rides</p>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile"></i></div>
                        <p>Couriers delivery</p>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile"></i></div>
                        <p>Couriers delivery</p>
                    </div>
                    <div class="w-100 d-flex ai-c jc-f-e">
                        <a href="" class="btn text-sec">See more</a>
                    </div>
                    {{-- <div class="card col-25 p-3 br-40 bg-light">
                        <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile"></i></div>
                        <p>Couriers delivery</p>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile"></i></div>
                        <p>Couriers delivery</p>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile"></i></div>
                        <p>Couriers delivery</p>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="icon b-br-2 mb-1"> <i class="fa-regular fa-face-smile"></i></div>
                        <p>Couriers delivery</p>
                    </div> --}}

               {{-- </div>

            </div>
        </div> --}}
        {{-- <div class="content-box mt-80">
            <div class="content-jobs px-3">
                <div class="head1 mt-80">New open jobs</div>
                <p class="mt-60">6 to 178</p>
                <div class="d-flex jc-f-sb f-wrap bg-10 mt-2">
                    <a href="#" class="card col-70">
                        <div class=" p-3 br-40 bg-light">
                            <h1 class="head-d">Senior Product Manager, Neobank PAX team</h1>
                            <div class="d-flex my-1">
                                <div><i class="fa-solid fa-location-dot mr-05"></i></div>
                                <div>
                                    <p>Cyprus Limassol</p>
                                </div>
                            </div>
                            <p class="my-2">As a Senior Product Manager at sheDrive's Neobank PAX, you will identify and develop
                                financial products for passengers. Working with a small, dedicated team of Android, iOS, and Backend
                                Engineers, and collaborating with shared product designers and analytics, you will lead the creation
                                of impactful fintech solutions.</p>
                            <div class="d-flex ai-c jc-l card-link">
                                <li>Hybrid</li>
                                <li>Full-time</li>
                                <li>Senior</li>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card col-30">
                        <div class=" p-3 br-40 bg-light">
                            <h1 class="head-d">Senior Product Manager, Neobank PAX team</h1>
                            <div class="d-flex my-1">
                                <div><i class="fa-solid fa-location-dot mr-05"></i></div>
                                <div>
                                    <p>Cyprus Limassol</p>
                                </div>
                            </div>
                            <p class="my-2">As a Senior Product Manager at sheDrive's Neobank PAX, you will identify</p>
                            <div class="d-flex ai-c jc-l card-link">
                                <li>Hybrid</li>
                                <li>Full-time</li>
                                <li>Senior</li>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card col-30">
                        <div class=" p-3 br-40 bg-light">
                            <h1 class="head-d">Senior Product Manager, Neobank PAX team</h1>
                            <div class="d-flex my-1">
                                <div><i class="fa-solid fa-location-dot mr-05"></i></div>
                                <div>
                                    <p>Cyprus Limassol</p>
                                </div>
                            </div>
                            <p class="my-2">As a Senior Product Manager at shedrive's Neobank PAX, you will identify</p>
                            <div class="d-flex ai-c jc-l card-link">
                                <li>Hybrid</li>
                                <li>Full-time</li>
                                <li>Senior</li>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card col-70">
                        <div class=" p-3 br-40 bg-light">
                            <h1 class="head-d">Senior Product Manager, Neobank PAX team</h1>
                            <div class="d-flex my-1">
                                <div><i class="fa-solid fa-location-dot mr-05"></i></div>
                                <div>
                                    <p>Cyprus Limassol</p>
                                </div>
                            </div>
                            <p class="my-2">As a Senior Product Manager at sheDrive's Neobank PAX, you will identify and develop
                                financial products for passengers. Working with a small, dedicated team of Android, iOS, and Backend
                                Engineers, and collaborating with shared product designers and analytics, you will lead the creation
                                of impactful fintech solutions.</p>
                            <div class="d-flex ai-c jc-l card-link">
                                <li>Hybrid</li>
                                <li>Full-time</li>
                                <li>Senior</li>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card col-70">
                        <div class=" p-3 br-40 bg-light">
                            <h1 class="head-d">Senior Product Manager, Neobank PAX team</h1>
                            <div class="d-flex my-1">
                                <div><i class="fa-solid fa-location-dot mr-05"></i></div>
                                <div>
                                    <p>Cyprus Limassol</p>
                                </div>
                            </div>
                            <p class="my-2">As a Senior Product Manager at sheDrive's Neobank PAX, you will identify and develop
                                financial products for passengers. Working with a small, dedicated team of Android, iOS, and Backend
                                Engineers, and collaborating with shared product designers and analytics, you will lead the creation
                                of impactful fintech solutions.</p>
                            <div class="d-flex ai-c jc-l card-link">
                                <li>Hybrid</li>
                                <li>Full-time</li>
                                <li>Senior</li>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card col-30">
                        <div class=" p-3 br-40 bg-light">
                            <h1 class="head-d">Senior Product Manager, Neobank PAX team</h1>
                            <div class="d-flex my-1">
                                <div><i class="fa-solid fa-location-dot mr-05"></i></div>
                                <div>
                                    <p>Cyprus Limassol</p>
                                </div>
                            </div>
                            <p class="my-2">As a Senior Product Manager at sheDrive's Neobank PAX, you will identify</p>
                            <div class="d-flex ai-c jc-l card-link">
                                <li>Hybrid</li>
                                <li>Full-time</li>
                                <li>Senior</li>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="btn-p  ml-3 mt-2"><a href="" class="btn is-pri ">See open roles</a></div>

        </div> --}}
        {{-- <div class="content-box">
            <div class="content-review px-3">
                <div class="head1 mt-60">Join us</div>
                <div class="d-flex jc-f-sb f-wrap bg-10 mt-80">
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="mb-1">
                            <img class="w-100" src="{{ asset('assets/images/career.svg')}}" alt="">
                        </div>
                        <h1 class="head3 text-center">International career</h1>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="mb-1">
                            <img class="w-100" src="{{ asset('assets/images/growth.svg')}}" alt="">
                        </div>
                        <h1 class="head3 text-center">Personal growth programs</h1>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="mb-1">
                            <img class="w-100" src="{{ asset('assets/images/sports.svg')}}" alt="">
                        </div>
                        <h1 class="head3 text-center">Team of soulmates in sports & travel</h1>
                    </div>
                    <div class="card col-25 p-3 br-40 bg-light">
                        <div class="mb-1">
                            <img class="w-100" src="{{ asset('assets/images/career.svg')}}" alt="">
                        </div>
                        <h1 class="head3 text-center">After-hours fun: parties & events</h1>
                    </div>

                </div>

            </div>
        </div> --}}
        {{-- <div class="content-box">
            <div class="content-review px-3">
                <div class="d-flex mt-120 jc-f-sb">
                    <h1 class="head1 col-50">United by an inner drive</h1>
                    <p class="col-45">No single one of us is better than all of us. No matter whether we’re into informal
                        celebrating or corporative volunteering, be it a Fun Day or Monday – together we are stronger & happier in
                        everything we do</p>
                </div>
                <div class="d-flex f-wrap jc-f-sb bg-10 mt-80">
                    <div class="card card-d col-33 br-40 bg-light">
                        <img class="w-100" src="{{ asset('assets/images/horror-story.jpeg')}}" alt="">
                    </div>
                    <div class="card card-d col-33 br-40 bg-light">
                        <img class="w-100" src="{{ asset('assets/images/trees.jpeg')}}" alt="">
                    </div>
                    <div class="card card-d col-33 br-40 bg-light">
                        <img class="w-100" src="{{ asset('assets/images/office-work.jpeg')}}" alt="">
                    </div>
                    <!-- <div class="card card-d col-3 br-40 bg-light">
                          <img class="w-100" src="{{ asset('assets/images/horror-story.jpeg')}}" alt="">
                        </div> -->

                </div>

            </div>
        </div> --}}
    </div>
@endsection
