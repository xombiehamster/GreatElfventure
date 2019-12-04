<?php 
include '../header.php'
?>
<!DOCTYPE html>

<head>
    <title>
        Blade Elf Overview
    </title>
</head>

<body>
    <h1>Overview</h1>
    <p>River elves as a culture encompasses more than just river elves as a racial subtype, but as non-amphibious elves making a home in this culture are rare, it is acceptable to speak of the culture as if it is made up of only the one racial group.  The way of life of the river elf is essentially nomadic.  They live to ride the flowing rivers on great rafts that carry their homes with them wherever they go.  They use massive beasts to pull the rafts upstream, and then ride leisurely downstream again at the change of seasons.</p>
    <img src="Images/00_0_PreWar_Flotilla.png">
    <p>Each great raft is a family home, as well as being the place of business for those who live on it.  The smith’s raft will be where the smithy is as well as where the smith lives with their family.  Those who do not have a family to share their raft will either band together and share a raft or stay with the flotilla on a personal pirogue.  Every raft has an oarsman, who, though they do not paddle, is in charge of directing the beast that pulls the raft upstream and then manning the rudder when headed downstream.  This is a very important task, and is not granted to anyone who would be distracted at the helm.</p>
    <p>Over winter, the river elves retire to their winter quarters in marshy terrain that can be made safe by being inaccessible to anyone without a watercraft.  This is the only place where they build semi permanent structures, and the only place they actually defend as territory claimed as their own.</p>
    <p>The river elves’ system of government could best be described as an involuntary autocracy.  It is not socially acceptable to openly admit to wanting to be in charge.  They have a long history of write-in elections for positions of power, which they call Assignments.  People are given the duties that others want them to have, and are not able to turn down the nomination to a role.  There’s no schedule for when an election will happen.  If a majority of people decide to have one, then the flotilla is polled and whoever is declared the winner now has to serve in the leadership position their fellows demand.  In practice this works out to be something like a meritocracy with spontaneous Assignments of duties.</p>
    <p>Their system of government extends to how the river elves structure their military.  Should someone throw open a tent and demand action, whoever the majority of the soldiers look to is automatically the officer.  Their Warmaster is Assigned by the troops they lead, but they do not often reassign this role once granted unless there is a very significant morale failure that suggests that their leader has made several bad choices.</p>
    <h2>High Concept</h2>
    <p><i>Merchant Flotilla of Frogs</i></p>
    <img src="Images/00_0_ExampleRiver.png">
    <p>The river elves organize themselves into trading armadas of houseboats, barges, and rafts that ply the rivers and wetlands of the continent to seek out exciting goods and deliver them to exciting elves.  The river elves are amphibious, and are as comfortable in the water as other elves are on land, but do tend to dehydrate more quickly than others.</p>
    <h2>Trouble Concept</h2>
    <p><i>Do we have to say goodbye to the past?</i></p>
    <p>With all that they were and all routes to return seemingly severed, the river elves have some trouble letting go.  The pain of it leads them to tend toward bitterness, and makes relationships with humans very difficult.  They have to strive against this resentment when dealing with anyone they perceive as having lost less and abandoned less of their core identity in the rebellion.</p>    
    <?php 
        if($_SESSION["RIVER"] == 0){
            $_SESSION["RIVER"] = 1;
        }
    ?>
    <?php include '../footer.php';?>
</body>
</html>
