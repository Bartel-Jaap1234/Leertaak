<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="L. Kruize" content="">
    <link rel="icon" href="Bootstrap/../favicon.ico">
    <title>OnzeBank Login</title>
    <!-- Bootstrap core CSS -->
    <link href="test.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <form name= "form1" method="POST" action="logincheck.php" class="form-signin">
        <h2 class="form-signin-heading">Aanmelden</h2>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset( $_GET['error']) ){if($_GET["error"]=='1'){echo "Onjuiste naam en wachtwoord";};}; ?></div>
        <input name="myusername" type="username" id="myusername" class="form-control" placeholder="Gebruikersnaam" required autofocus>
        <input name="mypassword" type="password" id="mypassword" class="form-control" placeholder="Wachtwoord" required>
        <button class="aanmelden" type="submit">Aanmelden</button>
        <h2><a href = "registration.php">Registreren</a></h2>
    </form>
    <!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset( $_GET['error']) ){if($_GET["error"]=='1'){echo "Onjuiste naam en wachtwoord";};}; ?></div>-->
</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="Bootstrap/../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>