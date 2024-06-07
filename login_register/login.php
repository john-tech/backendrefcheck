<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'bgcheck_php');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Origin: https://bgcheckapp.matrixanalytic.com");
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['user-password']);
 
    $query = "SELECT userid, fname, password, privilage FROM bg_users WHERE email = '$username'";
    $result = mysqli_query($db, $query);

    if (!$result) { 
        die("Error: " . mysqli_error($db));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['userid'] = $row['userid'];
            // $_SESSION['prive'] = $row['privilage'];

            // if ($_SESSION['prive'] == 'admin') {
            //    echo $_SESSION['userid'] = 1;
            // } 
            header('Location: ../products.php');
            exit();
        } else { 
            echo "<script>alert('Incorrect password. Please try again.'); window.location.href='../index.php';</script>";
        }
    } else { 
        echo "<script>alert('User not found.'); window.location.href='../index.php';</script>";
    }
}
?>
