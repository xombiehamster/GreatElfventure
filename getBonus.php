<?php
#This function builds an array that holds the list of file titles for each elf.
#Yes, I do have to manually update it when new files get added.
#It is what it is.
function getBArray($elf){
    $arr = array();
    switch($elf){
         case "Fire":
            $arr[0] = "A Tourist in Surt";
        break;
        case "Dark":
            $arr[0] = "A Moody Visitor";
        break;
        case "River":
            $arr[0] = "A Measure of Hospitality";
            $arr[1] = "A Hitchhiker in Partager";
            $arr[2] = "A Special Delivery";
        break;
        case "Winged":
            $arr[0] = "Summer";
            $arr[1] = "Fall";
            $arr[2] = "A Moody Visitor";
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
