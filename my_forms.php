<!DOCTYPE html>
<html class="loading" lang="en" >
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
    <title>Form Wizard - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">


    <?php include './sidebar.php' ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <!-- <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Form Wizard</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Page</a>
                                </li>
                                <li class="breadcrumb-item active">Form Wizard
                                </li>
                            </ol>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
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
                </div> -->
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
                                        <form action="#" class="number-tab-steps wizard-circle">

                                            <!-- Step 1 -->
                                            <h6>Subject</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Report Language:</label>
                                                            <!--   <input type="text" class="form-control" id="firstName1"> -->
                                                            <select class="custom-select form-control" id="r_lang"
                                                                name="r_lang" required>
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
                                                                name="pos_app" required>
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
                                                            <input type="text" class="form-control" id="fname"
                                                                name="fname" required>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Last Name:</label>
                                                            <input type="text" class="form-control" id="lname"
                                                                name="lname" required>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="date1">Date of Birth :</label>
                                                            <input type="date" class="form-control" id="dob_dat"
                                                                name="dob_dat" required>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="age1">Age:</label>
                                                            <input type="text" class="form-control" name="age1"
                                                                id="age1" required>

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
                                                                name="gender" required>
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
                                                                name="addressx" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="country1">Country:</label>

                                                            <select class="custom-select form-control" id="countryx"
                                                                name="countryx" required>
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
                                                                name="statex" required>



                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="city1">City:</label>
                                                            <input type="text" class="form-control" id="cityu"
                                                                id="cityu" required>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="postalc1">Postal Code:</label>
                                                            <input type="tel" class="form-control" id="postaladd"
                                                                name="postaladd" required>


                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1">Phone Number :</label>
                                                            <input type="tel" class="form-control" id="phoneNumer1"
                                                                name="phoneNumer1" required>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email1">Email:</label>
                                                            <input type="email" class="form-control" id="emel1"
                                                                name="emel1" require>


                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="insurance1">Social Insurance Number:</label>
                                                            <input type="text" class="form-control" id="insuranc1"
                                                                id="insuranc1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <!-- <div class="row">
                                                    <div class="col-md-12">
                                                        <h3> Current Residential Address </h3>
                                                    </div>
                                                </div> -->


                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="address1">Have you lived at your current address
                                                                for the last 5 years?
                                                            </label> <br>
                                                            <input type="radio" class="radio" name="yes1" value="yes"
                                                                id="y1" />
                                                            <label for="y1">Yes</label>
                                                            <input type="radio" class="radio" name="no1" value="no"
                                                                id="n1" />
                                                            <label for="n1">No</label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="street1">Street:</label>
                                                            <input type="text" class="form-control" id="street1">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="suite1">Suite:</label>
                                                            <input type="text" class="form-control" id="suite1">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="civic1">Civic:</label>
                                                            <input type="text" class="form-control" id="civic1">

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="country1">Country:</label>

                                                            <select class="custom-select form-control" id="country1"
                                                                name="country" required>
                                                                <option value="" Disabled>Select</option>
                                                                <option value="canada">Canada </option>
                                                                <option value="USA">USA</option>

                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="state1">State:</label>
                                                            <input type="text" class="form-control" id="state1"
                                                                required>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="city2">City:</label>
                                                            <input type="text" class="form-control" id="city2" required>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="pcode2">Postal Code:</label>
                                                            <input type="text" class="form-control" id="pcode2"
                                                                required>
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


                                                </div>
                                            </fieldset>
                                          

                                            <!-- Step 2 -->
                                            <h6>Employment</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="gend1">Can we contact your current
                                                                employer?</label>

                                                            <select class="custom-select form-control" id="contemp"
                                                                name="position" required>
                                                                <option value="" Disabled>Select</option>
                                                                <option value="yes">Yes </option>
                                                                <option value="no">No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="gend1">Can we contact your current
                                                                employer?</label>

                                                            <select class="custom-select form-control" id="contemp"
                                                                name="position" required>
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
                                                            <label for="employe1">Employer:</label>
                                                            <input type="text" class="form-control" id="employe1"
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
                                                            <label for="employe1">First Name:</label>
                                                            <input type="text" class="form-control" id="employe1"
                                                                require>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="employe1">Last Name:</label>
                                                            <input type="text" class="form-control" id="employe1"
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
                                                            <label for="address1">Address :</label>
                                                            <input type="text" class="form-control" id="address1"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="country1">Country:</label>

                                                            <select class="custom-select form-control" id="country1"
                                                                name="country" required>
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
                                                            <label for="state1">State:</label>
                                                            <input type="text" class="form-control" id="state1"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="city1">City:</label>
                                                            <input type="text" class="form-control" id="city1" required>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="postalc1">Postal Code:</label>
                                                            <input type="tel" class="form-control" id="postalc1"
                                                                required>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1">Phone Number :</label>
                                                            <input type="tel" class="form-control" id="phoneNumber1"
                                                                required>


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
                                                            <label for="insurance1">Website:</label>
                                                            <input type="text" class="form-control" id="insurance1">
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
                                                                placeholder="Basic Pick-a-date" readonly=""
                                                                id="P1043209353" aria-haspopup="true"
                                                                aria-readonly="false" aria-owns="P1043209353_root">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="enddate">End Date:</label>
                                                            <input type="date" class="form-control" id="end1" required>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="salary1">Salary:</label>
                                                            <input type="text" class="form-control" id="salary1"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="salperd1">Salary Period:</label>
                                                            <select class="custom-select form-control" id="salperd1"
                                                                name="country" required>
                                                                <option value="" Disabled>Select</option>
                                                                <option value="monthly">Monthly </option>
                                                                <option value="weekly">Weekly</option>
                                                                <option value="daily">Daily</option>

                                                            </select>

                                                        </div>
                                                    </div>
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

                                            <h6>Subject</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Report Language:</label>
                                                            <!--   <input type="text" class="form-control" id="firstName1"> -->
                                                            <select class="custom-select form-control" id="r_lang"
                                                                name="r_lang" required>
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
                                                                name="pos_app" required>
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
                                                            <input type="text" class="form-control" id="fname"
                                                                name="fname" required>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Last Name:</label>
                                                            <input type="text" class="form-control" id="lname"
                                                                name="lname" required>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="date1">Date of Birth :</label>
                                                            <input type="date" class="form-control" id="dob_dat"
                                                                name="dob_dat" required>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="age1">Age:</label>
                                                            <input type="text" class="form-control" name="age1"
                                                                id="age1" required>

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
                                                                name="gender" required>
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
                                                                name="addressx" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="country1">Country:</label>

                                                            <select class="custom-select form-control" id="countryx"
                                                                name="countryx" required>
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
                                                                name="statex" required>



                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="city1">City:</label>
                                                            <input type="text" class="form-control" id="cityu"
                                                                id="cityu" required>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="postalc1">Postal Code:</label>
                                                            <input type="tel" class="form-control" id="postaladd"
                                                                name="postaladd" required>


                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1">Phone Number :</label>
                                                            <input type="tel" class="form-control" id="phoneNumer1"
                                                                name="phoneNumer1" required>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email1">Email:</label>
                                                            <input type="email" class="form-control" id="emel1"
                                                                name="emel1" require>


                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="insurance1">Social Insurance Number:</label>
                                                            <input type="text" class="form-control" id="insuranc1"
                                                                id="insuranc1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <!-- <div class="row">
                                                    <div class="col-md-12">
                                                        <h3> Current Residential Address </h3>
                                                    </div>
                                                </div> -->


                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="address1">Have you lived at your current address
                                                                for the last 5 years?
                                                            </label> <br>
                                                            <input type="radio" class="radio" name="yes1" value="yes"
                                                                id="y1" />
                                                            <label for="y1">Yes</label>
                                                            <input type="radio" class="radio" name="no1" value="no"
                                                                id="n1" />
                                                            <label for="n1">No</label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="street1">Street:</label>
                                                            <input type="text" class="form-control" id="street1">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="suite1">Suite:</label>
                                                            <input type="text" class="form-control" id="suite1">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="civic1">Civic:</label>
                                                            <input type="text" class="form-control" id="civic1">

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="country1">Country:</label>

                                                            <select class="custom-select form-control" id="country1"
                                                                name="country" required>
                                                                <option value="" Disabled>Select</option>
                                                                <option value="canada">Canada </option>
                                                                <option value="USA">USA</option>

                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="state1">State:</label>
                                                            <input type="text" class="form-control" id="state1"
                                                                required>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="city2">City:</label>
                                                            <input type="text" class="form-control" id="city2" required>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="pcode2">Postal Code:</label>
                                                            <input type="text" class="form-control" id="pcode2"
                                                                required>
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


                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with number tabs section end -->


            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a
                    class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio"
                    target="_blank">PIXINVENT </a></span><span class="float-md-right d-none d-lg-block">Hand-crafted &
                Made with <i class="feather icon-heart pink"></i></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->
    <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
    <script src="app-assets/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pickers/dateTime/bootstrap-datetime.js"></script>
    <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>