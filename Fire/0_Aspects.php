<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Fire Elf Overview
    </title>
</head>

<body>
<h1>Overview</h1>
    <h2>Before the War</h2>
    <p><em>Supply Base</em></p>
    <p>Muspelham (named by the Lycans for the smoke of its forges) was once the central supply depot for much of the Lycans' auxiliary forces, as well as a training site for the greenest of recruits.</p>
    <p><strong>Upgrade:</strong> <em>Military Science</em>.</p>
    <h2><strong>Joining the War</strong></h2>
    <p><em>Hardened</em></p>
    <p>Even before the war, the training centers and logistics systems of Muspelham were a hub for the great engineers, researchers, and educators of the Blade Elf war machine. Those who followed their brethren into the fight for liberation had their skills tested to the limit, designing architecture to withstand Lycan raiding forces and building ritual overlays to counter Lycan battle casters. Limited resources and desperate measures inured Muspelham&rsquo;s great minds to the cost of experimentation.</p>
    <p><strong>Upgrade:</strong> <em>Academics</em>.</p>
    <h2><strong>During the War</strong></h2>
    <p><em>Birth Pyre.</em></p>
    <p>The Conflagration of Elves took the life of 9 out of every 10 residents of Muspelham, but the remainder emerged with unnatural vigor and unsurprising rage. Muspelham was never rebuilt, but it's forges rang regardless; a shambling corpse of industry back for revenge on its killers.</p>
    <p><strong>Upgrade:</strong> <em>Recovery</em>.</p>
    <h2>The Post-War Dream</h2>
    <p><em>Empire of the Sun</em></p>
    <p>Mere freedom is no longer enough. Muspelham is gone, and the Supply Elves with it. The only way to remember them is to build bigger, fight harder, and burn brighter until you outshine everyone, from the damned Lycans to the 'brothers' that let your family die.</p>
    <p><strong>Upgrade:</strong> <em>Infrastructure.</em></p>
    <h2><strong>Civile Praesidium</strong></h2>
    <p>Born from Ashwalker Tsun&rsquo;s speech in the fear and terror following the Tourist&rsquo;s incursion, the Civilie Praesidium is an organized volunteer militia from within the Fire Elf civilian population. They are firefighters, construction workers, civil engineers, guards, and even auxiliary soldiers in times of crisis.</p>
    <?php 
        if(is_null($_SESSION["F_EXTRA"])){
            $_SESSION["F_EXTRA"] = 1;
        }
    ?>
    <?php include '../footer.php';?>
</body>
</html>
