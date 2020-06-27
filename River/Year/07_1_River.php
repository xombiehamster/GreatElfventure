<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
    <title>
        River Elf Year 7 - Summer
    </title>
</head>

<body>
    <h1>Year 7 - Summer</h1>
    <p>Placeholder</p>
    <h2>Roleplay Event 7.0: <a href="../../Events/07_0.php">A Potluck Disassembled</a></h2>
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
            <td>(-11,12)</td>
            <td>Gerdr</td>
        </tr>
        <tr>
            <th>Arpenter</th>
            <td>(-18,14)</td>
            <td>Fool's Fortune Mine</td>
        </tr>
        <tr>
            <th>Envoyer</th>
            <td>(0,0)</td>
            <td>Fort Alfyr</td>
        </tr>
        <tr>
            <th>Amie Navire</th>
            <td>(-11,11)</td>
            <td>Gerdr</td>
        </tr>
    </table>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Economic - Stunt Use - Elf Prime:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h2>Results</h2>
    <p id="Surt"><b>Surt:</b> placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Trade:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b> <i><a href="#Surt">See Surt</a></i></p>
    <p><b>Mental:</b> placeholder</p>
    <h4>Embebi's Proposal</h4>
    <p>placeholder</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("River",27,null,20);
        include '../footer.php';
        echo getarrows("06_4_River.php","07_2_River.php");
        setlast("Year/07_1_River.php");
    ?>
</body>
