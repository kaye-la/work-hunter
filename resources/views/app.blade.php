<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Work Hunter</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('/slider-pro/dist/css/slider-pro.min.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header" style="font-size:20px">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				{!! Html::linkRoute('home', '3035553501', null, array('class'=>'navbar-brand')) !!}
			</div>

			<!--
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

					<li><a href="{{ route('createVacancy') }}" style="font-size:20px">Create Vacancy</a></li>
				
							
					

				</ul>
			</div>
		-->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::guest())
						<li style="font-size:20px">{!! Html::linkRoute('home', 'Home') !!}</li>
					@else
						<li style="font-size:20px">{!! Html::linkRoute('home', 'Home') !!}</li>
						@if (Auth::user()->is_recruiter)
							<li><a href="{{ route('createVacancy') }}" style="font-size:20px">Create vacancy</a></li>
							<li><a href="{{ route('allVacancies') }}" style="font-size:20px">All Jobs</a></li>
							<li><a href="{{ route('allMyVacancies') }}" style="font-size:20px">My posted vacancies</a></li>
							<li><a href="{{ route('allApplications') }}" style="font-size:20px">My job's applications</a></li>
							<!--<li><a href="{{ route('allJobApplications') }}" style="font-size:20px">All job applications</a></li>-->
						@elseif (Auth::user()->is_jobseeker)	
						<li><a href="{{ route('allVacancies') }}" style="font-size:20px">All Jobs</a></li>
						<li><a href="{{ route('allApplications') }}" style="font-size:20px">My applied applications</a></li>
						@elseif (Auth::user()->is_admin)	
						<li><a href="{{ route('getUsers') }}" style="font-size:20px">List all users</a></li>
						<li><a href="{{ route('allVacancies') }}" style="font-size:20px">List all jobs</a></li>
						<li><a href="{{ route('allApplications') }}" style="font-size:20px">List all applications</a></li>
						@endif
					@endif
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li>{!! Html::linkRoute('getLogin', 'Login') !!}</li>
						<li>{!! Html::linkRoute('getRegister', 'Register') !!}</li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>{!! Html::linkRoute('getProfile', 'View Profile', Auth::user()->id) !!}</li>
								<li>{!! Html::linkRoute('getLogout', 'Logout') !!}</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	<div class="new-bg footer">
		<div class="container">
		<hr>
			<div>
				<p class="pull-left small">(c)Work Hunter</p>
			</div>
			<div>
				<p class="pull-right small">You can contact us anytime at +852 52409648 or email: denizanazarova@gmail.com</p>
			</div>
		</div>
	</div>
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	@yield('js')

</body>
</html>
