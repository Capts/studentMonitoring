@include('partials._head')

<aside class="sidebar-left">

		

		<div class="sidebar-links">
			<a class="link-black selected" href=""><i class="fa fa-user"></i>Teachers Profile</a>
			<a class="link-blue" href="#"><i class="fa fa-plus" ></i>Add Student</a>
			<a class="link-green" href="#"><i class="fa fa-toggle-off"></i>Performance Monitoring</a>
			<a class="link-yellow " href="#"><i class="fa fa-cogs"></i>Settings</a>
			<a class="link-red" href="#"><i class="fa fa-sign-out"></i>Logout</a>
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

	</script>