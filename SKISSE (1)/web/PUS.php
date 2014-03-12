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
    <div id="maincontent">
        <div id="contHEAD">
            <img src="images/STOCKuvalg.png">
            <div id="headCONTENT">
                <h2>Prosjektutvalg for spill</h2>
                <p>Lorem ipsum dolor sit amet.
                Duis rhoncus, nunc at tempor pharetra, 
                erat turpis molestie nulla, non ultricies nisi 
                Lorem ipsum dolor sit amet, consectetur 
                Fusce dignissim ligula quis egestas tempus. 
                Maecenas faucibus ornare nibh vitae egestas</p>
                <button id="meldpa" type="submit">Meld meg på!</button>
            </div>
        </div>
        <div id="contMAIN">
            <h1>INFORMASJON OM UFF</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus, nunc at tempor pharetra, erat turpis molestie nulla, non ultricies nisi orci id sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in libero vitae orci vulputate sodales. Fusce dignissim ligula quis egestas tempus. Maecenas faucibus ornare nibh vitae egestas. Aliquam iaculis felis lectus, sit amet fringilla lectus adipiscing at. In pretium nec justo id cursus. Nam condimentum sem ante, ac varius ante facilisis non. Proin ullamcorper enim sit amet erat tincidunt, vitae tempus quam fringilla. Sed a tincidunt lectus. Quisque at purus enim. Pellentesque libero nibh, elementum ut imperdiet ut, gravida vel diam. Quisque egestas pellentesque mauris sit amet gravida.

<p>Fusce ultricies dui eu sem aliquam, a scelerisque lorem egestas. Vestibulum urna elit, tincidunt vitae aliquet sit amet, gravida sit amet neque. Sed pellentesque urna magna. Curabitur eleifend non odio id auctor. In a tincidunt eros. Pellentesque et feugiat diam. Suspendisse posuere elit sed egestas tempus. Aenean aliquam, ante a viverra dapibus, quam mauris pharetra purus, a pellentesque turpis sem consectetur lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus in felis tempus nunc luctus aliquet. Sed purus nisi, lacinia vel sapien vitae, sodales varius nisi. Etiam non sem a lectus vestibulum mattis vitae in odio. Phasellus tincidunt eros vel nibh pretium elementum.</p>

<p>In posuere fermentum massa ac viverra. Duis ac arcu quis nibh aliquam tincidunt at et libero. Integer neque risus, vehicula at diam ac, iaculis tempus dui. Duis rhoncus pretium lectus non euismod. Maecenas mattis erat nunc, in iaculis arcu elementum eget. Fusce non dolor ut odio blandit pretium id eget erat. Integer malesuada semper metus eu vestibulum. Praesent non ante aliquam, fringilla risus non, hendrerit sem. Nam facilisis odio gravida magna vulputate pharetra. Sed posuere, neque quis volutpat dictum, ligula urna tempor tellus, sed fringilla felis ante a lectus. Praesent egestas lectus at sollicitudin suscipit.</p>

<p>Pellentesque ac est fermentum, scelerisque lectus eu, pretium lorem. Nullam faucibus neque nunc, vitae scelerisque lectus congue non. Curabitur ut bibendum erat, vitae elementum metus. Ut pulvinar nisl et massa tristique, non suscipit orci fermentum. Ut mi libero, rhoncus a sollicitudin a, volutpat a enim. Donec tincidunt rhoncus justo, et auctor urna porttitor at. Nam aliquam gravida magna a fermentum. Mauris adipiscing, lorem ut volutpat cursus, purus felis pretium sapien, vel imperdiet risus turpis sed lorem.</p>

