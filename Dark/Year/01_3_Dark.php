<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        River Elf Year 1 - Fall
    </title>
</head>

<body>
    <h1>Year 1 - Fall</h1>
    <table style="width:100%">
        <tr>
            <th>Stress</th>
            <td>Economic 0/5</td>
            <td>Morale 0/5</td>
            <td>Property 0/4</td>
            <td>Military 0/5</td>
        </tr>
        <tr>
            <th>Fate Points</th>
            <td>3/3 Refresh</td>
            <td>0 Bonus</td>
        </tr>
        <tr>
            <th>Parager</th>
            <td>(-12,8)</td>
            <td>Goldfall River</td>
        </tr>
    </table>
    <p>Staurois paces uncomfortably across the porch of the Hylidae raft.  Smilisca sits on a stump that’s been bolted to the deck boards and works on tying a complicated knot in the map braid for the Goldfall River.  Acris watches his master’s hands intently from where he sits at his feet, practicing his own knots by tying them in fishing line next to Eina with her feet dangling in the cool clear water.  Litoria stands in the shallow water next to the raft, leaning gently on her hippopotamus while she grazes.</p>
    <p><b>Economic:</b> With Eina motivating the work efforts with the blessings of Calestros, work begins on building a lift - a “fall hopper” - made of pulleys and sturdy ropes with boulders for counterbalance.  They put to use the extra materials on hand that were left over from the original raft construction projects.  This makes use of the Investment trapping of Infrastructure with 2 Ability, 1 Proficiency, and 2 Boost dice: 5 advantage, 3 successes, 0 triumphs</p>

    <?php
    include '../../settarget.php'; 
    settarget("Dark",4,null,null);
    include '../footer.php';
    echo getarrows("01_2_Dark.php","01_4_Dark.php");?>
</body>
