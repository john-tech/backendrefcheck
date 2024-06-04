<?php
include("sessioninput.php");
?>

<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i class="feather icon-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="https://refrencecheck360.com"><img class="brand-logo" alt="stack admin logo" src="app-assets/images/logo/log-.png">
                            <!-- <h2 class="brand-text">Stack</h2> -->
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <?php
                            if ($_SESSION["userid"]) {
                            ?>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i class="feather icon-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon feather icon-maximize"></i></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav float-right"> 
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="avatar avatar-online"><img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></div><span class="user-name">  <?php echo $_SESSION["username"]; ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a class="dropdown-item" href="user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a> -->
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
                            } else echo "<h1>Please login first .</h1>";
                                ?>

        </div>
    </nav>
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="main-menu-content ps ps--active-y">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="navigation-header"><span>Reference Check 360°</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                </li>
                <li class="nav-item"><a href="products.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Our Services</span></a></li>
                <li class="nav-item"><a href="data-table.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">My Order History</span></a></li>
                 
            </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: -15px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 15px; height: 730px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 5px; height: 250px;"></div></div></div>
    </div>