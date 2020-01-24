<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 3 - Spring
    </title>
</head>

<body>
    <h1>Year 3 - Spring</h1>
    <h3 id="back">Check-in with Allophryne 3.4.1: <a href="../Bonus/9_A Conversation with Heaven.php#3sp">A Conversation with Heaven</a></h3>
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
    </table>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3 id="back">Roleplay Event 3.4.2: <a href="../Bonus/11_A Scholarly Pursuit.php">A Scholarly Pursuit</a></h3>
    <p>placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b>placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3><a href="../../Events/04_0.php">The Elves Gather for Their Annual Potluck</a></h3>
    <?php
        include '../../settarget.php'; 
        settarget("River",14,null,11);
        if($_SESSION["YEAR"]<4){
            $_SESSION["YEAR"] = 4;
        }
        include '../footer.php';
        echo getarrows("03_3_River.php","04_1_River.php");
        setlast("Year/03_4_River.php");
    ?>
</body>
