<?php
include("../config.php");
session_start();
$user_id = $_SESSION['userid'];
 
$output = '';
$message = '';
   if (!empty($_POST)) { 
    $amountx = mysqli_real_escape_string($db, $_POST["amountx"]);  
    $services = mysqli_real_escape_string($db, $_POST["services"]);  
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
     

    // $suite1 = mysqli_real_escape_string($db, $_POST["suite1"]);  
    // $civic1 = mysqli_real_escape_string($db, $_POST["civic1"]);  
    // $countrijex = mysqli_real_escape_string($db, $_POST["countrijex"]);  
    // $statjex = mysqli_real_escape_string($db, $_POST["statjex"]);  
    // $city2 = mysqli_real_escape_string($db, $_POST["city2"]);  
    // $pcode2 = mysqli_real_escape_string($db, $_POST["pcode2"]);  
    // $msg1 = mysqli_real_escape_string($db, $_POST["msg1"]); 
    
    $contemp = mysqli_real_escape_string($db, $_POST["contemp"]);  
    $wcanada = mysqli_real_escape_string($db, $_POST["wcanada"]);  
    $employment = mysqli_real_escape_string($db, $_POST["employment"]);  
    $fempname = mysqli_real_escape_string($db, $_POST["fempname"]);  
    $lnamemp = mysqli_real_escape_string($db, $_POST["lnamemp"]);  
    $emmp_add = mysqli_real_escape_string($db, $_POST["emmp_add"]);  
    $emp_contry = mysqli_real_escape_string($db, $_POST["emp_contry"]);  
    $emp_stat = mysqli_real_escape_string($db, $_POST["emp_stat"]);  

    $emp_city = mysqli_real_escape_string($db, $_POST["emp_city"]);  
    $emp_postal = mysqli_real_escape_string($db, $_POST["emp_postal"]);  
    $emp_phon = mysqli_real_escape_string($db, $_POST["emp_phon"]);  
    $emp_web = mysqli_real_escape_string($db, $_POST["emp_web"]);  
    $ocu_st_date = mysqli_real_escape_string($db, $_POST["ocu_st_date"]);  
    $ocu_en_date = mysqli_real_escape_string($db, $_POST["ocu_en_date"]);  
    $pos_salry = mysqli_real_escape_string($db, $_POST["pos_salry"]);  
    $salry_period = mysqli_real_escape_string($db, $_POST["salry_period"]);    

if($_POST["hav_docu"]){
    $hav_docu = mysqli_real_escape_string($db, $_POST["hav_docu"]);    

}else{
    $hav_docu = 'No';    

}
if($_POST["authorized"]){
    $authorized = mysqli_real_escape_string($db, $_POST["authorized"]);     

}else{
    $authorized = 'No';    

}
if($_POST["agresign"]){
    $agresign = mysqli_real_escape_string($db, $_POST["agresign"]);

}else{
    $agresign = 'No';    

}
        

           $queries = "DELETE FROM cart WHERE user_id=$user_id";
           mysqli_query($db, $queries); 
            $query = "INSERT INTO `bg_user_info`(`service_name`,`r_lang`,`pos_app`,`fname`,`lname`,`dob_dat`,`age1`,`pob1`,`gender`,`addressx`,`countryx`,`statex`,`cityu`,`postaladd`,`phoneNumer1`,`emel1`,`insuranc1`,`amountx`,`contemp`,`wcanada`,`employment`,`fempname`,`lnamemp`,`emmp_add`,`emp_contry`,`emp_stat`,`emp_city`,`emp_postal`,`emp_phon`,`emp_web`,`ocu_st_date`,`ocu_en_date`,`pos_salry`,`salry_period`,`authorized`,`agresign`,`hav_docu`,`usr_id`,`created_at`)
             Value ('$services','$r_lang','$pos_app','$fname','$lname','$dob_dat','$age1','$pob1','$gender','$addressx','$countryx','$statex','$cityu','$postaladd','$phoneNumer1','$emel1','$insuranc1','$amountx','$contemp','$wcanada','$employment','$fempname','$lnamemp','$emmp_add','$emp_contry','$emp_stat','$emp_city','$emp_postal','$emp_phon','$emp_web','$ocu_st_date','$ocu_en_date','$pos_salry','$salry_period','$authorized','$agresign','$hav_docu','$user_id',CURRENT_TIMESTAMP()) ";
            // echo $query;
            if (mysqli_query($db, $query)) {
                    $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
                       $output .= $message;  
            
                } else {
                    $output .= 'Error' . $query;
                }
    
    
    echo $output;
    // print_r( $_POST["folder"]);

}


   //    echo $street1 = mysqli_real_escape_string($db, $_POST["street1"]);  

    
    // 
    
 