<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 6 - Winter
    </title>
</head>

<body>
    <h1>Year 6 - Winter</h1>
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
    <h3 id="back3">Boxraft Children  5.3.3: <a href="../Bonus/26_A Safe Fortress.php">A Safe Fortress</a></h3>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h2>Results</h2>
    <p>Combining <b>Event</b> and <b>Political</b> into one: placeholder</p>
    <h4><b>Dilemma:</b> Just around the river bend</h4>
    <p><b>New Era:</b> <i>placeholder</i></p>
    <p><b>Status:</b> placeholder</p>
    <h3 id="back2">Roleplay Event 5.3.4: <a href="../Bonus/27_A New Moon.php">A New Moon</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p>placeholder</p>
        
    <?php
        include '../../settarget.php'; 
        settarget("River",25,null,27);
        include '../footer.php';
        echo getarrows("06_2_River.php","06_4_River.php");
        setlast("Year/06_3_River.php");
    ?>
</body>
