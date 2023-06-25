            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Dashboard </span></a></li>
                  
                  <li><a><i class="fa fa-gears" aria-hidden="true"></i> Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu"><a href="{{route('admin.location.list')}}">Location</a></li>
                      <li class="sub_menu"><a href="{{route('admin.fare.list')}}">Hourly</a></li>
                      <li class="sub_menu"><a href="{{route('admin.min_list')}}">Minimum Price</a></li>
                    </ul>
                  </li>                  
                  <li><a href="{{route('admin.rides.location_rides')}}"><i class="fa fa-car" aria-hidden="true"></i>Location Rides</span></a></li>
                  <li><a href="{{route('admin.rides.hour_rides')}}"><i class="fa fa-car" aria-hidden="true"></i>Hour Rides</span></a></li>
                  <li><a href="{{route('admin.user.list')}}"><i class="fa fa-users" aria-hidden="true"></i>Users</span></a></li>
                  <li><a href="{{route('admin.contact.list')}}"><i class="fa fa-phone-square" aria-hidden="true"></i>Contacts</span></a></li>

                  <li><a href="#"><i class="fa fa-key" aria-hidden="true"></i>Change Password </span></a></li>

                  {{-- <li><a href="contact"><i class="fa fa-lock" aria-hidden="true"></i>Logout </span></a></li> --}}
                </ul>
              </div>

            </div>
         