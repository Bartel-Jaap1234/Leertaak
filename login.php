<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="L. Kruize" content="">
    <title>OnzeBank Login</title>
    <!-- CSS -->
    <link href="layout.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <form name= "form1" method="POST" action="logincheck.php" class="form-signin">
        <h2 class="form-signin-heading">Aanmelden bij OnzeBank</h2>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset( $_GET['error']) ){if($_GET["error"]=='1'){echo "Onjuiste naam en wachtwoord";};}; ?></div>
        <label>
        <input name="myusername" type="username" id="myusername" class="form-control" autocomplete="off" placeholder="Gebruikersnaam" required autofocus>
        </label>
        <label>
        <input name="mypassword" type="password" id="mypassword" class="form-control" autocomplete="off" placeholder="Wachtwoord" required>
        </label>
        <button class="aanmelden" type="submit">Aanmelden</button>
        <h3><a href = "registration.php">Een account registreren.</a></h3>
    </form>
</div>

</body>
</html>