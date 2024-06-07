<?php
include("../config.php");
session_start();

$user_id = $_SESSION['userid'];

if (isset($_POST["update_val"]) && ($_POST["update_val"])) { 
    $update_val  = $_POST["update_val"];  
    $id_for_val  = $_POST["id_for_val"];  

   echo $update_query = "UPDATE cart SET pro_qty=$update_val WHERE pro_id='" .$id_for_val. "'";
    if (mysqli_query($db, $update_query)) {
        $message = 'Data Updated';
    } else {
        $message = 'Error updating data: ' . mysqli_error($db);
    }
      
} 
  