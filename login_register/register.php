<?php
session_start();
include("../Config.php");

if (!empty($_POST)) {
    $output = '';
    $message = '';
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $lastName1 = mysqli_real_escape_string($db, $_POST['lastName1']);
    $pob1 = mysqli_real_escape_string($db, $_POST['pob1']);
    $gend1 = mysqli_real_escape_string($db, $_POST['gend1']);
    $address1 = mysqli_real_escape_string($db, $_POST['address1']);
    $country1 = mysqli_real_escape_string($db, $_POST['country1']);
    $state1 = mysqli_real_escape_string($db, $_POST['state1']);
    $city1 = mysqli_real_escape_string($db, $_POST['city1']);
    $postalc1 = mysqli_real_escape_string($db, $_POST['postalc1']);
    $phoneNumber1 = mysqli_real_escape_string($db, $_POST['phoneNumber1']);
    $squestion1 = mysqli_real_escape_string($db, $_POST['squestion1']);
    $answer = mysqli_real_escape_string($db, $_POST['answer']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
    $password = password_hash($password_1, PASSWORD_DEFAULT); // Using password_hash() for secure hashing

    $sql = "SELECT * FROM bg_users WHERE email='$email'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo "Email already exists. Please try again with a different email.";
    } else {
        $query = "INSERT INTO `bg_users`(`email`,`password`,`fname`,`lastName1`,`pob1`,`gend1`,`address1`,`country1`,`state1`,`city1`,`postalc1`,`phoneNumber1`,`squestion1`,`answer`,`created_at`) VALUES ('$email','$password','$fname','$lastName1','$pob1','$gend1','$address1','$country1','$state1','$city1','$postalc1','$phoneNumber1','$squestion1','$answer',CURRENT_TIMESTAMP()) ";
     
        if ($db->query($query) === TRUE) {
            echo 1;
        } else {
            echo "Error: " . $query . "<br>" . $db->error;
        }
    }
}
?>
