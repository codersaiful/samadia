        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{ asset('admin/images/img.jpg') }}" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      {{-- <a class="dropdown-item"  href=""><i class="fa fa-sign-out pull-right"></i> Log Out</a> --}}
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="route('logout')" 
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"><i class="fa fa-sign-out pull-right"></i>
                            {{ __('Log Out') }}
                      </a>
                    </form>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- /top navigation -->