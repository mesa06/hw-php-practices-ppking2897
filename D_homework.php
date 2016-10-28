<?php
function number(){
    for($h=1;$h<=9;$h++){
        for($t=0;$t<=9;$t++){
            for($n=0;$n<=9;$n++){
                $h3 = $h*$h*$h;
                $t3 = $t*$t*$t;
                $n3 = $n*$n*$n;
                
                $allTitle3 = $h3 + $t3 + $n3;
               
                $allTitle = "$h" . "$t" . "$n";
                if($allTitle=="$allTitle3"){
                 echo $allTitle ."<br>";
                }
            }
        }
    }
}
echo "Find Narcissistic number:"."<br>";
number();
echo "-----DONE-----";
?>