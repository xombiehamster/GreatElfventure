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
    <h2>Roleplay Event 6.0: <a href="../../Events/06_0.php">A Precipitous Potluck</a></h2>
    <h3>Roleplay Event 6.0: <a href="../../Blade/Bonus/9_Bits and Pieces.php">Bits and Pieces</a></h3>
    <h3>Roleplay Event 6.0: <a href="../../Blade/Bonus/11_Open Athlon I.php">Open Athlon I</a></h3>
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
            <td>Oarsman's Rest</td>
        </tr>
        <tr>
            <th>Arpenter</th>
            <td>(-22,15)</td>
            <td>Marraine River</td>
        </tr>
        <tr>
            <th>Envoyer</th>
            <td>(10,1)</td>
            <td>Eparchy</td>
        </tr>
    </table>
    <p>placeholder</p>
    <h3 id="back">Boxraft Children 6.1: <a href="../Bonus/30_A Wandering River">A Wandering River</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic - Stunt Use - Elf Prime:</b> placeholder</p>
    <h3 id="back2">Roleplay Event 6.1: <a href="../Bonus/31_An Asavardian Night.php">An Asavardian Night</a></h3>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Military (FP Motivated): </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h3>Feathernet</h3>
    <p> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic - Bribe:</b> placeholder</p>
    <p><b>Economic - Asavardi:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military - Badgers:</b> placeholder</p>
    <p><b>Military - Hippos:</b> placeholder</p>
    <p><b>The Expedition:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Misc:</b> placeholder</p>
    <h4><b>Dilemma:</b> placeholder</h4>
    <p><b>Status:</b> placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",23,null,31);
        include '../footer.php';
        echo getarrows("05_4_River.php","06_2_River.php");
        setlast("Year/06_1_River.php");
    ?>
</body>
