<?php 
// Pengecekan karakter yang berulang dengan php
function fillCharCounts($str, $count) 
{ 
    for ($i = 0; $i < strlen($str); $i++) 
        $count[ord($str[$i])]++; 
          
    for ($i = 0; $i < 256; $i++) 
        if($count[$i] > 1) 
            echo chr($i) . " : " .  
                         ($count[$i]) . "\n"; 
} 
  
    // Cetak karakter berulang 
function findDuplicates($str) 
{ 
    // Buat sebuah array berjumlah 
    // 256 dan hitung  
    // Semua karakter yang ada 
    $count = array(); 
    for ($i = 0; $i < 256; $i++) 
    $count[$i] = 0; 
    fillCharCounts($str, $count); 
  
      
} 
  
// Masukkan Parameter
$str = "hari apa saja saya bisa";
findDuplicates($str); 
      
?> 
