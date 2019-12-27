<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        River Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Stunts</h1>
    <h2>River Nomads</h2>
    <p>When first constructing a new settlement, you may choose to apply the Settlement Aspect Nomadic to it. A Nomadic settlement can move around the map, moving 20 squares per turn. When traveling upstream on a river, River Elves move at their regular speed.  When traveling downstream, they move at twice their regular speed.  Overland or at sea, they travel at half their regular speed.  </p>
    <p>A Nomadic settlement has the advantage that it can invoke any Aspect of a square it ends on or adjacent friendly settlements and can move away from some negative Aspects if need be. A Nomadic settlement cannot grow above Town size and cannot have any Aspects related to permanently located structures.</p>
    <h2>It Just Fell Over We Swear!</h2>
    <p>When River Elves know how to build something, it’s just as easy for them to take it down.  They are able to use the Infrastructure skill to disassemble buildings instead of Conventional Warfare to Raze, and when doing so maintain a pretense at plausible deniability.  This also limits casualties for the Raze action when they are taking down structures.</p>
    <?php
    if($_SESSION["RIVER"]>=5){
        echo 
        '<h2>Elf Express</h2>
        <p>One of the benefits of being nomadic is that River Elves are able to make deliveries of trade goods possible.  When a River Elf settlement is within two squares of another settlement they are able to complete a Trade action with the other settlement without expending the other settlement’s Economic action for the turn because the other settlement just needs to accept the offer instead of having to also make a delivery of their own.</p>';
    }
    ?>
    <h1>Rituals</h1>
    <?php
    if($_SESSION["RIVER"]>=5){
        echo
        '<h2>River Augury</h2>
        <ul><li><b>Risk:</b> Low</li>
            <li><b>Range:</b> One Settlement</li>
            <li><b>Target:</b> One planned river route</li>
            <li><b>Difficulty:</b> 1</li>
            <li><b>Effect:</b> <p>This ritual will give you information on a planned river route. By outlining a single settlement’s planned route, this spell will give you one of 4 answers relating to the climate specifically: Weal for good results, Woe for bad results, Weal and Woe for a mix of both, and Nothing for the weather not having any huge impact. It cannot predict events not influenced by climate.</p>
                <p>River Augury looks one year into the future and has a %85 chance of an accurate result. If an inaccurate result is made, it will always respond with “Nothing.” If a fate point is spent in the casting of this ritual, it is %100 accurate. Multiple castings of this spell on the same river within the same year give the same results.</p>            
                <p>This spell may be improved by further magic research.</p></li></ul>';
    }else{
        echo '<p>No rituals created... yet!</p>';
    }
    include '../settarget.php'; 
    settarget("River",null,4,null);
    include 'footer.php';
    echo getarrows("2_Leadership.php","4_Details.php");
    echo goback();?>
</body>
</html>
