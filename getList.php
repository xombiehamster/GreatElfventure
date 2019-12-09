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
    $list ='<ul>';
    $n = 1;
    if($elf=="Blade"){
        $list.='<li><a href="Blade/Year/00_3_Blade.php">Winter, year 0</a></li>';
        if($sequence>0){
            $list.='<li><a href="Blade/Year/00_4_Blade.php">Spring, year 0</a></li>';
        }
        $list .= '</ul>';
        return $list;
    }
    if($sequence >= 1){
        $y = 1;
        $m = 1;
        while($n<=$sequence){
            $ys = getStringYear($y);
            $list.='<li><a href="'.$elf.'/Year/'.$ys.'_'.$m.'_'.$elf.'.php">';
            switch ($m){
                case 1: 
                    $list.= 'Summer, year ';
                    $m++;
                break;
                case 2:
                    $list.= 'Fall, year ';
                    $m++;
                break;
                case 3:
                    $list.= 'Winter, year ';
                    $m++;
                break;
                case 4:
                    $list.= 'Spring, year ';
                    $y++;
                    $m = 1;
                break;
            }
            $list.= $y.'</a></li>';
            $n++;
        }
    }
    $list.= '</ul>';
    return $list;
}
?>