<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        River Elf Year 4 - Winter
    </title>
</head>

<body>
    <h1>Year 4 - Winter</h1>
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
            <td>2/3 Refresh</td>
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
    <p>placeholder</p>
    <h3 id="back">Roleplay Event 4.3.1: <a href="../Bonus/13_A Friend in Need.php">A Friend in Need</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic (motivated):</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b> placeholder</p>
    <h3 id="back2">Boxraft Children 4.3: <a href="../Bonus/14_A Tale Begins.php">A Tale Begins</a></h3>
    <h3 id="back3">Roleplay Event 4.3.2: <a href="../Bonus/15_A Familiar Stranger.php">A Familiar Stranger</a></h3>
    <p><b>Mental:</b> placeholder</p>
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
        settarget("River",16,null,15);
        include '../footer.php';
        echo getarrows("04_2_River.php","04_4_River.php");
        setlast("Year/04_3_River.php");
    ?>
</body>
