<?php
/**
 * array adalah kumpulan nilai yang berjenis sama
 * setiap data punya posisi yang disebut index (start from 0)
 * variabel -> individu
 * array -> populasi
 */
//$student = "Bill Gates";
//$siswa = ["John Cena","The Rock","Batista","Rey Mysterio"];
//echo $siswa[1];

$person=[
    ["name" =>"Gopal","address"=>"Madrid","age"=>40],
    ["name" =>"Kaizo","address"=>"Saturnus","age"=>80],
    ["name" =>"Kokochi","address"=>"Pluto","age"=>20],
];

echo $person[2]["address"];
?>