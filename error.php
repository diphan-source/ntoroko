
<?php include_once './inc/head.php'; ?>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="P" class="letters-loading">
                                P
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                u
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="H" class="letters-loading">
                                H
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <?php include_once './inc/header.php'; ?>

        <!-- Mobile Menu  -->
        <?php include_once './inc/mobile.php'; ?>


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/12.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>404</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Pages</li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- error-section -->
        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h1>404</h1>
                    <h2>page is not found. <br />the page is doesn’t exist or deleted</h2>
                    <a href="index.php" class="theme-btn btn-one">Go To Home</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->


        <!-- subscribe-section -->
        <section class="subscribe-section">
            <div class="bg-layer"></div>
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="left-column pull-left">
                        <div class="logo-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                            <figure class="logo"><a href="index.php"><img src="assets/images/logo-3.png" alt=""></a></figure>
                        </div>
                        <div class="text">
                            <h3><i class="icon-email-open-sketched-envelope"></i>Subscribe <br />Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="form-inner">
                            <form action="https://st.ourhtmldemo.com/new/PureHearts/contact.php" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email Address..." required="">
                                    <button type="submit">Subscribe Us</button>
                                </div>
                            </form>
                        </div>
                        <ul class="social-style-one clearfix">
                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


        <!-- main-footer -->
        <?php include_once './inc/footer.php'; ?>


        <!-- donate popup -->
        <?php include_once './inc/donate.php'; ?>


        <!-- sidebar cart item -->
        <?php include_once './inc/sidebar.php'; ?>


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="far fa-long-arrow-up"></i>
        </button>

        
    </div>


    <!-- jequery plugins -->
    <?php include_once './inc/scripts.php'; ?>
    
</body>
<!-- End of .page_wrapper -->


</html>
