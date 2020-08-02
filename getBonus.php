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
            $arr[9] = "Bits and Pieces";
            $arr[10] = "A Relentless Ruckus";
            $arr[11] = "Open Athlon I";
        break;
        case "Crag":
            $arr[0] = "A Seeker to Eschaton";
            $arr[1] = "A Hunter's Prey";
            $arr[2] = "A Soldier and a Warrior";
            $arr[3] = "A Game of Hide and Seek";
            $arr[19] = "A Rocky Shore";
            $arr[25] = "A Dependable Blade";
            $arr[26] = "A Safe Fortress";
            $arr[28] = "An Uncharted Course";
        break;
        case "Dark":
            $arr[0] = "A Moody Visitor";
            $arr[1] = "Homeward Rambles";
            $arr[2] = "An Overwhelming Curiousity";
            $arr[3] = "Visiting Aftermath";
            $arr[4] = "A Dark Place";
            $arr[5] = "A Tourist Trap";
            $arr[6] = "A 'Tourist', Huh";
            $arr[7] = "Council of a Chronicler";
            $arr[8] = "The Tower";
            $arr[9] = "Plucky Magic Hacker";
            $arr[10] = "We of Like Mind";
            $arr[11] = "I Said Never Again";
            $arr[12] = "A Stupid, Awkward Dream";
            $arr[13] = "A Rational Question";
            $arr[14] = "A Friend in Need";
            $arr[20] = "A Dark Secret";
        break;
        case "Dreamdust":
            $arr[0] = "A Chance Encounter";
            $arr[1] = "A Summit of Chieftans";
            $arr[20] = "A Dark Secret";
        break;
        case "Fire":
            $arr[0] = "A Tourist in Surt";
            $arr[1] = "A Minor Miscalculation";
            $arr[2] = "A Wolf Walks into a Bar";
            $arr[3] = "A Hitchhiker in Partager";
            $arr[4] = "A Painful Memory";
            $arr[5] = "A Mystery Deepens";
            $arr[6] = "A Special Delivery";
            $arr[7] = "A Dark Place";
            $arr[8] = "Trust Can Get You Killed";
            $arr[9] = "A Surtian Flight";
            $arr[10] = "A Blade's Edge";
            $arr[11] = "A Deal Burned";
            $arr[12] = "Dragons in the Mist";
            $arr[13] = "Give Me Domestication";
            $arr[14] = "Bardnapping";
            $arr[15] = "A Simple Decision";
            $arr[16] = "Honest Lies";
            $arr[17] = "Ambush Predators";
            $arr[18] = "A Tale Begins";
            $arr[19] = "A Wild Ride";
            $arr[20] = "A Surtian Confusion";
            $arr[21] = "A Rocky Shore";
            $arr[22] = "A Dark Secret";
            $arr[23] = "A Dependable Blade";
            $arr[24] = "A Safe Fortress";
            $arr[25] = "An Uncharted Course";
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
            $arr[19] = "A Rocky Shore";
            $arr[20] = "A Dark Secret";
            $arr[21] = "A Shady Stowaway";
            $arr[22] = "A Dependable Blade";
            $arr[23] = "A Strange Friend";
            $arr[24] = "A Second Chance";
            $arr[25] = "A Grim Swamp";
            $arr[26] = "A Safe Fortress";
            $arr[27] = "A New Moon";
            $arr[28] = "An Uncharted Course";
            $arr[29] = "A Choice Made";
            $arr[30] = "A Wandering River";
            $arr[31] = "An Asavardian Night";
            $arr[32] = "A Question of Justice";
            $arr[33] = "A Complicated Future";
            $arr[34] = "A Difficult Lesson";
            $arr[35] = "A Rescued Stray";
            $arr[36] = "A Warmaster and a Soldier";
            $arr[37] = "A Just Punishment";
            $arr[38] = "A Dubious Narrative";
            $arr[39] = "A Belated Date";
        break;
        case "Winged":
            $arr[0] = "Summer";
            $arr[1] = "Fall";
            $arr[2] = "A Moody Visitor";
            $arr[3] = "Winter";
            $arr[4] = "Spring";
            $arr[5] = "A Quick Recap";
            $arr[6] = "A Forgotten Testimony";
            $arr[7] = "Lost and Found";
            $arr[8] = "A New Discovery";
            $arr[9] = "A Closeted Tourist";
            $arr[10] = "Family Ties";
            $arr[11] = "A Seedy Problem";
            $arr[12] = "Help Wanted";
            $arr[13] = "A Possible Connection";
            $arr[14] = "A Surtian Flight";
            $arr[15] = "An Unwelcome Visitor";
            $arr[16] = "A Silent Answer";
            $arr[17] = "A Need to Know";
            $arr[18] = "A Rude Awakening";
            $arr[19] = "A Moonlit Flight";
            $arr[20] = "A Training Montage";
            $arr[21] = "A Friend In Need";
            $arr[22] = "A Safe Return";
            $arr[23] = "Help Wanted";
            $arr[24] = "Aloft Again";
            $arr[25] = "Something Tenuous";
            $arr[26] = "Mother's Nightmare";
            $arr[27] = "Plan What Plan";
            $arr[28] = "A Scholarly Pursuit";
            $arr[29] = "Make Ready";
            $arr[30] = "A Dark Secret";
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
