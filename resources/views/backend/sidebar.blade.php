 <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ asset('backend/assets/img/logo.jpg') }}" class="header-logo" /> <span
                class="logo-name">Damura</span>
            </a>
          </div>

          <ul class="sidebar-menu">
            @role('admin')
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Request::is('Dashboard') ? 'active' : '' }}">
              <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            @endrole


            <li class="dropdown  {{ Request::segment(1) === 'students' || Request::segment(1) === 'student' ? 'active' : '' }}" >
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="users"></i><span>Students</span></a>
              <ul class="dropdown-menu">
                <li class="{{ Request::is('students*') ? 'active' : '' }}"><a class="nav-link" href="{{route('students.index')}}">Student List</a></li>

                  <li class="{{ Request::is('students/create') ? 'active' : '' }}"><a href="{{route('students.create')}}" class="nav-link">New Student </a></li>
            
                <li class="{{ Request::is('student/oldstudent') ? 'active' : '' }}"><a class="nav-link" href="{{route('student.oldstudent')}}">Old Student</a></li>
                
                
              </ul>
            </li>
            

           
           {{--  <li class="dropdown ">
=======
          <!--  
            <li class="dropdown ">
>>>>>>> 9b483d8d6ca9528f5837fb2ff39eb224986bddf7
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user-check"></i><span>Accounts   </span></a>
              <ul class="dropdown-menu">
                   <li><a class="nav-link" href="{{route('studnet_account_lists')}}">Accounts List</a></li>

                
              </ul>
<<<<<<< HEAD
            </li> --}}

            @role('admin')


            <li class="dropdown {{ Request::is('staffs*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user-check"></i><span>Staff   </span></a>

              <ul class="dropdown-menu">
                   <li class="{{ Request::is('staffs') ? 'active' : '' }}"><a class="nav-link" href="{{route('staffs.index')}}">New Staff </a></li>
                   
              </ul>
            </li>
            @endrole


            <li class="dropdown {{ Request::is('timetables*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown "><i
                  data-feather="calendar"></i><span>Class Timetables</span></a>
              <ul class="dropdown-menu">
                <li class="{{ Request::is('timetables*') ? 'active' : '' }}"><a class="nav-link " href="{{route('timetables.index')}}">New Class</a></li>
                
              </ul>
            </li>
            @role('admin')
            <li class="menu-header">Website Elements</li>


               <li class="dropdown {{ Request::is('slider*') || Request::is('book*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i><span>Home   </span></a>
              <ul class="dropdown-menu">
                   <li class="{{ Request::is('slider*') ? 'active' : '' }}"><a class="nav-link" href="{{route('slider.index')}}">Slider</a></li>
                   <li class="{{ Request::is('book*') ? 'active' : '' }}"><a class="nav-link " href="{{route('book.index')}}">Book</a></li>

                
              </ul>
            </li>

            

            <li class="dropdown {{ Request::is('backendabout*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>About Us </span></a>
              <ul class="dropdown-menu">
                   <li class="{{ Request::is('backendabout*') ? 'active' : '' }}"><a class="nav-link" href="{{route('backendabout.index')}}">About</a></li>
                  
                
              </ul>
            </li>



                <li class="dropdown {{ Request::is('backendgallery*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="image"></i><span>Gallery</span></a>
              <ul class="dropdown-menu">
                   <li class="{{ Request::is('backendgallery*') ? 'active' : '' }}"><a class="nav-link" href="{{route('backendgallery.index')}}">Photo</a></li>
                  
                
              </ul>
            </li>


          
            
                 <li class="dropdown {{ Request::is('backendvideo*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="video"></i><span>Video</span></a>
              <ul class="dropdown-menu">
                   <li class="{{ Request::is('backendvideo*') ? 'active' : '' }}"><a class="nav-link" href="{{route('backendvideo.index')}}">Video</a></li>
                  
              </ul>
            </li>






                <li class="dropdown {{ Request::is('backendsubject*') || Request::is('backendreview*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="message-square"></i><span>Review</span></a>
              <ul class="dropdown-menu">
                   <li class="{{ Request::is('backendsubject*') ? 'active' : '' }}"><a class="nav-link" href="{{route('backendsubject.index')}}">Subject</a></li>
                  
                <li class="{{ Request::is('backendreview*') ? 'active' : '' }}"><a class="nav-link" href="{{route('backendreview.index')}}">Review Detail</a></li>
              </ul>
            </li>

       


            <li class="dropdown {{ Request::is('backendcontact*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Contact</span></a>
              <ul class="dropdown-menu">
                   <li class="{{ Request::is('backendcontact') ? 'active' : '' }}"><a class="nav-link" href="{{route('backendcontact.index')}}">Subject</a></li>
                  
               
              </ul>
            </li>

            <li class="menu-header">Other Elements</li>
             <li class="dropdown {{ Request::is('backendjournalvideo*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="plus-square"></i><span>Journal & Video</span></a>
              <ul class="dropdown-menu">
                   <li class="{{ Request::is('backendjournalvideo*') ? 'active' : '' }}"><a class="nav-link" href="{{route('backendjournalvideo.index')}}">Add Journal & Video</a></li>
                  
               
              </ul>
            </li>
               
            <br>
          </ul>
          @endrole
        </aside>