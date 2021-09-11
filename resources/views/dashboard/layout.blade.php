<!DOCTYPE html>
<html lang="en">
  {{-- head section --}}
  @include('dashboard.partial.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Samadia Homeo</span></a>
            </div>

            <div class="clearfix"></div>

            @include('dashboard.partial.quickinfo')

            <!-- sidebar menu -->
              @include('dashboard.partial.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('dashboard.partial.footerbuttons')

          </div>
        </div>

        <!-- top navigation -->
        @include('dashboard.partial.topnav')

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
            
        <!-- footer content -->
        @include('dashboard.partial.footer')
        
      </div>
    </div>

    @include('dashboard.partial.js')
	
  </body>
</html>
