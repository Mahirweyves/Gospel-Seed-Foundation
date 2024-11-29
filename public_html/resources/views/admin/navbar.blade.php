<div class="container-fluid page-body-wrapper">
<nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <!-- <a class="navbar-brand brand-logo-mini" href="/"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a> -->
            <!-- <a href="/"><img src="{{ asset('/images/GSF2.png') }}" href="{{url('/')}}" style="height:60px; width:120px;"></a> -->
          </div>


          <!-- <div class="flex flex-col sm:justify-center items-center">
            <div>
              <a href="/"><img src="{{ asset('/images/GSF2.png') }}" href="/" alt="" style="height:60px; width:120px;"></a>
            </div>
          </div> -->

          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <!-- <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul> -->
      
            <ul class="navbar-nav navbar-nav-right">
            <a class="nav-link text-white btn btn-gray px-2 create-new-button" style="background-color:#41a39f" href="{{url('add_project')}}">Add New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-d">

              <x-app-layout>
                
              </x-app-layout>

            </ul>
          </div>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
        </nav>