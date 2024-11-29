<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar');
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          
          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
          @endif


          <div class="w-full justify-center px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            <div class="container px-4">
            <div class="card mt-2">
            <h1 class="card-header bg-secondary" style="font-size: 18px;">New user
                <a href="{{ url('allusers') }}" class="btn btn-danger float-end">Back</a>
            </h1>
            
            <div class="card-body">

            <form method="POST" action="{{ url('submituser') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full text-dark" type="text" name="name" placeholder="Enter Name" value="" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full text-dark" type="email" name="email" placeholder="Enter Email" value="" required autofocus autocomplete="email" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="phone_number" value="{{ __('Phone_number') }}" />
                    <x-jet-input id="phone_number" class="block mt-1 w-full text-dark" type="number" name="phone" placeholder="Enter Phone number" value="" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full text-dark" type="password" name="password" placeholder="Enter password" value="" required autocomplete="new-password" />
                </div>


                <div class="flex items-center justify-center mt-4">
                    <input type="submit" class="btn btn-gray px-2 py-2" style="background-color:#41a39f;">
                </div>
                </div>
                </div>
                </div>
            </form>
          </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>