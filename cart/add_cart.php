<?php
include("../config.php");
session_start();
$user_id = $_SESSION['userid'];

if (isset($_POST["cart_id"])) {
    // Establish database connection
    $cart_id = mysqli_real_escape_string($db, $_POST["cart_id"]);

    // Check if the cart item already exists
    $check_query = "SELECT * FROM cart WHERE pro_id='$cart_id' and user_id='$user_id'";
    $check_result = mysqli_query($db, $check_query);

    if (!$check_result) {
        $message = 'Error checking cart: ' . mysqli_error($db);
    } else {
        // Fetch data if cart item exists
        $data = mysqli_fetch_array($check_result);
        
        if (mysqli_num_rows($check_result) > 0) {
            // Cart item exists, update quantity
            $qtyy = $data['pro_qty'] + 1; 
           echo $update_query = "UPDATE cart SET pro_qty=$qtyy WHERE pro_id='$cart_id' and user_id='$user_id'";
            if (mysqli_query($db, $update_query)) {
                $message = 'Data Updated';
            } else {
                $message = 'Error updating data: ' . mysqli_error($db);
            }
        } else {
            // Cart item doesn't exist, insert into cart
            echo    $insert_query = "INSERT INTO cart (user_id, pro_id, pro_qty) VALUES ('$user_id', '$cart_id', '1')";
            if (mysqli_query($db, $insert_query)) {
                $message = 'Data Inserted';
            } else {
                $message = 'Error inserting data: ' . mysqli_error($db);
            }
        }
    }

    // Close connection
    mysqli_close($db);
}
?>
