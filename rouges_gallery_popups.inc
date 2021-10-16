<?php
//Master Dramatis Personae quick reference
//Sandor Dosa October 2021
//This include replaces firstcontact.php

/*
 Use the following HTML tag to create a button that links here:
    <button class='w3-button [race main color] [Race accent color as hover color] w3-round-xlarge' onclick="document.getElementById('[id_tag]').style.display='inline'">[displated name]</button>
 NOTE: This button uses a temporary link that cannot be nested in PHP code.

 Templete for adding charaters.  Replace squared bracketed items with character details.

[Firstname_Lastname] is the id-lookup for the popup, you must replace spaces with underscores.  In the case of characters with only one name, there is nothing to alter.
[path to image] is relative to the document this include is called from, not the include file's location in the file tree.  That limits the usefulness of this include from other paths.

<div id="[Firstname_Lastname]" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge [race primary color] w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('[Fisrtname_Lastname]').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" src="[path to image]">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>[Name]</h3></li>
                <li>[Gender/Race]</li>
                <li>First Detail/li>
                <li>Second Detail</li>
                <li>Third Detail</li>
            </ul>
        </div>
    </div>
</div>
*/
?>


<div id="Ehra_Indrek" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-indigo w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Ehra_Indrek').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Ehra Indrek" src="/Blade/Images/Grandmaster.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Ehra Indrek</h3></li>
                <li>Male Blade Elf</li>
                <li>Grandmaster oldman</li>
                <li>Battle Grandpa</li>
                <li>Tends to ramble</li>
            </ul>
        </div>
    </div>
</div>

<div id="Siiri_Maar" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-indigo w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Siiri_Maar').style.display='none'" class="w3-button w3-display-topright">×</span>
        </header>
        <div class="w3-container">
            <div class="w3-container w3-cell" style='vertical-align:middle'>
                <img class="avatar w3-center" alt="Siiri Maar" src="/Blade/Images/Corpsmaster.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Siiri Maar</h3></li>
                    <li>Female Blade Elf</li>
                    <li>Salty healer alchemist</li>
                    <li>Overprotective of Ehra</li>
                    <li>Has had enough of your bullshit already</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="Katiin_Paavi" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-indigo w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Katiin_Paavi').style.display='none'" class="w3-button w3-display-topright">×</span>
        </header>
        <div class="w3-container">
            <div class="w3-container w3-cell" style='vertical-align:middle'>
                <img class="w3-center" alt="Katiin Paavi" src="/Blade/Images/Warmaster.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Katiin Paavi</h3></li>
                    <li>Female Blade Elf</li>
                    <li>Terrible at small talk</li>
                    <li>New to the job</li>
                    <li>Lost her unit and father late in the war</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="Shadimon" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-cyan w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Shadimon').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Shadimon" src="/Winged/Images/Shadimon.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Shadimon</h3></li>
                <li>Male Winged Elf</li>
                <li>Leader, chill</li>
                <li>Would like to quit, too responsible to do so</li>
                <li>Marsh harrier feathers</li>
            </ul>
        </div>
    </div>
</div>

<div id="Baijani" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-cyan w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Baijani').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Baijani" src="/Winged/Images/Baijani.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Baijani</h3></li>
                <li>Female Winged Elf</li>
                <li>Quartermaster, sarcastic, Old</li>
                <li>Uses her age as a weapon</li>
                <li>Harris hawk feathers</li>
            </ul>
        </div>
    </div>
</div>

<div id="Anasatri" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-cyan w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Anasatri').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Anasatri" src="/Winged/Images/Anasatri.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Anasatri</h3></li>
                <li>Female Winged Elf</li>
                <li>Loremaster, so curious</li>
                <li>Understands personal boundaries, chooses to ignore them</li>
                <li>Barn owl feathers</li>
            </ul>
        </div>
    </div>
</div>

<div id="Dust" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-purple w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Dust').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Dust" src="/Dreamdust/Images/Dust.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Dust</h3></li>
                <li>Male Dreamdust Elf</li>
                <li>Leader, he’s sensible</li> <!-- Yes, only one item-->
            </ul>
        </div>
    </div>
</div>

<div id="Pebble" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-purple w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Pebble').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Pebble" src="/Dreamdust/Images/Pebble.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Pebble</h3></li>
                <li>Female Dreamdust Elf</li>
                <li>Scoutmaster, she’s the youngest of the four, and contains fifteen pounds of enthusiasm per pound of weight. Often accompanied by Arroyo the goat and Namib the kid.</li> <!-- Yes, only one item-->
            </ul>
        </div>
    </div>
</div>

<div id="Dave" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-purple w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Dave').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Dave" src="/Dreamdust/Images/Dave.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Dave</h3></li>
                <li>Female Dreamdust Elf</li>
                <li>Quartermaster</li>
                <li>Old, grumpy and fond of alcohol</li>
            </ul>
        </div>
    </div>
</div>

