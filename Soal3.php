<?php


function cetak_gambar($banyak) {

    for ($i= 0; $i < $banyak;  $i++ )
    
    {
        for ($a= 0; $a < $banyak;  $a++ ) 

        {
   
          if ($i == 0 || $i == $banyak - 1 ) {
              echo '+ ';
          } else {
             if($a == ceil($banyak/2)-1){
                 echo '+ ';
             } else {
                 echo '= ';
             }
          }
          
        }
      
      echo "\r\n";
    }
}


cetak_gambar(9);

?>