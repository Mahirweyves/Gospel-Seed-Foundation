@include('user.css')
<div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a><span class="mai-call"></span> (770) 837-4712</a>
              <span class="divider">|</span>
              <a href="{{url('/contact')}}"><span class="mai-mail"></span> info@gsfcenter.org</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a target="_blank" href="https://www.facebook.com" rel="http://www.facebook.com/"><span class="mai-logo-facebook-f" style="color:#3b5998;"></span></a>
              <a target="_blank" href="https://www.twitter.com" rel="http://www.twitter.com/"><span class="mai-logo-twitter" style="color:#00acee;"></span></a>
              <a target="_blank" href="https://www.youtube.com/@gospelseedfoundation4122" rel="http://www.youtube.com/"><span class="mai-logo-youtube" style="color:red;"></span></a>
              <a target="_blank" href="https://www.instagram.com" rel="http://www.instagram.com/"><span class="mai-logo-instagram" style="color:#e4405f;"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #434749;">
      <div class="container">
        <!-- <a class="navbar-brand" href="#"><span class="text-primary">stu</span>dio</a> -->
        <div class="flex flex-col sm:justify-center items-center">
          <div>
            <a href="/"><img src="{{ asset('/images/GSF2.png') }}" href="{{url('/')}}" style="height:60px; width:120px;"></a>
          </div>
        </div>

        <!-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/booking')}}">Reserve</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/projects')}}">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>

            @if(Route::has('login'))
            @auth

            <li class="nav-item">
              <a class="nav-link" href="{{url('myreservation')}}">My reservations</a>
            </li>
  
                <x-app-layout>
                </x-app-layout>

            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>
            @endauth
            @endif
            
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
    
    
    @include('user.script')