<?php
// menghitung BMI
/**
    *1. Definisi weight
    *2. Definisi height
    *3. Count BMI -> weight / height
    *4. Show number of BMI
    *5. Show category
    */

$weight = 70;
$height = 1.65;
$bmi = $weight / $height * $height;
echo "your BMI: $bmi \n";
if($bmi<18.5){
    echo"Kurang berat badan";
}elseif($bmi >=18.5 && $bmi < 23){
    echo "Normal";
}elseif($bmi >= 23 && $bmi < 30){
    echo "Cenderung Obesitas";
}elseif($bmi >=30 ){
    echo "Obesitas";
}
?>