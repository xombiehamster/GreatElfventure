<?php

function getImage($elf){
    $ret = null;
    switch($elf){
        case "Ehra Indrek":
            $ret = null;
        break;
        case "Siiri Maar":
            $ret = null;
        break;
        case "Terje":
            $ret = '../Blade/Images/Quartermaster.png';
        break;
        case "Katiin Paavi":
            $ret = '../Blade/Images/Warmaster.png';
        break;
        case "Taavet Rein":
            $ret = '../Blade/Images/Bowmaster.png';
        break;
        # Crag Elves
        case "Esteemed":
            $ret = null;
        break;
        # Cryptid Elves
        case "Ink":
            $ret = null;
        break;
        case "Skulk":
            $ret = null;
        break;
        # Dark Elves
        case "Amenidal":
            $ret = null;
        break;
        case "Greg":
            $ret = null;
        break;
        case "Rasputin":
            $ret = null;
        break;
        case "Shyrendora":
            $ret = null;
        break;
        case "Trischal":
            $ret = null;
        break;
        # Dreamdust Elves
        case "Dave":
            $ret = null;
        break;
        case "Dust":
            $ret = null;
        break;
        case "Pebble":
            $ret = null;
        break;
        case "Steve":
            $ret = null;
        break;
        case "Tik'Tak":
            $ret = null;
        break;
        # Fire Elves
        case "The Fury":
            $ret = '../Fire/Images/Fury.png';
        break;
        case "The Hunger":
            $ret = '../Fire/Images/Hunger.png';
        break;
        case "The Terror":
            $ret = '../Fire/Images/Terror.png';
        break;
        # River Elves
        case "Acris Hylidae":
            $ret = null;
        break;
        case "Litoria Hylidae":
            $ret = '../River/Images/Military.png';
        break;
        case "Smilisca Hylidae":
            $ret = '../River/Images/Navigator.png';
        break;
        case "Edalorhina Leptodactylidae":
            $ret = '../River/Images/Faith.png';
        break;
        case "Staurois Ranidae":
            $ret = '../River/Images/Leader.png';
        break;
        # Totem Elves
        case "Fierce Moose":
            $ret = null;
        break;
        case "Mad Wolf":
            $ret = null;
        break;
        case "Rising Bear":
            $ret = null;
        break;
        case "Squirrel Boy":
            $ret = null;
        break;
        # Winged Elves:
        case "Anasatri":
            $ret = null;
        break;
        case "Baijani":
            $ret = null;
        break;
        case "Dhakamari":
            $ret = null;
        break;
        case "Shadimon":
            $ret = null;
        break;
        case "Shrike":
            $ret = null;
        break;
        case "Varna":
            $ret = null;
        break;
    }
    return $ret;
}
function getDescr($elf){
    $ret = "";
    switch($elf){
        # Blade Elves
        case "Ehra Indrek":
            $ret = 'Grandmaster oldman.<br/>Battle Grandpa<br/>Tends to ramble';
        break;
        case "Siiri Maar":
            $ret = 'Salty healer alchemist.<br/>Overprotective of Ehra<br/>Has had enough of your bullshit already';
        break;
        case "Terje":
            $ret = 'Economy, the closest a blade elf gets to being a hippy.<br/>In a <s>on-and-off</s> apparently solid relationship with a river elf.<br/>';
        break;
        case "Katiin Paavi":
            $ret = 'Terrible at small talk<br/>New to the job<br/>Lost her unit and  father late in the war';
        break;
        case "Taavet Rein":
            $ret = 'Paranoid spymaster.  Old bald guy.<br/>Doesn’t get invited to parties<br/>Not actually a spy';
        break;
        # Crag Elves
        case "Esteemed":
            $ret = '';
        break;
        # Cryptid Elves
        case "Ink":
            $ret = '???<br/>Apparently crippling social anxiety<br/>Kidnaps people';
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
            $ret = 'Arcane Leader, loud, erratic';
        break;
        case "The Hunger":
            $ret = 'Civil leader, sneaky, generally civil';
        break;
        case "The Terror":
            $ret = 'Leader, Strong Silent Type';
        break;
        # River Elves
        case "Acris Hylidae":
            $ret = 'Worst apprentice ever<br/>Acris the Awesome<br/>Forms instant fanboy crushes on anyone who shows him the slightest bit of attention';
        break;
        case "Litoria Hylidae":
            $ret = 'Military leader, sads, therapy hippo.<br/>Grey skin with freckles, long green hair, tidy bun.';
        break;
        case "Smilisca Hylidae":
            $ret = 'Navigator, wizard, doesn’t do well with people<br/>Grey skin with freckles, messy blue hair, stupid goatee.<br/>In an <s>off-again-on-again</s> apparently solid relationship with a blade elf.<br/>Shitty hat.';
        break;
        case "Edalorhina Leptodactylidae":
            $ret = 'Cleric, hugs<br/>Tan skin with gold blazes, long brown hair, tied back.';
        break;
        case "Staurois Ranidae":
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