<?php
  
function square_sum(array $numbers) : int {
  
  $square= [];
  
  for($i = 0; $i<count($numbers); $i++){
    $square[] = pow($numbers[$i], 2);
  }

  if(!empty($numbers)) {return array_sum($square);}
  else{return 0;}
}

echo square_sum([]);

?>