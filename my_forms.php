<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Form</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">  
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css"> 
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css"> 
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css"> 
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.css"> 
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">


    <?php include './sidebar.php' ?>
    <?php
    include("Config.php"); 
    $id = $_GET['id'];
    $_SESSION['cart'] = $id; 
    $qry = mysqli_query($db,"SELECT bg_products.* , cart.pro_qty FROM cart INNER JOIN bg_users ON cart.user_id = bg_users.userid INNER JOIN bg_products ON cart.pro_id = bg_products.pro_id WHERE bg_products.pro_id = '$id';"); // select query
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
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Employment Verification</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Page</a>
                                </li>
                                <li class="breadcrumb-item active">Employment Verification
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right"
                                id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="feather icon-settings icon-left"></i> Settings</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item"
                                    href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item"
                                    href="component-buttons-extended.html">Buttons Extended</a></div>
                        </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i
                                class="feather icon-mail"></i></a><a class="btn btn-outline-primary"
                            href="timeline-center.html"><i class="feather icon-pie-chart"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Form wizard with number tabs section start -->
                <section id="number-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4 class="card-title">Form wizard with number tabs</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="fa fa-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form id="insert_form" class="steps-validation wizard-circle">

                                            <!-- Step 1 -->
                                            <h6>Subject</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="hidden" id="services"name="services" value="<?= $data['name'];?>">
                                                            <label for="firstName1">Report Language:</label>
                                                            <!--   <input type="text" class="form-control" id="firstName1"> -->
                                                            <select class="custom-select form-control"  id="r_lang"
                                                                name="r_lang" >
                                                                <option value="" Disabled>Select Language</option>
                                                                <option value="English">English </option>
                                                                <option value="French">French</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Position applied (if applicable) or
                                                                object of the audit:</label>

                                                            <select class="custom-select form-control" id="pos_app"
                                                                name="pos_app" >
                                                                <option value="" Disabled>Select Position</option>
                                                                <option value="Employment">Employment</option>
                                                                <option value="Background Screening">Background
                                                                    Screening</option>
                                                                <option value="Folunteering">Volunteering</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">First Name:</label>
                                                            <input type="text" class="form-control " id="fname"
                                                                name="fname" >

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Last Name:</label>
                                                            <input type="text" class="form-control" id="lname"
                                                                name="lname" >

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="date1">Date of Birth :</label> 
                                                                <input type="text" 
                                                                class="form-control pickadate picker__input picker__input--active"
                                                                placeholder="Date Of Birth" readonly=""
                                                                id="dob_dat" name="dob_dat" aria-haspopup="true"
                                                                aria-readonly="false" aria-owns="P1043209353_root">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="age1">Age:</label>
                                                            <input type="text" class="form-control" name="age1"
                                                                id="age1" >

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pob">Place of Birth:</label>
                                                            <input type="text" class="form-control" id="pob1"
                                                                name="pob1">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="gend1">Gender:</label>

                                                            <select class="custom-select form-control" id="gender"
                                                                name="gender" >
                                                                <option value="" Disabled>Select</option>
                                                                <option value="male">Male </option>
                                                                <option value="female">Female</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3> Current Residential Address </h3>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="address1">Address :</label>
                                                            <input type="text" class="form-control" id="addressx"
                                                                name="addressx" >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="countryx">Country:</label>

                                                            <select class="custom-select form-control" id="countryx"
                                                                name="countryx" >
                                                                <option value="" Disabled>Select</option>
                                                                <option value="Canada">Canada </option>
                                                                <option value="USA">USA</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="state1">State:</label>
                                                            <input type="text" class="form-control" id="statex"
                                                                name="statex" >



                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="city1">City:</label>
                                                            <input type="text" class="form-control" id="cityu"
                                                                name="cityu" >

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="postalc1">Postal Code:</label>
                                                            <input type="tel" class="form-control" id="postaladd"
                                                                name="postaladd">


                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1">Phone Number :</label>
                                                            <input type="tel" class="form-control" id="phoneNumer1"
                                                                name="phoneNumer1" >


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emel1">Email:</label>
                                                            <input type="email" class="form-control" id="emel1"
                                                                name="emel1" require>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="insurance1">Social Insurance Number:</label>
                                                            <input type="text" class="form-control" id="insuranc1"
                                                                name="insuranc1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <!-- <div class="row">
                                                    <div class="col-md-12">
                                                        <h3> Current Residential Address </h3>
                                                    </div>
                                                </div> -->

