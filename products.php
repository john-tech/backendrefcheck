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
    <title>Bootstrap Cards - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon-32.png">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css"> 
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css"> 
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
 
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
</head> 
<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns"> 
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
                    <?php
                        $result = mysqli_query($db, "SELECT * from bg_products");
                        if (mysqli_num_rows($result) > 0) {
                        ?>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="row match-height">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="uploads/<?php echo $row["imag"]; ?>"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Verify Employment</h4>
                                        <p class="card-text">Verify your past employment: we check employment dates,
                                            roles held, job responsibilities, and reasons for departure.</p>
                                        <a   id="<?= $row["pro_id"]; ?>" class="addtocart btn btn-outline-pink">Add to Cart</a>
                                        <!-- <a href="my-cart.php?id=<?php // echo $row["pro_id"]; ?>" id="addtocart"
                                            class="btn btn-outline-pink">Add to Cart</a> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                                        $i++;
                                    }
                                    ?>
                    </tbody>
                    </table>
                    <?php
                        } else {
                            echo "No result found";
                        }
                        ?>
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
    </footer> 
    <script src="app-assets/vendors/js/vendors.min.js"></script> 
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script> 
    <script>
    $(document).ready(function() {
        $('.addtocart').on("click", function(event) {
            event.preventDefault(); 
               var cart_id= $(this).attr('id');
                alert(cart_id)
                $.ajax({
                    url: "cart/add_cart.php",
                    method: "POST", 
                    data: {
                        cart_id: cart_id
                        },
                    beforeSend: function() {
                        $('#insert').val("Inserting");
                    },
                    success: function(data) {
                        console.log(data);
                        // $('#insert_form')[0].reset();    
                        window.location.href='my-cart.php?id='+data;
                    }
                });
         
        });

 
       
    });
    </script> 
</body> 
</html>