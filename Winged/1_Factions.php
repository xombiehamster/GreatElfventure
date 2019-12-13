<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Winged Elf Factions
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h2>Birds of a Feather</h2>
    <p>Prior to the War, the winged elves lived in independent villages in their vast forest. A part of the population is quite comfortably settling back into the same pattern, and distrusts the idea of a more formalized or centralized government. Afterall, the only example they have is the tyrannical Empire.</p>

    <h2>Storm Recovery</h2>
    <p>The nearly-tribal way of life prior to the War is what nearly wiped them out, say others. They were too scattered, too tied up in their own local dramas to pay attention to the wider world or even their neighbors. These people believe that a return to isolated villages will be the death of them, and that they <i>must</i> pull together into a more cohesive whole in order to survive in the future.</p>

    <?php
        include '../settarget.php'; 
        settarget("Winged",null,2,null);
        include '../footer.php';
        echo getarrows("0_Aspects.php","2_Leadership.php");
    ?>
</body>
</html>