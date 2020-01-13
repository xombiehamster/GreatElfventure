<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 3 - Summer
    </title>
</head>

<body>
    <h1>Year 3 - Summer</h1>
    <h2>Roleplay Event 2.0: <a href="../../Events/03_0.php">Firey Speeches and Brimstone Buffets</a></h2>
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
            <td>(-11,6)</td>
            <td>Goldfall River</td>
        </tr>
    </table>
    <p>placeholder</p>
    <h3 id="back">Roleplay Event 3.1.1: <a href="../Bonus/7_A Course Is Changed.php">A Course Is Changed</a></h3>
    <p>placeholder</p>
    <h3 id="back">Roleplay Event 3.1.2: <a href="../Bonus/8_A Moonlit Flight.php">A Moonlit Flight</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b>placeholder</p>
    <h3 id="back2">Roleplay Event 3.1.3: <a href="../../Blade/Bonus/2_A Plan Comes Together.php">A Plan Comes Together</a></h3>
    <h3 id="back2">Play By Post 3.1.4: <a href="../../Blade/Bonus/3_Operation Birdcage.php">Operation Birdcage</a></h3>
    <h2>Results</h2>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3>Story 3.1.5: <a href="../../Blade/Bonus/4_A Broken Promise.php">A Broken Promise</a></h3>
    <p><b>News Arrives:</b> placeholder</p>
    <p><b>Additionally:</b> placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",10,null,8);
        settarget("Blade",null,null,4);
        include '../footer.php';
        echo getarrows("02_4_River.php","03_2_River.php");
        setlast("Year/03_1_River.php");
    ?>
</body>
