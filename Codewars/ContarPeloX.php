<?php
    function countBy($x, $n) {
        $z = [];
        
        for($i = 1; $i <= $n; $i++) {
            
            $y = $x * $i;

            $z[] = $y;

            // echo '<pre>';
            // print_r($z);
            // echo '</pre>';
            // echo '<br/>';
            // echo '<br/>';
            
            // echo "x: $x, i: $i |";
        };
    
        return $z;
    }

    echo '<pre>';
    print_r(countBy(3, 10));
    echo '</pre>';
?>