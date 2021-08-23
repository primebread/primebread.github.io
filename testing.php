<?php
    //life
    $nilai 	  = 9;
    $perilaku = 8; 
    
    // Error
    if ($nilai >= 9) ;
        echo 'Sangat Baik';
    else {
        echo 'Sedang';
    }
    
    // Benar
    if ($nilai >= 9) :
        if ($perilaku >= 9) {
            echo 'Sangat Baik';
        } else {
            echo 'Baik';
        }
    else :	
        echo 'Sedang';
    endif;

    
        // life choose your own variables//

?>