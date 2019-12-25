<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Winged Elf Overview
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Overview</h1>
    <p>Winged elves are gregarious and cheerful people. Like most elves, they place huge importance on family and community. The line between friend and family is blurry, and several families have long-standing friendships going back generations. They’re perfectly happy to extend that friendship to other races, elf or otherwise.</p>

<p>Wherever they go, winged elves make their homes off the ground. Their ancestral homeland was a forest of enormous trees, and most of the city was entirely inaccessible from the ground. Following the war and the destruction of the forest, they are now taking up residence on cliff faces.</p>

    <h2>High Concept</h2>
    <p><i>Elves that revere stories and history.</i></p>
    <p>Elves have long lives and longer memories. Our memories aren’t solely our own; we share them with everyone else, and those memories make up our identity as a people.</p>

    <h2>Trouble Concept</h2>
    <p><i>Flight and flightiness go hand in hand.</i></p>
    <p>We seek out the new and the interesting, jumping from one thing to another, sometimes at the expense of the thing we’re leaving. We are an enthusiastic people, but sometimes short on discipline.</p>

    <h1>Goals</h1>
    <ol>
        <li><i>Above the Fray</i><br/>We will build our aeries high and strong enough to keep us safe.</li>
        <li><i>Voices on the Wind</i><br/>Maintain trade and relationships with other elves to ensure a network of communication and support. Just in case.</li>
    </ol>

    <h1>Milestones</h1>
    <h2>Before the War</h2>
    <p><i>Everyone has a story to tell, and they’re all worth knowing.</i></p>
    <p>We were artists, singers, hunters, and gardeners. We lived in our forest, and we traveled where we wished. We found joy and worth in all the beautiful things of the world, and in making and sharing them with others. </p>

    <p><b>Upgrade:</b> The huge array of stories circulating through their culture gives them a lot of ideas to pull from, and gives them a permanent upgrade to the <i>Logistics</i> skill.</p>

    <h2>Joining the War</h2>
    <p><i>The smallest bird still has talons.</i></p>
    <p>We had been content, more or less, to acquiesce to the empire. Their restrictions were nonsensical to us, but minor inconveniences. Until the killing started. Killing and killing and killing. We saw it coming, and we tried to get our people out, away into the wilds where even they wouldn’t find us. But we were scattered and they came for us too soon, and brought atrocity with them. They burned our forest down around us, and murdered those trying to escape. The War started with us, with the death of a child. We were the breath that would become a hurricane to tear the Empire down.</p>

    <p><b>Upgrade:</b> The winged elves are a tight community, and pull together hard in times of trouble. They gain a permanent upgrade to <i>Loyalty.</i></p>

    <h2>During the War</h2>
    <p><i>Into the teeth of the storm, wingtip to wingtip.</i></p>
    <p>There were so many, but it never seemed like enough. We were outnumbered, outmatched, but what could we do? We hid, we fought, we ran. For decades, leaping from one discontented place to another. We kept ahead of them, barely, and we were still there when rebellion turned to War. And we were needed. The monsters they called Myrkyr, giant bats, would have decimated the people on the ground without us to intercept them. We were fighters, scouts, messengers, hunters. We never regretted our decision to fight, but even if we had, even if we surrendered, they would have killed us all. Sometimes landing is more dangerous than riding out the winds. We saw the storm, tasted it, felt it in our solid bones, and drove through together, trusting each other to catch any who fell.</p>

    <p><b>Upgrade:</b> Their unique capabilities made them invaluable during the war, not only in the fighting but behind enemy lines, and gives them a permanent upgrade to <i>Special Operations</i>.</p>

    <h2>The Post-War Dream</h2>
    <p><i>The sky is no limit.</i></p>
    <p>Our forest is gone. We’ve known this for years. But we are a people of stories, and history. The forest is ours, and we will always have it. We have always looked up and ahead, into the new and the unknown. As long as there is wind to carry us and the sun to guide us, we will live on. It’s time for a new story cycle.</p>

    <p><b>Upgrade:</b> The winged elves have a very go-with-the-flow attitude and pride themselves on always looking ahead. This gives them a permanent upgrade to <i>Spirituality</i>.</p>
    
    <?php
        include '../settarget.php'; 
        settarget("Winged",null,1,null);
        include '../footer.php';
        echo getarrows(null,"1_Factions.php");
    ?>
</body>
</html>
