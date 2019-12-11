<?php
function getbonusindex($elf,$type){
    switch ($elf){
        case "Blade": 
            $ret = "B";
        break;
        case "Crag":
            $ret = "C";
        break;
        case "Dark":
            $ret = "DA";
        break;
        case "Dreamdust":
            $ret = "DR";
        break;
        case "Fire":
            $ret = "F";
        break;
        case "River":
            $ret = "R";
        break;
        case "Winged":
            $ret = "W";
        break;
    }
    return $ret.'_'.$type;
}
function settarget($elf,$tar,$mtar,$btar){
    $index = strtoupper($elf);
    $bonus = getbonusindex($elf,"BONUS");
    $meta = getbonusindex($elf,"META");
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
    if(!is_null($mtar)){
        if(!is_null($_SESSION[$meta])){
            if ($_SESSION[$meta]< $mtar) {
                $_SESSION[$meta] = $mtar;
            }
        }else{
            $_SESSION[$meta] = $mtar;
        }
    }
    echo $_SESSION[$index]," tar ",$_SESSION[$bonus]," mtar ",$_SESSION[$meta]," btar";
    return 0;
}