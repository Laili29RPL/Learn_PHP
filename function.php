<?php
/**
 * function/method/fungsi = blok kode yang akan dijalankan ketika dipanggil
 * blok kode -> kumpulan baris kode yang diapit oleh tanda { }
 */

 function prokes( ){
     echo "Memakai masker";
     echo "Menyabun tangan";
     echo "Mengurangi mobilitas";
 }

 function makan ($nama_makanan){
     echo "Cuci tangan";
     echo "Baca doa";
     echo "Masukkan makanan  $nama_makanan ";
     echo "Kunyah $nama_makanan ";
     echo "Telan $nama_makanan ";
 }

 // echo prokes ( );
 echo makan ("Burger");
 echo makan ("soto");
?>