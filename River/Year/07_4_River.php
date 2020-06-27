<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 7 - Spring
    </title>
</head>

<body>
    <h1>Year 7 - Spring</h1>
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
        <tr>
            <th>Amie Navire</th>
            <td>(-2,3)</td>
            <td>Winter Quarters</td>
        </tr>
    </table>
    <p>placeholder</p>
    <p><b>Economic - Stunt Use! - Elf Prime:</b> placeholder</p>
    <p><b>Economic</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h2>Results</h2>
    <p>placeholder</p>
    <p><b>Economic - Cryptids:</b> placeholder</p>
    <p><b>Economic - Beavers:</b> placeholder</p>
    <p><b>Military - Scouting:</b> placeholder</p>
    <p><b>Political:</b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3><a href="../../Events/08_0.php">The Elves Gather for Their Annual Potluck</a></h3>
    <?php
        include '../../settarget.php'; 
        settarget("River",30,null,null);
        if($_SESSION["YEAR"]<8){
            $_SESSION["YEAR"] = 8;
        }
        include '../footer.php';
        echo getarrows("07_3_River.php","08_1_River.php");
        setlast("Year/07_1_River.php");
    ?>
</body>