<!-- 
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="address1">Have you lived at your current address
                                                                for the last 5 years?
                                                            </label> <br>
                                                            <input type="radio" id="yes" name="fav_language"
                                                                value="Yes">
                                                             <label for="yes">Yes</label>
                                                             <input type="radio" id="no" name="fav_language"
                                                                value="No">
                                                             <label for="css">No</label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="street1">Street:</label>
                                                            <input type="text" class="form-control" id="street1"name="street1">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="suite1">Suite:</label>
                                                            <input type="text" class="form-control" id="suite1"name="suite1">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="civic1">Civic:</label>
                                                            <input type="text" class="form-control" id="civic1" name="civic1">

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="countrijex">Country:</label>

                                                            <select class="custom-select form-control" id="countrijex"
                                                                name="countrijex" >
                                                                <option value="" Disabled>Select</option>
                                                                <option value="canada">Canada </option>
                                                                <option value="USA">USA</option>

                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="statjex">State:</label>
                                                            <input type="text" class="form-control" id="statjex"name="statjex"
                                                                >

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="city2">City:</label>
                                                            <input type="text" class="form-control" id="city2" name="city2" >

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="pcode2">Postal Code:</label>
                                                            <input type="text" class="form-control" id="pcode2" name="pcode2"
                                                                >
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="msg1">Message:</label>

                                                            <textarea name="msg1" id="msg1" rows="4"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>


                                                </div> -->
                                            </fieldset>


                                            <!-- Step 2 -->
                                            <h6>Employment</h6>
                                            <fieldset>
                                            <div class="duplicatable-fieldset" id="fieldset-container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="contemp">Can we contact your current employer?</label>

                                                            <select class="custom-select form-control" id="contemp"
                                                                name="contemp" >
                                                                <option value="" Disabled>Select</option>
                                                                <option value="yes">Yes </option>
                                                                <option value="no">No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wcanada">Are you authorized to work in Canada?</label>

                                                            <select class="custom-select form-control" id="wcanada"
                                                                name="wcanada" >
                                                                <option value="" Disabled>Select</option>
                                                                <option value="yes">Yes </option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="employment">Employer:</label>
                                                            <input type="text" class="form-control" id="employment" id="employment"
                                                                require>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h3> Supervisor </h3>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fempname">First Name:</label>
                                                            <input type="text" class="form-control" id="fempname" name="fempname"
                                                                require>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lnamemp">Last Name:</label>
                                                            <input type="text" class="form-control" id="lnamemp" name="lnamemp"
                                                                require>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h3> Address </h3>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="emmp_add">Address :</label>
                                                            <input type="text" class="form-control" id="emmp_add" name="emmp_add"
                                                                >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="emp_contry">Country:</label>

                                                            <select class="custom-select form-control" id="emp_contry" name="emp_contry"
                                                                name="country" >
                                                                <option value="" Disabled>Select</option>
                                                                <option value="canada">Canada </option>
                                                                <option value="usa">USA</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emp_stat">State:</label>
                                                            <input type="text" class="form-control" id="emp_stat" name="emp_stat"
                                                                >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="emp_city">City:</label>
                                                            <input type="text" class="form-control" id="emp_city" name="emp_city" >

                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emp_postal">Postal Code:</label>
                                                            <input type="tel" class="form-control" id="emp_postal" name="emp_postal"
                                                                >

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emp_phon">Phone Number :</label>
                                                            <input type="tel" class="form-control" id="emp_phon" name="emp_phon"
                                                                >


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email1">Email:</label>
                                                            <input type="email" class="form-control" id="email1"
                                                                require>


                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emp_web">Website:</label>
                                                            <input type="text" class="form-control" id="emp_web" name="emp_web">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h3> Position Occupied </h3>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="startdate">Start Date:</label>
                                                            <input type="text"
                                                                class="form-control pickadate picker__input picker__input--active"
                                                                placeholder="Start Date" readonly=""
                                                                id="ocu_st_date" name="ocu_st_date" aria-haspopup="true"
                                                                aria-readonly="false" aria-owns="P1043209353_root">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="enddate">End Date:</label>
                                                            <input type="text"
                                                                class="form-control pickadate picker__input picker__input--active"
                                                                placeholder="End Date" readonly=""
                                                                id="ocu_en_date" name="ocu_en_date" aria-haspopup="true"
                                                                aria-readonly="false" aria-owns="P1043209353_root">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pos_salry">Salary:</label>
                                                            <input type="text" class="form-control" id="pos_salry" name="pos_salry"
                                                                >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="salry_period">Salary Period:</label>
                                                            <select class="custom-select form-control" id="salry_period"
                                                                name="salry_period" >
                                                                <option value="" Disabled>Select</option>
                                                                <option value="monthly">Monthly </option>
                                                                <option value="weekly">Weekly</option>
                                                                <option value="daily">Daily</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" class="close-fieldset-button"
                                                        onclick="removeFieldset(this)"
                                                        style="display: none;">Remove</button>
                                                        
                                                                <hr>
                                               <br> 
                                                    </div>
                                                <div class="onl"> <button type="button" onclick="addFieldset()">Add
                                                        Another Set</button>
                                                </div>
                                       
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6>Summary</h6>
                                            <fieldset>
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <h2 class="summry"> Summary </h2>
                                                        <hr class="sum-line">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h3 class="sub-headingz"> Candidate Details </h3>
                                                    </div>
                                                    <div class="col-md-6">


                                                        <div class="form-group">
                                                            <label for="participants1">First Name: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Last Name: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Gender: </label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="meetingName1">DOB: </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meetingLocation1">Age: </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="participants1">Place of Birth: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Phone: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Email: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Position applied (if applicable)
                                                                or object of the audit: </label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h3 class="sub-headingz">Current Residential Address: </h3>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meetingLocation1">Address: </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="participants1">City: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">State: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Postal Code: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Country: </label>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">

                                                        <div class="form-group">
                                                            <hr>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-12">



                                                        <div class="form-group">
                                                            <h3 class="sub-headingz">Employment History: </h3>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meetingLocation1">Contact Current Employer:
                                                            </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="participants1">Are you authorized to work in
                                                                Canada: </label>

                                                        </div>
                                                        <div class="form-group">

                                                            <label for="participants1">Employer: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <h4 class="sub-headingz">Supervisor: </h4>
                                                            <label for="participants1">First Name: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Last Name: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Phone: </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <h4 class="sub-headingz">Current Residential Address: </h4>
                                                            <label for="participants1"> </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <h4 class="sub-headingz">Position Occupied: </h4>
                                                            <label for="participants1">Position: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Start Date: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">End Date: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Salary: </label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="participants1">Salary Period: </label>
                                                        </div>
                                                    </div>
                                            </fieldset>

                                            <!-- Step 4 -->
                                            <h6>Signature</h6>
                                            <fieldset>

                                                <div class="row">


                                                    <div class="card-content collapse show">

                                                    </div>


                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">


                                                            <div class="controls">
                                                                <label for="participants1">I hereby give authorization
                                                                    to RC 360, to obtain the following information (as
                                                                    selected below â€“ check all that apply): </label>
                                                                <br>
                                                                <input type="checkbox" name="single_switchery"
                                                                    class="switchery" >
                                                                I hereby consent to the release of details regarding my
                                                                employment history, including employment data
                                                                verifications from any employer/position I have
                                                                previously held.

                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h3 class="sub-headingz">Release & Discharge: </h3>
                                                            <p> I understand that the information obtained as a result
                                                                of this authorization will be held in the strictest of
                                                                confidentiality by Reference Check 360&deg; and will be
                                                                maintained in accordance with their Privacy Policies.
                                                                The information obtained will only be used in accordance
                                                                with and to satisfy the scope for which this
                                                                authorization has been signed. I, for myself, my heirs,
                                                                executors, administrators, successors and assigns,
                                                                hereby release, waive and forever discharge anyone who
                                                                provides information in relation to this release, from
                                                                any and all liability for the disclosure of information
                                                                to Mintz including all claims, demands, damages, costs,
                                                                actions and causes of action, howsoever caused. </p>
                                                            <input type="checkbox" name="single_switchery"
                                                                class="switchery" >
                                                            I have read the above and agree and authorize this handling
                                                            by Reference Check 360&deg;. I Agree



                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <section class="signature-component">

                                                                <h2>Draw Signature here</h2>

                                                                <canvas id="signature-pad" height="200"></canvas>

                                                                <div>
                                                                    <button id="save">Save</button>
                                                                    <button id="clear">Clear</button>
                                                                    <button id="showPointsToggle">Show points?</button>
                                                                </div>


                                                            </section>
                                                            <!-- partial -->
                                                            <script
                                                                src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js'>
                                                            </script>
                                                            <script src="./app-assets/js/scripts/sign-pad/script.js">
                                                            </script>

                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>


                                            <!-- Step 5 -->
                                            <h6>Files Upload</h6>
                                            <fieldset>

                                                <div class="row">
                                                    <div class="card-content collapse show">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <div class="controls">
                                                                <label for="participants1">Some basic information is
                                                                     in order to initiate the background
                                                                    screening process. We recommend candidates to
                                                                    provide any supporting documents like resumes,
                                                                    copies of degrees, and letters of recommendation,
                                                                    which allow us to obtain results faster: </label>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <div class="controls">
                                                                <input type="file" name="file" placeholder="Resume">

                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h3 class="sub-headingz">OR </h3>

                                                            <input type="checkbox" name="single_switchery"
                                                                class="switchery" >
                                                            I don't have any document to upload



                                                        </div>
                                                    </div>


                                                </div>



                                            </fieldset>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with number tabs section end -->

                                        </form>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">Copyright &copy; 2024 <a
                    class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio"
                    target="_blank">Reference Check 360 </a></span><span
                class="float-md-right d-none d-lg-block">Hand-crafted &
                Made with <i class="feather icon-heart pink"></i></span></p>
    </footer> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- <script>
