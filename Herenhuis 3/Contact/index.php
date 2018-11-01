<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Contact | Herenhuizen </title>
		
		<link rel="stylesheet" href="../CSS/main.css">
		<link rel="stylesheet" href="style.css">
	</head>


	<body>
		<header>
			<nav>
				<ul>
					<li><a href="../">Home</a></li>
					<li><a href="../Huizen/">Huizen</a></li> 
					<li><a href="./">Contact</a></li>
					<li><a href="../Login/login.php">Login</a></li>
				</ul>   
			</nav>
		</header>

		<main

			<h1 class="center"> Contact </h1>
			<hr>

			<div class="container">
				<!-- Contact formulier in vullen -->
				<form action="#" a href="mailto:75405@glr.nl">
				
					<label for="fname"> Voornaam </label>
					<input type="text" id="fname" name="firstname" placeholder="Uw voornaam...">

					<label for="lname"> Achternaam </label>
					<input type="text" id="lname" name="lastname" placeholder="Uw achternaam...">

					<label for="country"> Land </label>
					<select id="country" name="country">
						<option value="australia"> Nederland </option>
						<option value="canada"> België </option>
						<option value="usa"> Anders </option>
					</select>

					<label for="subject"> Onderwerp </label>
					<textarea id="subject" name="subject" placeholder="Schrijf iets.." style="height:200px"></textarea>

					<input type="submit" value="Verzenden">

				</form>

			</div>	
			
		</main>	

			<footer> Herenhuizen B.V. | Website gemaakt door Q to DyFe </footer>
		
	</body>
</html>