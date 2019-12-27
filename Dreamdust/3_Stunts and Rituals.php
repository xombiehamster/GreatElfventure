<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dreamdust Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Stunts</h1>
    <h2>Nomadic</h2>
    <p>When first constructing a new settlement, you may choose to apply the Settlement Aspect Nomadic to it. A Nomadic settlement can move around the map. Town sized settlements can move 10 squares per turn, Villages can move 20 squares per turn, and Outposts can move 30 squares per turn. If they cross difficult terrain such as mountains or deep rivers, this speed is halved. They may move at an additional 10(***) squares per turn, but cannot invoke any of their aspects or take any other actions as they devote all of their time to moving.</p>
    <p>Town size settlements move at .5x speed; Outpost size settlements move at 1.5x speed.</p><p>
A Nomadic settlement has the advantage that it can invoke any Aspect of a square it ends on or adjacent friendly settlements and can move away from some negative Aspects if need be. A Nomadic settlement cannot grow above Town size and cannot have any Aspects related to permanent structures.</p>
    <h2>Concealed Settlements</h2>
    <p>If a faction performs Pathfinders or Rangers on a settlement containing one of your nomadic settlements of Village size or smaller, they do not automatically detect it. Instead, you roll an opposed Rangers or Pathfinders check in secret. If you receive more successes than the opponent, they do not detect your settlement or any divisions garrisoned within even if they successfully scout the square or detect any divisions outside the settlement.</p>

    <?php
    include '../settarget.php'; 
    settarget("Dreamdust",null,4,null);
    include '../footer.php';
    echo getarrows("2_Leadership.php","4_Details.php");
    echo goback();?>
</body>
</html>
