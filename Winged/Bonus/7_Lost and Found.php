<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Lost and Found
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <link rel="stylesheet" type="text/css" href="../../Blade/NPC.css">
</head>

<body>
<h1>Lost and Found</h1>

<p>"Shadi! SHADI!"</p>

<p>Shadimon was halfway across the room, knocking over the stool he'd been sitting on, before the door curtain flew open and Anasatri bolted in. "Goddess, Satri, what-"</p>

<p>"Elves! Flying in from the north! The scouts recognize them; it's some of the lost ones after the fall!"</p>

<p>There was an electric pause before Shadimon lunged after her out the door, both of them flinging themselves into the air and shooting up to the top of the cliffs. A broad flat area on the eastern cliff had been designated as a common space, and some rammed-earth buildings had been put up near the farms to serve as store houses. More were under construction as small guest spaces for non-winged visitors who weren't up to navigating the narrow walkways of the cliff walls.</p>

<p>Shadimon and Anasatri joined a crowd that had already gathered. The group was visible in the distance, as were a couple of the scouts that were flying ahead to lead them in. There were a few dozen, and some were carrying supply nets. Shouts went up from the crowd as the new arrivals got close enough to recognize their wings. They kicked up great clouds of dust as they landed, but the near-constant winds quickly blew it away, allowing the residents of Asavardi to rush forward, bringing water and taking baggage.</p>

<p>Word had spread, of course, and by this time it seemed like everyone in the village who could was on the cliff tops to greet the newcomers. Shadimon witnessed several gleeful and tearful reunions as friends and family members, lost and feared dead, found each other again. They were all quickly absorbed into families and offered temporary places to stay, and the top of the cliff slowly emptied. There would be a celebration, but it could wait until everyone had rested.</p>

<p>Two elves broke away from a knot of well-wishers and made their way towards Shadimon. (Anasatri had vanished into the fray almost the moment people had landed.) He recognized them both, and held out his arms and wings to greet them, "Khatri, Bhandari, I'm so happy to see you!"</p>

<p>"Not as much as we are to see you! Goddess, we were afraid we were the only ones left! There was so much chaos after Skaplyndi fell..."</p>

<p>"I'd like to know what happened to you all, but it can at least wait until you've had some rest and a meal. Has someone offered you a place to stay?"</p>

<p>"Yes! Jiral, one of Bhandari's cousins and her family. It looks like everyone has been found or adopted for now."</p>

<p>"Perfect. I'll let them catch you up on everything here. There will almost certainly be some kind of party in the next few days, and we can catch up then if there isn't time before."</p>

      <?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,7);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Winged.php#jump3","../Year/02_1_Winged.php#jump3");
    setlast("Bonus/7_Lost and Found.php");?>
</body>
</html>
