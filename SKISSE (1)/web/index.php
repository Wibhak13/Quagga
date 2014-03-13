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
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
</head>
    <div id="head">
        <div id="loginper"><img id="westlogo" href=index.php src="images/logowesterdals.png">Innlogget som: <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>
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
            <img src="images/indextop.png">
            <div id="headCONTENT">
            </div>
        </div>
        <div id="contMAIN">
            <h1>Westerdals skaper «superhøyskole»</h1>
            <h3>Reklameskolen Westerdal slår seg sammen med to andre høyskoler og danner det de selv kaller en «superhøyskole»</h3>
            <p>I går fikk både studenter og ansatte ved de tre private Oslo-høyskolene NISS, Westerdals og NITH beskjed om at de til sommeren blir slått sammen til én utdanningsinstitusjon.Ledelsen ved alle de tre utdanningsinstitusjonene har gitt klarsignal for å starte arbeidet med sammenslåing av de tre skolene. Den nye høyskolen vil bære navnet Westerdals – Oslo School of Art, Communication and Technology.</p>

Dermed beholder man det innarbeide merkenavnet Westerdals.

Ambisjonene er store og i går snakket man om et «enestående» tilbud og en «superhøyskole» i nordisk sammenheng.

<p>- Den nye høyskolen vil tilby fag og kreative utdanninger som nærings- og samfunnsliv vil ha stor nytte av. Teknologi har i dag blitt en naturlig del av både kunst og strategisk og kreativ kommunikasjon. Studenter som behersker dette samspillet vil stille langt sterkere i arbeidsmarkedet, sier rektor ved Westerdals, Tom Kvisle.

Frem til i dag har alle de tre høyskolene utmerket seg innen sine spesifikke fagområder men alle studieløpene vil fortsatt være profesjonsrettet. Samtidig er det klart at de tre skolene har et overlappende tilbud med Westerdals kommunikasjonsrettede tilbud og henholdsvis kreativ innholdsproduksjon på NISS og NITH med teknologi.</p>

<p>Internasjonale mål
Ifølge ledelsen ved de tre skolene så er utdanningsmarkedet i stor grad blitt internasjonalt, og alene er skolene for små til å konkurrere i dette markedet.

- Ja, det er en helt klar ambisjon om øke rekrutteringen av internasjonale studenter og faglærere, sier Tom Kvisle til Kampanje.

- Kommer dere til å slå dere sammen fysisk også på sikt?

- Samlokalisering over tid er et premiss for å lykkes med fusjonen, sier han.</p>

<p>Alle de tre skolene er en del av eierselskapet Anthon B Nilsen som driver med blant annet utvikling og drift av private høyskoler og fagskoler og har en rekke utdanningssteder i porteføljen. Anthon B. Nilsen omsetter for nesten én milliard kroner og hadde et underskudd på fem millioner kroner i 2012.

- Sammen kan vi bygge en større, sterkere og bredere høyskole som er enestående. Regjeringen ønsker seg sterkere, mer moderne og internasjonalt konkurransedyktige studieinstitusjoner. Med nye Westerdals får de oppfylt alle tre ønsker på en gang, sier administrerende direktør ved NITH, Bjørn Jarle Hansen.

Tyvetalls studieløp
Rektoratet ved den sammenslåtte skolen vil bestå av Bjørn Jarle Hanssen og Tom Kvisle. Eirin Sæther, nåværende rektor ved NISS vil inngå i ledergruppen. Den nye høyskolen vil ha i overkant av 1.600 studenter og tilby et tyvetalls studieløp fra oppstart.</p>

<p>Etter planen vil endelig fusjonsvedtak finne sted i løpet av våren og fusjonen er ventet å tre i kraft i løpet av sommeren. Den nye høyskolen vil organiseres i fem fakulteter, henholdsvis fakultetet for kommunikasjon, teknologi, musikk og scene, ledelse og film og tv. Sistnevnte vil utgjøre den største og mest profilerte film- og tv- skolen i Oslo, og vil også inkludere studier innenfor spillutvikling.

Westerdals Høyskole har helt siden starten i 1965 hatt fokus på at skolen skal fungere som et springbrett for arbeidslivet for unge kreatører. Svært mange av de største profilene i kreative bransjer har sin bakgrunn fra nettopp Westerdals.</p>
        </div>
    </div>
    

<body>
</body>
</html>





