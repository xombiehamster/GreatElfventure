<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dark Elf Leadership
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Leadership</h1>
    <h2>Domawit</h2>
    <!-- Image goes here !-->
    <img class="avatar" src="Images/Shyrendora.png">
    <p><b>Shyrendora</b> is the daughter to the old Domawit and was the original Scoutmaster for the Dark Elves before the war and even into the early parts of it.  She is considered to be a rebel among other higher ups of their people, as it was her idea to open their tunnels to help the surface elves during the war.</p>
    <p>When the other leaders died - or left with the other groups during their escape from the caves, everyone looked to her for guidance on what to do next.  She has begrudgingly accepted the role as the de facto leader to her people but hopes she can pass it to someone she feels would be better suited to the job once things settle down.</p>
    <p><p>
        <b>High Concept:</b><i> Open Minded</i><br/>
        Things that stray from routine are not always things that cause harm.  New places, new people, and new experiences all have their role in keeping things moving forward.
    </p></p>
    <p><p>
        <b>Trouble Concept:</b><i> Too Forward</i><br>
        Sometimes Shyrendora moves too forward, and too swiftly.  One could even call it running from something that seems to lurk just over her mental shoulder at all times.  Sometimes it looks like herself, othertimes someone very similar to herself.
    </p></p>
    <ul><li><i>Stygian Slayer 11</i></li>
    <li><i>Rising Dawn</i></li></ul>
    <h2>Scoutmaster</h2>
    <!-- Image goes here !-->
    <img class="avatar" src="Images/Trischal.png">
    <p><b>Trischal </b> is a good childhood friend to Shyrendora and one of her best trained Scouts.  Came into this role after the war when her friend finally gave into the people’s demand and accepted the role of leader.</p>
    <p>Sarcastic and usually laid back in nature, war has given her a paranoid edge that won’t be soothed over anytime soon.  After losing her whole scouting party in a collapse caused by the Lycan’s, she is remis to let anyone out of her sight for long periods of time and is prone to sharp memory flashes.  Her badger companion, Fuzzy, keeps her grounded during these times.</p>
    <p>Trischal puts her all into her new role as Scoutmaster, swearing that she will not let previous losses happen again.  Her main concern is keeping the people as safe as she can as they head out into the unknown.</p>
    <p><p>
        <b>High Concept:</b><i> Sharp Wit</i><br>
        Trischal is easy to get along with and has a sharp eye for details when she is relaxed.  Her humor is one of her better qualities.
    </p></p>
    <p><p>
        <b>Trouble Concept:</b><i> High Alert</i><br>
        Letting people she cares about out of her sight for too long causes Trischal to enter varying stages of panic.  Sometimes this drives her to be a harm to her close personal relationships by attempting to control what they do and where they do, or do not, go.
    </p></p>
    <ul><li><i>Totem-Bonded Hunter 7</i></li>
    <li><i>Home Caves/Rising Dawn</i></li></ul>
    <h2>Head Chronicler</h2>
    <!-- Image goes here !-->
    <img class="avatar" src="Images/Rasputin.png">
    <p><b>Rasputin</b> is...alarmingly charismatic and intelligent.  Possibly the oldest dark elf, most of the people refer to him as their weird Uncle (also the head chronicler) as he is both related/not related to everyone and has a sharp memory for many of their older stories.  He also has some really fancy plans for making a spa?  No one knows for sure.  He mutters a lot to himself while tinkering with things that probably shouldn’t be tinkered with.</p>
    <p>Somehow he manages to keep track of supplies and always seems to know how much is on hand and where it all went to, so people kinda just let him take over on matters of economy.</p>
    <p><p>
        <b>High Concept:</b><i> Terrifying Intellect</i><br>
        Intelligent with an overly large force of personality to back it up.
    </p></p>
    <p><p>
        <b>Trouble Concept:</b><i> Batty as Hell</i><br>
        Blind as a bat and can't keep his own senses straight.  No one is sure if he actually gets them confused or if he is doing it to mess with people.
    </p></p>
    <ul><li><i>Stonesinger Bard 6</i></li>
    <li><i>???</i></li></ul>
    <h2>Voice of the People</h2>
    <!-- Image goes here !-->
    <img class="avatar" src="Images/Greg.png">
    <p><b>"Greg"</b> is an accomplished alchemist and was actually one of Rasputin’s pupils for many, many years.  He is well known for his “don’t give a fuck” attitude and blunt honesty, which the everyday citizen was grateful for during the war when he started to call leaders out on their bullshit.</p>
    <p>Everyone kinda shoved him into being the voice of the people, one thing that he and Shyrendora have fun sighing about during meetings.  As it stands, Greg comes across as tired and prickly to most people who first meet him - he finds it a waste of time and energy to pretend social niceties when honesty is usually more appreciated.  He cares about his people, even if they are exhausting, and wants them to find a home once more.</p>
    <p><p>
        <b>High Concept:</b><i> Questionable Heart of Gold</i><br>
        Even as a hermit, Greg is willing to be pulled out of his isolation for the sake of his people.  From how he complains, you would never know that it is willing.
    </p></p>
    <p><p>
        <b>Trouble Concept:</b><i> Questionable Heart of Coal</i><br>
        Greg walks a fine line and has maybe one sanity anchor that keeps him from sliding too far.  He can be cruel and abrasive even when giving willing help.
    </p></p>
    <ul><li><i>Alchemist 7</i></li>
    <li><i>Traditionalist</i></li></ul>

    <?php
        include '../settarget.php'; 
        settarget("Dark",null,3,null);
        include '../footer.php';
        echo getarrows("1_Factions.php","3_Stunts and Rituals.php");
        echo getlast();
    ?>
</body>
</html>
