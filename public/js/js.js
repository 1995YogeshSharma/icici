var displaceHeader = (function(){
	var talget;	
	var limit;
	var bo = false;
	function popp(e){
		if(window.scrollY >= limit && !bo){
			talget.classList.add('displaced');
			bo = true;
		}
		else if(window.scrollY <= limit){
			bo = false;
			talget.classList.remove('displaced');
		}
	}
	return{
		init:function(item){
			talget = document.getElementsByClassName(item)[0];
			limit = talget.offsetHeight;
			window.addEventListener('scroll',popp);
		}
	};
})();

var goDown = (function(){
	var talget;	
	var limit;
	var kispe;
	var bo = false;
	function downo(e){
	var myinterval;
		function scroll1() {
			if (window.scrollY + limit +40>= talget.offsetTop) {
				clearInterval(myinterval);
			} 
			else {
				window.scrollTo(window.scrollX, window.scrollY + 5);
			}
		}
		myinterval = setInterval(scroll1,0.05);
	}
	return{
		init:function(item){
			talget = document.getElementById("showoff_main");
			limit = document.getElementsByClassName('header-common')[0].offsetHeight;
			kispe = document.getElementById("butter");
			kispe.addEventListener('click',downo);
		}
	};
})();