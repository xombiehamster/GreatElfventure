<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Winter, Year 1
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Winter Year 1: Turn 3</h1>

<p>Working stone continued to be hard. Some of their artisans had done stone-carving before, but never on such a huge scale. The most they were experienced with was sculpting small pieces, and they all lamented that the cliffs were a different type of stone that didn’t behave at all like they expected. Fortunately, through all the trial and error, there were mercifully few injuries, and no deaths. A few people sported patches of mismatched feathers, where broken ones had to be replaced by donations from friends, but most wore those as a mark of chagrined pride. </p>

<p>The first attempts at establishing a garden on the cliff walls had failed. Some patches that had been seeded were still under close observation, but the locations with live plants had mostly fallen apart. Flying through the canyon, Shadimon could see the darker streaks where people were lining ledges with richer soil to try to get plants to take. Ledges around developing house fronts were quickly acquiring soil, and some people were beginning to carve planters under windows, or plant climbing vines at the bases of door posts. </p>

<p>A knot of people were clustered around a native patch of greenery, and Shadimon glided closer for a better look. One of them waved him in, and he found a narrow edge to land on. “Shadi! Still trying to be everywhere I see.” </p>

<p>Shadimon snorted, leaning against the wall, “Since there never seems to be a lack of work to be done, and <i>someone</i> decided to leave it all to me.”</p>

<p>Kirien batted his eyelashes, “I was sure you could handle it. I deserved my retirement.”</p>

<p>“Yes, ‘retirement’ in the form of a very large rock, if I recall…”</p>

<p>Kirien laughed and patted his leg. It had been healed magically, but the shattering damage that had taken him out of the war had left it weakened. “Yes indeed. A perfect excuse. Look here, we’re looking at these plants that are already growing for ideas on how to do it ourselves. Half of them are just growing out of bare rock, it looks like. But some of them have made their own soil, as they die back for the winter. It doesn’t seem to get as cold here, so the growing season might be better. We want to try again in the spring, see if we can get some things established as everything already here starts growing again. Could protect some of our shade-loving plants down here too.”</p>

<p>“Good to know you have it in hand. Plants were never my specialty, at least not like that.”</p>

<p>“Mhm, Tassimir has mostly taken charge of it. He was the one that grew the canopy orchids before, you remember. He’s good with difficult plants. But speaking of...well, it was his idea, and I’ll let him propose it formally, but it’s a good one.” He grinned at Shadimon’s aggrieved sigh, “It’s an important one, so you’ll have to receive it properly as the wingleader.” </p>

<p>“Fine, but now I’m curious. Make sure he finds me soon.”</p>

<p>Kirien and his helpers waved as Shadimon stepped off the ledge. Kirien was right that the canyon walls could be an ideal place to grow some of their plants, but it was going to take time. They’d had canopy gardens in the forest, but growing plants on living trees was significantly easier than on bare rock. They were, once again, having to learn new techniques.</p>

<p>Shadimon angled his wings and flew higher, above the walls of the canyon and up until the people working on the rim dwindled to tiny specks. The air was cold and thin, but the sun warmed his feathers as he spread his wings and let the wind carry him. The cold wind blew his busy thoughts clear, and he settled into the comfortable minutiae of flight. </p>

<p>Winged elves could feel and move all of their feathers independently, one of the facts that made them so agile in the air. It took years to master the complex tiny movements that could alter a flightpath, where a single feather shifted at just the right moment could be the difference between a fatal collision and a near miss. Many spent their adolescent years learning that control, often at the expense of injuries, but most adults settled into saner flying patterns. Scouts and rangers, like Shadimon, were chosen from among the best flyers, and honed those skills further. When the War came and the Harriers were made, they pushed themselves to the utmost of speed and precision. Nothing less would have served.</p>

<p>Shadimon looked down at the canyon system spreading below, from the main canyon they had claimed to the many, many smaller branches. He flexed his wings, feeling his feathers ripple in a wave, then folded his wings and plummeted. He had flown high, but the ground raced toward him as the wind roared in his ears. In open air, it was easy. He aimed his path toward one of the smaller canyons, picking up speed. Part of him was exasperated, knowing perfectly well that this was stupid. But a greater part of him had absolute trust in himself.</p>

<p>The canyon mouth loomed up and swallowed him.</p>

<p>He’d chosen one of the twisting slot canyons. It was barely wide enough to fully spread his wings, and he felt his feathers brushing the walls. Shadimon had never flown this particular canyon before, and at the speed he was traveling, there was no time for conscious thought. Everything from the angle of his head to the position of his hands came into play as he raced through the twists and turns and around unexpected stone spires. One came close enough to leave a painful scrape across his chest that he didn’t find until later.</p>

<p>The canyon started to narrow too much and he was losing momentum, so he tilted his wings and shot upward and out into clear air. Looking down, the canyon tapered off to nothing very quickly, and the point where he had left was almost the last place he could have safely done so. The hot air rising from the rocky ground easily lifted him back up as he made a long turn back toward the village. A leisurely glide home and maybe a meal, and he felt like he’d be able to deal with being a leader again.</p>

<p>They talked for a little longer about colors and styles, and the artist cheerfully returned to her makeshift studio, leaving the finished feather with Shadimon. He tilted one wing forward and ran his hand through the smaller covert feathers until he found one that was ready to come out. Plucking the feather free, he clipped it to the little chain and smoothed out the fibers. Lacking anything better for now, he set it in the center of the table. It could be hung up later to mark whatever the official town center ended up being.</p>
      <?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,3);
    #Footer content
    include '../footer.php';
    echo getflapstory("../Year/01_3_Winged.php",null);
    echo getarrows("1_Fall.php",getflapnext($_SESSION["W_EXTRA"],3,"4_Spring.php"));
    setlast("Bonus/3_Winter.php");?>
</body>
</html>
