<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/GSF2.png" alt="logo" /></a>
          <a href="/"><img src="{{ asset('/images/GSF2.png') }}" href="{{url('/')}}" style="height:60px; width:120px;"></a>
        </div>
        <ul class="nav">

          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/')}}">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-clock"></i>
              </span>
              <span class="menu-title">Reservations</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('adduser')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-plus"></i>
              </span>
              <span class="menu-title">Add User</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('message')}}">
              <span class="menu-icon">
                <i class="mdi mdi-cellphone-android"></i>
              </span>
              <span class="menu-title">Contact</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('All_projects')}}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-marked"></i>
              </span>
              <span class="menu-title">Projects</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('allusers')}}">
              <span class="menu-icon">
                <i class="mdi mdi-human-male-female"></i>
              </span>
              <span class="menu-title">All Users</span>
            </a>
          </li>
          <!--<#x-app-layout>
                
          <#/x-app-layout>-->
          
          <div class="nav-item menu-items">
          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <x-jet-dropdown-link class="nav-link" style="color:#41a39f;" href="{{ route('logout') }}"
                @click.prevent="$root.submit();">
                  <span class="menu-icon">
                    <i class="mdi mdi-logout"></i>
                  </span>
                {{ __('Log Out') }}
            </x-jet-dropdown-link>
          </form>
          </div>
        </ul>
      </nav>