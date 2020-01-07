<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 4 - Fall
    </title>
</head>

<body>
    <h1>Year 4 - Fall</h1>
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
        settarget("Winged",15,null,null);
        include '../footer.php';
        echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("04_1_Winged.php","04_3_Winged.php");
        setlast("Year/04_2_Winged.php");
    ?>
</body>
