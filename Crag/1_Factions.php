<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Crag Elf Factions
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
	<p> The concept of Factions is a curious one among the Crag.  One might assume that their seperated Bloodlines would lead to factionalization, and to some degree this is true... but not in the same way most would think when speaking of factions.  In truth, the closer consideration for that concept lies largely in how each individual Crag has handled the loss of the Tome, and what they see as the way forward for their people.  For most, this is a personally held opinion; few would lower themselves to openly voice their concerns so.</p>
    <h2>The Soles Along The Path</h2>
    <p>With the destruction of The Tome of Physical Perfection, untold generations of progress has been set adrift.  Without its guiding principles, and without its vision for their ultimate ascension to the Ideal Elf, Crag Elf society is effectively pointless.  All is not lost, however.  The Soles Along the Path believe that, as the Truth of the Tome was incorruptible, the elements which made up its truth must still reside somewhere in The World.  It is known that the First Generation, the great progenitors who envisioned The Path that they all walked upon, collected their wealth of information from observing and investigating their distant Elf-kins, looking for what pressures encouraged which properties and how best to meld these elements into a singular, perfect Elf.  Furthermore, though the Lycan raids were devastating, there are surviving elements all around, either left in ruins, or taken as trophies, or simply scattered with those who fled and died, which may be collected and collated to achieve their ultimate dream: the Recreation of The Tome of Physical Perfection. </p>
    <h2>Those Who Trod Uncertainty</h2>
    <p>Shocked at how easily war and conflict disrupted the long and laborious path that was set before them in The Tome, Those Who Trod Uncertainty question whether the wisdom of their ancestors could have possibly accounted for a world that has been so changed, and, far worse, has become aware of their existence, potentially capable of interfering again at any time.  Although there can be no question that the Crag elves are currently incomplete, that there is a great deal of work to be done, feverishly seeking to return to a plan which may no longer be valid is utter folly.  They insist that their path lies not in the past, but in the present: that to counter the damages done by the Lycan War, they must become a New First Generation, working to create a New Path which can lead them to their Idealized state.  The new Tome of Physical Perfection must not be chained to the errors and mistakes of old: it must be writ fresh, anew, and with all the knowledge of the modern era to steer it.</p>
	<h2>The Unmoved</h2>
    <p>The ultimate goal of The Tome of Physical Perfection was to create an Ideal Elf, one free from infirmity, a perfect body to match a perfect mind.  All around them, Crag Elves bemoan their incomplete state, that they have not reached perfection, that they are not all they could be.  To The Unmoved, this is disgusting mewling.  The lessons of the Lycan war were plain for all to see, but nobody is learning the correct lesson; unprepared for war, armed only for internal conflict, and inexperienced in battle, the Crag Elves survived.  Their losses may have been devastating, but considering the scope of the Lycan military, had they been weaker, they would have been extinguished.  While others bemoan their lost path, the Unmoved see the truth; the difference between Almost Perfect and Perfect is not worth fretting over.  The Crag Elves in their current state are implacable engines of war.  None can face them in equal numbers and prevail.  The time has come for new leadership, one freed from mysticism and castes; the time has come to revel, for the Ideal Elves are here.</p>
    <?php
        include '../settarget.php'; 
        settarget("Crag",null,2,null);
        include 'footer.php';
        echo getarrows("0_Aspects.php","2_Stunts and Rituals.php");
        echo getlast();
    ?>
</body>
</html>