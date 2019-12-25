<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dark Elf Factions
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Factions</h1>
    <h2>Home Caves</h2>
    <p>Some of the people were deeply wounded by the loss of history that painted their cave walls.  The decision to collapse their home caves permanently and seek a new home was one they protested against loudly.  Within the post-war happenings, they agreed (begrudgingly) that going back would be too much of a risk.  They were placated with the promise that a Chronicler would be sent back once everything had calmed down so that they could properly record their old stories and paint them anew in their new home system.  What was lost would not be forgotten.</p>
    <h2>Traditionalists</h2>
    <p>There is a very small pocket of protest against further interaction with the surface races.  Despite the current need for obvious communal support from the other elves, they feel that much of the issues that they suffered from the war were things that could have been avoided by minding their own business.  For the moment they only grumble, as causing infighting would not help their people survive the trials to come.</p>
    <h2>Rising Dawn</h2>
    <p>A small division in the scouts, made up of younger dark elves who are quite fascinated with the surface elves.  They hope that they can help continue to foster friendly relations for the betterment of their people, even if they are grumbling the whole time about it.  They see this as a way forward that could help the dark elves breach out of their shells and be a part of something much greater than self-interest.</p>
        
    <?php
    include '../settarget.php'; 
    settarget("Dark",null,2,null);
    include '../footer.php';
    echo getarrows("0_Aspects.php","2_Leadership.php");?>
</body>
</html>
