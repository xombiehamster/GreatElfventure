<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 3 - Winter
    </title>
</head>

<body>
    <h1>Year 3 - Winter</h1>
    <h3 id="back">Check-in with Allophryne 3.3.1: <a href="../Bonus/9_A Conversation with Heaven.php#3w">A Conversation with Heaven</a></h3>
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
    </table>
    <h3 id="back2">Roleplay Event 3.3.2: <a href="../Bonus/10_A New Family.php">A New Family</a></h3>
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
        settarget("River",12,null,10);
        include '../footer.php';
        echo getarrows("03_2_River.php","03_4_River.php");
        setlast("Year/03_3_River.php");
    ?>
</body>
