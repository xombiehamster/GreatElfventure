<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 5 - Spring
    </title>
</head>

<body>
    <h1>Year 5 - Spring</h1>
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
    <h4>Feathernet</h4>
    <p>Placeholder</p>
    <h3 id="back">Boxraft Children 5.4.1: <a href="../Bonus/28_An Uncharted Course.php">An Uncharted Course</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic - Stunt Use - Elf Prime:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3 id="back2">Roleplay Event 4.4.2: <a href="../Bonus/29_A Choice Made.php">A Choice Made</a></h3>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h2>Results</h2>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic - Stunt Use - Elf Prime:</b> placeholder</p>
    <p><b>Political:</b>placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3><a href="../../Events/06_0.php">The Elves Gather for Their Annual Potluck</a></h3>
    <?php
        include '../../settarget.php'; 
        settarget("River",22,null,29);
        if($_SESSION["YEAR"]<6){
            $_SESSION["YEAR"] = 6;
        }
        include '../footer.php';
        echo getarrows("05_3_River.php","06_1_River.php");
        setlast("Year/05_1_River.php");
    ?>
</body>
