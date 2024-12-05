<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function cityView()
   {
       return view('mobility.city-rides');
   }
   public function city_to_cityView()
   {
       return view('mobility.city-to-city');
   }
   public function courier_delivery()
   {
       return view('mobility.courier');
   }
   public function fight_delivery()
   {
       return view('mobility.fright-delivery');
   }
   public function ride_booking()
   {
       return view('mobility.booking.bookings');
   }
   public function serviceView()
   {
       return view('partials.services');
   }
   public function safetyView()
   {
       return view('partials.safety');
   }

//    Public function aboutUsView()
//    {
//        return view('partials.about-us');
//    }
   public function careerView()
   {
       return view('partials.career');
   }
   public function our_story()
   {
       return view('about.our-story');
   }
   public function impactView()
   {
       return view('about.our-impact');
   }
   public function contactView()
   {
       return view('about.contacts');
   }
   public function blogView()
   {
       return view('about.blog');
   }
   public function news_room()
   {
       return view('about.newsroom');
   }
   public function bookView()
   {
       return view('about.shedrive-book');
   }
   public function new_ventures()
   {
       return view('about.new-ventures');
   }
   public function privacyView()
   {
       return view('partials.privacy_policy');
   }
   public function termsUses()
   {
       return view('partials.terms-conditions');
   }
//    public function driverView()
//    {
//        return view('about.new-ventures');
//    }

}
