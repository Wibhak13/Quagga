<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Westerdals UTVALG</title>
<link href="css.css" rel="stylesheet" type="text/css">
</head>
    <div id="head">
        <div id="loginper"><img id="westlogo" src="images/logowesterdals.png">Innlogget som: <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>
        <a href="edit_account.php">Rediger konto</a>
        <a href="logout.php">Utlogging</a></div>
    </div>
    <div id="mainmenu">
        <ul>
            <h2><li><a href="#">Communication</a></li></h2>
            <h2><li><a href="#">Technology</a></li></h2>
            <h2><li><a href="#">Visual and performing Arts</a></li></h2>
            <h2><li><a href="#">Film and TV</a></li></h2>
            <h2><li><a href="#">Management</a></li></h2></br>
            <div class="valg">
            <li><a href="fubar.php">#Fubar</a></li>
            <li><a href="fest.php">FestKomité</a></li>
            <li><a href="westball.php">Westerball</a></li>
            <li><a href="gullkalven.php">Gullkalven</a></li>
            <li><a href="student.php">Studentrådet</a></li>
            <li><a href="idrett.php">Idrettsutvalget</a></li>
            <li><a href="sosial.php">Sosialutvalget</a></li>
            <li><a href="utvikling.php">Utviklingutvalget</a></li>
            <li><a href="KIT.php">KIT - Kvinner og IT</a></li>
            <li><a href="AU.php">AU - Arbeidsutvalget</a></li>
            <li><a href="MUS.php">MUS - Musikkutvalget</a></li>
            <li><a href="AUG.php">AUG - Apple User Group</a></li>
            <li><a href="PUS.php">PUS - Prosjektutvalget for spill</a></li>
            <li><a href="UFF.php">UFF - Utvalget for fantastisk fritidsinteresser</a></li></div>
        </ul>
    </div>

    <img id="indexforside" src="images/forside.png">
    

<body>
</body>
</html>





