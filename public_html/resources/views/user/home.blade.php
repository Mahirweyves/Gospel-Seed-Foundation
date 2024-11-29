<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  @include('user.css')
</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    @include('user.navbar')
  </header>

  @if(session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}
  </div>
  @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_2.png);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="lead">"Sing to the Lord a new song; sing to the Lord, all the earth. <br> Sing to the Lord, 
          praise his name proclaim his salvation day after day. <br> Declare his glory among the nations, <br> 
          his marvelous deeds among all peoples."
        </span>
        <h1 class="display-4 mt-4">PSALM 96:1-3</h1>
        <a href="{{url('/about')}}" class="btn btn-primary text-white">Read More </a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-mic"></span>
              </div>
              <p><span>We host</span> -Meetings and fellowships</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-home-outline"></span>
              </div>
              <p><span>We host </span>-Seminars and conferences</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-camera-outline"></span>
              </div>
              <p><span>youtube content &</span>song production</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInLeft">
            <h1>Welcome to Gospel Seed Foundation Center</h1>
              <div class="hero-section mt-4 mb-4">
                <iframe width="800" height="450" src="https://www.youtube.com/embed/iiRVAmregWc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            <p class="text-grey mb-4">GSFC was established to reduce barriers faced by Gosper Singer-Songwriters, Through increased access to modern music
                and video production equipment and skilled technicians.</p>
            <p class="text-grey mb-4">We aim to become a training hub for musicians, Sound & Lighting Techs, and Audio & Video producers. Our goals is to
                operate a mobile Gospel music studio once every few years, To reach Singersongwriter around the world.!</p>
            <a href="{{url('/about')}}" class="btn btn-primary">Read More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-salle.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  

  <!-- @include('user.doctor') -->

  <!-- client section start -->
      <!-- <div class="client_section layout_padding">
         <div class="container">
            <h1 class="what_text">What Is Says Our Clients</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_section_2 layout_padding">
                        <div class="row">
                           <div class="col-lg-4 col-sm-12">
                              <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                              <div class="image_16"><img src="images/img-16.png"></div>
                              <div class="adipiscing_text">Adipiscing<br>Magna</div>
                           </div>
                           <div class="col-lg-4 col-sm-12">
                              <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                              <div class="image_16"><img src="images/img-17.png"></div>
                              <div class="adipiscing_text">Adipiscing<br>Magna</div>
                           </div>
                           <div class="col-lg-4 col-sm-12">
                              <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                              <div class="image_16"><img src="images/img-18.png"></div>
                              <div class="adipiscing_text">Adipiscing<br>Magna</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2 layout_padding">
                        <div class="row">
                           <div class="col-lg-4 col-sm-12">
                              <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                              <div class="image_16"><img src="images/img-16.png"></div>
                              <div class="adipiscing_text">Adipiscing<br>Magna</div>
                           </div>
                           <div class="col-lg-4 col-sm-12">
                              <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                              <div class="image_16"><img src="images/img-17.png"></div>
                              <div class="adipiscing_text">Adipiscing<br>Magna</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- client section end -->

    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h5>
                <h1 class="display-5 mb-0">What People Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->
  @include('user.latest_project')

   @include('user.reservation')

  <!-- <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> .banner-home -->

  @include('user.footer')

  @include('user.script')
  
</body>
</html>