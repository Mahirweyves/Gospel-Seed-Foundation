<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
            <h1 class="card-header bg-secondary">Sending Email
                <a href="{{ url('home') }}" class="btn btn-danger float-end">Back</a>
            </h1>
            
            <div class="card-body">

        <form method="POST" action="{{ url('sendemail',$data->id) }}">
            @csrf

            <div>
                <x-jet-label for="" value="{{ __('Greeting') }}" />
                <x-jet-input class="block mt-1 w-full text-dark" type="text" name="greeting" placeholder="Enter the greetings" value="" required autofocus autocomplete="greeting" />
            </div>

            <div class="mt-4">
                <x-jet-label for="" value="{{ __('Message') }}" />
                <x-jet-input class="block mt-1 w-full text-dark" type="text" name="body" placeholder="Enter the message" value="" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="" value="{{ __('Action Text') }}" />
                <x-jet-input class="block mt-1 w-full text-dark" type="text" name="actiontext" placeholder="Enter your action text" value="" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="" value="{{ __('Action Url') }}" />
                <x-jet-input class="block mt-1 w-full text-dark" type="text" name="actionurl" placeholder="Enter your action text" value="" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="" value="{{ __('End Part') }}" />
                <x-jet-input class="block mt-1 w-full text-dark" type="text" name="endpart" placeholder="Enter your action text" value="" required />
            </div>

            <div class="flex items-center justify-center mt-4">
                <input type="submit" class="btn btn-gray" style="background-color:#41a39f;">
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