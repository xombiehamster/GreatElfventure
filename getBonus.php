<?php
function getStringYear($year){
    if($year<10){
        $ys = '0'.$year;
    }else{
        $ys = $year;
    }
    return $ys;
}
function getFileName($elf,$sequence){
    return "yep";
}
function getBonus($elf,$sequence){
    if(is_null($sequence)){
        return null;
    }else{
        $list = '<ol>';
        $i = 0;
        while($i<$sequence){
            $list.='<li><a href="'.$i.'_'.$elf.'.php">';
            $list.=getFileName($elf,$sequence);
            $list.='</a></li>';
            $i++;
        }
        $list.='</ol>';
        return $list;
    }
}
?>