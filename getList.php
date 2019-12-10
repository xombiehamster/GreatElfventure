<?php
#This function converts a numeric year value to a string.
#It's my own fault for numbering the turn docs with a prepended 0.
function getStringYear($year){

    if($year<10){
        $ys = '0'.$year;
    }else{
        $ys = $year;
    }
    return $ys;
}
#Given an elf and a point in the yearly sequence, this function builds the list of visible turns.
function getList($elf, $sequence){
    $list ='<ul>';
    $n = 1;
    #Blade elves are a special case. We'll handle their two shiny documents here.
    if($elf=="Blade"){
        $list.='<li><a href="Blade/Year/00_3_Blade.php">Winter, year 0</a></li>';
        if($sequence>0){
            $list.='<li><a href="Blade/Year/00_4_Blade.php">Spring, year 0</a></li>';
        }
        $list .= '</ul>';
        return $list;
    }
    #Loop through sequence to build file names.
    if($sequence >= 1){
        $y = 1;
        $m = 1;
        while($n<=$sequence){
            $ys = getStringYear($y);
            $list.='<li><a href="'.$elf.'/Year/'.$ys.'_'.$m.'_'.$elf.'.php">';
            switch ($m){
                case 1: 
                    $list.= 'Summer, year ';
                    $list.= $y.'</a></li>';
                    $m++;
                break;
                case 2:
                    $list.= 'Fall, year ';
                    $list.= $y.'</a></li>';
                    $m++;
                break;
                case 3:
                    $list.= 'Winter, year ';
                    $list.= $y.'</a></li>';
                    $m++;
                break;
                case 4:
                    $list.= 'Spring, year ';
                    $list.= $y.'</a></li>';
                    $y++;
                    $m = 1;
                break;
            }
            $n++;
        }
    }
    $list.= '</ul>';
    return $list;
}
?>
