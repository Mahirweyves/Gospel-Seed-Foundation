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

  <style>
    h1 {  
        text-decoration-line: underline; 
    } 
  </style>
</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    @include('user.navbar')
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_2.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Our Work</li>
          </ol>
        </nav>
        <h2 class="font-weight-normal">What We do!</h2>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
  <h1 class="text-center mb-3 font-weight-bold wow zoomIn" style="color:#41a39f;">Projects</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            
            @foreach($data as $pro)
            <div class="col-sm-4 py-2 wow zoomIn">
              
                <div class="card-blog">
                    <iframe width="325" height="183" src="{{ $pro->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                    </iframe> 
                    
                    <div class="body">
                        <h5 class="post-title">{{$pro->title}}</h5>
                        <div class="site-info">
                          <div class="avatar mr-2">
                            <div class="avatar-img">
                              <img src="{{ asset('/images/GSF2.png') }}" alt="">
                            </div>
                            <span>Gospel Seed Foundation</span>
                          </div>
                          <span class="mai-time"></span> {{ $pro->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
              
            </div>
            @endforeach

          </div> <!-- .row -->
        </div>
        <div class="d-flex justify-content-end col-md-6">
          <div class="row pt-4">{{ $data->links() }}</div> 
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  
  @include('user.footer')

  @include('user.script')
  
</body>
</html>