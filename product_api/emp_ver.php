<?php
include("../config.php");
session_start();
$user_id = $_SESSION['userid'];
 
$output = '';
$message = '';
   if (!empty($_POST)) { 
   echo $services = mysqli_real_escape_string($db, $_POST["services"]);  
   $r_lang = mysqli_real_escape_string($db, $_POST["r_lang"]);  
   $pos_app = mysqli_real_escape_string($db, $_POST["pos_app"]);  
   $fname = mysqli_real_escape_string($db, $_POST["fname"]);  
   $lname = mysqli_real_escape_string($db, $_POST["lname"]);  
   $dob_dat = mysqli_real_escape_string($db, $_POST["dob_dat"]);  
   $age1 = mysqli_real_escape_string($db, $_POST["age1"]);  
   $pob1 = mysqli_real_escape_string($db, $_POST["pob1"]);  
   $gender = mysqli_real_escape_string($db, $_POST["gender"]);  
   $addressx = mysqli_real_escape_string($db, $_POST["addressx"]);  
   $countryx = mysqli_real_escape_string($db, $_POST["countryx"]);  
   $statex = mysqli_real_escape_string($db, $_POST["statex"]);  
   $cityu = mysqli_real_escape_string($db, $_POST["cityu"]);  
   $postaladd = mysqli_real_escape_string($db, $_POST["postaladd"]);  
   $phoneNumer1 = mysqli_real_escape_string($db, $_POST["phoneNumer1"]);  
   $emel1 = mysqli_real_escape_string($db, $_POST["emel1"]);  
   $insuranc1 = mysqli_real_escape_string($db, $_POST["insuranc1"]);  
 
   $query = "INSERT INTO `bg_user_info`(`service_name`,`r_lang`,`pos_app`,`fname`,`lname`,`dob_dat`,`age1`,`pob1`,`gender`,`addressx`,`countryx`,`statex`,`cityu`,`postaladd`,`phoneNumer1`,`emel1`,`insuranc1`,`usr_id`,`created_at`)
    Value ('$services','$r_lang','$pos_app','$fname','$lname','$dob_dat','$age1','$pob1','$gender','$addressx','$countryx','$statex','$cityu','$postaladd','$phoneNumer1','$emel1','$insuranc1','$user_id',CURRENT_TIMESTAMP()) ";
            // echo $query;
            if (mysqli_query($db, $query)) {
                    $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
                       $output .= $message;  
            
                } else {
                    $output .= 'Error' . $query;
                }
    
    // if ($_POST["employee_id"] != '') {
    //     $query = "  
    //        UPDATE folders   
    //        SET folder_name='$cname'
    //        WHERE id='" . $_POST["employee_id"] . "'";
    //     $message = 'Data Updated  ';
    // } else {
    //     $query = "  
    //        INSERT INTO `folders`(`folder_name`,`created_at`,`cabinet_id`) Value ('$cname',CURRENT_TIMESTAMP(),'$cab_id') ";
    //     $message = 'Data Inserted';
    // }
    // if (mysqli_query($db, $query)) {
    //     $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
    //     //    $output .= $message;  

    // } else {
    //     $output .= 'Error' . $query;
    // }
    echo $output;
    // print_r( $_POST["folder"]);

}


   //    echo $street1 = mysqli_real_escape_string($db, $_POST["street1"]);  
//    echo $suite1 = mysqli_real_escape_string($db, $_POST["suite1"]);  
//    echo $civic1 = mysqli_real_escape_string($db, $_POST["civic1"]);  
//    echo $countrijex = mysqli_real_escape_string($db, $_POST["countrijex"]);  
//    echo $statjex = mysqli_real_escape_string($db, $_POST["statjex"]);  
//    echo $city2 = mysqli_real_escape_string($db, $_POST["city2"]);  
//    echo $pcode2 = mysqli_real_escape_string($db, $_POST["pcode2"]);  
//    echo $msg1 = mysqli_real_escape_string($db, $_POST["msg1"]); 
    
    // 
    
    // $contemp = mysqli_real_escape_string($db, $_POST["contemp"]);  
    // $wcanada = mysqli_real_escape_string($db, $_POST["wcanada"]);  
    // $employment = mysqli_real_escape_string($db, $_POST["employment"]);  
    // $fempname = mysqli_real_escape_string($db, $_POST["fempname"]);  
    // $lnamemp = mysqli_real_escape_string($db, $_POST["lnamemp"]);  
    // $emmp_add = mysqli_real_escape_string($db, $_POST["emmp_add"]);  
    // $emp_contry = mysqli_real_escape_string($db, $_POST["emp_contry"]);  
    // $emp_stat = mysqli_real_escape_string($db, $_POST["emp_stat"]);  
    // $emp_city = mysqli_real_escape_string($db, $_POST["emp_city"]);  
    // $emp_postal = mysqli_real_escape_string($db, $_POST["emp_postal"]);  
    // $emp_phon = mysqli_real_escape_string($db, $_POST["emp_phon"]);  
    // $emp_web = mysqli_real_escape_string($db, $_POST["emp_web"]);  
    // $ocu_st_date = mysqli_real_escape_string($db, $_POST["ocu_st_date"]);  
    // $ocu_en_date = mysqli_real_escape_string($db, $_POST["ocu_en_date"]);  
    // $wcanada = mysqli_real_escape_string($db, $_POST["wcanada"]);  
    // $wcanada = mysqli_real_escape_string($db, $_POST["wcanada"]);  
    // $wcanada = mysqli_real_escape_string($db, $_POST["wcanada"]);  
    // $wcanada = mysqli_real_escape_string($db, $_POST["wcanada"]);  
    // $wcanada = mysqli_real_escape_string($db, $_POST["wcanada"]);  
    // $wcanada = mysqli_real_escape_string($db, $_POST["wcanada"]);  
 