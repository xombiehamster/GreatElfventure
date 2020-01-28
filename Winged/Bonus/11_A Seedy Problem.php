<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Seedy Problem
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>A Seedy Problem</h1>

<p>"Everything was right! We checked the soil, the water, and the plants and seeds we were using!" Tassimir paced back and forth, gesturing with hands and wings. "Nothing! Nothing sprouted, and the live plants we transplanted <i>died!</i>"</p>

<p>Shadimon struggled to keep his ears from dropping, "The farms are doing fine, at least. It's not a matter of life or death at this point?"</p>

<p>"No, but that's not the <i>point!</i>" Tassimir fluffed his wings, sending a small shower of feathers floating away. "The point is that these gardens are supposed to be beautiful! They're supposed to turn the village into something we can be proud of!"</p>

<p>"Dragging any kind of life out of rock is an achievement for us," Shadimon said. "You said the construction is done, right? Everything is in place?"</p>

<p>"Well yes-"</p>

<p>"It's almost winter, which isn't the best time for planting, as I understand it. Would it be best to wait until spring to try again?"</p>

<p>"Probably, but-"</p>

<p>"Have any of the gardeners been checking in on the Grove?"</p>

<p>Tassimir brightened, "Oh, yes!" He rubbed his hands together, "You remember we transplanted darkwood saplings, and they all appear to be doing perfectly well. We're mostly keeping an eye on the trees for now to give them plenty of time to establish themselves, but everything looks good. We have plans for trellises and flowering vines, and we're making lists of local seasonal plants so we can make sure there will be flowers in all seasons. Possibly some pine saplings as well for the greenery..."</p>

<p>Shadimon listened attentively as the lead gardener rambled on about their plans for the memorial. Anything was better than the feather-pulling frustration. When Tassimir finally ran out of momentum he sighed, "You're right about needing to wait until spring for any real planting. But...we can try cultivating some plants indoors over the winter, so we have more live transplants. Some of the herbs might be hardy enough." He nodded to himself, "That's a good idea, we'll do that." He abruptly waved to Shadimon and wandered outside, back in his own world.</p>

<p><i>And that's the key, Shadimon thought wryly. Let people talk out and solve their own problems...</i></p>

      <?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,11);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Winged.php#jump","../Year/02_3_Winged.php#jump");
    setlast("Bonus/11_A Seedy Problem.php");?>
</body>
</html>
