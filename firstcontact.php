<?php

function getImage($elf){
    $ret = null;
    switch($elf){
        #Blade Elves
        case "Ehra Indrek":
        case "Ehra":
            $ret = '../Blade/Images/Grandmaster.png'; #Ehra - Blade - m
        break;
        case "Siiri Maar":
        case "Siiri":
            $ret = '../Blade/Images/Corpsmaster.png'; #Siiri - Blade - f
        break;
        case "Terje Paavi":
        case "Terje":
            $ret = '../Blade/Images/Quartermaster.png'; #Terje - Blade - m
        break;
        case "Katiin Paavi":
        case "Katiin":
            $ret = '../Blade/Images/Warmaster.png'; #Katiin - Blade - f
        break;
        case "Taavet Rein":
        case "Taavet":
            $ret = '../Blade/Images/Bowmaster.png'; #Taavet - Blade - m
        break;
        # Crag Elves
        case "Embebi":
            $ret = '../Crag/Images/Embebi.png'; #Embebi - Crag - f
        break;
        case "Slabal":
            $ret = '../Crag/Images/Slabal.png'; #Slabal - Crag - f
        break;
        # Cryptid Elves
        case "Ink":
            $ret = '../Blade/Images/Ink.png'; #Ink - Cryptid - m
        break;
        case "Skulk":
            $ret = '../Blade/Images/Skulk.png'; #Skulk - Cryptid - f
        break;
        # Dark Elves
        case "Amenidal":
            $ret = '../Dark/Images/Amenidal.png'; #Amenidal - Dark - m
        break;
        case "Greg":
            $ret = '../Dark/Images/Greg.png'; #Greg - Dark - m
        break;
        case "Rasputin":
            $ret = '../Dark/Images/Rasputin.png'; #Rasputin - Dark - m
        break;
        case "Shyrendora":
            $ret = '../Dark/Images/Shyrendora.png'; #Shyrendora - Dark - f
        break;
        case "Trischal":
            $ret = '../Dark/Images/Trischal.png'; #Trischal - Dark - f
        break;
        # Dreamdust Elves
        case "Dave":
            $ret = '../Dreamdust/Images/Dave.png'; #Dave - Dream - f?
        break;
        case "Dust":
            $ret = '../Dreamdust/Images/Dust.png'; #Dust - Dream - m
        break;
        case "Pebble":
            $ret = '../Dreamdust/Images/Pebble.png'; #Pebble - Dream - f
        break;
        case "Steve":
            $ret = '../Dreamdust/Images/Steve.png'; #Steve - Dream - m?
        break;
        case "Tik'Tak":
            $ret = '../Dreamdust/Images/TikTak.png'; #Tik'Tak - Dream/lizard - m
        break;
        # Fire Elves
        case "The Fury":
        case "Fury":
            $ret = '../Fire/Images/Fury.png'; #Fury - Fire - f
        break;
        case "The Hunger":
        case "Hunger":
            $ret = '../Fire/Images/Hunger.png'; #Hunger - Fire - m
        break;
        case "Barrabus Leafstorm":
        case "Barrabus":
        case "Barry":
            $ret = '../Fire/Images/Barrabus Leafstorm.png'; #Barry - Fire - m
        break;
        case "The Terror":
        case "Terror":
            $ret = '../Fire/Images/Terror.png'; #Terror - Fire - f
        break;
        case "Auburn Tsun":
        case "Tsun":
            $ret = '../Fire/Images/Auburn Tsun.png'; #Tsun - Fire - f
        break;
        case "Smoke":
        case "Vita":
        case "Vita Grassforest":
            $ret = '../Fire/Images/Smoke.png'; #Vita - Fire - f
        break;
        # River Elves
        case "Acris Hylidae":
        case "Acris":
            $ret = '../River/Images/Apprentice.png'; #Acris - River - m
        break;
        case "Litoria Hylidae":
        case "Litoria":
            $ret = '../River/Images/Military.png'; #Litoria - River - f
        break;
        case "Smilisca Hylidae":
        case "Smilisca":
            $ret = '../River/Images/Navigator.png'; #Smilisca - River - m
        break;
        case "Edalorhina Leptodactylidae":
        case "Eina":
            $ret = '../River/Images/Faith.png'; #Eina - River - f
        break;
        case "Staurois Ranidae":
        case "Staurois":
            $ret = '../River/Images/Leader.png'; #Staurois - River - m
        break;
        # Totem Elves
        case "Fierce Moose": #Moose - Totem - ?
            $ret = null;
        break;
        case "Mad Wolf": #Wolf - Totem - ?
            $ret = null;
        break;
        case "Rising Bear": #Bear - Totem ?
            $ret = null;
        break;
        case "Squirrel Boy": #Squirrel - Totem - m
            $ret = null;
        break;
        # Winged Elves:
        case "Anasatri":
            $ret = '../Winged/Images/Anasatri.png'; #Anasatri - Winged - f
        break;
        case "Baijani":
            $ret ='../Winged/Images/Baijani.png'; #Baijani - Winged - f
        break;
        case "Dhakamari":
            $ret = '../Winged/Images/Dhakamari.png'; #Dhakamari - Winged - m
        break;
        case "Shadimon":
            $ret = '../Winged/Images/Shadimon.png'; #Shadimon - Winged - m
        break;
        case "Shrike":
            $ret = '../Winged/Images/Shrike.png'; #Shrike - Winged - f
        break;
        case "Varna":
            $ret = '../Winged/Images/Varna.png'; #Varna - Winged - m?
        break;
    }
    return $ret;
}
function getDescr($elf){
    $ret = "";
    switch($elf){
        # Blade Elves
        case "Ehra Indrek":
        case "Ehra":
            $ret = 'Grandmaster oldman.<br/>Battle Grandpa<br/>Tends to ramble';
        break;
        case "Siiri Maar":
        case "Siiri":
            $ret = 'Salty healer alchemist.<br/>Overprotective of Ehra<br/>Has had enough of your bullshit already';
        break;
        case "Terje Paavi":
        case "Terje":
            $ret = 'Economy, the closest a blade elf gets to being a hippy.<br/>In a <s>on-and-off</s> apparently solid relationship with a river elf.<br/>';
        break;
        case "Katiin Paavi":
        case "Katiin":
            $ret = 'Terrible at small talk<br/>New to the job<br/>Lost her unit and  father late in the war';
        break;
        case "Taavet Rein":
        case "Taavet":
            $ret = 'Paranoid spymaster.  Old bald guy.<br/>Doesn’t get invited to parties<br/>Not actually a spy';
        break;
        # Crag Elves
        case "Embebi":
            $ret = 'Stalks things';
        break;
        case "Slabal":
            $ret = 'Pathologic workaholic.<br/>Wants to do all the things.<br/>Only has enough time in the day to do half of all the things.<br/>Oh well.<br/>Probably the sanest, which is telling.<br/>';
        break;
        # Cryptid Elves
        case "Ink":
            $ret = '???<br/>Apparently crippling social anxiety';
        break;
        case "Skulk":
            $ret ='Kind of an asshole';
        break;
        # Dark Elves
        case "Amenidal":
            $ret = 'Not a good Scout, really excited about magic, Tries His Best, gets fanboy crushes over cool magic things apparently.';
        break;
        case "Greg":
            $ret = 'Grumpy Councilor Who Did Not Ask For This Job Thanks, glorified babysitter for Rasputin, actually does care...deep...deep down...somewhere.';
        break;
        case "Rasputin":
            $ret = '<i>Weird</i> Uncle, even dark elves don’t know what he’s all about, currently in charge of things relating to economy.';
        break;
        case "Shyrendora":
            $ret = 'Leader, considered rebellious by traditional dark elf standards, actually likes surface people?  Gasp.';
        break;
        case "Trischal":
            $ret = 'Current Scoutmaster.  Emotive!  Sarcastic!  Paranoid!  With added Emotional Support Badger named Fuzzy.';
        break;
        # Dreamdust Elves
        case "Dave":
            $ret = 'Quartermaster, she’s old, grumpy and fond of alcohol';
        break;
        case "Dust":
            $ret = 'Leader, he’s sensible';
        break;
        case "Pebble":
            $ret = 'Scoutmaster, she’s the youngest of the four, and contains fifteen pounds of enthusiasm per pound of weight.  Often accompanied by Arroyo the goat and Namib the kid.';
        break;
        case "Steve":
            $ret = 'Actual Hippy, prone to mystical pronouncements';
        break;
        case "Tik'Tak":
            $ret = 'Spikey elf';
        break;
        # Fire Elves
        case "The Fury":
        case "Fury":
            $ret = 'Arcane Leader, loud, erratic';
        break;
        case "The Hunger":
        case "Hunger":
            $ret = 'Civil leader, sneaky, generally civil';
        break;
        case "Barrabus Leafstorm":
        case "Barrabus":
        case "Barry":
            $ret = 'Unprofessional Troublemaker';
        break;
        case "The Terror":
        case "Terror":
            $ret = 'Leader, Strong Silent Type';
        break;
        case "Auburn Tsun":
        case "Tsun":
            $ret = 'Professional Troublemaker';
        break;
        case "Smoke":
            case "Vita":
            case "Vita Grassforest":
                $ret = 'Cohort to The Terror. Frequently assigned to scouting missions.';
            break;
        # River Elves
        case "Acris Hylidae":
        case "Acris":
            $ret = 'Worst apprentice ever<br/>Acris the Awesome<br/>Forms instant fanboy crushes on anyone who shows him the slightest bit of attention';
        break;
        case "Litoria Hylidae":
        case "Litoria":
            $ret = 'Military leader, sads, therapy hippo.<br/>Grey skin with freckles, long green hair, tidy bun.';
        break;
        case "Smilisca Hylidae":
        case "Smilisca":
            $ret = 'Navigator, wizard, doesn’t do well with people<br/>Grey skin with freckles, messy blue hair, stupid goatee.<br/>In an <s>off-again-on-again</s> apparently solid relationship with a blade elf.<br/>Shitty hat.';
        break;
        case "Edalorhina Leptodactylidae":
        case "Eina":
            $ret = 'Cleric, hugs<br/>Tan skin with gold blazes, long brown hair, tied back.';
        break;
        case "Staurois Ranidae":
        case "Staurois":
            $ret = 'Leader, optimist, people-person, druid<br/>Green skin with greener spots, bald.';
        break;
        # Totem Elves
        case "Fierce Moose":
            $ret = 'Hugs?<br/>Moose?<br/>';
        break;
        case "Mad Wolf":
            $ret = 'Angry, and possibly a wolf';
        break;
        case "Rising Bear":
            $ret = '???';
        break;
        case "Squirrel Boy":
            $ret = 'Doesn’t want to be leader, but they won’t let him leave<br/>Squirrels. Really. /sarcasm';
        break;
        # Winged Elves:
        case "Anasatri":
            $ret = 'Loremaster, so curious<br/>Understands personal boundaries, chooses to ignore them<br/>Barn owl feathers';
        break;
        case "Baijani":
            $ret = 'Quartermaster, sarcastic, Old<br/>Uses her age as a weapon<br/>Harris hawk feathers';
        break;
        case "Dhakamari":
            $ret = 'Ranger lead, shy<br/>Keeps doing Heroic Shit, doesn’t want you to talk about it';
        break;
        case "Shadimon":
            $ret = 'Leader, chill<br/>Would like to quit, too responsible to do so<br/>Marsh harrier feathers';
        break;
        case "Shrike":
            $ret = 'Military lead, solves problems by punching them<br/>Emotional whiplash like whoa';
        break;
        case "Varna":
            $ret = 'Scoutmaster, Super Excited<br/>Too much optimism<br/>Steller’s jay feathers';
        break;
    }
    return $ret;
}
function firstContact($elf){
    $image = getImage($elf);
    $descr = getDescr($elf);
    $ret = '<span class="tooltip">'.$elf.'<span class="tooltiptext">';
    if(!is_null($image)){
        $ret .= '<img class="avatar" src="'.$image.'">';
    }
    $ret .= $descr.'</span></span>';
    return $ret;
}


?>
