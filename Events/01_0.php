<?php 
include '../header.php'
?>
<!DOCTYPE html>

<head>
    <title>
        The Potluck
    </title>
</head>

<body>
    <p>Dusk has fallen on Fort Álfyr. The fort is abuzz with activity. The great potluck, for the past few hours, has been a great success. The subtle tension that has been running through the fort for the last few months has faded away. People are relaxed, smiling, chatting with each other. Caravans have been loaded, bags have been packed, the animals have been fed. The months of being stuck in too small a space are finally over. Friends from different groups of elves are saying goodbye. Enemies are avoiding each other. Any and all  food that can’t be packed for transport is being cooked or otherwise prepared and eaten. You have been with your people for most of the evening, but have a formal invitation to a dinner for just a handful of the leaders of the various groups.</p>
    <p>In the center of Fort Álfyr lies what was once the great hall. This two story building was once the home of a wealthy Skati, who ruled over this territory. Those days are long gone. What was once a greatroom for feasting Lycans nobility is now an open room for you to enjoy.</p>
    <p>On the second story of the great hall, this room has open arches allowing a stunning view of the stars slowly becoming visible over the ocean. The room has a high ceiling, with the blade elves having quite courteously placed hooded lanterns near the top casting their light upwards. The reflected light casts the room in a warm glow that’s bright enough for everyone to see, but not blindingly bright for the nocturnal ones.</p>
    <p>The center of the room is dominated by a large circular table that is covered in a blue table cloth. It has many plates of various foods prepared by the blade elves. Thankfully, their cooking has improved a bit. Small roast potatoes, a few chargrilled oysters, and grilled fish- simple fare still, but at least they know how to season things now.</p>
    <p>Ehra stands near the entrance, at his full height, dressed in his best blue robes with his mourning blade polished and sheathed at his back. Siiri, dressed in her official healer’s uniform, stands at his side supporting his arm. Katiin stands at military attention beside him, in her best dress uniform.</p>
    <p>“You should sit, grandfather, I know standing for too long hurts your back.” Siiri comments.</p>
    <p>“Nonsense,” he waves her off with a smile, “I’m old, not dying. I can stand for a few minutes  until guests arrive. What kind of host would I be, waving guests in from the table?”</p>
    <p>“Sir, I can handle this part,” Katiin adds.</p>
    <p>“Bah,” Ehra sighs, “I will sit just as soon as I greet the first few visitors, I promise. Allow me at least a little pride!”</p>
    <p>“Yes sir,” Katiin nods.</p>
    <p>Siiri rolls her eyes, but nods as well.</p>
    <ln/>
    <p><a href="../Blade/Blade_-1_Aspects.php">More about Blade Elves.</a></p>
    <ln/>
    <p>The winged elves were the first to arrive, wearing bright colors and paint in their feathers. Shadimon and Baijani paused at the door to greet the blade elves, while Anasatri eased around them to set down the basket she was carrying. “Venison meatballs!” she announced. “With every spice we could get our hands on. Also bread.</p>
    <p>Shadimon held out his hand to Ehra, looking up at the much taller elf, “A good party. I hope you haven’t spent it all in here?”</p>
    <p>Ehra smiles and takes Shadimon’s hand, “Not at all! I have managed to get around some, at least. Siiri seems to think I will fall apart if I move too much, but I have been able to see our people celebrating together. It warms my heart.”</p>
    <p>At Ehra’s comment, Siiri mutters quietly. “<small>Grandfather…</small>”</p>
    <p>Baijani rolls her eyes, “These young people, yes? Thinking a stiff wind will blow you over, never mind that we got through everything just like they did, hm?”</p>
    <p>“A stiff wind <i>did</i> blow you over,” Anasatri added from her place arranging food on the table.</p>
    <p>“Details,” Baijani waved it off, going to find a seat herself.</p>


    <?php
        if(is_null($_SESSION["YEAR"])){
            $_SESSION["YEAR"] = 1;
            $_SESSION["BLADE"] = 1;
            $_SESSION["DARK"] = 1;
            $_SESSION["DREAMDUST"] = 1;
            $_SESSION["FIRE"] = 1;
            $_SESSION["RIVER"] = 1;
            $_SESSION["WINGED"] = 1;
        }
    ?>

    <?php
        include '../footer.php'
    ?>
</body>
</html>