<p>Mauris eu libero eu mauris facilisis lobortis. Etiam consectetur mi ac velit aliquet, ac interdum sapien varius. Aliquam sed libero venenatis metus convallis commodo nec vitae tortor. Suspendisse in vehicula tellus. Morbi vitae sapien purus. Praesent eu justo eu velit ultrices blandit nec sed velit. Etiam nunc purus, fringilla quis pulvinar non, tristique eget risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce et vehicula lorem. Aenean ullamcorper at nisi a laoreet. Vivamus pharetra nunc urna, vitae pharetra elit molestie vel. Nam ac purus eu felis dapibus eleifend. Vestibulum semper euismod mi, pulvinar tristique diam accumsan non.</p>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus, nunc at tempor pharetra, erat turpis molestie nulla, non ultricies nisi orci id sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in libero vitae orci vulputate sodales. Fusce dignissim ligula quis egestas tempus. Maecenas faucibus ornare nibh vitae egestas. Aliquam iaculis felis lectus, sit amet fringilla lectus adipiscing at. In pretium nec justo id cursus. Nam condimentum sem ante, ac varius ante facilisis non. Proin ullamcorper enim sit amet erat tincidunt, vitae tempus quam fringilla. Sed a tincidunt lectus. Quisque at purus enim. Pellentesque libero nibh, elementum ut imperdiet ut, gravida vel diam. Quisque egestas pellentesque mauris sit amet gravida.

<p>Fusce ultricies dui eu sem aliquam, a scelerisque lorem egestas. Vestibulum urna elit, tincidunt vitae aliquet sit amet, gravida sit amet neque. Sed pellentesque urna magna. Curabitur eleifend non odio id auctor. In a tincidunt eros. Pellentesque et feugiat diam. Suspendisse posuere elit sed egestas tempus. Aenean aliquam, ante a viverra dapibus, quam mauris pharetra purus, a pellentesque turpis sem consectetur lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus in felis tempus nunc luctus aliquet. Sed purus nisi, lacinia vel sapien vitae, sodales varius nisi. Etiam non sem a lectus vestibulum mattis vitae in odio. Phasellus tincidunt eros vel nibh pretium elementum.</p>

<p>In posuere fermentum massa ac viverra. Duis ac arcu quis nibh aliquam tincidunt at et libero. Integer neque risus, vehicula at diam ac, iaculis tempus dui. Duis rhoncus pretium lectus non euismod. Maecenas mattis erat nunc, in iaculis arcu elementum eget. Fusce non dolor ut odio blandit pretium id eget erat. Integer malesuada semper metus eu vestibulum. Praesent non ante aliquam, fringilla risus non, hendrerit sem. Nam facilisis odio gravida magna vulputate pharetra. Sed posuere, neque quis volutpat dictum, ligula urna tempor tellus, sed fringilla felis ante a lectus. Praesent egestas lectus at sollicitudin suscipit.</p>

<p>Pellentesque ac est fermentum, scelerisque lectus eu, pretium lorem. Nullam faucibus neque nunc, vitae scelerisque lectus congue non. Curabitur ut bibendum erat, vitae elementum metus. Ut pulvinar nisl et massa tristique, non suscipit orci fermentum. Ut mi libero, rhoncus a sollicitudin a, volutpat a enim. Donec tincidunt rhoncus justo, et auctor urna porttitor at. Nam aliquam gravida magna a fermentum. Mauris adipiscing, lorem ut volutpat cursus, purus felis pretium sapien, vel imperdiet risus turpis sed lorem.</p>

<p>Mauris eu libero eu mauris facilisis lobortis. Etiam consectetur mi ac velit aliquet, ac interdum sapien varius. Aliquam sed libero venenatis metus convallis commodo nec vitae tortor. Suspendisse in vehicula tellus. Morbi vitae sapien purus. Praesent eu justo eu velit ultrices blandit nec sed velit. Etiam nunc purus, fringilla quis pulvinar non, tristique eget risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce et vehicula lorem. Aenean ullamcorper at nisi a laoreet. Vivamus pharetra nunc urna, vitae pharetra elit molestie vel. Nam ac purus eu felis dapibus eleifend. Vestibulum semper euismod mi, pulvinar tristique diam accumsan non.</p>
        </div>
    </div>
    <div id="logo"><img src="images/logo.png"></div>

<body>
</body>
</html>





