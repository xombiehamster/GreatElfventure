<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 5 - Fall
    </title>
</head>

<body>
    <h1>Year 5 - Fall</h1>
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
            <td>(-14,-17)</td>
            <td>Rock River</td>
        </tr>
        <tr>
            <th>Arpenter</th>
            <td>(-20,14)</td>
            <td>Marraine River</td>
        </tr>
        <tr>
            <th>Envoyer</th>
            <td>(-2,3)</td>
            <td>Winter Quarters</td>
        </tr>
    </table>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
	<p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3 id="back">Boxraft Children 5.2.1: <a href="../Bonus/21_A Shady Stowaway.php">A Shady Stowaway</a></h3>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h3 id="back2">Boxraft Children 5.2.2: <a href="../Bonus/22_A Dependable Blade.php">A Dependable Blade</a></h3>
    <p><b>Misc:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b>placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b>  placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h4><b>Dilemma:</b> placeholder</h4>
    <p><b>Status:</b> placeholder</p>
    <h3>Feathernet:</h3>
    <p><b>Military Reaction:</b> placeholder</p>
    <h3>Battle Summary</h3>
    <p><b>Battle of Crag Marsh:</b> placeholder</p>
    <p><b>Unit Report:</b> placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",20,null,22);
        include '../footer.php';
        echo getarrows("05_1_River.php","05_3_River.php");
        setlast("Year/05_2_River.php");
    ?>
</body>
