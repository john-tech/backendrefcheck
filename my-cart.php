<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Analytics Dashboard - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
<?php
include("Config.php"); 
$id = $_GET['id'];
$_SESSION['cart'] = $id; 
    $qry = mysqli_query($db,"select * from bg_products where pro_id='$id'"); // select query
    $data = mysqli_fetch_array($qry); 



    // 



//     if(isset($_GET['action']) && $_GET['action']=="add"){
// 	$id=intval($_GET['id']);
// 	if(isset($_SESSION['cart'][$id])){
// 		$_SESSION['cart'][$id]['quantity']++;
// 	}else{
// 		$sql_p="SELECT * FROM bg_products WHERE pro_id={$id}";
// 		$query_p=mysqli_query($db,$sql_p);
// 		if(mysqli_num_rows($query_p)!=0){
// 			$row_p=mysqli_fetch_array($query_p);
// 			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
// 		}else{
// 			$message="Product ID is invalid";
// 		}
// 	}
// 		echo "<script>alert('Product has been added to the cart')</script>";
// 		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
// }

?>
    <!-- BEGIN: Header-->
    <?php include './sidebar.php' ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
   
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
             
                <div class="row match-height">
                    
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-content">
                                <div id="audience-list-scroll" class="table-responsive height-300 position-relative">

                                    <h3 class="cart-pg-tittle">Your Shopping Cart
                                    </h3>
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="cart-img-col">Item</th>
                                                <th class="cart-desc-col">Description</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td ><img src="uploads/<?= $data['imag'];?>" width="100" height="50"> </td>
                                                <td> <h3 class="cart-prod-tittle"><?= $data['name'];?></h3> <p> <?= $data['smal_desc'];?></p> </td>
                                                <td><input type="number" name="name" value="1"></td>
                                                    <?php
                                                    function formatCurrency($number) {
                                                        return '$' . number_format($number, 2);
                                                    } 
                                                    $amount = $data['org_pric'];
                                                    // echo formatCurrency($amount); // Outputs: $1,234.56
                                                    ?>
                                                <td> <?= formatCurrency($amount);;?></td>
                                                <td><?= formatCurrency($amount);?></td>
                                                <td> <img src="app-assets/images/carousel/cross.png" width="30" height="30"> </td>

                                            </tr>                                             
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/ Cart Items End -->

                <div class="row match-height">
                     <div class="col-xl-6 col-lg-12"> 
                    </div> 
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <h4 class="cart-pg-tittle">Payble Amount</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div id="goal-list-scroll" class="table-responsive height-250 position-relative">
                                    <table class="table mb-0">
                                        <!-- <thead>
                                            <tr>
                                                <th>Goals</th>
                                                <th>Goal Value</th>
                                                <th>Conversion rate</th>
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                            <tr>
                                                <td>Sub-Total</td>
                                                <td>$50</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Tax</td>
                                                <td>$0.12</td>
                                               
                                            </tr>
                                            <tr>
                                                <td class="cart-total">Total</td>
                                                <td class="cart-total">$50.12</td>
                                             
                                            </tr>
                                            <tr>
                                               
                                            <td>  <a href="products.php" class="btn checknshopng">Continue Shopping</a> </td>
                                              <td>  <a href="my_forms.php?id=<?= $id; ?>" class="btn checknshopng">Checkout</a> </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">PIXINVENT </a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="feather icon-heart pink"></i></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/jquery.knob.min.js"></script>
    <script src="app-assets/js/scripts/extensions/knob.js"></script>
    <script src="app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <script src="app-assets/data/jvector/visitor-data.js"></script>
    <script src="app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="app-assets/vendors/js/extensions/unslider-min.js"></script>
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href="app-assefonts/simple-line-icons/style.min.css">
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>