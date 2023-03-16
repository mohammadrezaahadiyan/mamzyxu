<!--header start-->
<header class="app-header transparent-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--<div class="branding-wrap">-->
                <!--brand start-->
                <div class="navbar-brand float-left">
                    <a class="" href="index-2.html">
                        <img class="logo-light" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt="CLab">
                        <img class="logo-dark" src="<?php echo get_template_directory_uri();?>/assets/img/logo-dark.png" srcset="assets/img/logo-dark@2x.png 2x" alt="CLab">
                    </a>
                </div>
                <!--brand end-->
                <!--start responsive nav toggle button-->
                <div class="nav-btn hamburger hamburger--slider js-hamburger ">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!--end responsive nav toggle button-->
                <!--</div>-->

                <!--top mega menu start-->
                <nav id="vl-menu">

                    <?php
                        wp_nav_menu([
                                'theme_location' => 'top-bar'
                        ])
                    ?>

                </nav>
                <!--top mega menu end-->
            </div>
        </div>
    </div>
</header>
<!--header end-->