$(document).ready(function() {
    // $('[role="menuitem"]').addClass('yourClassName').attr('type', 'submit');
 
    $('#insert_form').on("submit", function(event) {
        alert("as")
                event.preventDefault(); 
                    $.ajax({
                        url: "acl/insert.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        beforeSend: function() {
                            $('#insert').val("Inserting");
                        },
                        success: function(data) {
                            console.log(data);
                            $('#insert_form')[0].reset();
                            // $('#zoomupModal').modal('hide');
                            // $('#employee_table').html(data);
                            // $("#html5-extension").load(" #html5-extension");
                            // window.location.reload();
                        }
                    }); 
            });
}); 
</script>  -->
<!-- Fieldset duplicate 3 times start -->
<script>
    let fieldsetCount = 1;

    function addFieldset() {
        if (fieldsetCount < 3) {
            const container = document.getElementById('fieldset-container');
            const firstFieldset = document.querySelector('.duplicatable-fieldset');
            const newFieldset = firstFieldset.cloneNode(true);
            fieldsetCount++;

            newFieldset.querySelectorAll('input, select').forEach(input => {
                input.id = input.id.replace(/\d+$/, '') + fieldsetCount;
                input.value = '';
            });

            newFieldset.querySelector('.close-fieldset-button').style.display = 'block';
            container.appendChild(newFieldset);
        }
    }

    function removeFieldset(button) {
        const fieldset = button.closest('fieldset');
        fieldset.remove();
        fieldsetCount--;
    }
    </script>
    <!-- Fieldset duplicate 3 times start -->
    <script src="app-assets/vendors/js/vendors.min.js"></script> 
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <!-- <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script> -->
     <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>  
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script> 
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script> 
    <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
    <script src="app-assets/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <script src="app-assets/vendors/js/forms/icheck/icheck.min.js"></script> 
    <script src="app-assets/js/scripts/pickers/dateTime/bootstrap-datetime.js"></script>
    <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script> 
    <script src="app-assets/js/scripts/forms/wizard-steps.js"></script> 
</body> 
</html>