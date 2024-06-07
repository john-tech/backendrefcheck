<?php

require('stripe-php-master/init.php');
$publishableKey="pk_test_51M35IfLsuGyV4cRXL5d9GrGV7UiTCSw84LcVwHXm4aqH3SIJsWtWSqFDMhmltCpzFQZVUpPD8zpEr18fuHNF3rl000AJifjLUl";
$secretKey="sk_test_51M35IfLsuGyV4cRXK0KqilRKIZ1bvz1oo9wvilJrrMSTOtJiZgjuG6Sfhg9FL1wPcDtTCqFMJyJg2gV6RqUbpvUj00HlBgD4El";
\Stripe\Stripe::setApiKey($secretKey);
    if (isset($_POST['stripeToken'])) {
    // \Stripe\Stripe::setVerifySslCerts(false);
    $token = $_POST['stripeToken'];  
    $data = \Stripe\Charge::create(
        array(
            "amount" => '5000',
            "currency" => "usd",
            "description" => 'xyz',
            "source" => $token,
        )
    );
    // $sql = "INSERT INTO upload_pdf (b_name,b_ath_name,b_sell,b_price,pdfs,b_orgnal_pric,created_at,payment_methd) VALUES ('$b_name','$b_ath_name','$b_sell','$b_price','$file','$amount','$date','Stripe')";
    // $iquery = mysqli_query($db, $sql);
    // header("Location: bok_upload.php");
}  