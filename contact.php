
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Final Project</title>
 <meta name="robots" content="noindex,nofollow" />
 <meta name="viewport" content="width=device-width" />
 <meta charset="utf-8" />
 <link rel="stylesheet" href="css/fp.css" />
 <link rel="stylesheet" href="css/form.css" />
   <link rel="stylesheet" href="css/nav1.css" />  
 <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

 <script src="js/script.js"></script>
</head>
<body>

<div class="wrapper">
<header>
    <h1> Music created By Abdirizak</h1>
 
<nav id="cssmenu">
<ul>
 <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
 <li><a href="template.html"><i class="fa fa-fw fa-home"></i> Home</a></li>
 <li><a href="about.html"><i class="fa fa-fw fa-globe"></i> About</a></li>
 <li><a href="location.html"><i class="fas fa-map-marker-alt"></i> Location</a></li>
 <li><a href="#"><i class="fas fa-headphones"></i> Music</a>
    
    
    <ul>
     <li><a href="media-sound.html"><i class="fab fa-medium-m"></i> media-sound</a></li> 
      
      <li><a href="performance.html"><i class="fab fa-autoprefixer"></i> performace</a></li> 
      
    </ul> 
    
    
    </li>
    
  <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Abdirizak</a></li>
     
  
     
 </ul>
</nav>
  </header> 
       <h2>Contact Abdirizak</h2>
    
    	<!-- START HTML FORM -->
	<form action="contact.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    
       <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Abdirizak Abdi </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
 </body>
</html>