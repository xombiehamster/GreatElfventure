<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
<link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 5 - Fall
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
    </table>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
	<p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b>placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b>  placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p id="back"><a href="../Bonus/23_A Dependable Blade.php">A Dependable Blade</a></p>
    
    <?php
        include '../../settarget.php'; 
        settarget("Fire",19,null,23);
        include '../footer.php';
        echo getarrows("05_1_Fire.php","05_3_Fire.php");
        setlast("Year/05_2_Fire.php");
    ?>
</body>
