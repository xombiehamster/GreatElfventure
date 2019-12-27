<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dark Elf Overview
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Overview</h1>
    <p>Also known as Živé Duše amongst themselves, dark elves make their homes in caves and tunnels close to volcanoes and lava flows.  If needed, they expand with man-made tunnels into new cave systems that spider out under much of the surface settlements.  Reserved and cautious, they like to keep to themselves for the most part - introverts at heart one could say.  Despite this, they are highly communal as per most elves and if one were to gain the trust and respect of a dark elf - they would have a steadfast ally and friend for life.</p>
    <h2>High Concept</h2>
    <p><i>Together in the Dark</i></p>
    <p>We dig tunnels and sing in the deep of ancient woes we keep.  Through rememberance we remain as those whose souls are stained. </p>
    <h2>Trouble Concept</h2>
    <p><i>Alone in the Dark</i></p>
    <p>Before the loss of our caves we were self-sufficient and never had a need to rely on anyone outside of ourselves.  Not for food, space, water, conflicts, etc.  Now that the war is done and our old home collapsed, we find ourselves at the mercy of others in similar situations.  We are not fully sure how to proceed or ask for help.</p>    
    <h2>Before the War</h2>
    <p><i>Neither above or below</i></p>
    <p>Our tunnels were our walls and our eyes, reaching far and wide to protect our home caves.  Each cave had its own vivid and individual culture with the threads of our old stories tying us all together into a tight community.  Neither surface or subterranean, we stand proud of what we are and are content to let everyone else be.  We are not prone to getting involved in the issues that arise above or below us, but some things cannot be avoided forever.</p>
    <p>
        <p>
            <b>Upgrade:</b> Community Bound<br/>
            The dark elves tightly knit culture and pride in being in-between gives them a permanent upgrade to the <i>Loyalty</i> skill.
        </p>
    </p>
    <h2>Joining the War</h2>
    <p><i>We shall sit idle no more</i></p>
    <p>Stayed out of the war for a decent portion of it in the beginning.  Became involved when Shyrendora’s scouts came back with stories of what was happening on the surface and she decided that they would open their tunnels to refugees as a way to get them to safe areas.  The current leader of her home cave protested this, telling her that if she did so their people would be at risk and no surfacer was worth that.  However, as more and more people hear first hand stories of what was going on upstairs, it became a slow sliding scale into being actively involved with the rebels and trying to overthrow the Lycans.</p>  
    <p>Some who are still gripped by the freshness of the loss they have suffered feel that this was indeed a mistake and that all could have been mitigated by staying out of the more surface dwelling races’ business, while others are keenly aware that it was only a matter of time before the Lycans started to put control over their tunnel systems as well.</p>
    <p>
        <p>
            <b>Upgrade:</b> Elven Spec Ops<br/>
            Dark elves gain permanent upgrade to the <i>Special Operations</i> skill due to the specialized role their forces partook in for the sake of civilians and noncombatants.
        </p>
    </p>
    <h2>During the War</h2>
    <p><i>Drums in the deep</i></p>
    <p>Once we began to help move refugees to safe places outside of active warzones, soon we were asked if we could open our tunnels for other reasons.  We helped send messages to other encampments, and even participated in our own guerrilla warfare.  We tried to be careful, creating fake tunnels into nowhere and even trapping any that we thought could lead back to us after helping take out key targets in enemy territory.</p>
    <p>We weren’t careful enough.</p>
    <p>They came for us with diggers of their own.  Sharp claws and snarling teeth that we couldn’t fully fight against.  We tried as best we could to keep them at bay, but they moved forward relentlessly, destroying important tunnels as they crawled ever closer to our homes.  We have no choice now.  We have to leave.  We have to destroy what we can so that if we lose this war, our own homes will not be used against us.  We must scatter, they won’t be able to get all of us.</p>
    <p>
        <p>
            <b>Upgrade:</b> Tunnel Engineers<br/>
            Their wartime tunnel and trap building to keep enemies at bay while evacuating civilians gives the dark elves a permanent upgrade to the <i>Infrastructure</i> skill.
        </p>
    </p>
    <h2>The Post-War Dream</h2>
    <p><i>A New Dawn</i></p>
    <p>Pushed from our comfort zone and forced into things much larger than ourselves, we look to this new dawn and strive for the hope that it wishes to give us.  Home is more than just a place.  It is our People, our History, our Bonds.</p>
    <p>
	<p>
            <b>Upgrade:</b> Stubbornly Onwards<br/>
            Entangled with the surface elves now, the dark elves shfit towards an unknown future alien from what they remember.  They are stubborn and determined to make the most of these new friendships for the hardship they know are on the horizon.  Their resilience to being 'knocked down' gives them an upgrade to their <i>Recovery</i> skill.
	</p>
    </p>
    <h1>Goals</h1>
    <ol>
        <li><i>Reunited once more.</i><br/>There is a hope that once the dark elves face the trials of settling into a new home, they will be able to search for their lost kin and be reunited.</li>
        <li><i>One hand to the sky, another to the deep.</i><br/>To remain self sufficient, but foster good communal relationships with those who dwell on the surface.  They are family now, even if not all believe it.</i>
    </ol>
        
    <?php
    #Update bonus sequence
    include '../settarget.php'; 
    settarget("Dark",null,1,null);
    #Footer content
    include 'footer.php';
    echo getarrows(null,"1_Factions.php");
    echo getlast();?>
</body>
</html>
