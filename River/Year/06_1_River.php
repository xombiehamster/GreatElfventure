<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 6 - Summer
    </title>
</head>

<body>
    <h1>Year 6 - Summer</h1>
    <h2>Roleplay Event 6.0: <a href="../../Events/06_0.php">A Potluck with a View</a></h2>
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
            <td>Burning Wolf River</td>
        </tr>
        <tr>
            <th>Arpenter</th>
            <td>(-21,-7)</td>
            <td>Marraine River</td>
        </tr>
        <tr>
            <th>Envoyer</th>
            <td>(-2,3)</td>
            <td>Winter Quarters</td>
        </tr>
    </table>
    <p>placeholder</p>
    <h3 id="back">Boxraft Children 6.1: <a href="../Bonus/19_A Rocky Shore.php">A Rocky Shore</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic - Stunt Use - Elf Prime:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h3 id="back">Roleplay Event 6.1: <a href="../Bonus/20_A Dark Secret.php">A Dark Secret</a></h3>
    <h2>Results</h2>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Misc:</b> placeholder</p>
    <h4><b>Dilemma:</b> placeholder</h4>
    <p><b>Status:</b> placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",23,null,20);
        include '../footer.php';
        echo getarrows("05_4_River.php","06_2_River.php");
        setlast("Year/06_1_River.php");
    ?>
</body>
