<?php

//loop3 for loop
echo "<table border='1'>";

 for($i=0;$i<10;$i++){
     echo "<tr>";
     if($i%2==0){
         echo "<td bgcolor='yellow'>$i</td>";
         
     }
     else{
         echo "<td bgcolor='green'>$i</td>";
     
     }
     echo "</tr>";
    
 }
echo "</table>"
 ?>
 
 

