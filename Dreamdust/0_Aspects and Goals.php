<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dreamdust Elf Overview
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Overview</h1>
    <p>The Dreamdust elves used to be nocturnal nomads in the desert, roaming around, raising goats, with a few dogs and domesticated cheetahs.  Their few oasis cities were taken over by the Lycans, and they joined the resistance effort shortly after.</p>
    <p>For the most part, they engaged in support, subterfuge, and spying-- making sure that allies were well-rested, bringing nightmares to enemies, aiding in interrogations.  They read the minds of enemies, when they could get within range, and passed on the information using their dreamspeaker talents.  The Dreamdust elves also assisted by putting those running Lycan supply shipments to sleep, to aid in absconding with or spoiling shipments, and to aid in interrogation.</p>
    <p>They love ferreting out info, just to <i>know things</i>.</p>
    <p></p>
    <h2>High Concept</h2>
    <p><i>Drugs and Goats</i></p>
    <p>Semi-nomadic herders, with a fondness for drugs and goats.</p>
    <h2>Trouble Concept</h2>
    <p><i>Torn Between Dreams and Practicality</i></p>
    <p>The Dreamdust Elves’ culture is steeped in mysticism and portents, but it takes practicality to survive in the desert.</p>
    <p>This dichotomy is an ongoing point of conflict within their society; some lean hard into practicality to make decisions, while others rely on omens and emotional impressions to choose their path.</p>    
    <h2>Before the War</h2>
    <p><i>Free as the Wind</i></p>
    <p>The Dreamdust Elves were largely desert nomads, with only a few population centers around oases.  They and their animals roamed freely, limited only by the need for water.</p>
    <h2>Joining the War</h2>
    <p><i>Water is Sacred</i></p>
    <p>The Lycans betrayed our hospitality in order to claim our oasis cities as their own.  First they claimed the oases.  Second, we offered hospitality and they betrayed that, offering hostility in exchange.  Then, they rationed the water they had claimed, and refused to offer water to guests, as hospitality demands.</p>
    <h2>During the War</h2>
    <p><i>I Spy A Ly</i></p>
    <p>The Dreamdust Elves were vital to Lock’s spy network and communications.  They got close by feigning allegiance to the Lycan, or using the Dark Elves’ tunnels beneath the city, to get close enough to read the minds of enemies.  They passed on that information through their uninterceptable dreamspeaker talents.  They also observed interrogations, picking out lies.</p>
    <h2>The Post-War Dream</h2>
    <p><i>Blooming Oasis</i></p>
    <p>The war is over.  Our new dream is to learn these new lands, to see our goat herds thrive, and build trade relationships with our cousin elves.</p>

    <h1>Goals</h1>
    <ol>
        <li><i>Be at Peace</i><br/>The Dreamdust elves want to recover from the war, as best we can.  We want to build relationships that will lead to a lasting peace, and want to heal the mental wounds that still linger, in ourselves and our allies.</li>
        <li><i>Forewarned is forearmed</i><br/>We were surprised once.  We want to build peace, but we want to know the people around us, inside and out.  Now that there is time, we want to learn what we can about this land and our allies.</li>
    </ol>
        
    <?php
    #Update bonus sequence
    include '../settarget.php'; 
    settarget("Dreamdust",null,1,null);
    #Footer content
    include '../footer.php';
    echo getarrows(null,"1_Factions.php");?>
</body>
</html>
