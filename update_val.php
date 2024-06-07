<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Origin: https://bgcheckapp.matrixanalytic.com");
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'bgcheckapp');
define('DB_PASSWORD', 'L2%t6m81g');
define('DB_DATABASE', 'bgcheck_php');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$user_id = $_SESSION['userid'];

if (isset($_POST["update_val"]) && ($_POST["update_val"])) { 
    $update_val  = $_POST["update_val"];  
    $id_for_val  = $_POST["id_for_val"];  

   $update_querys = "UPDATE cart SET pro_qty=$update_val WHERE pro_id='" .$id_for_val. "'";
    if (mysqli_query($db, $update_querys)) {
        $message = 'Data Updated';
    } else {
        $message = 'Error updating data: ' . mysqli_error($db);
    }
      
} 
  