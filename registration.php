<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="L. Kruize" content="">
    <title>OnzeBank Login</title>
    <link href="test.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <form method="POST" action="registrationcheck.php" class="form-signin">
        <h2 class="form-signin-heading">Een account registreren</h2>
        <div style = "font-size:11px; color:#008000; margin-top:10px"><?php if(isset($_GET['check'])) {if($_GET["check"]=='1'){echo "Geregistreerd!";};}; ?></div>
        <input name="newusername" type="text" id="newusername" class="form-control" placeholder="Gebruikersnaam" required autofocus>

        <input name="newpassword" type="password" id="newpassword" class="form-control" placeholder="Wachtwoord" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <h2><a href = "login.php">Inlogscherm</a></h2>
    </form>
    <!--<div style = "font-size:11px; color:#008000; margin-top:10px"><?php if(isset($_GET['check'])) {if($_GET["check"]=='1'){echo "Geregistreerd!";};}; ?></div>-->
</div> <!-- /container -->


</body>
</html>