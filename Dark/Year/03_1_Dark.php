<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 3 - Summer
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>

<body>
    <h1>Year 3 - Summer</h1>
    <h2>Roleplay Event 3.0: <a href="../../Events/03_0.php">Firey Speeches and Brimstone Buffets</a></h2>
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
    settarget("Dark",10,null,null);
    include '../footer.php';
    echo getarrows("02_4_Dark.php","03_2_Dark.php");
    setlast("Year/03_1_Dark.php");?>
</body>
