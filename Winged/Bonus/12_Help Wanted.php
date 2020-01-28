<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Help Wanted
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Help Wanted</h1>

<p>Shadimon suppressed the urge to sigh. He sighed far too much lately, and besides, his exasperation was not the fault of the man standing on his doorstep. He knew Tathariel; he was a leatherworker and an enchanter who had been one of the junior armorers during the War. Shadimon had seen him around - his wings were striking black with red markings - but their paths didn't cross much otherwise. He held back another sigh, "Baijani sent you?"</p>

<p>Tathariel nodded, "She's been very ah, vocal about worrying about you. But, she also knows that you probably don't want to be blown over by a crowd of people. She asked if I would be willing to check in and help around the house. Do some of the chores you don't have time for, and the like." He dipped his wings, "I'm perfectly willing to, but only if it doesn't bother you."</p>

<p>Shadimon tilted his head now, "Why did she choose you? Nothing against you, but I question her motives."</p>

<p>Tathariel coughed, chagrined, "Well, as to that, it's my fault. I'm a leatherworker, and we...don't exactly have a profusion of material right now. Even with my magic, we just...don't have the supplies I'd need, really. I've been trying to help out where I can, but I seem to be terrible at just about everything else. She might have, ah, heard me lamenting needing to feel more useful..."</p>

<p>Shadimon blinked a few times and started laughing, "All right, <i>that</i> sounds in character. I'm still dubious but..." He did sigh now, "I do need the help. Come in, and let's talk."</p>

<p>His home was still sparse, and not as finished as many of the others. He didn't have the time or skill to do the work himself, and he refused to take workers away from community projects. He had chosen an existing cave, as a much easier option than cutting a full home from the rock. There had been just enough work done to define the living spaces, and the floor had been smoothed, but little of the refinement that other homes had. Shadimon took a seat in the sunken sitting area -a staple in most winged elf homes - and Tathariel sat across from him. "So, what do you have in mind?"</p>

<p>"I was going to ask you the same thing. Baijani suggested things like making sure there's food, maybe laundry, general tidying. I would do things while you're out; I don't want to step on your privacy or do anything you're not comfortable with."</p>

<p>Shadimon blinked, this was surprisingly more consideration than he had expected. "That's...quite reasonable." He looked around the room, "Tidying isn't much of a problem here, as you can see...But I do have a tendency to skip meals if there isn't food right in front of me..."</p>

<p>Tathariel nodded, "I can't really promise any kind of gourmet meals, but there are plenty of things that can be done in advance and keep well. Something you wouldn't have to do any extra work on."</p>

<p>"And this isn't going to impact you? Baijani has a way of dragging people along in her wake, but sometimes she forgets the small details. Like the fact that other people in fact have lives."</p>

<p>Tathariel laughed, "No no, it's no trouble to me. I, well, my days are pretty flexible. I've been doing a lot of similar things at home, anyway. Most of my family is working on the farms or buildings, so I've been keeping the house. Adding one more person won't be any burden."</p>

<p>"Good, then yes, I'll gladly accept the help. Just let me know if anything changes and you need to stop."</p>

      <?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,12);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Winged.php#jump2","../Year/02_3_Winged.php#jump2");
    setlast("Bonus/12_Help Wanted.php");?>
</body>
</html>
