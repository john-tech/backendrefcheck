<!DOCTYPE html>
<html class="loading" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="author" content="">
    <title>Analytics Dashboard - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon-32.png">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <script src="https://js.stripe.com/v3/"></script>

</head>
<!-- END: Head-->
 <style>
    div#sub1 {
    margin-top: 35px;
}
.row.match-height {
    width: 2149px !important;
}
 </style>

<!-- BEGIN: Body-->
 
<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">
    <?php include './sidebar.php' ?>
    <?php  
    include("Config.php");  
    include './sidebar.php' ?> 
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            <div class="content-body"> 
                <section id="content-types">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase colr">Comprehensive Background Check Services</h4>
                            <p class="colr">Our background check services include employment verification, criminal
                                record checks, and education verification. We ensure the accuracy of employment history,
                                validate educational credentials, and conduct thorough criminal background checks to
                                help you make informed hiring decisions.</p>
                        </div>
                    </div>
            
                    <div class="row match-height">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                     <div class="card-body">
                                    <form action="strip_api.php" method="post" enctype="multipart/form-data" id="payment-form"
                                                                    class="paymntform">
                                                                    <div class="form-row mb-4">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="inputEmail4">Book Name</label>
                                                                            <input type="text" name="b_name"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="inputPassword4">Author
                                                                                Name</label>
                                                                            <input type="text" name="b_ath_name"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="inputEmail4">Sell</label>
                                                                            <input type="text" name="b_sell"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="inputPassword4">Price </label>
                                                                            <input type="text" name="b_price"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div> 
                                                                    <div id="strip">
                                                                        <div class="mb-3" style="display: none;"> <label
                                                                                for="exampleFormControlInput1"
                                                                                class="form-label">Enter
                                                                                Ammount</label> <input type="text"
                                                                                name="amount" id="demoInput" readonly
                                                                                value="100" class="form-control">
                                                                        </div>
                                                                        <div id="card-element"> </div>
                                                                        <div id="card-errors" role="alert"></div>
                                                                    </div> 
                                                                    <div id="sub1">

                                                                        <button type="submit"
                                                                            class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </section>




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
    </footer>                 <script src="app-assets/vendors/js/vendors.min.js"></script>
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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                                                var stripe = Stripe(
                                                    "pk_test_51M35IfLsuGyV4cRXL5d9GrGV7UiTCSw84LcVwHXm4aqH3SIJsWtWSqFDMhmltCpzFQZVUpPD8zpEr18fuHNF3rl000AJifjLUl"
                                                );
                                                var elements = stripe.elements();
                                                var style = {
                                                    base: {
                                                        color: "#32325d",
                                                        fontSmoothing: "antialiased",
                                                        fontSize: "16px",
                                                        "::placeholder": {
                                                            color: "#aab7c4"
                                                        }
                                                    },
                                                    invalid: {
                                                        color: "#fa755a",
                                                        iconColor: "#fa755a"
                                                    }
                                                };
                                                var card = elements.create("card", {
                                                    style: style,
                                                    hidePostalCode: true
                                                });
                                                card.mount("#card-element");
                                                card.addEventListener("change", function(event) {
                                                    var displayError = document.getElementById("card-errors");
                                                    if (event.error) {
                                                        displayError.textContent = event.error.message;
                                                    } else {
                                                        displayError.textContent = "";
                                                    }
                                                });
                                                var form = document.getElementById("payment-form");
                                                form.addEventListener("submit", function(event) {
                                                    event.preventDefault();
                                                    stripe.createToken(card).then(function(result) {
                                                        if (result.error) {
                                                            var errorElement = document.getElementById(
                                                                "card-errors");
                                                            errorElement.textContent = result.error
                                                                .message;
                                                        } else {
                                                            stripeTokenHandler(result.token);
                                                        }
                                                    });
                                                });

                                                function stripeTokenHandler(token) {
                                                    var form = document.getElementById("payment-form");
                                                    var hiddenInput = document.createElement("input");
                                                    hiddenInput.setAttribute("type", "hidden");
                                                    hiddenInput.setAttribute("name", "stripeToken");
                                                    hiddenInput.setAttribute("value", token.id);
                                                    form.appendChild(hiddenInput);
                                                    form.submit();
                                                }
                                                </script>


</body>
<!-- END: Body-->

</html>