<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        River Elf Leadership
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Leadership</h1>
    <h2>Leader</h2>
    <!-- Image goes here !-->
    <img class="avatar" src="Images/Dust.png">
    <p><b>Dust</b> is the primary leader of the Dreamdust elves.  He and Dream share responsibilities, but Dust is primarily in charge of the pragmatic side of things.</p>
    <p>In appearance, Dust strives to be quiet and forgettable, until the moment he isn't.  While he has the typical Dreamdust fondness for bright colors, he makes sure it can be quickly camoflaged; thus, he will wear bright shirts or sashes if he has an earthtoned cloak. This is a lingering habit from the war, when being overlooked kept him alive more than once.  He has dark skin, short salt and pepper hair, and distinctive copper eyes.  Despite being 6'10", he blends surprisingly well into the background.</p>
    <p>Dust has a lot of concerns about how the different elves are (not) handling their trauma from the war.</p>
    <p></p>
    <p><b>High Concept:</b><i></i><br/>
        (Concept)</p>
    <p></p>
    <p><b>Trouble Concept:</b><i></i><br>
        (Concept)</p>
    <p></p>
    <p><b>Character levels:</b><i></i><br>
        Investigator 11</p>
    <p></p>

    <h2>Leader</h2>
    <!-- Image goes here !-->
    <img class="avatar" src="Images/Steve.png">
    <p><b>Dream</b>, more commonly known as Steve, is the secondary leader of the Dreamdust elves.  He and Dust share responsibilities, but Steve handles the mystical side of things, and morale and mental health.</p>
    <p>Steve is... colorful.  He has never met a color he didn't like, preferably all at once.  He is 6'8", with dark skin, long curly hair that is often barely-contained by a bandanna or scarf, and gold eyes.  He loves people!  And goats!  And drugs!  And stars!  And weaving!</p>
    <p>Unfortunately, Steve has trouble communicating clearly, and struggles to make his words come out right.  It takes patience to understand what he's getting at, sometimes.</p>
    <p>Steve's original name was Tahvo.</p>
    <p></p>
    <p><b>High Concept:</b><i></i><br/>
        (Concept)</p>
    <p></p>
    <p><b>Trouble Concept:</b><i></i><br>
        (Concept)</p>
    <p></p>
    <p><b>Character levels:</b><i></i><br>
        Oracle 9</p>
    <p></p>

    <h2>Scoutmaster</h2>
    <!-- Image goes here !-->
    <img class="avatar" src="Images/Pebble.png">
    <p><b>Pebble</b> is the Dreamdust elves' scoutmaster.  She knew the desert better than she knew herself, and has learned the new scrubland just as well.  She is fantastic with the goats, rarely without one or two.</p>
    <p>Pebble is 6'4", with amber eyes and dark brown curly hair.  She's on the young side for the position she holds, but she's the best qualified for the job, and there weren't many left after the war who were.</p>
    <p></p>
    <p><b>High Concept:</b><i></i><br/>
        (Concept)</p>
    <p></p>
    <p><b>Trouble Concept:</b><i></i><br>
        (Concept)</p>
    <p></p>
    <p><b>Character levels:</b><i></i><br>
        Ranger 7, Warden Archetype</p>
    <p></p>

    <h2>Quartermaster</h2>
    <!-- Image goes here !-->
    <img class="avatar" src="Images/Dave.png">
    <p><b>Dave</b>, is the Dreamdust elves' Quartermaster. She is old and grumpy and possibly an alcoholic, but she can trade for or possibly steal anything you might need.</p>
    <p>Dave has brown skin, gold eyes, and curly black hair.  She has resting suspicion-face, and doesn't let anyone get away with anything under her watch.</p>
    <p></p>
    <p><b>High Concept:</b><i></i><br/>
        (Concept)</p>
    <p></p>
    <p><b>Trouble Concept:</b><i></i><br>
        (Concept)</p>
    <p></p>
    <p><b>Character levels:</b><i></i><br>
        Rogue 7</p>
    <p></p>

    <?php
        include '../settarget.php'; 
        settarget("Dreamdust",null,3,null);
        include '../footer.php';
        echo getarrows("1_Factions.php","3_Stunts and Rituals.php");
    ?>
</body>
</html>
