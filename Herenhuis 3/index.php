<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Home | Herenhuizen </title>
		<link rel="stylesheet" href="CSS/main.css">
		<link rel="stylesheet" href="CSS/style.css">
	</head>


	<body>
		<header>
			<nav>
				<ul>
					<li><a href="./">Home</a></li>
					<li><a href="Huizen/">Huizen</a></li> 
					<li><a href="Contact/">Contact</a></li>
					<li><a href="Login/login.php">Login</a></li>
				</ul>   
			</nav>
		</header>
		
	<main>
 				
			<h1 class="center"> Home </h1>	
				<!--  Slideshow -->
			<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="numbertext">  </div>
				<img src="img/Huis1.jpg" alt="WillRuhl">
				<div class="text"> <a href="Detail1/">Will Ruhl Residence</a> </div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext"> </div>
				<img src="img/huis2.jpg" alt="Quellbrunn">
				<div class="text"> <a href="#">Quellbrunn</a> </div>
			</div>

				<!-- Slideshow button to go left or right -->

			<a class="prev" onclick="plusSlides(-1)"> &#10094; </a>
			<a class="next" onclick="plusSlides(1)"> &#10095; </a>

			</div> <br>
				<!-- Slideshow button under the slideshow -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
			</div>
		
		<p>
			Welkom op herenhuis! 
			Snel uw huis verkopen is mogelijk bij herenhuizen. Van ons kunt u een realistisch bod verwachten op uw huis, woning of appartement op basis van marktwaarde.
			Zodra alles geregeld is bij de notaris wordt er direct betaald. Kosteloos kunnen wij u ook een aanbetaling doen. De notariskosten nemen wij voor onze rekening.
		</p>
		
		<p>
			Snel uw woning verkopen is niet zo makkelijk als het lijkt. U krijgt te maken met de makelaar, bijkomende kosten, de woning moet steeds gereed worden gemaakt voor kijkers en dan nog maar afwachten. Veel vragen beantwoorden, kijkers vriendelijk te woord blijven staan en vooral veel onzekerheid. Daar zit niemand op te wachten toch?
		</p>
		
		<p>
			Wij bieden een snellere oplossing. Als u ons laat weten wat voor huis u wilt verkopen kunt u snel een goed bod verwachten.
			Worden we het samen eens? Dan volgt de notaris (op onze kosten), wordt alles keurig geregeld en ontvangt u direct uw geld.
		</p>
		
		
			
	  </main>

		<script>
			//Script for the working of the slideshow
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) 
			{
				showSlides(slideIndex += n);
			}

			function currentSlide(n) 
			{
				showSlides(slideIndex = n);
			}

			function showSlides(n) 
			{
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				if (n > slides.length) {slideIndex = 1}    
				if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) 
				{
					slides[i].style.display = "none";  
				}
				for (i = 0; i < dots.length; i++) 
				{
					dots[i].className = dots[i].className.replace(" active", "");
				}
				
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
			}
			
		</script>	

		<footer> Herenhuizen B.V. | Website gemaakt door Q to DyFe </footer>

	</body>
</html>