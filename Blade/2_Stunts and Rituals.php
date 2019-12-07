<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Blade Elf Stunts and Rituals
    </title>
</head>

<body>
    <h1>Stunts</h1>
    <h2>Military Discipline</h2>
    <p>While the narrow line between Blade Elf military and civilian life may be concerning to outsiders, it is something from which they draw strength. In times crisis, their military has been known to step in and support their population. Outsiders frequently mistake this for martial law, but in reality most Blade elves are used to functioning under rigid military discipline and see it as helping their kin and country.</p>
    <p>If a division is currently unoccupied, the Blade elves may substitute the Military Science skill for Recovery. This makes that Division occupied for that turn. If the skill is not successful, the Division suffers a Low Morale condition for the next turn and that Division cannot be used for this skill.</p>
    <h2>Stoic Resolve</h2>
    <p>Blade elves are culturally inclined to withstanding hardship, even more so than other war survivors. A sense of stoic stiff upper lip is deeply ingrained in their culture. They aren't emotionless, but can withstand a little more hardship than most.</p>
    <p>Whenever Blade elves take a Consequence to absorb Stress on the Morale track, increase the Stress absorbed by one.</p>
    <h2>Mandatory Military Service</h2>
    <p>All Blade elves are required to serve in the military for some period of time. While most of these are reflected in their military skills and active units, the military maintains a large number of reserve units in the general population at any time. By calling on these reservists (and perhaps the large population of veterans) the Blade elves can call up a large number of troops. These are not conscripts or ill-trained militia- they are professional soldiers. However, this draws critical people away from their jobs and cannot be sustained.</p>
    <p>At any time, the Blade elves may make a special use of the Drill trapping of the Military Science skill. This use of the trapping receives one upgrade, but can only be used to recruit units of Blade Elf Reservists. These units are not limited by normal military size restrictions and can be called up at any settlement, but the Blade elves suffer one box of temporary Stress to the Economic track when they are called up and one additional box on every turn they are active. This Stress cannot be absorbed or mitigated in any way, but is removed when they are disbanded.</p>
    <h1>Rituals</h1>
    <p>Blade elves are bad at magic.  They don't have any rituals yet.</p>
    <?php
        include '../settarget.php'; 
        settarget("Blade",null,3);

        include '../footer.php';
        echo getarrows("1_Factions.php","3_Leadership.php");
    ?>
</body>
</html>