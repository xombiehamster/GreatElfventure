<?php
#This function builds an array that holds the list of file titles for each elf.
#Yes, I do have to manually update it when new files get added.
#It is what it is.
function getBArray($elf){
    $arr = array();
    switch($elf){
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
            $arr[4] = "A Concerned Cousin";
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
