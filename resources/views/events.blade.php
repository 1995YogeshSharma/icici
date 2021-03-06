<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Discover Your Passion</title>
		<!--<link rel="stylesheet" type="text/css" href="normalize.css">-->
		<link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/events.css')}}">
		<link href='https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,400italic|Slabo+27px' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
		
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
						@if(Auth::guest())
							<a href="{{url('/login')}}">
								LOGIN
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
		
		<section id="events_">
			<div id="overlay"></div>
			<div id="events_main">
				<div class="cont_" id="id1"><div>
					<div class="heading"><img src="{{asset('images/event_creative.jpg')}}"/></div>
					<div class="info">
						<span>CREATIVE MASTERS</span>
						ICICI Bank Limited proudly presents Creative Masters – the drawing contest that celebrates the artist within you is back with its 2nd edition and urges you to “Share What You Care About”.
						<a href="http://www.creativemasters.co.in/" style="color:white">Click Here</a>
					</div>
				</div></div>
				<div class="cont_"id="id2"><div>
					<div class="heading"><img src="{{asset('images/event_selfie.jpg')}}" /></div>
					<div class="info">
						<span>ULTIMATE SELFIES</span>Show us your creativity and upload the most funny or adventurous selfies you can think of. Tickle us with your witty 
						selfies and show us your daring in the ultimate adventure selfie contest. 
						<a href="{{url('/selfie')}}" style="color:white">Click Here</a>
					</div>
				</div></div>
				<div class="cont_"id="id4"><div>
					<div class="heading"><img src="{{asset('images/event_cameraderie.jpg')}}" /></div>
					<div class="info">
						<span>CAMERADERIE</span>
						Welcome onboard the 3rd edition of Cameraderie contest which is a celebration of the passion for photography. With many more categories to submit photographs, this edition for the first time is introducing Videography contest to complete the magic that can be captured by a camera lens.
						<a href="http://www.cameraderie.co.in/" style="color:white">Click Here</a>	
					</div>
				</div></div>
				<div class="cont_"id="id5"><div>
					<div class="heading"><img src="{{asset('images/event_pranks.jpg')}}" /></div>
					<div class="info"></div>
				</div></div>
			</div>
			<span id="rad3" class="fa fa-random"></span>
		</section>
		
		<footer class="footer-common">
			
		</footer>
		<script>
			var af = document.getElementById("rad3");
			var ad = document.getElementsByClassName('cont_');
			var al = ad.length;
			var a = document.getElementById('events_main');
			var item;
			var itempr;
			var tum = 0;
			function wesa(){
				console.log("asdasda");
				this.classList.remove('yes');
				this.removeEventListener('mouseleave',wesa);
			}
			function spina(){
				af.removeEventListener('click',spina);
				var bs = document.getElementsByClassName('yes')[0];
				if(bs){
					bs.classList.remove('yes');
				}
				var as = Math.floor(Math.random()*al) + 1;
				var ts = tum + (al * 2) + as;
				function sc(){
						if(tum===ts){
							clearInterval(myinterval);
							item.classList.add('yes');
							af.addEventListener('click',spina);
							item.addEventListener('mouseleave',wesa);
							return;
						}
						var aq = tum%al;
						if(aq===0){
							itempr = ad[al-1];
						}
						else{
							itempr = ad[aq-1];
						}
						item = ad[aq] ;
						item.classList.add('selecte');
						itempr.classList.remove('selecte');
						tum++;
				}
				var myinterval;
				myinterval = setInterval(sc,200);
			}
			af.addEventListener('click',spina);
		</script>
		
	</body>
</html>
