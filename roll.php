<?php
$post_qty = $_POST['qty'];
$post_dice = $_POST['dice'];

switch ($post_dice){
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

