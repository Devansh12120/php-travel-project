<!DOCTYPE html>
<html lang="en">
  <head>  </head>
    <title>Travel2India</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="main.css" />
    <script src="https://kit.fontawesome.com/332a215f17.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
  <script src="js/indiamain.js"></script>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light main-navbar bg m-navbar-light" id="main-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">Travel2India</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#my-nav"
          aria-controls="p-nav"
          aria-expanded="false"
          aria-label="toggle-navigation"
        >
          <span>Menu</span>
        </button>
        <div class="collapse navbar-collapse" id="my-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#places" class="nav-link">Popular Places</a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#history" class="nav-link">Historical Places</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link">Locations</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="signlog.html" class="nav-link">Create account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End of Navbar-->
    <!--Hero-Image-->
    <section class="hero-wrap" style="background-image: url('images/hero.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters main-text align-items-center">
          <div class="col-lg-7 col-md-6 d-flex align-items-end">
            <div class="text">
              <h1 class="mb-4 text-capitalize">
                Find a perfect deal <br />
                for your next Trip
              </h1>
              <p style="font-size: 18px">We are offering an incredible range of Tour Packages including Historical Places and more.
                You can choose your package from our website and enjoy the next Trip of your's.
              </p>
              <a href="#" class="btn btn-hero py-2 px-3"> view all</a>
            </div>
          </div>
        </div>
      </div>
    </section>
         <!--End of Hero-Image-->
    <!--Search Section-->
    <section>
      <div class="section-search">
        <div class="container">
          <div class="row">
            <div class="col-md-12 tab-search">
              <div class="nav nav-pills" id="v-pills-tabs" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill"
                 href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                 Flights</a>
                <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill"
                 href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                 Hotels</a>
                <a class="nav-link p-3" id="v-pills-messages-tab" data-toggle="pill"
                 href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                 Car Rents</a>
              </div>
            </div>
            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" 
              aria-labelledby="v-pills-home-tab">
              <div class="block-17">
                <form class="d-block d-lg-flex" name="flight" onsubmit="return validate()" method="POST" action="flight/index.html">
                  <div class="fields d-block d-lg-flex">
                    <div class="text-field-search one-third">
                      <input type="text" class="form-control" id="source" placeholder="Flying From">
                    </div>
                    <div class="text-field-search one-third">
                      <input type="text" class="form-control" id="destination" placeholder="Flying To">
                    </div>
                    <div class="check-in one-third">
                      <input type="text" class="form-control" id="going" placeholder="Flying from Date">
                    </div>
                    <div class="check-out one-third">
                      <input type="text" class="form-control" id="coming" placeholder="Flying To Date">
                    </div>
                    <div class="select-wrap one-third">
                      <select name="" id="passenger" class="form-control">
                        <option value="0">Guest</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3+</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-search" value="Find Flights">
                </form>
              </div>
              </div>
              <!---->
              <div class="tab-pane fade show" id="v-pills-profile" role="tabpanel" 
              aria-labelledby="v-pills-profile-tab">
              <div class="block-17">
                <form class="d-block d-lg-flex" name="hotel" onsubmit="return checkhotel()" method="POST" action="booking-form/index.html">
                  <div class="fields d-block d-lg-flex">
                    <div class="text-field-search one-third">
                      <input type="text" class="form-control" id="city" placeholder="Search city">
                    </div>
                    <div class="check-in one-third">
                      <input type="text" class="form-control" id="checkindate" placeholder="check-in date">
                    </div>
                    <div class="check-in one-fifth">
                      <input type="text" class="form-control" id="checkintime" placeholder="check-in Time">
                    </div>
                    <div class="check-out one-third">
                      <input type="text" class="form-control" id="checkoutdate" placeholder="check-out date">
                    </div>
                    <div class="check-in one-third">
                      <input type="text" class="form-control"  id="checkouttime" placeholder="check-Out Time">
                    </div>
                    <div class="select-wrap one-third">
                      <select name="" id="guest" class="form-control">
                        <option value="0">Guest</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3+</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-search" value="Find Hotels">
                </form>
              </div>
              </div>
              <!---->
              <div class="tab-pane fade show" id="v-pills-messages" role="tabpanel" 
              aria-labelledby="v-pills-messages-tab">
              <div class="block-17">
                <form class="d-block d-lg-flex" name="carrent" onsubmit="return checkcar()" method="POST" action="cab/index.html">
                  <div class="fields d-block d-lg-flex">
                    <div class="text-field-search one-third">
                      <input type="text" class="form-control" id="city" placeholder="Search city">
                    </div>
                    <div class="check-in one-third">
                      <input type="text" class="form-control" id="startdate" placeholder="start date">
                    </div>
                    <div class="check-out one-third">
                      <input type="text" class="form-control" id="starttime" placeholder="start time">
                    </div>
                    <div class="check-out one-third">
                      <input type="text" class="form-control" id="endtime" placeholder="end time">
                    </div>
                    <div class="select-wrap one-third">
                      <select name="" id="guest" class="form-control">
                        <option value="">Guest</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3+</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-search" value="Find Cars">
                </form>
              </div>
              </div>
              <!---->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End of Search Section-->
    <!--Welcome/About Section-->
    <section class="about section mt-5" id="pl">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center heading-section mb-5">
            <h2 class="text-black mb-2">Welcome to Travel2India</h2>
            <p>We welcome you to our Travel & Tourism Website. We provide all-in-one effort for our customers by providing
              cultural, Natural and Historical Tourism to our customers.</p>
          </div>
        </div>
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                <a href="#" class="effect">
                  <img src="images/culture.jpg" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                <h2 class="text-black">Culture</h2>
                <p class="mb-4">
                  The Indian culture varies like its vast geography.People speak in different languages, dress differently,
                   follow different religions, eat different food but are of the same temperament.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6">
                <a href="#" class="effect">
                  <img src="images/hero.png" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 ml-auto align-self-center order-lg-1" id="">
                <h2 class="text-black">History</h2>
                <p class="mb-4">
                  India is rich in culture,traditions,heritage buildings, temples, forts and palaces. 
        Famous Indian Monuments includes Old Churches of Goa ,The Taj Mahal, Qutab Minar of Delhi, Charminar, 
        Red fort and Jantar mantar, these are also few most visited Heritage Sites in India.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                <a href="#" class="effect">
                  <img src="images/nature.jpg" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                <h2 class="text-black">Nature</h2>
                <p class="mb-4">
                  Nature in India holds a special place in the hearts of its
                   people as a revered symbol of spirituality, culture and life.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
      </div>
    </section>
    <!--End of Welcome/About Section-->
    <!--Popular Places-->
    <section id="places">
      <div class="popular section-bg img-effect mt-5">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="section-title text-center">
                <h1 class="text-white">Popular Places</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--------->
      <div class="all-image">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-md-5">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/gatewayofindia.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Gate Way of India, Mumbai</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-7 col-md-7">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/redfort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Red Fort, Delhi</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/amerfort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Amer Fort, Rajasthan</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/charminar.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Charminar, Hyderabad</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-12 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/agrafort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Agra Fort, Uttar Pradesh</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
          </div>
        </div>
      </div>
    </section>
    <!--End of Popular Places-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--Services Section-->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="section-title">
              <h2>Services We Provide</h2>
              <p>
                We provide a varity of services to our customers that includes Good
                 Food from top restaurants, Beach Resort in Goa, Mountain Climbing
                 in hilly states like Himanchal, Uttarakhand and others and lastly, 
                 Hot Air Balloon to enjoy the most in some of the best region of the country. 
              </p>
            </div>
          </div>
          <!-------->
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-circle purple">
                  <div class="icon">
                    <i class="fas fa-drumstick-bite"></i>
                  </div>
                  <h4 class="text-white">Good Food</h4>
                  <p>Best food from top restaurents in the country</p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-circle pink">
                  <div class="icon">
                    <i class="fas fa-umbrella-beach"></i>
                  </div>
                  <h4 class="text-white">Beach Resort</h4>
                  <p>Top Beach Resorts in Goa with every type facilities</p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-circle yellow">
                  <div class="icon">
                    <i class="fas fa-hiking"></i>
                  </div>
                  <h4 class="text-white">Mountain-Climbing</h4>
                  <p>Mountain Climbing in the hilly states of India like Himanchal Pradesh,
                    Uttarakhand, and many more
                  </p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-circle blue">
                  <div class="icon">
                    <i class="fas fa-mountain"></i>
                  </div>
                  <h4 class="text-white">Hot Air Balloon</h4>
                  <p>Hot Air Balloon at the best view in the country with guidance
                    of best experts
                  </p>
                </div>
              </div>
              <!------->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End of Services Section-->
    <!--Package Section-->
    <section class="package section-padding mt-3" id="blog">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5">
            <div class="section-title text-center">
              <h2 class="py-3">Packages We Offer</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <div class="package-1">
              <img src="images/tp1.jpg" alt="" class="img-fluid">
              <div class="package-text">
                <p>
                  KASHMIR TOUR PACKAGE, 
                  Visit virgin beauty of kashmir.
                  Day excursion to URI, Dodpathri, Yusmarg, Daksum and Lolab.</p>
                <a href="#" class="btn-package p-2">View Details</a>
              </div>
            </div>
          </div>
          <!----->
          <div class="col-md-6 col-xl-6">
            <div class="package-1">
              <img src="images/tp2.jpg" alt="" class="img-fluid">
              <div class="package-text">
                <p>KERALA TOUR PACKAGE, Kickstart your Kerala trip package with a Kochi sightseeing journey.
                  Next, head over to Munnar and visit the local tea and spice plantations.</p>
                <a href="#" class="btn-package p-2">View Details</a>
              </div>
            </div>
          </div>
          <!----->
        </div>
      </div>
    </section>
    <!--End of Package Section-->
    <!--Historical Places Section-->
    <section class="mt-2">
      <div class="historical-places" id="history">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-title text-center mb-70">
                <h3 class="text-uppercase text-center">Historical Places</h3>
                <p class="text-center">India is rich in culture,traditions,heritage buildings, temples, forts and palaces. 
                  Famous Indian Monuments includes Old Churches of Goa ,The Taj Mahal, Qutab Minar of Delhi, Charminar, 
                  Red fort and Jantar mantar, these are also few most visited Heritage Sites in India.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/tajmahal.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Taj Mahal</h3>
                  </a>
                  <p>Agra, Uttar Pradesh</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/goldentemple.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Golden Temple</h3>
                  </a>
                  <p>Amritsar, Punjab</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/indiagate.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>India Gate</h3>
                  </a>
                  <p>New Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/qutubminar.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Qutub Minar</h3>
                  </a>
                  <p>Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/hawamahal.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Hawa Mahal</h3>
                  </a>
                  <p>Jaipur, Rajasthan</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/lotustemple.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Lotus Temple</h3>
                  </a>
                  <p>Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="btn-hist text-center">
                <div><a href="#" class="btn btn-hist">More Places</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End of Historical Places Section-->
        <!--Contact Section-->
    <section class="contact mt-3">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">
            Contact Us
          </h2>
          <p class="text-center">
            You can contact us for any queries regarding any type of 
            doubt you have in your mind. Feel free to contact!
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="icon-box">
                  <i class="fas fa-share"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="#" class="twitter">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="facebook">
                      <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="linkedin">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="icon-box mt-4">
                  <i class="fas fa-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@travel2india.in</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="icon-box mt-4">
                  <i class="fas fa-phone"></i>
                  <h3>24/7 support</h3>
                  <p>+91 6261563099</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
              </div>
              <div><a href="#" class="btn btn-about">Send Message</a></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--End of Contact Section-->
    <!--Instagram Part Section-->
    <section class="instagram mt-5">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md">
            <img src="images/hawamahal.jpg" class="img-fluid" alt="">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </div>
          <!------->
          <div class="col-sm-12 col-md">
            <img src="images/goldentemple.jpg" class="img-fluid" alt="">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </div>
          <!------->
          <div class="col-sm-12 col-md">
            <img src="images/lotustemple.jpg" class="img-fluid" alt="">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </div>
          <!------->
          <div class="col-sm-12 col-md">
            <img src="images/agrafort.jpg" class="img-fluid" alt="">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </div>
          <!------->
          <div class="col-sm-12 col-md">
            <img src="images/tajmahal.jpg" class="img-fluid" alt="">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </div>
          <!------->
        </div>
      </div>
    </section>
    <!------------>
    <footer id="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our News Letter</h4>
              <p>To receive our mail of discounted offers
                 for you at the time of offer you can subscribe to our news letter!</p>
              <form action="">
                <input type="email" name="email">
                <input type="submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-4">
        <div class="copyright">
          &copy;Copyright <strong><span>Travel2India</span></strong>
          .All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">Gajpal InfoTech Pvt. Ltd.</a>
        </div>
      </div>
    </footer>

    <!--End of Instagram Part Section-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
