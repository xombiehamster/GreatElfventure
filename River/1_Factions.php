<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        River Elf Factions
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Factions</h1>
    <h2>Return</h2>
    <p>A small number of the river elves are truly desperate to return to their old home in the marsh on the opposite coast and their preferred river routes among known friends and old acquaintances left behind when they joined the war effort.  They seek to find a new way to cross the mountains, either without hippopotamuses or by finding and raising new behemoths to make the journey.  Failing that, they are willing to reach out to the old nemesis, the sea elves, to accept passage the long way around the continent.  Their numbers are low, but should this new adventure start to fail their sentiments may grow in strength.</p>
    <h2>Revenge</h2>
    <p>For some of the river elves, losing vital portions of their way of life and their culture itself was a price too high to have paid to be rid of the Lycan yoke of slavery.  They were not privy to the tactical considerations that made their sacrifice a necessary one for the long term success of the rebellion.  And they do not care.  They have determined that they despise humans, and the human Locke in particular.  They fantasize complicated revenge plots against his growing kingdom.  If given the opportunity to cause trouble for the human nations they will take it with swift joy.</p>
    <h2>Reunion</h2>
    <p>The majority of the river elves are happy to be nomads again, and are excited for the adventure of building a new set of trade routes.  But their joy is stained by the extreme losses they have suffered, and missing so very many of the friends, relatives, and comrades drives them to desperately seek any hope of finding other survivors that could still be out there.  The vast majority of those on the lists of the missing are noncombatants, nomads out on the rivers when the rebellion dissolved into vicious infighting who could not be contacted anymore.</p>
        
    <?php
    include '../settarget.php'; 
    settarget("River",null,2,null);
    include '../footer.php';
    echo getarrows("0_Aspects.php","2_Leadership.php");?>
</body>
</html>
