<?php 

session_start();


if($_SESSION['user_name']){
 
  function add_to_cart(){
    if($_REQUEST['item_id']!='' && $_REQUEST['item_quantity']!=''){
        $date = getdate();
        $order_id = "$date[year]$date[mon]$date[mday]$date[hours]$date[minutes]$date[seconds]";

        //get all details for additional items from database
        $id = $_REQUEST['additional_item_id'];
        require_once('./database.php');
        //$query = "SELECT * FROM additional_items WHERE id='$id'";
        $query = "SELECT * FROM additional_items WHERE id='$id'";
        $row = mysqli_query($database,$query);
        $additional_item = mysqli_fetch_all($row);


        $item = array(
          $_REQUEST['item_id'],
          $_REQUEST['item_name'],
          $_REQUEST['item_quantity'],
          $_REQUEST['additional_item_id'],
          $_REQUEST['additional_item_quantity'],
          $order_id,
          $_REQUEST['item_price'],
          $additional_item[0][2],
          $additional_item[0][1]
        );
        array_push($_SESSION['user_cart'],$item);
        header('location:index.php');
    }else{
        echo "Plz input id and quantity of product";
    }
  }
    

  if(isset($_REQUEST['add'])){
    add_to_cart();
  }

  
}
else{
    header('location:index.php');
}


?>