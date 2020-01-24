<?php session_start(); ?>
<!DOCTYPE html>

<head><?php include '../../header.php'; ?>
    <title>
        A Conversation with Heaven
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
</head>
<body>
    <h1>A Conversation with Heaven</h1>
    <h2>Year 3, Summer</h2>
    <p>Allophryne is fishing in the swamp and has an absolute monster of a dogfish on the line.  He’s reeling it in and reeling it in and it just keeps getting bigger and heavier.  A many-layered voice says from on high, “You’re doing great!  Keep going!”  The fish has far too many teeth.  It bites his shoulder.</p>
    <p>Stars glitter in the night sky.  There’s far too many of them.  They look like spots of ink.  The ink runs and drips like water.  “It’s okay, honey, I won’t be mad if you talk to other people.”  The voice sounds like more than one person speaking at the same time.  It speaks Elven with no accent.</p>
    <?php 
        include '../footer.php';
        if($_SESSION["RIVER"]>=11){
            echo'<h2 id="3f">Year 3, Fall</h2>';
            echo'<p>Allophryne licks the beaded sweat from his wife’s back.  The narrow white stripes on her green skin are intoxicatingly enticing.  His hands find purchase on her hips.  “I hate to interrupt, but isn’t there something you’re supposed to be doing?”  That’s not his wife’s voice.  He closes his eyes, and when they open, the body he sees is covered in white fur.</p>';
            echo '<p>Allophryne is sitting on top of a mountain.  There is snow all around that glitters and reflects bright moonlight.  Allophryne feels the cold through his thick fur.  The snow is dense under his paws.  He runs along the mountain’s peak.  His teeth snap at the stars.  They taste spicy.  “It’s not going to be easy, but I have faith in you.”  The snow speaks with many voices.</p>';
            if($_SESSION["RIVER"]=11){
                echo getarrows("../Year/03_2_River.php#back","../Year/03_2_River.php#back");
            }
        }else{
            echo getarrows("8_A Moonlit Flight.php","../Year/03_1_River.php#back3");
        }
        if($_SESSION["RIVER"]>=12){
            echo'<h2 id="3w">Year 3, Winter</h2>';
            echo'<p>“It’s been a while since you had one of them weird dreams,” Blinkin mumbles, with his mouth full of Afflicted.  Allophryne stabs the monster again from his position in the battle line.  “Do you really think He’ll give up on you that quickly?”  The alligator’s voice is clear enough even though he’s swallowing the limb he severed.  The gator’s one golden eye winks slowly at him.  The werewolf roars and bites Allophryne’s shoulder.</p>';
            echo'<p>Allophryne is standing on a pile of bodies. They are elves of all types. He doesn’t know what to do. One of the corpses grabs his leg. He struggles to get away, but it’s too strong. Gray fur covers the arm that grabs him. More of the bodies grab him, twisting and changing shape. Fur and teeth drag him under. He throws an arm up for help just before he is pulled out of sight. Another arm, covered in fur, grabs his hand to pull him back out. The bodies around him speak at once with many voices, “I think she needs your help.”</p>';
            if($_SESSION["RIVER"]=12){
                echo getarrows("../Year/03_3_River.php#back","../Year/03_3_River.php#back");
            }
        }
        if($_SESSION["RIVER"]>=13){
            echo'<h2 id="3sp">Year 3, Spring</h2>';
            echo'<p>The crocodile’s teeth grip fiercely into his thigh.  Allophryne grits his teeth and searches with his wicked little oyster shucking knife for the hinge in the beast’s jaw.  It shifts its weight in preparation for a death roll.  Allophryne isn’t fast enough.  He is going to die.  A massive white werewolf grabs the crocodile’s tail and drags it away from him.  Its yelp of surprise and pain releases his leg.  The werewolf speaks in many voices: “Sweetie, how many times do you need to be saved before it’s your turn to save someone else?”</p>';
            echo'<p>A vast infinite darkness beholds Allophryne.  The sea below, black and featureless.  The sky above an empty void.  “Get going now, you hear?”  The voice is multitudes.  “Hurry!”  The yawning abyss above and below threatens to swallow him.  Allophryne floats in indecision.</p>';
            if($_SESSION["RIVER"]=13){
                echo getarrows("../Year/03_4_River.php#back","../Year/03_4_River.php#back");
            }else{
                echo getarrows(null,null);
            }
        }

        setlast("Bonus/9_A Conversation with Heaven.php");
    ?>
</body>
</html>
