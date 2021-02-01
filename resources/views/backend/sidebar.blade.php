 <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ asset('backend/assets/img/logo.jpg') }}" class="header-logo" /> <span
                class="logo-name">Damura</span>
            </a>
          </div>

          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Request::is('Dashboard') ? 'active' : '' }}">
              <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown ">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="users"></i><span>Total Students</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('total_n1_class')}}">N1</a></li>
                <li><a class="nav-link" href="{{route('total_n2_class')}}">N2</a></li>
                <li><a class="nav-link" href="{{route('total_n3_class')}}">N3</a></li>
                <li><a class="nav-link" href="{{route('total_n4_class')}}">N4</a></li>
                  <li><a class="nav-link" href="{{route('total_n5_class')}}">N5</a></li>
              </ul>
            </li>
            
            <li class="dropdown {{ Request::is('students*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user-plus"></i><span>Add Students</span></a>
              <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('students.index')}}">New Student</a></li>
                  <li><a class="nav-link" href="{{route('old_studnet')}}">Old Student </a></li>
              
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user-check"></i><span>Accounts   </span></a>
              <ul class="dropdown-menu">
                   <li><a class="nav-link" href="{{route('studnet_account_lists')}}">Accounts List</a></li>

                
              </ul>
            </li>

            <li class="dropdown {{ Request::is('staffs*') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link"><i data-feather="user-check"></i><span>Staff   </span></a>
              <ul class="dropdown-menu">
                   <li class="{{ Request::is('staffs') ? 'active' : '' }}"><a class="nav-link" href="{{route('staffs.index')}}">Staff List</a></li>
                   <li class="{{ Request::is('staffs/create') ? 'active' : '' }}"><a class="nav-link " href="{{route('staffs.create')}}">New Staff</a></li>

                
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="calendar"></i><span>Class Timetables</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('class_timetables')}}">Add New Class</a></li>
                
               
              </ul>
            </li>
            <li class="menu-header">Website Elements</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i><span>Home</span></a>
              <ul class="dropdown-menu">
                
                <li><a class="nav-link" href="{{route('slider')}}">Slider</a></li>
             
                <li><a class="nav-link" href="{{route('books')}}">Books</a></li>
           
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user"></i><span>About Us</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('about')}}">About</a></li>
               
                
              </ul>
            </li>
           <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="image"></i><span>Gallery</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('gallery')}}"> Photo</a></li>
               
                
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="video"></i><span>Video</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('video')}}">Video Collection</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="message-square"></i><span>Review</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('subject')}}">Subject</a></li>
                <li><a class="nav-link" href="{{route('review')}}">Review</a></li>
               
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="map"></i><span>Contact</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                
              </ul>
            </li>
            <li class="menu-header">Other Elements</li>
            <li class="dropdown ">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="plus-square"></i><span>Jounral & Video </span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('journal_video')}}">Journal & Video Collection</a></li>
                
              </ul>
            </li>
               
            <br>
          </ul>
        </aside>