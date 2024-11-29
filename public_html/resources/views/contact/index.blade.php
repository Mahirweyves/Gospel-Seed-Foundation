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
    .map{
      width: 100%;
      height: 400px;
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
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
</body>
</html>

<!DOCTYPE html>
<html>
<body>
    <div class="">
        <div class="row mt-5 mb-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white text-center wow fadeInUp">Get in Touch</h3>
                    </div>
                    <div class="card-body">
  
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                     
                        <form method="POST" action="{{ route('contact.store') }}" id="contactUSForm">
                            {{ csrf_field() }}
                              
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group wow fadeInLeft">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group wow fadeInRight">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group wow fadeInUp">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group wow fadeInLeft">
                                        <strong>Subject:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group wow fadeInRight">
                                        <strong>Message:</strong>
                                        <textarea type="text" name="message" rows="3" class="form-control" value="{{ old('message') }}"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                     
                            <div class="form-group text-center">
                              <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
                            </div>
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
                                  
                            </head>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<div id="map" style="width: 100%; height: 400px;"></div>
<script>

	var map = L.map('map').setView([38.22428298286595, -85.6093134266277], 15);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
         
    var marker = new L.Marker([38.22428298286595, -85.6093134266277]);
    marker.addTo(map);

    marker.bindPopup('GSFC').openPopup();
         marker.addTo(map);

         popupContent = document.createElement("img");
  popupContent.onload = function () {
    marker.openPopup();
  };
  popupContent.src = "../assets/img/bg_image_2.png";
//   marker.bindPopup(popupContent, {
//     maxWidth: "auto"
//   });
</script>


@include('user.footer')

@include('user.script')
</body>
</html>
