<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 4 - Spring
    </title>
</head>

<body>
    <h1>Year 4 - Spring</h1>
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
            <td>(-2,3)</td>
            <td>Winter Quarters</td>
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
    </table>
    <p><b>Character:</b> placeholder</p>
    <h3 id="back">Boxraft Children 4.4.1: <a href="../Bonus/16_A Wild Ride.php">A Wild Ride</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <h3 id="back2">Boxraft Children 4.4.2: <a href="../Bonus/17_A Surtian Confusion.php">A Surtian Confusion</a></h3>
    <p><b>Economic (motivated):</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h2>Results</h2>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic (motivated):</b> placeholder</p>
    <p><b>Political:</b>placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <h3 id="back3">Roleplay Event 4.4: <a href="../Bonus/18_A Deep River.php">A Deep River</a></h3>
    <p><b>Mental:</b> placeholder</p>
    <h3><b>Dilemma:</b> Just around the river bend</h3>
    <p><b>Status:</b> placeholder</p>
    <p>placeholder</p>
    <p><b>Elf Prime:</b> placeholder</p>
    <h3><a href="../../Events/05_0.php">The Elves Gather for Their Annual Potluck</a></h3>
    <?php
        include '../../settarget.php'; 
        settarget("River",18,null,18);
        if($_SESSION["YEAR"]<5){
            $_SESSION["YEAR"] = 5;
        }
        include '../footer.php';
        echo getarrows("04_3_River.php","05_1_River.php");
        setlast("Year/04_1_River.php");
    ?>
</body>
