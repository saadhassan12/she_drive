<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::controller(HomeController::class)->group(function() {

    // Route::get('about-us', 'aboutUsView')->name('about.us');
    Route::get('career', 'careerView')->name('career');
    Route::get('services', 'serviceView')->name('services');
    Route::get('safety', 'safetyView')->name('safety');
    // Route::get('driver', 'driverView')->name('driver');
    Route::get('privacy_policy', 'privacyView')->name('privacy');
    Route::get('terms-condtions', 'termsUses')->name('terms.uses');


    Route::get('city-rides', 'cityView')->name('city.rides');
    Route::get('city-to-city', 'city_to_cityView')->name('city.to.city');
    Route::get('courier', 'courier_delivery')->name('courier');
    Route::get('fright-delivery','fight_delivery')->name('fright.delivery');
    Route::get('booking.bookings','ride_booking')->name('bookings');


    Route::get('our-story','our_story')->name('our.story');
    Route::get('our-impact','impactView')->name('impact');
    Route::get('contacts','contactView')->name('contacts');
    Route::get('blog','blogView')->name('blogs');
    Route::get('newsroom','news_room')->name('newsroom');
    Route::get('shedrive-book','bookView')->name('book');
    Route::get('new-ventures','new_ventures')->name('ventures');
    Route::get('contact-us',function () {
        return view('about.contacts');
    })->name('contact-us');


    Route::get('delete-account',function () {
        return view('partials.delete-account');
    })->name('delete-account');
});


Route::get('/links', function () {
    return view('links');
})->name('links');

Route::get('/generate-qr', function() {
    // URL of the hosted Blade view
    $url = 'https://shedrivesapp.com/links';

    // Generate the QR code with the URL
    $qrCode = QrCode::format('png') // Use 'jpeg' for JPEG
    ->size(300)                  // Size of the QR code
    ->margin(2)                  // Margin of the QR code
    ->generate($url);

    // Return the QR code as a downloadable response
    return Response::make($qrCode)
        ->header('Content-Type', 'image/png') // 'image/jpeg' for JPEG
        ->header('Content-Disposition', 'attachment; filename="shedrives-qrcode.png"'); // Change to 'jpeg' if needed
});

