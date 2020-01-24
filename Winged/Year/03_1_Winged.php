<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 3 - Summer
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
        
    </table>
    <h3 id="jump-1">Roleplay Event 3.1.1: <a href="../Bonus/10_A Rude Awakening.php">A Rude Awakening</a></h3>
    <h3 id="jump">Roleplay Event 3.1.2: <a href="../Bonus/11_A Moonlit Flight.php">A Moonlit Flight</a></h3>    
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("Winged",10,null,11);
        settarget("Blade",null,null,3);
        include '../footer.php';
        echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("02_4_Winged.php","03_2_Winged.php");
        setlast("Year/03_1_Winged.php");
    ?>
</body>
