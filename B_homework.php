<?php
    $speak = "Three-digit numbers that differ from each other:";
    echo "$speak"."<br>"."<br>";
    for($h=1;$h<=4;$h++){
        for($t=1;$t<=4;$t++){
            for($n=1;$n<=4;$n++){
                if($h!=$t &&  $h!=$n && $t!=$n){
                    $result = "$h" . "$t" . "$n" . "&nbsp";
                    $conut ++;
                    echo  $result;
                    $result= "";
                    if($conut==6){
                        $conut=0;
                    echo $result."<br>"."<br>";
 
                    }
                }
                
            }
        }
    }
    echo "-----DONE-----";
?>