<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../assets/ico/favicon.ico">

		<title>Dashboard Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		{{ HTML::style('assets/css/main.css') }}

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-brand">
				Sample Project
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Taylor99 <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Edit Info</a>
						</li>
						<li>
							<a href="#">Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 sidebar">
					<ul class="nav nav-sidebar">
						<li>
							<a href="{{ route('clients_list') }}"><span class="glyphicon glyphicon-user"></span>Clients</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-list-alt"></span>Case Studies</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-th"></span>Projects</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-picture"></span>Visuals</a>
						</li>
					</ul>
				</div>

				@yield('content')
			</div>
		</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		{{ HTML::script('assets/js/main.js') }}
	</body>
</html>
