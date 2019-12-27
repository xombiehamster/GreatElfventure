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
        break;
        case "Crag":
            $arr[0] = "A Seeker to Eschaton";
        break;
        case "Dark":
            $arr[0] = "A Moody Visitor";
            $arr[1] = "An Overwhelming Curiosity";
        break;
        case "Dreamdust":
            $arr[0] = "A Chance Encounter";
            $arr[1] = "A Summit of Chieftans";
        break;
        case "Fire":
            $arr[0] = "A Tourist in Surt";
            $arr[1] = "A Minor Miscalculation";
            $arr[2] = "A Wolf Walks into a Bar";
            $arr[3] = "A Painful Memory";
            $arr[4] = "A Mystery Deepens";
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
            $arr[12] = "A Tale Begins";
            $arr[13] = "A Familiar Stranger";
            $arr[14] = "A Deep River";
            $arr[15] = "A Wild Ride";
            $arr[16] = "A Rocky Shore";
        break;
        case "Winged":
            $arr[0] = "Summer";
            $arr[1] = "Fall";
            $arr[2] = "A Moody Visitor";
            $arr[3] = "Winter";
            $arr[4] = "Spring";
            $arr[5] = "A Forgotten Testimony";
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
