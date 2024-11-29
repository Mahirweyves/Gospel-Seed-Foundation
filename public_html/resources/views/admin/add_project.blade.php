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

            <div class="w-full justify-center px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
            </div>
            @endif
                <div class="container">
                    <div class="card mt-5">
                        <h1 class="card-header bg-secondary" style="font-size: 18px;">New Project
                            <a href="{{ url('allusers') }}" class="btn btn-danger float-end">Back</a>
                        </h1>
                        
                        <div class="card-body">

                            <form method="POST" action="{{ url('upload_project') }}">
                                @csrf

                                <div>
                                    <x-jet-label class="text-white" for="title" value="{{ __('Title:') }}" />
                                    <x-jet-input id="title" class="block mt-1 w-full text-dark" type="text" name="title" placeholder="Enter project title" value="" required autofocus autocomplete="name" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label class="text-white" for="link" value="{{ __('Add Link:') }}" />
                                    <p>Enter Youtube video URL: </p>
                                    <x-jet-input id="link" class="block mt-1 w-full text-dark" type="text" name="youtube_link" placeholder="Enter Youtube video URL" value="" required autofocus autocomplete="email" />
                                </div>
                                
                                    <!-- <!DOCTYPE html>
                                    <html>
                                        <body>
                                            <p>Enter Youtube video URL: </p>

                                            <input class="text-dark" name="youtube_link" type="text" id="videoUrl" placeholder="Youtube video URL" style="width: 400px;">
                                            <br>
                                            <button onclick="showVideo()">Check</button>
                                            <br>
                                            <iframe id="myFrame" width="420" height="345">fgh
                                            </iframe>

                                            <script>
                                                function showVideo() {
                                                    var videoUrl = document.getElementById("videoUrl").value
                                                    document.getElementById("myFrame").src = videoUrl
                                                }
                                            </script>
                                        </body>
                                    </html> -->

                                <div class="flex items-center justify-center mt-4">
                                    <input type="submit" class="btn btn-gray px-2 py-2" style="background-color:#41a39f;">
                                </div>
                            </form>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>