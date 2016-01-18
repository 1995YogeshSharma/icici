<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Discover Your Passion</title>
		<!--<link rel="stylesheet" type="text/css" href="normalize.css">-->
		<link rel="stylesheet" type="text/css" href=" {{ asset('css/css.css') }} ">
		<link rel="stylesheet" type="text/css" href=" {{ asset('css/index.css') }}">
		<link href='https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,400italic|Slabo+27px' rel='stylesheet' type='text/css'> 	
		<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">
		<script  type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
		<script  type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
		<script  type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
		<script src="{{asset('js/js.js')}}"></script>
	</head>
	<body>
		<header class="header-common">
			<div class="header-member logo">
				<a href="index.html">Discover Your Passion</a>
			</div>
			<nav class="header-member link-bar">
				<ul>
					<!--<li>
						<a href="feed">
							FEED
						</a>
					</li>-->
					<li>
						@if (Auth::guest())
							<a href="{{url('/login')}}">
								LOGIN
							</a>
							<a href="{{url('/register')}}">
								REGISTER
							</a>
						@else
							<a href="{{url('logout')}}">
								LOGOUT
							</a>
						@endif
					</li>
				</ul>
			</nav>
		</header>
		<section id="intro">
			<div id="intro_main">
				<div class="header">
					<span>Discover Your Passion</span>
					<span class="header">by ICICI Bank</span>
				</div>
				<span class="fa fa-chevron-down bu" id="butter"></span>
			</div>
		</section>	
		<section id="showoff">
			<div id="showoff_main">
				<div class="row">
					<div class="card w50" id="card1">
						<div class="card_front">
							<div class="head"><a href="EVENTS.html">Events</a></div>
						</div>
						<div class="card_back">
							<div class="gallery2">
								<div class="gallery-member">
									<a href="EVENTS.html">
								  <img src="{{asset('images/creativemasters.png')}}" alt="" />
									</a>
								</div>
								<div class="gallery-member"><a href="EVENTS.html">
								  <img src="{{asset('images/dubsmash.jpg')}}" alt="" /></a>
								</div>
							</div>
							<div id="event-btn"><a href="events.html">All Events</a></div>
						</div>
					</div>
					<div class="row">
						<div class="card h100" id="card2">
							<div class="card_front">
								<div class="head">Hall of Fame</div>
							</div>
							<div class="card_back"></div>
						</div>
						<div class="card h100"id="card3">
							<div class="card_front">
								<div class="head">Testimonials</div>
							</div>
							<div class="card_back">
								<div class="head"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="card w33" id="card4">
						<div class="card_front">
							<div class="head">Contact Us</div>
						</div>
						<div class="card_back"></div>
					</div>
					<div class="card w33" id="card5">
						<div class="card_front">
							<div class="head">Sponsor</div>
						</div>
						<div class="card_back">
							<div class="gallery1">
								<div class="gallery-member">
								  <img src="{{asset('images/sponsor1.png')}}" alt="" />
								</div>
								<div class="gallery-member">
								  <img src="{{asset('images/sponsor2.png')}}" alt="" />
								</div>
							<!--<div class="gallery-member">
								  <img src="3.png" alt="" />
								</div>
								<div class="gallery-member">
								  <img src="4.png" alt="" />
								</div>-->
							</div>
						</div>
					</div>
					<div class="card w33" id="card6">
						<div class="card_front">
							<div class="head">Schedule</div>
						</div>
						<div class="card_back"></div>
					</div>
				</div>
			
			</div>
		</section>
		<section>
			<br>
			<br>
			
		</section>
		
		<footer class="footer-common">
			
		</footer>
		<script>
			function nit(){
				goDown.init();
				displaceHeader.init('header-common');
			}
			window.addEventListener('load',nit);
			$(document).ready(function(){	
				$('.gallery1').slick({
					dots: false,
					arrows: false,
					autoplay: true,
					autoplaySpeed: 1000,
				});
				$('.gallery2').slick({
					dots: false,
					arrows: false,
					autoplay: true,
					autoplaySpeed: 1000,
				});
			});
		
		</script>
	</body>
</html>
