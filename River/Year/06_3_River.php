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
    <p>Placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic - Elf Prime:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Element:</b> placeholder</p>
    <p><b>Military: </b> placeholder</p>
    <h3 id="back1">Roleplay Event  6.3.1: <a href="../Bonus/36_A Warmaster and a Soldier.php">A Warmaster and a Soldier</a></h3>
    <p><b>Mental:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Gerdr:</b> placeholder</p>
    <p><b>Winter Quarters:</b> placeholder</p>
    <p><b>Amie Navire:</b> placeholder</p>
    <h3 id="back2">Boxraft Children 6.3.2: <a href="../Bonus/37_A Just Punishment.php">A Just Punishment</a></h3>
    <p><b>Misc Summary:</b> placeholder</p>
        
    <?php
        include '../../settarget.php'; 
        settarget("River",25,null,37);
        include '../footer.php';
        echo getarrows("06_2_River.php","06_4_River.php");
        setlast("Year/06_3_River.php");
    ?>
</body>
