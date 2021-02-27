  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
          
            </li>
          </ul>
        </div>

        <ul class="navbar-nav navbar-right">
         
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
              @if(Auth::user()->staff)
                <img alt="image" src="{{ asset(Auth::user()->staff->photo) }}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
              @else
                <img alt="image" src="{{ asset('profile/profile_1.png') }}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
              @endif
              
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello {{Auth::user()->name}}</div>
              @role('staff')
              <a href="{{route('profile')}}" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Profile
              </a> 
              @else('admin')
              <a href="javascript:void(0)" class="dropdown-item has-icon btn_change_password"> <i class="far
                    fa-lock"></i> Change Password
              </a> 
              @endrole
              <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 <i class="fas fa-sign-out-alt"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            
             
            </div>
          </li>
        </ul>
      </nav>