<?php
/*
 Use the following HTML tag to create a button that links here:
    <span class='w3-tag w3-round [race main color] [Race accent color as hover color]' onclick="document.getElementById('[id_tag]').style.display='inline'">[displayed name]</span>
 NOTE: This code cannot be nested in PHP code, must be in HTML.

 Templete for adding employees.  Replace squared bracketed items with employee details.

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

function nametag($id_tag,$alias,$race_tag) {
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
            $color2 = " w3-hover-white";
    }
    $r1 = "<span class=\' w3-tag w3-round".$color1.$color2."\' onclick=\"document.getElementById(\'".$id_tag."\').style.display=\'block\'\">".$alias."</span>";
    echo "\n".stripslashes($r1)."\n";

}

?>

<!-- Blade Elves -->
<div id="Blade_Elves" class="W3-container">
    <div id="Ehra_Indrek" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-indigo w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Ehra_Indrek').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-cell" style='vertical-align:middle'>
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

    <div id="Terje_Paavi" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-indigo w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Terje_Paavi').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Terje Paavi" src="/Blade/Images/Quartermaster.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Terje Paavi</h3></li>
                    <li>Male Blade Elf</li>
                    <li>Economy, the closest a blade elf gets to being a hippy</li>
                    <li>In an <span style="text-decoration: line-through;">off-again-on-again</span> apparently solid relationship with a river elf</li>
                </ul>
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

    <div id="Taavet_Rein" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-indigo w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Taavet_Rein').style.display='none'" class="w3-button w3-display-topright">×</span>
            </header>
            <div class="w3-container">
                <div class="w3-container w3-cell" style='vertical-align:middle'>
                    <img class="w3-center" alt="Taavet Rein" src="/Blade/Images/Bowmaster.png">
                </div>
                <div class="w3-container w3-cell">
                    <ul class="w3-ul">
                        <li><h3>Taavet Rein</h3></li>
                        <li>Male Blade Elf</li>
                        <li>Paranoid spymaster</li>
                        <li>Old bald guy</li>
                        <li>Doesn’t get invited to parties</li>
                        <li>Not actually a spy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Crag Elves -->
<div id="Crag_Elves" class="w3-container">
    <div id="Embebi" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-blue-grey w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Embebi').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Embebi" src="/Crag/Images/Embebi.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Embebi</h3></li>
                    <li>Female Crag Elf</li>
                    <li>Stalks things</li> <!-- Only one item, really.... -->
                </ul>
            </div>
        </div>
    </div>

    <div id="Slabal" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-blue-grey w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Slabal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Embebi" src="/Crag/Images/Slabal.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Slabal</h3></li>
                    <li>Female Crag Elf</li>
                    <li>Pathologic workaholic</li>
                    <li>Wants to do all the things</li>
                    <li>Only has enough time in the day to do half of all the things</li>
                    <li>Oh well...</li>
                    <li>Probably the sanest, which is telling</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Cryptid Elves -->
<div id="Cryptid_Elves" class="w3-container">
    <div id="Ink" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-black w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Ink').style.display='none'" class="w3-button w3-display-topright">×</span>
            </header>
            <div class="w3-container">
                <div class="w3-container w3-cell" style='vertical-align:middle'>
                    <img class="w3-center" alt="Ink" src="/Blade/Images/Ink.png">
                </div>
                <div class="w3-container w3-cell">
                    <ul class="w3-ul">
                        <li><h3>Ink</h3></li>
                        <li>Cryptid Elf</li>
                        <li>Apparently crippling social anxiety</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="Skulk" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-black w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Skulk').style.display='none'" class="w3-button w3-display-topright">×</span>
            </header>
            <div class="w3-container">
                <div class="w3-container w3-cell" style='vertical-align:middle'>
                    <img class="w3-center" alt="Skulk" src="/Blade/Images/Skulk.png">
                </div>
                <div class="w3-container w3-cell">
                    <ul class="w3-ul">
                        <li><h3>Skulk</h3></li>
                        <li>Cryptid Elf</li>
                        <li>Kind of an asshole</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dark Elves -->
<div id="Dark_Elves" class="w3-container">
    <div id="Amenidal" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-blue-grey w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Amenidal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Amenidal" src="/Dark/Images/Amenidal.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Amenidal</h3></li>
                    <li>Male Dark Elf</li>
                    <li>Not a good Scout</li>
                    <li>Really excited about magic</li>
                    <li>Tries His Best</li>
                    <li>Gets fanboy crushes over cool magic things apparently</li>
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

    <div id="Trischal" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-blue-grey w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Trischal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Trischal" src="/Dark/Images/Trischal.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Trischal</h3></li>
                    <li>Male Dark Elf</li>
                    <li>Current Scoutmaster</li>
                    <li>Emotive!</li>
                    <li>Sarcastic!</li>
                    <li>Paranoid!</li>
                    <li>With added Emotional Support Badger named Fuzzy</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Dreamdust Elves-->
<div id="Dreamdust_Elves" class="w3-container">
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
                    <li>Scoutmaster</li>
                    <li>Youngest of the four</li>
                    <li>Contains fifteen pounds of enthusiasm per pound of weight</li>
                    <li>Often accompanied by Arroyo the goat and Namib the kid.</li>
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
                    <li>Actual Hippy</li>
                    <li>Prone to mystical pronouncements</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="Tik_Tak" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-purple w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Tik_Tak').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Tik&apos;Tak" src="/Dreamdust/Images/TikTak.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Tik'Tak</h3></li>
                    <li>Dreamdust Elf</li>
                    <li>Spikey elf</li> <!-- Only one item, really -->
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Fire Elves-->
<div id="Fire_Elves" class="w3-container">
    <div id="The_Fury" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-orange w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('The_Fury').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="The Fury" src="/Fire/Images/Fury.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>The Fury</h3></li>
                    <li>Female Fire Elf</li>
                    <li>Arcane Leader</li>
                    <li>Loud</li>
                    <li>Erratic</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="The_Hunger" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-orange w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('The_Hunger').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="The Hunger" src="/Fire/Images/Hunger.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>The Hunger</h3></li>
                    <li>Male Fire Elf</li>
                    <li>Civil leader</li>
                    <li>Sneaky</li>
                    <li>Generally civil</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="Barrabus_Leafstorm" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-orange w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Barrabus_Leafstorm').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Barrabus Leafstorm" src="/Fire/Images/Barrabus Leafstorm.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Barrabus Leafstorm</h3></li>
                    <li>Male Fire Elf</li>
                    <li>Unprofessional Troublemaker</li><!-- Only one item, really -->
                </ul>
            </div>
        </div>
    </div>

    <div id="The_Terror" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-orange w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('The_Terror').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="The Terror" src="/Fire/Images/Terror.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>The Terror</h3></li>
                    <li>Male Fire Elf</li>
                    <li>Leader</li>
                    <li>Strong Silent Type</li>
                    <li>Terrifying</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="Auburn_Tsun" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-orange w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Auburn_Tsun').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Auburn Tsun" src="/Fire/Images/Auburn Tsun.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Auburn Tsun</h3></li>
                    <li>Female Fire Elf</li>
                    <li>Professional Troublemaker</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="Vita_Grassforest" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-deep-orange w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Vita_Grassforest').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Vita Grassforest" src="/Fire/Images/Smoke.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Vita Grassforest</h3></li>
                    <li>Female Fire Elf</li>
                    <li>AKA: Smoke</li>
                    <li>Cohort to The Terror</li>
                    <li>Frequently assigned to scouting missions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- River Elves -->
<div id="River_Elves" class="w3-container">
    <div id="Acris_Hylidae" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-green w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Acris_Hylidae').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Acris Hylidae" src="/River/Images/Apprentice.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Acris Hylidae</h3></li>
                    <li>Male River Elf</li>
                    <li>AKA: Acris the Awesome</li>
                    <li>Worst apprentice ever</li>
                    <li>Forms instant fanboy crushes on anyone who shows him the slightest bit of attention</li>
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
</div>

<!-- Winged Elves -->
<div id="Winged_Elves" class="w3-container">
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

    <div id="Dhakamari" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-cyan w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Dhakamari').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Dhakamari" src="/Winged/Images/Dhakamari.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Dhakamari</h3></li>
                    <li>Female Winged Elf</li>
                    <li>Ranger lead, shy</li>
                    <li>Keeps doing Heroic Shit, doesn’t want you to talk about it</li>
                </ul>
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

    <div id="Shrike" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-cyan w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Shrike').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Shrike" src="/Winged/Images/Shrike.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Shrike</h3></li>
                    <li>Male Winged Elf</li>
                    <li>Military lead</li>
                    <li>Solves problems by punching them</li>
                    <li>Emotional whiplash like whoa</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="Varna" class="w3-modal">
        <div class="w3-modal-content w3-large w3-round-xxlarge w3-cyan w3-responsive">
            <header class="w3-container">
                <span onclick="document.getElementById('Varna').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container w3-padding-large w3-cell" style='vertical-align:middle'>
                <img class="w3-padding-large" alt="Varna" src="/Winged/Images/Varna.png">
            </div>
            <div class="w3-container w3-cell">
                <ul class="w3-ul">
                    <li><h3>Varna</h3></li>
                    <li>Male Winged Elf</li>
                    <li>Scoutmaster, Super Excited</li>
                    <li>Too much optimism</li>
                    <li>Steller’s jay feathers</li>
                </ul>
            </div>
        </div>
    </div>
</div>