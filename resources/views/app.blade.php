<html>
	<head>
		<title>Sherif Mostafa | Economist</title>
		<meta name="description" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="{{{ asset('/dist/semantic.min.css') }}}" rel="stylesheet"/>
		<link href="{{{ asset('/css/app.css') }}}" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
		<link href='https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css' rel="stylesheet"/>
		@yield('links')
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="{{{asset('/dist/semantic.min.js')}}}"></script>
		@yield('scripts')
	</head>
	<body>
		<section class="nav-bar">
			<div class="ui visible sidebar inverted top">
				<div class="wrapper">
					<div class="dummy side-bar-item"></div>
					<div class="main-header side-bar-item">
						<h1><a href="{{action('PagesController@about')}}">Sherif Mostafa</a></h1>
					</div>
					<div class="ui secondary four item menu nav-elements side-bar-item"><a class="item">About me</a><a class="item">My work</a><a class="item">My services</a><a class="item">Contact me</a></div>
				</div>
			</div>
		</section>
		<div class="site-content">
			@yield('content')
		</div>
	</body>
</html>








