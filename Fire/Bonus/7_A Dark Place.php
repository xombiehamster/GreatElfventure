<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Dark Place
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
</head>

<body>
<h1>A Dark Place</h1>

<p><i>In a dark place<i></p>
<p>“You’re an idiot, Ink.” Skulk growled.</p>
<p>Ink did not reply.</p>
<p>“No, you’re <i>insane</i>. Can’t believe you did that. In front of everyone. They know what you can do now. They won’t forget it. And the feathers? You just offered? Didn’t need those. You taught the short one your art? Didn’t need to do that.”</p>
<p>Skulk’s voice lowered, “Ink, they will see us as a <i>resource</i> now. ‘Oh,’ they will say, ‘A problem, I bet Ink could fix it!’ and then they will call us, again and again.”</p>
<p>Ink was still silent.</p>
<p>“And <i>her</i>,” Skulk hissed, “<i>Her</i>, of all people?”</p>
<p>“They needed me.” Ink whispered.</p>
<p>“No they didn’t. Didn’t need feathers, or tattoos, or your magic. And the flaps would have gotten there in time.”</p>
<p>“Don’t know that.”</p>
<p>“Neither did you. Could you have even waited a minute or two? <i>Everyone</i> saw, Ink. <i>Everyone</i> knows what you can do, and they want to <i>know more</i>. That will <i>kill us</i>, Ink.”</p>
<p>“What would you have done?” Ink asked her.</p>
<p>“Not that.” Skulk grunted.</p>
<p>“You would have done nothing.”</p>
<p>Skulk did not reply.</p>
<p>“If we were just going to stay hidden, why did we come this far? Why did we even bother? Could have stayed hidden where we were. What’s the point.”</p>
<p>Skulk grimaced.</p>
<p>“I offered to help the fort,” She countered.</p>
<p>“I know.”</p>
<p>“Doesn’t put us at risk.”</p>
<p>“Much less than we <i>can</i> do.”</p>
<p>“How much?” Skulk asked, “How much danger, exactly, are you willing to put your family in for their sake?”</p>
<p>“They <i>are</i> our family.”</p>
<p>Skulk fell silent.</p>
<p class="center">(Fin)</p>
      <?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Fire",null,null,7);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Fire.php#back","../Year/02_2_Fire.php#back");
    setlast("Bonus/7_A Dark Place.php");?>
</body>
</html>
