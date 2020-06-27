<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 7 - Winter
    </title>
</head>

<body>
    <h1>Year 7 - Winter</h1>
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
        <tr>
            <th>Amie Navire</th>
            <td>(-2,3)</td>
            <td>Winter Quarters</td>
        </tr>
    </table>
    <p>Placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Element:</b> placeholder</p>
    <p><b>Military: </b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3 id="back1">Roleplay Event 7.3.1: <a href="../Bonus/?_A Little Shade.php">A Little Shade</a></h3>
    <h3 id="back2">Boxraft Children 7.3.2: <a href="../Bonus/?_A Family Trip.php">A Family Trip</a></h3>
    <h2>Results</h2>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Element:</b> placeholder</p>
    <p><b>Military: </b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
        
    <?php
        include '../../settarget.php'; 
        settarget("River",29,null,27);
        include '../footer.php';
        echo getarrows("07_2_River.php","07_4_River.php");
        setlast("Year/07_3_River.php");
    ?>
</body>
