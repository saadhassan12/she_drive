@extends('layout.master')
@section('title', 'Safety SheDrives')

@section('content')

<div class="main-content-in main-content">
    <div class="content-box">
      <div class="content-safety d-flex">
        <div class="content-safe col-100">
          <div class="ser-img">
            <img style=" filter: contrast(80%);" class="safety-img" src="{{ asset('assets/images/safety_1.jpg') }}" alt="">
          </div>
          <div class="cus-content">
            <!-- <div class="btn-1 mt-2">Services</div> -->
            <h1 class="head4 text-pri mt-3 col-100">Your Safety, Our Priority<br>
            </h1>
            <div class="mt-2">
              <a href="" class="btn is-light mt-1">SheDrive</a>
              <a href="" class="btn is-light mt-1">passengers</a>
              <a href="" class="btn is-light mt-1">Driver</a>
            </div>

          </div>
        </div>
    </div>
    <div class="content-box bg-primary pr my-80">
      <div class="content-download-app card-par px-3 py-8">
        <div class="card w-60">
          <h1 class="head5 text-pri">«SheDrives puts your safety first with advanced features like real-time location
             sharing, emergency police button, and secure trip records. Ride with peace of mind, knowing we're dedicated
              to your protection.
            »</h1>
        </div>
        <div class="card w-30">
          <img src="{{ asset('assets/images/services2.png') }}" class="w-100" alt="">
        </div>

      </div>
    </div>
    <div class="content-box px-3">
      <div class="content-ensure">
        <div class="card-par jc-f-sb">
          <div class="card w-70">
            <h1 class="head text-left"><span class="highlight ">SheDrive's </span>side</h1>
            <h4 class="head5 mt-2 text-left">We aim to  keep you protected on the go. From real-time trip monitoring to
                emergency support features, we ensure your ride is as safe as it is convenient.
            </h4>
          </div>
          <div class="card-img d-flex jc-c w-40">
            <img class="w-70" src="{{ asset('assets/images/passenger-img.jpeg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-review mx-3 px-3">
        <div class="d-flex jc-f-sb f-wrap bg-10 mt-80 card-par">
          <div class="card col-33 p-2 br-40 bg-light mt-3 text-center">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Transparent Process </h2>
            <p>The entire process is designed to be fast and easy to understand, ensuring you can move from
                start to finish without any unnecessary delays or confusion.
            </p>
          </div>
          <div class="card col-33 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-solid fa-user-shield"></i></div>
            <h2 class="my-2">Direct Communication with No Middleman</h2>
            <p>Connect directly with the other party, allowing for straightforward discussions and faster
                decision-making without the need for intermediaries.
            </p>
          </div>
          <div class="card col-33 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Swift and Simple Interaction</h2>
            <p>Engage in fast and hassle-free communication, making it easy to settle details and reach agreements quickly.</p>
          </div>

          {{-- <div class="card col-25 p-2 br-40 ">
            <img src="{{ asset('') }}" alt="">
          </div> --}}
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Effortless and Clear Communication</h2>
            <p>Discuss terms and details with ease, ensuring both parties are on the same page from the start.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-solid fa-user-shield"></i></div>
            <h2 class="my-2">Rate-Based Specialist Selection</h2>
            <p>Choose from a range of specialists by reviewing their ratings, ensuring you pick someone trusted and reliable.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Choose Professionals Based on Ratings and Reviews</h2>
            <p>Make informed decisions by selecting specialists who have been rated and reviewed by others, giving you confidence in your choice.</p>
          </div>

          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Fair Pricing for Mutual Benefit
            </h2>
            <p>Both parties agree on a fair price that benefits everyone, ensuring the transaction is satisfactory for all involved.
            </p>
          </div>
          <div class="card col-33 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Mutually Agreed Pricing Ensures Satisfaction</h2>
            <p>By agreeing on a price that works for both sides, you ensure a win-win situation where everyone is happy with the outcome.
            </p>
          </div>
          <div class="card col-33 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Fair Pay, Quality Work
            </h2>
            <p>Offering fair compensation leads to high-quality work, as specialists are motivated to deliver their best when they feel valued.
            </p>
          </div>
          <div class="card col-33 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Quality Work Driven by Fair Compensation</h2>
            <p>When both sides agree on fair payment, it inspires the specialist to produce quality work, resulting in a successful collaboration.
            </p>
          </div>
          <div class="card col-25 p-2 br-40">
            </div>
            <div class="card col-25 p-2 br-40">
            </div>
        </div>
      </div>
    </div>
    <div class="content-box px-3 mt-80">
      <div class="content-ensure">
        <div class="card-par ai-c">
          <div class="card w-60">
            <h1 class="head text-left"><span class="highlight ">Passengers </span>side</h1>
            <h4 class="head5 mt-2 text-left">Your safety goes beyond just buckling up—at SheDrives, we're committed to ensuring a secure and responsible ride every step of the way.
            </h4>
          </div>
          <div class="card-img w-40 d-flex jc-c">
            <img class="w-70" src="{{ asset('assets/images/passenger-2.jpeg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-review mx-3 px-3">
        <div class="d-flex jc-f-sb f-wrap bg-10 mt-80 card-par">
          <div class="card col-25 p-2 br-40 bg-light">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Your Safety, Our Priority</h2>
            <p>As a SheDrives passenger, enjoy peace of mind with features like live location sharing and a built-in emergency button. Your journey is safe with us.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-solid fa-user-shield"></i></div>
            <h2 class="my-2">Ride with Comfort and Confidence</h2>
            <p>Choose SheDrives and experience rides designed for women and transgender passengers, driven by female and transgender captains who prioritize your comfort and safety.
            </p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Empowering Your Journey</h2>
            <p>With SheDrives, you’re not just getting from point A to B—you’re riding with a service that understands and respects your needs. Your journey, your way.</p>
          </div>
          {{-- <div class="card col-25 p-2 br-40 ">
          </div>
        </div>
        <div class="d-flex jc-f-sb f-wrap bg-10 mt-3 card-par"> --}}
          <div class="card col-25 p-2 br-40 bg-light">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Safe Rides for All</h2>
            <p>SheDrives offers secure, respectful transportation for women and transgender passengers, ensuring every ride is as comfortable as it is safe.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-solid fa-user-shield"></i></div>
            <h2 class="my-2">Tailored for You</h2>
            <p>At SheDrives, we understand your unique needs. Our female and transgender drivers are here to provide a secure and empowering ride every time.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Choose Comfort, Choose SheDrives</h2>
            <p>Select your driver and enjoy a ride designed with your safety and comfort in mind. With SheDrives, you're always in good hands.</p>
          </div>
          {{-- <div class="card col-25 p-2 br-40">

          </div> --}}
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Travel Safely, Travel Smart</h2>
            <p>SheDrives offers secure rides with advanced safety features and personalized driver selection, ensuring your peace of mind on every trip.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Your Journey, Your Choice</h2>
            <p>With SheDrives, you have the power to choose a female or transgender driver, making your ride secure and tailored to your needs.</p>
          </div>
          <div class="card col-25 p-2 br-40">

          </div>
          <div class="card col-25 p-2 br-40">

          </div>
        </div>

      </div>
    </div>
    <div class="content-box mt-80 px-3">
      <div class="content-safety-tips br-40 bg-light px-3 py-3">
        <div class="mb-3 w-100 text-center bt-b">
          <h1 class="head3 my-3">Passengers' safety tips</h1>
        </div>
        <div class="link-list d-flex ac-c jc-c">
          <li><a href="">Before the ride</a></li>
          <li><a href="">During the ride</a></li>
          <li><a href="">After the ride</a></li>
        </div>
        <div class="card d-flex" id="beforeCard">
          <div class="col-55 tips-card text-left">
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-1"></i></div>
              <p class="col-85 "><b>Create Your Profile:
            </b>Set up your account with personal details and payment information for a smooth booking experience.</p>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-2"></i></div>
              <div class="col-85">
                 <p><b>Choose Your Ride:</b> Select the type of vehicle that suits your needs, whether it's a car, auto, or bike.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-3"></i></div>
              <div class="col-85">
                <p><b>Select Your Driver:</b> Enter your destination to get an estimated fare and choose the best route for your trip.
                </p>
              </div>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-4"></i></div>
              <div class="col-85">
                <p><b>Set Your Destination:</b> Changed your mind? Let the driver know and cancel your trip.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-5"></i></div>
                <div class="col-85">
                  <p><b>Check Safety Features:</b> Review safety features such as live tracking, emergency contact setup, and police button activation.
                  </p>
                </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-6"></i></div>
                <div class="col-85">
                  <p><b>Confirm Your Ride:</b> Once you're ready, confirm your booking and track your driver in real-time as they approach your location.
                  </p>
                </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-7"></i></div>
                <div class="col-85">
                  <p><b>License Plate:</b> Check the Vehicle Plate and Profile Photo if before sitting in the vehicle if it doesn't match cancle it.
                  </p>
                </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-8"></i></div>
                <div class="w-85">
                  <p><b>Cancel Ride:</b> If your mind changed inform driver and cancel the ride
                  </p>
                </div>
            </li>
          </div>
        </div>

        <div class="card d-flex" id="duringCard" style="display: none">
            <div class="col-55 tips-card text-left">
              <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-1"></i></div>
                <p class="col-85 "><b>Track Your Journey:
              </b>Monitor your ride in real-time through the app, with live location sharing available for added safety.</p>
              </li>
              <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-2"></i></div>
                <div class="col-85">
                   <p><b>Stay Connected:</b>Use the in-app chat or call feature to communicate directly with your driver if needed.
                   </p>
                </div>
              </li>
              <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-3"></i></div>
                <div class="col-85">
                  <p><b>Safety at Your Fingertips:
                </b>Access emergency features like the police button and share your live location with trusted contacts.
                  </p>
                </div>
              </li>
              <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-4"></i></div>
                <div class="col-85">
                  <p><b>Rate the Ride:
                </b>Enjoy a comfortable ride with your chosen driver, who is dedicated to providing a safe and secure journey.
                </p>
                </div>
              </li>
              <li class="d-flex ai-s">
                  <div class=""><i class="fa-solid fa-5"></i></div>
                  <div class="col-85">
                    <p><b>Monitor Trip Details:</b>Keep an eye on the route, estimated arrival time, and any updates regarding your ride.
                    </p>
                  </div>
              </li>
              <li class="d-flex ai-s">
                  <div class=""><i class="fa-solid fa-6"></i></div>
                  <div class="col-85">
                    <p><b>Confirm Your Ride:</b> Once you're ready, confirm your booking and track your driver in real-time as they approach your location.
                    </p>
                  </div>
              </li>
              <li class="d-flex ai-s">
                  <div class=""><i class="fa-solid fa-7"></i></div>
                  <div class="col-85">
                    <p><b>License Plate:</b> Check the Vehicle Plate and Profile Photo if before sitting in the vehicle if it doesn't match cancle it.
                    </p>
                  </div>
              </li>
              <li class="d-flex ai-s">
                  <div class=""><i class="fa-solid fa-8"></i></div>
                  <div class="w-85">
                    <p><b>Cancel Ride:</b> If your mind changed inform driver and cancel the ride
                    </p>
                  </div>
              </li>
            </div>
        </div>

        <div class="card d-flex" id="afterCard" style="display: none">
            <div class="col-55 tips-card text-left">
              <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-1"></i></div>
                <p class="col-85 "><b>Rate and Review:
              </b>Provide feedback on your ride and rate your driver to help others make informed decisions.</p>
              </li>
              <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-2"></i></div>
                <div class="col-85">
                   <p><b>Save Your Favorite Drivers:</b>If you had a great experience, save your driver as a favorite for future rides.
                   </p>
                </div>
              </li>
              <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-3"></i></div>
                <div class="col-85">
                  <p><b>Resolve Issues:
                </b>If you encounter any issues, use the app's support feature to report problems or request assistance.
                  </p>
                </div>
              </li>
              <li class="d-flex ai-s">
                <div class=""><i class="fa-solid fa-4"></i></div>
                <div class="col-85">
                  <p><b>Set Your Destination:</b> Changed your mind? Let the driver know and cancel your trip.</p>
                </div>
              </li>
              <li class="d-flex ai-s">
                  <div class=""><i class="fa-solid fa-5"></i></div>
                  <div class="col-85">
                    <p><b>Check Payment Details:</b>Review your fare, check for any additional charges, and complete payment if not done automatically.
                    </p>
                  </div>
              </li>
              <li class="d-flex ai-s">
                  <div class=""><i class="fa-solid fa-6"></i></div>
                  <div class="col-85">
                    <p><b>Plan Your Next Ride:
                    </b>Ready for another journey? Plan and book your next ride with ease, knowing your preferences are saved.
                    </p>
                  </div>
              </li>
            </div>
        </div>
      </div>

      </div>
    </div>
    <div class="content-box px-3 mt-80">
      <div class="content-Driver card-par">
        <div class="card d-flex ai-c jc-f-sb">
          <div class="col-45">
            <h1 class="head text-left"><span class="highlight ">Driver's </span>side</h1>
            <h4 class="head5 mt-2 text-left">You’re empowering yourself and others.</h4>
          </div>
          <div class="card col-45 d-flex jc-c">
            <img class="w-70" src="{{ asset('assets/images/passenger-2.jpeg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="content-box">
      <div class="content-review mx-3 px-3">
        <div class="d-flex jc-f-sb f-wrap bg-10 mt-80 card-par">
          <div class="card col-25 p-2 br-40 bg-light">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">The process is swift and straightforward</h2>
            <p>The entire process is designed to be quick and simple, allowing users to move through each step efficiently and without confusion.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-solid fa-user-shield"></i></div>
            <h2 class="my-2">Individuals connect directly without intermediaries, allowing for open discussion</h2>
            <p>People can communicate directly with each other, eliminating the need for a middleman, which makes it easier to discuss and finalize details.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">All professionals are reviewed and rated</h2>
            <p>Each specialist is rated and reviewed by past clients, providing transparency and helping new users make informed decisions.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-regular fa-thumbs-up"></i></div>
            <h2 class="my-2">Users can select any specialist based on their ratings and feedback</h2>
            <p>People have the freedom to choose the best specialist for their needs by considering their rating points and customer reviews.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"><i class="icon b-br-2 fa-solid fa-user-shield"></i></div>
            <h2 class="my-2">Pricing is transparent and fair</h2>
            <p>Prices are clearly stated and agreed upon by both parties, ensuring that everyone knows what to expect and feels the pricing is equitable.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Both parties agree on a mutually beneficial price</h2>
            <p>The price is set through a fair negotiation process, where both the client and the specialist come to an agreement that benefits both sides.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Fair compensation motivates high-quality work</h2>
            <p>When specialists are paid fairly, they are more likely to deliver top-quality work, ensuring that clients get the best results.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">The process is efficient and easy to follow</h2>
            <p>Each step is designed to be logical and user-friendly, making it easy for users to navigate from start to finish without any hassle.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Direct communication without middlemen speeds up the process</h2>
            <p>By allowing users to interact directly, the process is accelerated, leading to quicker agreements and a more efficient workflow.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Professionals are evaluated based on ratings and reviews</h2>
            <p>Specialists are assessed by their previous work, which is reflected in their ratings and reviews, offering new clients a clear picture of their capabilities.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Customers can choose specialists based on their ratings and testimonials</h2>
            <p>Users can confidently select specialists by reviewing their ratings and the feedback left by previous clients, ensuring they pick the best fit for their needs.
            </p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Pricing is equitable and designed for mutual benefit</h2>
            <p>The pricing structure is fair and designed to be beneficial for both the client and the specialist, fostering a positive working relationship.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">A fair agreement ensures satisfaction for both sides</h2>
            <p>By agreeing on a fair price, both the client and the specialist can be confident that they are entering into a deal that is beneficial for everyone involved.</p>
          </div>
          <div class="card col-25 p-2 br-40 bg-light mt-3">
            <div class="w-100 d-flex jc-c bt-b"> <i class="icon b-br-2 fa-regular fa-face-smile"></i></div>
            <h2 class="my-2">Quality work is driven by fair and honest compensation</h2>
            <p>Fair pay encourages specialists to deliver their best work, ensuring that the client receives high-quality results and value for their money.
            </p>
          </div>
          <div class="card col-25 p-2 br-40  mt-3">
          </div>
          <div class="card col-25 p-2 br-40  mt-3">
          </div>
        </div>

      </div>
    </div>
    <div class="content-box mt-80 px-3">
      <div class="content-safety-tips br-40 bg-light px-3 py-3">
        <div class="mb-3 w-100 text-center bt-b">
          <h1 class="head3 my-3">Drivers' safety tips</h1>
        </div>
        <div class="link-list d-flex ac-c jc-c">
          <li><a href="">Before the ride</a></li>
          <li><a href="">During the ride</a></li>
          <li><a href="">After the ride</a></li>
        </div>
        <div class="card d-flex" id="beforCard-d">
          <div class="col-55 tips-card text-left">
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-1"></i></div>
              <p class="col-85 "><b>Set Up Your Profile:</b>
                Complete your driver profile with personal details, vehicle information, and documents for verification.</p>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-2"></i></div>
              <div class="col-85">
                 <p ><b>Review Ride Requests:
                </b>Check and accept ride requests that fit your schedule and location preferences.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-3"></i></div>
              <div class="col-85">
                <p><b>Prepare Your Vehicle:</b>Ensure your vehicle is clean, well-maintained, and ready for the ride.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
              <div class=""> <i class="fa-solid fa-4"></i></div>
              <div class="col-85">
                <p class=""><b>Confirm Safety Features:</b>Verify that safety features like the emergency button and live location tracking are functioning properly.
                </p>
              </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""> <i class="fa-solid fa-5"></i></div>
                <div class="col-85">
                  <p class=""><b>Understand Pricing and Policies:</b>Familiarize yourself with SheDrives’ pricing structure, cancellation policies, and other operational guidelines.
                  </p>
                </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""> <i class="fa-solid fa-6"></i></div>
                <div class="col-85">
                  <p class=""><b>Understand Pricing and Policies:</b>Familiarize yourself with SheDrives’ pricing structure, cancellation policies, and other operational guidelines.
                  </p>
                </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""> <i class="fa-solid fa-7"></i></div>
                <div class="col-85">
                  <p class=""><b>Fatigue:</b>Please don't take orders if you are tired or unwell
                  </p>
                </div>
            </li>
          </div>
        </div>

        <div class="card d-flex" id="duringCard-d" style="display: none">
          <div class="col-55 tips-card text-left">
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-1"></i></div>
              <p class="col-85 "><b>Navigate Efficiently:</b>
                Use the app’s navigation system to follow the best route and ensure timely arrivals.</p>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-2"></i></div>
              <div class="col-85">
                 <p ><b>Communicate with Passengers:
                </b>Maintain clear and courteous communication with passengers regarding any ride details or changes.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-3"></i></div>
              <div class="col-85">
                <p><b>Monitor Safety Features:</b>Keep an eye on safety features such as the emergency button and ensure your location is being shared correctly.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
              <div class=""> <i class="fa-solid fa-4"></i></div>
              <div class="col-85">
                <p class=""><b>Provide a Comfortable Experience:</b>Ensure a smooth, safe, and comfortable ride for the passenger, addressing any needs or preferences they may have.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""> <i class="fa-solid fa-5"></i></div>
                <div class="col-85">
                  <p class=""><b>Track Your Performance:</b>Pay attention to in-ride ratings and feedback to ensure a high-quality service.
                  </p>
                </div>
            </li>
          </div>
        </div>

        <div class="card d-flex" id="afterCard-d" style="display: none">
          <div class="col-55 tips-card text-left">
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-1"></i></div>
              <p class="col-85 "><b>Complete the Trip:</b>End the ride properly in the app and review the final fare and trip details.</p>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-2"></i></div>
              <div class="col-85">
                 <p ><b>Rate the Passenger:</b>Provide feedback and rate the passenger based on your experience.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
              <div class=""><i class="fa-solid fa-3"></i></div>
              <div class="col-85">
                <p><b>Review Earnings:</b>Check your earnings and any additional bonuses or incentives earned from the ride.</p>
              </div>
            </li>
            <li class="d-flex ai-s">
              <div class=""> <i class="fa-solid fa-4"></i></div>
              <div class="col-85">
                <p class=""><b>Address Any Issues:
                </b>Report any issues or incidents that occurred during the ride through the app’s support feature.
              </p>
              </div>
            </li>
            <li class="d-flex ai-s">
                <div class=""> <i class="fa-solid fa-5"></i></div>
                <div class="col-85">
                  <p class=""><b>Plan Your Next Ride:</b>Prepare for upcoming ride requests and ensure your vehicle and profile are ready for future trips.</p>
                </div>
            </li>
          </div>
        </div>


      </div>
    </div>
    <div class="content-box my-80 px-3">
      <div class="content-download-app bg-primary br-40 px-3">
        <div class="d-flex jc-f-sb card-par">
          <div class="col-50 card py-8">
            <a href="">
              <h1 class="head text-light">First step for <span class="text-pri">Safar rides</span></h1>
              <div class="mt-3"><a href="" class="btn-2">Download the App</a></div>
            </a>
          </div>
          <div class="col-40 card br-10" style="background-image: url('assets/images/mobile-app2.png'); background-repeat:no-repeat;">
            <a href="">
                {{-- <img src="{{ asset('assets/images/mobile-app.png') }}" alt=""> --}}
            </a>
          </div>

        </div>

      </div>
    </div>
        {{-- <div class="content-box px-3 mt-60">
        <div class="content-ensure">
            <div class="card d-flex ai-c">
            <div class="">
                <h1 class="head"><span class="highlight ">From pact </span>to Act</h1>
                <h4 class="head5 mt-2">sheDrive safety initiatives around the globe
                </h4>
            </div>
            </div>
        </div>
        </div>--}}
        {{-- <div class="content-box">
            <div class="content-initiatives px-3">
                <div class="d-flex jc-f-sb f-wrap bg-10 mt-60 card-par">
                <div class="card col-33 br-40 bg-light">
                    <div class="image-eg"></div>
                    <div class="p-3">
                    <h2 class="my-2">Standing for safer streets in Egypt</h2>
                    <p>sheDrive illuminates the streets of Cairo and Alexandria with special billboards, to help people feel safe in their neighborhoods at night. Especially while waiting for their cars</p>
                    </div>
                </div>
                <div class="card col-33 br-40 bg-light">
                    <div class="image-mex"></div>
                    <div class="p-3">
                    <h2 class="my-2">Women safety in Mexico is a matter of training</h2>
                    <p>3 out of 4 women have experienced some type of violence or harassment in public transport. sheDrive came up with an educational program for drivers</p>
                    </div>
                </div>
                <div class="card col-33 br-40 bg-light">
                    <div class="image-pk"></div>
                    <div class="p-3">
                    <h2 class="my-2">Pitstop for drivers in Pakistan</h2>
                    <p >People agree on a win-win price for both sides. Fair pay always inspires quality work</p>
                    </div>
                </div>
                </div>
            </div>
        </div> --}}
  </div>

@endsection
