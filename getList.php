<?php
function getStringYear($year){

    if($year<10){
        $ys = '0'.$year;
    }else{
        $ys = $year;
    }
    return $ys;
}
function getList($elf, $sequence){
    $list ='<ol>';
    $n = 1;
    if($sequence >= 1){
        $y = 1;
        $m = 1;
        $list .= '<li>'.$_SESSION[strtoupper($elf)].' session var</li>';
        while($n<=$sequence){
            $list.='<li><a href="'.$elf."/Year/";
            $ys = getStringYear($y);
            switch ($m){
                case 1: 
                    $list.= $ys.'_'.$m.'_'.$elf.'.php">'.'Summer, year '.$y;
                    $m++;
                break;
                case 2:
                    $list.= $ys.'_'.$m.'_'.$elf.'.php">'.'Fall, year '.$y;
                    $m++;
                break;
                case 3:
                    $list.= $ys.'_'.$m.'_'.$elf.'.php">'.'Winter, year '.$y;
                    $m++;
                break;
                case 4:
                    $list.= $ys.'_'.$m.'_'.$elf.'.php">'.'Spring, year '.$y;
                    $y++;
                    $m = 1;
                break;
            }
            $list.= '</a></li>';
            $n++;
        }
    }
    $list.= '</ol>';
    return $list;
}
?>