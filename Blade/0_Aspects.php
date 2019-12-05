<?php 
include "../header.php"
?>
<!DOCTYPE html>

<head>
    <title>
        Blade Elf Overview
    </title>
</head>

<body>
    <h1>Overview</h1>
    <p>Unlike their free-spirited and mystical elf kin, Blade elves are a grounded, stoic, pragmatic, and martial people. Originally slave soldiers of the Lycan Empire, the Blade elves rebelled against their former masters and won their freedom. Though today
        they deeply value their freedom and ability to live in peace, they maintain the martial traditions the Lycans gave them. They consider their skills vital, as their culture encourages them to be ever vigilant against the return of tyranny and slavery.</p>
    <h2>High Concept</h2>
    <p><i>Elves born and bred for war.</i></p>
    <p>The Blade elves were created, not born. Early in their conquests, the Lycans saw the utility of elves for warfare. Lycans took elven infants, those orphaned by their conquests, and found among them the strongest and sturdiest among the elves. These
        became the first Blade elves.</p>
    <p>Blade Elves were trained from birth in all manner of warfare, from the most demanding elite Lycan teachers. Their long lives typically cut short by violence, Blade elves became a society of rigidly enforced stoic discipline and resolve. They had all
        of their elven history and identity stripped away. After they turned on their former masters, they now seek to reconnect with their heritage. They know, however, that they will forever different from their kin- and from this they draw strength.</p>
    <?php 
        if($_SESSION["BLADE"] == 0){
            $_SESSION["BLADE"] = 1;
        }
    ?>
    <?php include '../footer.php';?>
</body>
</html>
