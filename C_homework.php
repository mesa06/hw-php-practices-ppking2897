<?php
    $inputdate = "1988 08 02";
    $x = strlen($inputdate);
    if($x>8){
        $find = array('/', '-'," ");
        $x = str_replace($find,"",$inputdate);
        $year = substr($x,0,4);
        $month = substr($x,4,2);
        $date = substr($x,6,2);
        
        if(($year%4)==0 && ($year%100)!=0 || ($year%400) ==0){
            $dayofMonthArray=[31,29,31,30,31,30,31,31,30,31,30,31];
            for($i=0;$i<=$month-1;$i++){
                $dayofMonth+=$dayofMonthArray[$i];
            }
            $dayofMonth  += $date;
        }
        else{
            $dayofMonthArray=[31,28,31,30,31,30,31,31,30,31,30,31];
            for($i=0;$i<=$month-1;$i++){
                $dayofMonth+=$dayofMonthArray[$i];
            }
            $dayofMonth  += $date;
        }
    }
    
    
    
    echo $dayofMonth;
?>