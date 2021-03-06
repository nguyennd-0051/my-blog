<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		@yield('head')
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></strong></h1>
               
                <nav id="nav">
					<ul>
                        @auth
						    <li><a href="{{ url('/articles') }}">Home</a></li>
							<li><a href="{{ route('articles.index',['userid'=> auth()->user()->id]) }}">My Articles</a></li>
                            <li><a href="">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>       
						@else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>    
                        @endauth
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			<!-- <a><span href="#menu" class="fa fa-bars navPanelToggle"></span></a> -->

        @yield('content')

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
