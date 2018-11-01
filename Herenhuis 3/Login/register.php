<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Q to DyFe | Sign Up</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<form method="post" action="verwerk-register.php">
  <div class="container">
	<h2>Sign Up</h2>  
    <label for="Naam"><b>Name</b></label>
    <input type="text" placeholder="Enter full name" name="Naam" id="Naam" required>	
	  
    <label for="Email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="Email" id="Email" required>	
	  
    <label for="Wachtwoord"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Wachtwoord" id="Wachtwoord" max-lenght="30" required>  
	  
    <label for="Wachtwoord2"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="Wachtwoord2" id="Wachtwoord2" max-lenght="30" required>	
	  
    <button type="submit" id="Submit" name="Submit">Sign Up</button>
	  
	<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>  
  </div>
</form>			
</body>
</html>