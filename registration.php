<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="L. Kruize" content="">
    <title>OnzeBank Login</title>
    <!--CSS-->
    <link href="layout.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <form method="POST" action="registrationcheck.php" class="form-signin">
        <h2 class="form-signin-heading">Een account registreren</h2>
        <div style = "font-size:11px; color:#008000; margin-top:10px"><?php if(isset($_GET['check'])) {if($_GET["check"]=='1'){echo "Geregistreerd!";};}; ?></div>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset( $_GET['err']) ){if($_GET["err"]=='2'){echo "Gebruikersnaam te kort.";};}; ?></div>
        <div style = "font-size:11px; color:#008000; margin-top:10px"><?php if(isset($_GET['check'])) {if($_GET["check"]=='2'){echo "Gebruikersnaam bestaat al.";};}; ?></div>
        <label>
            <input pattern=".{5,}" name="newusername" type="text" id="newusername" class="form-control" autocomplete="off" placeholder="Gebruikersnaam" title="Minimaal 5 tekens, maximaal 45"required autofocus>
        </label>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset( $_GET['err']) ){if($_GET["err"]=='1'){echo "Wachtwoorden komen niet overeen";};}; ?></div>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset( $_GET['err']) ){if($_GET["err"]=='3'){echo "Wachtwoord te kort.";};}; ?></div>
        <label>
            <input pattern=".{5,}" name="newpassword" type="password" id="newpassword" class="form-control" autocomplete="off" placeholder="Wachtwoord" title="Minimaal 5 tekens" required>
        </label>

        <label>
            <input name="confpwd" type="password" id="newpassword" class="form-control" autocomplete="off" placeholder="Bevestig wachtwoord" required>
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Opslaan</button>
        <h3><a href = "login.php">Terug naar het inlogscherm.</a></h3>
    </form>
</div>


</body>
</html>