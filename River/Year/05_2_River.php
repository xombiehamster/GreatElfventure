<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
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
    </table>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
	<p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b>placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b>  placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <p><b>Other:</b> placeholder</p>
    <p><b>Misc:</b> placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",19,null,null);
        include '../footer.php';
        echo getarrows("05_1_River.php","05_3_River.php");
        setlast("Year/05_2_River.php");
    ?>
</body>
