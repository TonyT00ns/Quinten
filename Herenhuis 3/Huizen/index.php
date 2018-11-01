<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Huizen | Herenhuizen </title>
		<link rel="stylesheet" href="../CSS/main.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
	</head>


	<body>
		<?php

		/*

		require './config.php';

		$query = "SELECT img FROM Table_images";


		$data = mysqli_query($mysqli, $query);


		if (mysqli_num_rows($data) == 0)

		{

			echo "<p>Er zijn geen gegevens gevonden!</p>";

		}

		else{

		while ($regel = mysqli_fetch_array($data))

		echo "<p>" . $regel['img'] . "</p>";}

		*/

		//http://codewithawa.com/posts/image-upload-using-php-and-mysql-database

		?>

<?php

	session_start();

	require 'config.php';

	  // Create database connection

	  //$db = mysqli_connect("localhost", "root", "", "image_upload");


	  // Initialize message variable

	  $msg = "";


	  // If upload button is clicked ...

	  if (isset($_POST['upload'])) {





	 #debug:

	 echo "<pre>";

	 echo '<h1>$_POST</h1>';

	 print_r($_POST);

	 echo "</pre>";



	 echo "<pre>";

	 echo '<h1>$_FILES</h1>';

	 print_r($_FILES);

	 echo "</pre>";



	  // Get image name

	  $image = $_FILES['image']['name'];

	  // Get text

	  $image_text = mysqli_real_escape_string($mysqli, $_POST['image_text']);


	  // image file directory

	  $target = "images/".basename($image);


	  $sql = "INSERT INTO Table_images VALUES ('', '$image_text', '$image')";

	 echo "<h2>$sql</h2>";

	  // execute query

	  mysqli_query($mysqli, $sql);


	  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
	  	{

		  	$msg = "Image uploaded successfully";

	  	}
	  	else
		{

	  		$msg = "Failed to upload image";

	  	}

	  }

	  $result = mysqli_query($mysqli, "SELECT * FROM Table_images");

	?>
		
		<header>
			<nav>
				<ul>
					<li><a href="../">Home</a></li>
					<li><a href="./">Huizen</a></li> 
					<li><a href="../Contact/">Contact</a></li>
					<li><a href="../Login/login.php">Login</a></li>
				</ul>   
			</nav>
		</header>

		<main>
			
			<h1 class="center"> Huizen </h1> <hr>
			
			<!-- Huis 1 -->	
		<article>
			<h2> Will Ruhl Residence </h2>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<img class="image" src="../img/huis1.jpg" alt="WillRuhl">
					</div>
					<div class="back">
						<p> U bekijkt nu de Will Ruhl Residence! </p>
						<button class="bstyle"><a href="../Detail1/">Detail</a></button>
					</div>
				</div>
			</div>
		</article>
			<!-- Huis 2 -->
		<article>
			<h2> Blanchville Residence </h2>
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
				<div class="front">
					<img class="image" src="../img/huis2.jpg" alt="Blanchville">
				</div>
				<div class="back">
					<p> U bekijkt nu de Blanchville Residence! </p>
					<button class="bstyle"><a href="../Detail2/">Detail</a></button>
				</div>
				</div>
			</div>
		</article>
			
			<!-- Huis 3 -->
		<article>
			<h2> Quellbrunn Residence </h2>
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<img class="image" src="../img/huis3.jpg" alt="Quellbrunn">
					</div>
					<div class="back">
						<p> U bekijkt nu de Quellbrunn Residence! </p>
						<button class="bstyle"><a href="../Detail3/">Detail</a></button>
					</div>
				</div>
			</div>
		</article>
			<div id="content">

			  <?php

				while ($row = mysqli_fetch_array($result)) {

				?>

				<article>
					<!-- Verwijzing naar Details -->
					<h2> <?=$row['name']?> </h2>
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
						<div class="front">
							<img class="image" src="../img/<?=$row['img']?>" alt="<?=$row['name']?>">
						</div>
						<div class="back">
							<p> U bekijkt nu de Blanchville Residence! </p>
							<button class="bstyle"><a href="../Detail1/?id=<?=$row['Huis_ID']?>">Detail</a></button>
						</div>
						</div>
					</div>
				</article>
					
				<?php
					
				  echo "<div id='img_div'>";

				  echo "<img src='../img/".$row['img']."' >";

				  echo "<p>".$row['name']."</p>";

				  echo "</div>";



				}


				if ($_SESSION['level'] == 0)

				{


			?>

			<!-- <form method="POST" enctype="multipart/form-data">

			<input type="hidden" name="size" value="1000000">

			<div>

			 	<input type="file" name="image">

			</div>

			<div>

			 	<textarea 

					id="text" 

					cols="40" 

					rows="4" 

				name="image_text" 

				placeholder="Say something about this image..."></textarea>

			</div>

			<div>

			<button type="submit" name="upload">POST</button>

			</div>

			 </form>-->

			<?php  

			 }

			  ?>

			</div>


		</main>

			<footer> Herenhuizen B.V. | Website gemaakt door Q to DyFe </footer>
		
		<script>
		//Het flippen van de huizen naar de details aka.flip
			$("#card").flip({
			axis: 'y',
			trigger: 'click'
			});
			
		</script>
		

	</body>
</html>