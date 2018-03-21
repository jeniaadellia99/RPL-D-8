<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Q-Press | Dashboard</title>
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet">
	@yield('css')
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid" style="border-bottom: 1px #dedede solid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Q-Press</span></a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-user color-blue"></em>
					</a></li>
				</ul>
				<ul class="dropdown-menu">
					<li><a href="#"><em class="fa fa-gear">&nbsp;</em>Setting</a></li>
					<li><a href="#"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
					<li class="parent "><a data-toggle="collapse" href="#sub-item-1"></a></li>
				</ul>
			</div>
		</div>		
	</nav>
