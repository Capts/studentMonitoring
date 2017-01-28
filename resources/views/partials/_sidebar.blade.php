@include('partials._head')

<nav class="navbar navbar-default" role="navigation">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav"  style="font-family: 'Open Sans', sans-serif;font-size:21px;">

        <li class="{{ Request::is('home') ? "active" : "" }}" ><a href="home" style="font-size:18px;">Dashboard</a></li>
        <li class="{{ Request::is('profile') ? "active" : "" }}"><a href="profile" style="font-size:18px;">Profile</a></li>
        <li class="{{ Request::is('monitoring') ? "active" : "" }}"><a href="monitoring" style="font-size:18px;">Monitoring</a></li>

      </ul>
    
    </div><!-- /.navbar-collapse -->
  
</nav>

	


{{-- @include('partials._head')

<aside class="sidebar-left">

		

		<div class="sidebar-links">
			<a class="link-green " href="home"><i class="fa fa-home"></i>Dashboard</a>
			<a class="link-yellow" href="profile"><i class="fa fa-user"></i>Teachers Profile</a>
			<a class="link-black" href="monitoring"><i class="fa fa-toggle-off"></i>Performance Monitoring</a>
		</div>

	</aside>

	<div class="main-content">

		<div class="menu">


		</div>

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>

		$(function () {

			var links = $('.sidebar-links > a');

			links.on('click', function () {

				links.removeClass('selected');
				$(this).addClass('selected');

			})
		});

	</script> --}}