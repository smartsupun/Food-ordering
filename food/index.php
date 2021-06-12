<?php 
  session_start();
  require_once('./database.php');
  
  if(isset($_POST['submit'])){
      login_validation($_POST['name']);
  }

  function login_validation($name){
    if($name != ''){
        //session_start();
        $_SESSION['user_name'] = $_POST['name'];
        $_SESSION['user_cart'] = array();
    }
  }
  $items;
  if(isset($_SESSION['user_name'])){
      $query = "SELECT * FROM items";
      $row = mysqli_query($database,$query);
      $items = mysqli_fetch_all($row);
      //print_r($items);
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type='text/javascript' src='./index.js'></script>
</head>
<body>
    <h4>
      <?php 
      if(isset($_SESSION['user_name'])){
        echo $_SESSION['user_name']; 
        $cart_quantity = count($_SESSION['user_cart']);
        echo " - $cart_quantity";
      }else{
        echo "Pleace Login";
      }
      ?>
    </h4>

    <form action="logout.php" method="post">
        <h6>logout</h6>
        <input type="submit" name="logout">
    </form>
    <br>
    <br>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="name here">
        <input type="submit" name="submit" title="submit">
    </form>

    <a href="viewcart.php"><button>My Cart</button></a>
    
    <h4>Items</h4>
    
    <?php 
     if(isset($items)){
         foreach($items as $item){
            echo"<div style='border:5px solid black;margin-top:10px'>";
            echo  "<form action='cart.php' method='post'>";
            echo  "<h3>$item[1]</h3>";
            echo  "<h4>$item[2]</h4>";
            echo  "<h4>Default Price for one: $item[3]</h4>";
            echo   "<input style='display:none' type='text' name='item_id' value='$item[0]'  placeholder='item id'>";
            echo   "<input style='display:none' type='text' name='item_name' value='$item[1]'  placeholder='item name'>";
            echo   "<input style='display:none' type='text' name='item_price' value='$item[3]'  placeholder='item name'>";
            echo   "<input type='number' name='item_quantity'  placeholder='item quantity'>";
            
            echo   "<select id='additional_item_name' name='additional_item_id'>";
            echo      "<option value='1'>Chicken</option>";
            echo      "<option value='3'>Egg</option>";
            echo      "<option value='2'>Fish</option>";
            echo      "<option value='0'>None</option>";
            echo   "</select>";
            
            echo   "<select id='additional_item_quantity' name='additional_item_quantity'>";
            echo      "<option value='0'>0</option>";
            echo      "<option value='1'>1</option>";
            echo      "<option value='2'>2</option>";
            echo      "<option value='3'>3</option>";
            echo      "<option value='150'>150g</option>";
            echo      "<option value='50'>50g</option>";
            echo      "<option value='200'>200g</option>";
            echo   "</select>";
            
            echo   "<input type='submit' name='add' title='add to cart'>";
            echo  "</form>";
            echo "</div>";
         }
     }else{
         echo "Pleace log to view the menu";
     }
    
    ?>
   
</body>
</html>

