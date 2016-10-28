<?php
    function showStars($count,$what = "*"){
        if($count <=0){
            echo '$count <= 0 Please Change';
            return;
        }
        if($count >=21){
            echo '$count >=20  Please Change';
            return;
        }
        if($count ==4){
            echo '$count !=4 Please Change';
            return;
        }
        if($count %2 ==0){
            echo '$count is even Please Change';
            return;
        }
        $space = $count / 2 ;
        $space = ceil($space);

        for($i=1;$i<=$count;$i=$i+2){
            
            for($x=1;$x<$space;$x++){
                $result = $result . "&nbsp". "&nbsp";
            }
            $space = $space-1;
            
            for($n=1;$n<=$i;$n++){
                $result = $result . $what;
            }
            $result=$result."<br>";
        }
        echo $result;
        echo "<hr>";
        
        // $result="";
        // $space = $count / 2 ;
        // $space = ceil($space);
        
        
        // for($i=1;$i<=$count;$i=$i+2){

        //     for($n=1;$n<=$i;$n++){
        //         $result = $result . $what;
        //     }
        //     $result=$result."<br>";

        //     for($x=1;$x<$space;$x++){
        //         $result = $result . "&nbsp". "&nbsp";
        //     }
        //     $space = $space-1;
        // }
        // echo $result;
        
    }
    
    
    $howMany = 15;
    showStars($howMany);
    echo "<br>" , "--Done--";
?>