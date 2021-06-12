<?php 

session_start();
if($_SESSION['user_name']){

    session_destroy();
    header('location:index.php');

}else{
    header('location:index.php');
}

?>