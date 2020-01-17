<?php
#This function builds an array that holds the list of file titles for each elf.
#Yes, I do have to manually update it when new files get added.
#It is what it is.
function getBArray($elf){
    $arr = array();
    switch($elf){
        case "Blade":
            $arr[0] = "A War of Words";
            $arr[1] = "The Troublesome Duo";
            $arr[2] = "A Plan Comes Together";
            $arr[3] = "A Tribute Paid";
            $arr[4] = "Operation Birdcage";
            $arr[5] = "A Broken Promise";
            $arr[6] = "Bits and Pieces";
            $arr[7] = "A Man and a Dog";
            $arr[8] = "A Pair of Monsters";
        break;
        case "Crag":
            $arr[0] = "A Seeker to Eschaton";
        break;
        case "Dark":
            $arr[0] = "A Moody Visitor";
            $arr[1] = "Homeward Rambles";
            $arr[2] = "An Overwhelming Curiosity";
            $arr[3] = "Visiting Aftermath";
            $arr[4] = "A Tourist Trap";
            $arr[5] = "A 'Tourist', Huh";
            $arr[6] = "Council of a Chronicler";
            $arr[7] = "The Tower";
            $arr[8] = "Plucky Magic Hacker";
            $arr[9] = "We of Like Mind";
            $arr[10] = "I Said Never Again";
            $arr[11] = "A Dark Place";
            $arr[12] = "A Stupid, Awkward Dream";
            $arr[13] = "A Rational Question";
        break;
        case "Dreamdust":
            $arr[0] = "A Chance Encounter";
            $arr[1] = "A Summit of Chieftans";
        break;
        case "Fire":
            $arr[0] = "A Tourist in Surt";
            $arr[1] = "A Minor Miscalculation";
            $arr[2] = "A Wolf Walks into a Bar";
            $arr[3] = "A Hitchhiker in Partager";
            $arr[4] = "A Painful Memory";
            $arr[5] = "A Mystery Deepens";
            $arr[6] = "A Special Delivery";
            $arr[7] = "Trust Can Get You Killed";
            $arr[8] = "A Surtian Flight";
            $arr[9] = "A Blade's Edge";
        break;
        case "River":
            $arr[0] = "A Measure of Hospitality";
            $arr[1] = "A Hitchhiker in Partager";
            $arr[2] = "A Special Delivery";
            $arr[3] = "A Cold Reunion";
            $arr[4] = "A Brave Fool";
            $arr[5] = "A Concerned Cousin";
            $arr[6] = "An Unexpected Arrival";
            $arr[7] = "A Course Is Changed";
            $arr[8] = "A Moonlit Flight";
            $arr[9] = "A Conversation with Heaven";
            $arr[10] = "A New Family";
            $arr[11] = "A Scholarly Pursuit";
            $arr[12] = "Ambush Predators";
            $arr[13] = "A Friend in Need";
            $arr[14] = "A Tale Begins";
            $arr[15] = "A Familiar Stranger";
            $arr[16] = "A Wild Ride";
            $arr[17] = "A Surtian Confusion";
            $arr[18] = "A Deep River";
            $arr[19] = "A Dark Secret";
            $arr[20] = "A Rocky Shore";
            $arr[21] = "A Shady Stowaway";
        break;
        case "Winged":
            $arr[0] = "Summer";
            $arr[1] = "Fall";
            $arr[2] = "A Moody Visitor";
            $arr[3] = "Winter";
            $arr[4] = "Spring";
            $arr[5] = "A Forgotten Testimony";
            $arr[6] = "A Closeted Tourist";
            $arr[7] = "A Surtian Flight";
            $arr[8] = "An Unwelcome Visitor";
            $arr[9] = "A Silent Answer";
            $arr[10] = "A Rude Awakening";
        break;
    }
    return $arr;
}
#This function creates the list of available bonus content
#Given an elf and their point in their sequence, it generates the unlocked list.
function getBonus($elf,$sequence){
    if(is_null($sequence)){
        return null;
    }else{
        $list = '<ul>';
        #Blade Elves get to hold the potluck side-events and any other major group efforts 
        #   that everyone/almost everyone would gain access to at the same time.
        if($elf=="Blade"){
            $list .= '<b>Group Events</b>';
        }
        $i = 0;
        $arr = getBArray($elf);
        while($i<=$sequence){
            $list .= '<li><a href="'.$elf.'/Bonus/'.$i.'_'.$arr[$i].'.php">';
            $list .= $arr[$i];
            $list .= '</a></li>';
            $i ++;
        }
        $list .= '</ul>';
        return $list;
    }
}
?>
