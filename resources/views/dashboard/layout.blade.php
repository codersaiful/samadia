<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="{{ asset('admin/images/favicon.ico') }}" type="image/ico" />

    <title>Gentelella Alela! | </title>

    @include('dashboard.partial.css')
  </head>

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
        <!-- /page content -->
            
        <!-- footer content -->
        @include('dashboard.partial.footer')
        
      </div>
    </div>

    @include('dashboard.partial.js')
	
  </body>
</html>
