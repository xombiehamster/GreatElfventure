<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 6 - Fall
    </title>
</head>

<body>
    <h1>Year 6 - Fall</h1>
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
            <td>(-18,-17)</td>
            <td>Asavardi</td>
        </tr>
        <tr>
            <th>Arpenter</th>
            <td>(-27,17)</td>
            <td>Elfwatch</td>
        </tr>
        <tr>
            <th>Envoyer</th>
            <td>(11,3)</td>
            <td>Chanceuse River</td>
        </tr>
    </table>
    <p>placeholder</p>
    <h3 id="back">Roleplay Event 6.2.1: <a href="../Bonus/32_A Question of Justice.php">A Question of Justice</a></h3>
    <h3 id="back1">Roleplay Event 6.2.2: <a href="../Bonus/33_A Complicated Future.php">A Complicated Future</a></h3>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic - motivated:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
	<p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3 id="back2">Boxraft Children 6.2.3: <a href="../Bonus/34_A Difficult Lesson.php">A Difficult Lesson</a></h3>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <p><b>Character:</b> placeholder</p>
    <h3>Feathernet</h3>
    <p>placeholder</p>
    <h2>Results</h2>
    <p><b>Economic - Gather Hippos:</b>placeholder</p>
    <p><b>Special:</b> placeholder</p>
    <p><b>Dark Elf Trade Agreement:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military - Scouts:</b>  placeholder</p>
    <p><b>Mental - Building Codes:</b> placeholder</p>
    <h3 id="back3">Boxraft Children 6.2.4: <a href="../Bonus/35_A Rescued Stray.php">A Rescued Stray</a></h3>
    <p>placeholder</p>
    <h3>Feathernet:</h3>
    <p>placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",24,null,35);
        include '../footer.php';
        echo getarrows("06_1_River.php","06_3_River.php");
        setlast("Year/06_2_River.php");
    ?>
</body>
