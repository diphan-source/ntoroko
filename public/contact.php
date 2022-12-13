
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
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <?php include_once './inc/mobile.php'; ?>


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/12.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Get In Touch</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-section -->
        <section class="contact-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="contact-info-inner">
                            <div class="sec-title">
                                <span class="top-text">Connecting Always</span>
                                <h2>Ntoroko community</h2>
                                <p>Our team is available to help with your enquiries on email & phone, or visit our place.</p>
                            </div>
                            <div class="info-box">
                                <div class="single-item">
                                    <h4>Quick Contact</h4>
                                    <div class="text">
                                        <div class="icon-box"><i class="icon-phone-call"></i></div>
                                        <p>Main Office<br /><a href="tel:23345678901">256777861849</a></p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <h4>Email Address</h4>
                                    <div class="text">
                                        <div class="icon-box"><i class="icon-letter"></i></div>
                                        <p>Mail to<br /><a href="mailto:info@example.com">info@example.com</a></p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <h4>Mailing Address</h4>
                                    <div class="text">
                                        <div class="icon-box"><i class="icon-location"></i></div>
                                        <p>54 Berrick Street, Boston <br />MA 02115.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        <figure class="image-box"><img src="assets/images/resource/contact-1.png" alt=""></figure>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="contact-form-inner">
                            <div class="sec-title">
                                <span class="top-text">Drop a Line</span>
                                <h2>Leave us Message</h2>
                                <p>Please feel free to get in touch using the form below. We'd love to hear for you.</p>
                            </div>
                            <div class="form-inner">
                                <form method="post" action="https://st.ourhtmldemo.com/new/PureHearts/sendemail.php" id="contact-form" class="default-form"> 
                                    <div class="form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-phone"></i>
                                        <input type="text" name="phone" required="" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-sticky-note"></i>
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-text-height"></i>
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- essentials-section -->
        <section class="essentials-section centred">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="bg-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <i class="icon-chatting"></i>
                                </div>
                                <h3>Chat with a Live</h3>
                                <p>Let’s chat with our live team to get answer your questions.</p>
                                <a href="contact.php" class="theme-btn btn-one">Live Chat</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="bg-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <i class="icon-loyalty"></i>
                                </div>
                                <h3>Become a Partner</h3>
                                <p>Become a business partner with us and get an opportunity to grow.</p>
                                <a href="contact.php" class="theme-btn btn-one">Join With Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="bg-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                <div class="icon-box"><div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <i class="icon-search-1"></i>
                                </div>
                                <h3>Charity FAQ’s</h3>
                                <p>You can find the answers in our list of frequently asked questions.</p>
                                <a href="contact.php" class="theme-btn btn-one">Get Answer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- essentials-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner" id="map">
                
            </div>
        </section>
        <!-- google-map-section -->


        <!-- charity-shops -->
        <section class="charity-shops centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-text">Meeting Centers</span>
                    <h2>For Empowerment</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></figure>
                            <h4>Ntoroko center</h4>
                            <p>24/7, Health Center</p>
                            <div class="phone"><a href="tel:625075206644">2567770000</a></div>
                            <div class="mail"><a href="mailto:mailus@example.com">health@example.com</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <figure class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></figure>
                            <h4>School Center</h4>
                            <p></p>
                            <div class="phone"><a href="tel:8885206644">+256777000</a></div>
                            <div class="mail"><a href="mailto:mailus@example.com">mailus@example.com</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <figure class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></figure>
                            <h4>kampala</h4>
                            <p>kyandodo plot 4 </p>
                            <div class="phone"><a href="tel:0752066445">07520-664-45</a></div>
                            <div class="mail"><a href="mailto:mailus@example.com">mailus@example.com</a></div>
                        </div>
                    </div>
                   
                </div>
                <div class="more-text"><span>Our meeting centers are many</span></div>
            </div>
        </section>
        <!-- charity-shops end -->


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
        <!-- main-footer end -->


        <!-- donate popup -->
       <?php include_once './inc/donatepopup.php'; ?>
        <!-- donate popup -->


        <!-- sidebar cart item -->
        <?php include_once './inc/sidebar.php'; ?>
        <!-- sidebar widget item end -->


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="far fa-long-arrow-up"></i>
        </button>

        
    </div>


    <!-- jequery plugins -->
    <?php include_once './inc/scripts.php'; ?>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
   

</body>
<!-- End of .page_wrapper -->

</html>
