<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        River Elf Year 3 - Fall
    </title>
</head>

<body>
    <h1>Year 3 - Fall</h1>
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
            <td>(-15,7)</td>
            <td>Crater Lake</td>
        </tr>
    </table>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b>placeholder</p>
    <p><b>Political:</b>placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Extra:</b> placeholder</p>
    <p><b>War Games:</b> placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",11,null,null);
        include '../footer.php';
        echo getarrows("03_1_River.php","03_3_River.php");
        setlast("Year/03_2_River.php");
    ?>
</body>
