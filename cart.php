<?php session_start(); 
//initialize cart if not set or is unset
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
?>
<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<style>

    .card{
        margin: 15px;
        padding: 5px;
    }
</style>

</head>
<body>

<div class="container">
<div class="row">

    <h1>Cart</h1>

<?php

if(isset($_SESSION["cart"])){
$_SESSION['location']='cart.php';

foreach($_SESSION['cart'] as $product_id){
    $sql="SELECT * FROM products WHERE product_id = $product_id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);?>

    <div class="card" style="width: 18rem;">
        <img src="dist/images/<?php echo $row['product_img'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['product_name'];?></h5>
            <p class="card-text">$ <?php echo $row['product_price'];?></p>
            <a href="remove_cart.php?id=<?php echo $row['product_id'];?>" class="btn btn-danger">Remove</a>
        </div>
    </div>

<?php
    }
}
}
?>
</div>
</div>

<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
</body>
</html>
