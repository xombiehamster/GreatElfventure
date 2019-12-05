<?php
function getbonusindex($elf){
    switch ($elf){
        case "Blade": 
            return "B_EXTRA";
        break;
        case "Crag":
            return "C_EXTRA";
        break;
        case "Dark":
            return "DA_EXTRA";
        break;
        case "Dreamdust":
            return "DR_EXTRA";
        break;
        case "Fire":
            return "F_EXTRA";
        break;
        case "River":
            return "R_EXTRA";
        break;
        case "Winged":
            return "W_EXTRA";
        break;
    }
    return null;
}
function settarget($elf,$tar,$btar){
    $index = strtoupper($elf);
    $bonus = getbonusindex($elf);
    if (!is_null($tar)){
        if(!is_null($_SESSION[$index])){
            if ($_SESSION[$index] < $tar){
                $_SESSION[$index] = $tar;
            }
        }else{
            $_SESSION[$index] = $tar;
        }
    }
    if(!is_null($btar)){
        if(!is_null($_SESSION[$bonus])){
            if ($_SESSION[$bonus]< $btar) {
                $_SESSION[$bonus] = $btar;
            }
        }else{
            $_SESSION[$bonus] = $btar;
        }
    }
    echo $_SESSION[$index]," tar ",$_SESSION[$bonus]," btar";
    return 0;
}