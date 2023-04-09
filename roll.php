<?php
$qty = $_POST['qty'];
$dice = $_POST['dice'];

switch ($dice){
    case 4:
        $dice = 4;
        break;
    case 6:
        $dice = 6;
        break;
    case 8:
        $dice = 8;
        break;
    case 10:
        $dice = 10;
        break;
    case 12:
        $dice = 12;
        break;
    case 20:
        $dice = 20;
        break;
    default:
        return "Choose a dice";
}
$sum = 0;
for ($i = 1; $i <= $qty; $i++){
    $value = rand(1, $dice);
    $sum += $value;
    echo $i . "st d" . $dice . " : " . $value . "<br>";
}
echo "Total: " . $sum . " points";
