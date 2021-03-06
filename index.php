<?php 
    define('__CONFIG__', true);     // * Allow the config file
    require_once "includes/config.php"      // * Require the config file

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INDEX.php</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="uk-section uk-container">
			<?php
			    echo "Greetings Earthling!<br />Today is: ";
			    echo date("Y m d");
			    echo "<br />";
			    echo "Login System Project. Learning PHP!"
			?>
		    <p>
		        <a href="http://localhost/phase1-3html-2web-LoginRegistrationProject/phase1-phplogin/login.php">Login</a>
		        <a href="http://localhost/phase1-3html-2web-LoginRegistrationProject/phase1-phplogin/register.php">Register</a>
		    </p>
  	    </div>
        <?php require_once "includes/footer.php"; ?>
    </body>
</html>