<?php 

session_start();
if(isset($_SESSION['user_name'])){


}else{
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><button>Home</button></a>
    <h4>My cart</h4>
    <?php 
     foreach($_SESSION['user_cart'] as $item){
         echo "<div style='margin-top:10px'>";
         echo "Item name: $item[1] | quantity: $item[2]";
         echo "<br/>";
         echo "item original price for default: $item[6]";
         echo "<br/>";
         echo "Additional item: $item[8] | Quantity: $item[4] | order id : $item[5]";
         echo "<br/>";
         echo "<h5>Total default Price</h5>";
         echo (int)$item[6] * (int)$item[2];
         echo "<br/>";
         echo "<h5>Total addon Price</h5>";
         echo (int)$item[7] * (int)$item[2];
         echo "<hr>";
     }
    ?>
   
</body>
</html>