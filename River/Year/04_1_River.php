<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        River Elf Year 4 - Summer
    </title>
</head>

<body>
    <h1>Year 4 - Summer</h1>
    <h2>Roleplay Event 2.0: <a href="../../Events/04_0.php">A Peaceful Potluck</a></h2>
    <h3>Roleplay Event 2.0: <a href="../../Blade/Bonus/4_Bits and Pieces.php">Bits and Pieces</a></h3>
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
            <td>(-12,-8)</td>
            <td>Goldfall River</td>
        </tr>
        <tr>
            <th>Arpenter</th>
            <td>(-21,-7)</td>
            <td>Marraine River</td>
        </tr>
    </table>
    <p>placeholder</p>
    <h3 id="jump">Roleplay Event 4.1.1: <a href="../Bonus/1_A Hitchhiker in Partager.php">Ambush Predators</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Eina:</b> placeholder</p>
    <p><b>Dilemma:</b> placeholder</p>
    <p><b>Status:</b> placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",14,null,null);
        include '../footer.php';
        echo getarrows("03_4_River.php","04_2_River.php");
        setlast("Year/04_1_River.php");
    ?>
</body>