<div id="Steve" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-purple w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Steve').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Steve" src="/Dreamdust/Images/Steve.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Steve</h3></li>
                <li>Male Dreamdust Elf</li>
                <li>Actual Hippy, prone to mystical pronouncements</li>
            </ul>
        </div>
    </div>
</div>

<div id="Staurois_Ranidae" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-green w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Staurois_Ranidae').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Staurois Ranidae" src="/River/Images/Leader.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Staurois Ranidae</h3></li>
                <li>Male River Elf</li>
                <li>Leader, optimist, people-person, druid</li>
                <li>Green skin with greener spots, bald</li>
            </ul>
        </div>
    </div>
</div>

<div id="Litoria_Hylidae" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-green w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Litoria_Hylidae').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Litoria Hylidae" src="/River/Images/Military.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Litoria Hylidae</h3></li>
                <li>Female River Elf</li>
                <li>Military leader, sads, therapy hippo</li>
                <li>Grey skin with freckles, long green hair, tidy bun</li>
            </ul>
        </div>
    </div>
</div>

<div id="Edalorhina_Leptodactylidae" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-green w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Edalorhina_Leptodactylidae').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Edalorhina Leptodactylidae" src="/River/Images/Faith.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Edalorhina Leptodactylidae</h3></li>
                <li>Female River Elf</li>
                <li>Cleric, hugs</li>
                <li>Tan skin with gold blazes, long brown hair, tied back</li>
            </ul>
        </div>
    </div>
</div>

<div id="Smilisca_Hylidae" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-green w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Smilisca_Hylidae').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Smilisca Hylidae" src="/River/Images/Navigator.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Smilisca Hylidae</h3></li>
                <li>Male River Elf</li>
                <li>Navigator, wizard, doesn’t do well with people</li>
                <li>Grey skin with freckles, messy blue hair, stupid goatee</li>
                <li>In an <span style="text-decoration: line-through;">off-again-on-again</span> apparently solid relationship with a blade elf</li>
                <li>Shitty hat</li>
            </ul>
        </div>
    </div>
</div>

<div id="Greg" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-blue-grey w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Greg').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Greg" src="/Dark/Images/Greg.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Greg</h3></li>
                <li>Male Dark Elf</li>
                <li><i>Grumpy Councilor Who Did Not Ask For This Job</i>,Thanks</li>
                <li>Glorified babysitter for Rasputin</li>
                <li>Actually does care...deep...deep down...somewhere</li>
            </ul>
        </div>
    </div>
</div>

<div id="Rasputin" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-blue-grey w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Rasputin').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Rasputin" src="/Dark/Images/Rasputin.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Rasputin</h3></li>
                <li>Male Dark Elf</li>
                <li><i>Weird</i> Uncle</li>
                <li>Even dark elves don’t know what he’s all about</li>
                <li>Currently in charge of things relating to economy</li>
            </ul>
        </div>
    </div>
</div>

<div id="Shyrendora" class="w3-modal">
    <div class="w3-modal-content w3-large w3-round-xxlarge w3-blue-grey w3-responsive">
        <header class="w3-container">
            <span onclick="document.getElementById('Shyrendora').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        </header>
        <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
            <img class="w3-padding-large" alt="Shyrendora" src="/Dark/Images/Shyrendora.png">
        </div>
        <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <li><h3>Shyrendora</h3></li>
                <li>Male River Elf</li>
                <li>Leader</li>
                <li>Rebellious by traditional dark elf standards</li>
                <li>Actually likes surface people</li>
                <li>Gasp! Clutches pearls</li>
            </ul>
        </div>
    </div>
</div>










<!--  HTML Scraps and misc here...

-->
<?php // PHP Scraps and misc here...
    /*
     * function nametag($id_tag,$alias,$race_tag) {
    switch ($race_tag) { //This only sets the correct colors for the button.
        case "B": //Blade Elves
            $color1 = " w3-indigo";
            $color2 = " w3-hover-blue";
            break;
        case "C": //Crag Elves
            $color1 = " w3-dark-grey";
            $color2 = " w3-hover-grey";
            break;
        case "DA": //Dark Elves
            $color1 = " w3-blue-grey";
            $color2 = " w3-hover-teal";
            break;
        case "DR": //Dreamdust Elves
            $color1 = " w3-deep-purple";
            $color2 = " w3-hover-purple";
            break;
        case "F": //Fire Elves
            $color1 = " w3-deep-orange";
            $color2 = " w3-hover-orange";
            break;
        case "R": //River Elves
            $color1 = " w3-green";
            $color2 = " w3-hover-light-green";
            break;
        case "W": //Winged Elves
            $color1 = " w3-cyan";
            $color2 = " ww3-hover-light-blue";
            break;
        default:
            $color1 = " w3-black";
            $color2 = " w3-white";
    }
    $ret = "<button class=/' w3-button w3-round-xlarge".$color1.$color2."/' onclick=/"document.getElementById(/'".$id_tag."/').style.display=/'inline/'/">".$alias."</button>";
    return $ret;
     */

?>
