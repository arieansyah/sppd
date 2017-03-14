<!DOCTYPE html>
<html>
  <head>
    <title>SPPD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    {{ HTML::style('/vendor/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('/vendor/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::script('/vendor/jquery/jquery.min.js') }}
    {{ HTML::script('/vendor/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::style('css/styles.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    @yield('head')

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-10">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">SPPD</a></h1>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
  		  <div class="col-md-2">
  		  	<div class="sidebar content-box" style="display: block;">
                  <ul class="nav">
                      <!-- Main menu -->
                      <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                      <li><a href="{{ url('surat') }}"><i class="glyphicon glyphicon-calendar"></i> Input Surat Perjalanan Dinas</a></li>
                      <li><a href="{{ url('cetak')}}"><i class="glyphicon glyphicon-stats"></i> Cetak Surat Perjalanan Dinas</a></li>
                      <li><a href="{{url('pegawai')}}"><i class="glyphicon glyphicon-stats"></i> Pegawai</a></li>
                  </ul>
               </div>
  		  </div>
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-12">
              <h1 class="page-header">@yield('title')</h1>
            </div>
          </div>
            @yield('body')
        </div>
		</div>
    </div>
  </body>
</html>