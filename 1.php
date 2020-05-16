<?php
function triangle($jml) 
{ 
      
    // loop luar untuk jumlah baris
    for ($i = 0; $i < $jml; $i++) 
    { 
        // loop dalam untuk jumlah kolom
        // terhadap loop luar
        for($j = 0; $j <= $i; $j++ ) 
        { 
              
            // Mencetak Pagar 
            echo "# "; 
        } 
  
        // Berhentikan baris setiap pagar 
        echo "\n"; 
    } 
} 

// variabel $jml untuk cetak banyaknya pyramid
$jml = 5;
$booltest = is_int($jml);
    // cek apabila variable yg diinput adalah integer
    if ($booltest) {
        echo triangle($jml);
    }
    else {
        echo '"Parameter Harus bersifat angka atau positif"';
    }
    
?>
