<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 6 - Spring
    </title>
</head>

<body>
    <h1>Year 6 - Spring</h1>
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
            <td>1/3 Refresh</td>
            <td>0 Bonus</td>
        </tr>
        <tr>
            <th>Parager</th>
            <td>(-11,12)</td>
            <td>Gerdr</td>
            <td><i>Besieged</i></td>
        </tr>
        <tr>
            <th>Arpenter</th>
            <td>(-2,3)</td>
            <td>Winter Quarters</td>
        </tr>
        <tr>
            <th>Envoyer</th>
            <td>(-2,3)</td>
            <td>Winter Quarters</td>
        </tr>
        <tr>
            <th>Amie Navire</th>
            <td>(-2,3)</td>
            <td>Winter Quarters</td>
        </tr>
    </table>
    <p> placeholder</p>
    <p><b>Economic (motivated):</b> placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Military (motivated): </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h2>Results</h2>
    <p>placeholder</p>
    <p><b>Economic - Winter Quarters:</b> placeholder</p>
    <p><b>Economic - Ankkh:</b> placeholder</p>
    <p><b>Political - Cloak and Dagger:</b>placeholder</p>
    <h3 id="back3">Roleplay Event 6.4: <a href="../Bonus/38_A Dubious Narrative.php">A Dubious Narrative</a></h3>
    <p><b>Recruiting:</b> placeholder</p>
    <p><b>Military - Gerdr/Amie Navire/Partager</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Winged Mail Delivery:</b> placeholder</p>
    <p><b>Vaqueros:</b> placeholder</p>
    <h3><a href="../../Events/07_0.php">The Elves Gather for Their Annual Potluck</a></h3>
    <?php
        include '../../settarget.php'; 
        settarget("River",26,null,38);
        if($_SESSION["YEAR"]<7){
            $_SESSION["YEAR"] = 7;
        }
        include '../footer.php';
        echo getarrows("06_3_River.php","07_1_River.php");
        setlast("Year/06_1_River.php");
    ?>
</body>
