<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 7 - Fall
    </title>
</head>

<body>
    <h1>Year 7 - Fall</h1>
    <table style="width:100%">
        <tr>
            <th>Stress</th>
            <td>Economic 0/5</td>
            <td>Morale 0/5</td>
            <td>Property 0/5</td>
            <td>Military 0/6</td>
        </tr>
        <tr>
            <th>Fate Points</th>
            <td>3/3 Refresh</td>
            <td>0 Bonus</td>
        </tr>
        <tr>
            <th>Parager</th>
            <td>(-1,9)</td>
            <td>Eparchy</td>
        </tr>
        <tr>
            <th>Arpenter</th>
            <td>(-11,11)</td>
            <td>Gerdr</td>
        </tr>
        <tr>
            <th>Envoyer</th>
            <td>(-15,-7)</td>
            <td>Hilt'Inn</td>
        </tr>
        <tr>
            <th>Amie Navire</th>
            <td>(-11,13)</td>
            <td>Surt</td>
        </tr>
    </table>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
	<p><b>Military: </b>placeholder</p>
    <p><b>Military (motivated): </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3 id="back">Roleplay Event 7.2.1: <a href="../Bonus/39_A Belated Date.php">A Belated Date</a></h3>
    <h2>Results</h2>
    <p><b>Economic:</b>placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military - Pathfinding:</b>  placeholder</p>
    <p><b>Military - Recruiting:</b>  placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Laginappe:</b> placeholder</p>
    <h3 id="back2">A Royal Letter: <a href="../Bonus/?_A Royal Letter.php">A Royal Letter</a></h3>
    <p> placeholder</p>
    <h3 id="back3">Roleplay Event 7.2.2: <a href="../Bonus/?_A Cursed Journey.php">A Cursed Journey</a></h3>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",28,null,22);
        include '../footer.php';
        echo getarrows("07_1_River.php","07_3_River.php");
        setlast("Year/07_2_River.php");
    ?>
</body>
