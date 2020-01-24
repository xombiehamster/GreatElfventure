<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 5 - Winter
    </title>
</head>

<body>
    <h1>Year 5 - Winter</h1>
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
    <h3 id="back">Boxraft Children 5.3.1: <a href="../Bonus/23_A Strange Friend.php">A Strange Friend</a></h3>
    <p>Placeholder</p>
    <h3 id="back2">Roleplay Event 5.3.2: <a href="../Bonus/24_A Second Chance.php">A Second Chance</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Element:</b> placeholder</p>
    <p><b>Military: </b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3 id="back3">Boxraft Children  5.3.3: <a href="../Bonus/25_A Safe Fortress.php">A Safe Fortress</a></h3>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Lumber Shipment:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Winter Quarters:</b> placeholder</p>
    <p><b>Fort Álfyr:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Misc:</b> placeholder</p>
    <h3><b>Dilemma:</b> Just around the river bend</h3>
    <p><b>Status:</b> placeholder</p>
    <p>placeholder</p>
        
    <?php
        include '../../settarget.php'; 
        settarget("River",21,null,25);
        include '../footer.php';
        echo getarrows("05_2_River.php","05_4_River.php");
        setlast("Year/05_3_River.php");
    ?>
</body>
