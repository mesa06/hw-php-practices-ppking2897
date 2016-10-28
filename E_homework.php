<?php 
 
    //輸入你想要的數字以及字母在這---------------------------------
    $checkWord = "QQQQQQQQQQQQQQQQQQQQQQQQQQQQQ";
    //-------------------------------------------------------------
    $changeBig = strtoupper($checkWord);
    $bigWord = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $number = array('1','2','3','4','5','6','7','8','9','0');
    
    for($i=0;$i<=25;$i++){
        $x = substr_count($changeBig,$bigWord[$i]);
        echo $bigWord[$i]."=".$x."&nbsp"."&nbsp"."&nbsp";
    }
    echo "<hr>";
    
    for($n=0;$n<=9;$n++){
        $y = substr_count($changeBig,$number[$n]);
        echo $number[$n]."=".$y."&nbsp"."&nbsp"."&nbsp";
    }
    
    echo "<hr>"."<br>"."-----DONE-----";
?>