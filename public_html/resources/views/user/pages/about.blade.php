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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_2.png);">
    <div class="banner-section display-2">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item font-weight-normal"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item font-weight-normal active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-mic"></span>
            </div>
            <p><span>We host</span> -Meetings and fellowships</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-home-outline"></span>
            </div>
            <p><span>We host </span>-Seminars and conferences</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-camera-outline"></span>
            </div>
            <p><span>youtube content &</span>song production</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 font-weight-bold wow zoomIn" style="color:#41a39f;">Who we are!</h1>
      <div class="row justify-content-center">
        <div class="col-md-8 wow fadeInDown">
          <h3 class="text-center mb-3" style="color:#41a39f;">THE GOSPEL SEED FOUNDATION CENTER (GSFC)</h3>
          <div class="text-lg mx-3">
            <p>GSFC was established to reduce barriers faced by Gosper Singer-Songwriters, Through increased access to modern music
                and video production equipment and skilled technicians.</p>
            <p>We aim to become a training hub for musicians, Sound & Lighting Techs, and Audio & Video producers. Our goals is to
                operate a mobile Gospel music studio once every few years, To reach Singersongwriter around the world.!</p>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInLeft" data-wow-delay="400ms">
          <h3 class="mx-3" style="color:#41a39f;">OBJECTIVES & GOALS</h3>
          <p class="text-grey mb-4 mx-3">
            <ol>
              <li>PRODUCTION OF 100 GOSPEL SONGS PER YEAR</li>
              <li>HOSTING AT LEAST TWO SEMINARS EVERY QUARTER</li>
              <li>ORGANIZING TWO ANNUAL CONFERENCE</li>
              <li>BI-ANNUAL MUSIC PRODUCTION TOURS</li>
            </ol>
          </p>
        </div>
      </div>
      <div class="row align-items-center mt-5">
        <div class="col-lg-6 wow fadeInDown" data-wow-delay="400ms">
          <h3 class="mx-3" style="color:#41a39f;">OUR VISION</h3>
          <p class="text-grey mb-4 mx-3">Through music, media, and dialogue, GSF seeks to strengthen and unite the body of Christ, and
            empower Kingdom-minded youth, by creating a platform for Christian fellowship and the sharing of the Good News of Jesus Christ, in the
            state of Kentucky and beyond.
          </p>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-delay="400ms">
        <h3 class="mx-3" style="color:#41a39f;">OUR MISSION</h3>
          <p class="text-grey mb-4 mx-3">To increase access to music and video production resources, offer empowerment and training opportunities to support talent
            development, and host conferences, seminars, discussions, and other fellowship events for members of different age groups,
            social and cultural backgrounds, and church
            communities
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Team Start -->
  <div class="container">
    <div class="container-fluid">
      <div class="section-title position-relative text-center mx-auto mb-2 pb-1 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <h1 class="mb-3" style="color:#41a39f;">Our Team Members</h1>
          <!-- <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos
            ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p> -->
      </div>
      <div class="row g-4">
        <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
            <div class="text-center p-4">
              <img class="img-fluid rounded-circle mb-4" src="{{ asset('/images/GSF2.png') }}" alt="">
              <h5 class="fw-bold mb-1">Philemon Rudaga</h5>
              <small>Executive Director</small>
            </div>
              <div class="d-flex justify-content-center p-1" style="background-color:#41a39f;">
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
            <div class="text-center p-4">
              <img class="img-fluid rounded-circle mb-4" src="{{ asset('/images/GSF2.png') }}" alt="">
                <h5 class="fw-bold mb-1">Graham Smith</h5>
                <small>Director</small>
              </div>
              <div class="d-flex justify-content-center p-1" style="background-color:#41a39f;">
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
              <div class="text-center p-4">
                <img class="img-fluid rounded-circle mb-4" src="{{ asset('/images/GSF2.png') }}" alt="">
                <h5 class="fw-bold mb-1">Prosper Gitambwa</h5>
                  <small>Treasurer</small>
              </div>
              <div class="d-flex justify-content-center p-1" style="background-color:#41a39f;">
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
              <div class="text-center p-4">
                <img class="img-fluid rounded-circle mb-4" src="{{ asset('/images/GSF2.png') }}" alt="">
                <h5 class="fw-bold mb-1">Placide Mani</h5>
                <small>Secretary</small>
              </div>
              <div class="d-flex justify-content-center p-1" style="background-color:#41a39f;">
                  <!-- <a class="btn btn-square text-primary bg-white m-1" href=""><i class="mai-logo-facebook-f"></i></a>
                  <a class="btn btn-square text-primary bg-white m-1" href=""><i class="mai-logo-twitter"></i></a>
                  <a class="btn btn-square text-primary bg-white m-1" href=""><i class="mai-logo-instagram"></i></a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
              <div class="text-center p-4">
                <img class="img-fluid rounded-circle mb-4" src="{{ asset('/images/GSF2.png') }}" alt="">
                <h5 class="fw-bold mb-1">Bienvenu Mugisha</h5>
                  <small>Management Officer</small>
              </div>
              <div class="d-flex justify-content-center p-1" style="background-color:#41a39f;">
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
              <div class="text-center p-4">
                <img class="img-fluid rounded-circle mb-4" src="{{ asset('/images/GSF2.png') }}" alt="">
                <h5 class="fw-bold mb-1">Bienvenu Mugisha</h5>
                  <small>Management Officer</small>
              </div>
              <div class="d-flex justify-content-center p-1" style="background-color:#41a39f;">
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
        <!-- Team End -->

  <!-- <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_1.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Stein Albert</p>
                  <span class="text-sm text-grey">Cardiology</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_2.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div> -->

  @include('user.footer')

  @include('user.script')
  
</body>
</html>




<!-- 
head tag  <div class="container-xxl py-5">
    <div class="container-fluid px-lg-5"> -->
