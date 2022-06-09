<?php session_start();

if(in_array($_GET['id'], $_SESSION['cart'])){

    $index = array_search($_GET['id'], $_SESSION['cart']);
    unset($_SESSION['cart'][$index]);
    
    $_SESSION['message'] = 'Product remove from cart';
}else{
    $_SESSION['message'] = 'Product not remove from cart';

}
$location = $_SESSION['location'];
header('location:../' . $location);