<!DOCTYPE html>
<html lang="en">

<head>
    @include("master.header")
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

</style>

<body>
    <section class="about-wrapper bg-gradient-ps"
    style="background-image: url('img/background.svg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 1357px 813px;
    height:850px">
        @include("tool.menu")
        <!-- ends: .about-intro -->
    </section>
    <!-- ends: .intro-wrapper -->
    <section class="about-contents section-padding" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 contents-wrapper">
                    <div class="contents">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-sm-6">
                                <img src="img/introduce.png" alt="">
                            </div>
                            <div class="col-lg-6 offset-lg-1 col-sm-6 mt-5 mt-md-0">
                                <h1>About Our <span>Project</span></h1>
                                <p style="font-size: 18px;">Quaranthy is a non-profit project founded on the idea of staying healthy during
                                    social quarantine. </p>
                                <p style="font-size: 18px;">The group's project is aimed at students of FPT University
                                    and in the future it can become a place where FPT students can update information
                                    about healthy and study.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .contents -->
                    <div class="contents" id="goal">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-sm-6">
                                <h1>Project <span>objectives</span></h1>
                                <ul class="list-unstyled list-features p-top-15">
                                    <li>
                                        <div class="list-count"><span>1</span></div>
                                        <div class="list-content">
                                            <h4>Long-term aim</h4>
                                            <p>Making FPT's learning environment better and healthier.</p>
                                            <p>An opportunity for us to develop other skills for ourselves and apply it
                                                later in life. </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-count"><span>2</span></div>
                                        <div class="list-content">
                                            <h4>Short-term aim</h4>
                                            <p>We aim to solve the problem of what we should do during the pandemic to
                                                stay healthy.</p>
                                            <p>We give you some tips about how to effectively exercise to improve our
                                                health, or how to eat healthy, and MAINLY maintain our health by
                                                suggesting some recreational activities.</p>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="list-count"><span>3</span></div>
                                        <div class="list-content">
                                            <h4>Great Sales Benefits</h4>
                                            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="col-lg-6 offset-lg-1 text-right col-sm-6 mt-5 mt-md-0">
                                <img src="img/target.png" alt="">
                            </div>
                        </div>
                    </div><!-- ends: .contents -->
                </div><!-- ends: .content-block -->
            </div>
        </div>
    </section><!-- ends: .about-contents -->
    <section class="testimonial-wrapper section-padding-strict" id="member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Members of project</h2>
                        <p>Thanks for the contributions </p>
                    </div>
                </div><!-- ends: .col-lg-12 -->
                <div class="testimonial-carousel owl-carousel">
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="img/hieu.png" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Nguyen Minh Hieu</h4>
                            <span>Quang Binh, Viet Nam</span>
                        </div>
                        <p class="author-comment">
                            Leader
                            <br>
                            Editor
                        </p>
                        <ul class="list-unstyled social-list " style="display:inline-flex;text-align: center;margin-top: 10px;">
                            <li><a href="https://www.facebook.com/Quaranthy-112243334556563" target="_blank"><span class="facebook"><i
                                            class="fab fa-facebook-f"></i></span> Facebook</a></li>
                        </ul>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="img/quan.png" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Tran Le Anh Quan</h4>
                            <span>Hue, Viet Nam</span>
                        </div>
                        <p class="author-comment">Content creator && Web designer</p>
                            <ul class="list-unstyled social-list " style="display:inline-flex;text-align: center;margin-top: 10px;">
                                <li style="padding-right: 43px;"><a href="https://www.facebook.com/profile.php?id=100058969816364" target="_blank"><span class="facebook"><i
                                                class="fab fa-facebook-f"></i></span> Facebook</a></li>

                                <li style="padding-left: 43px;"><a href="https://www.instagram.com/quan_3010"><span class="instagram"><i
                                                class="fab fa-instagram"></i></span> Instagram</a></li>
                            </ul>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="img/kiet.png" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Le Tuan Kiet</h4>
                            <span>Hue, Viet Nam</span>
                        </div>
                        <p class="author-comment">Manage fanpage && Moderate content</p>
                        <ul class="list-unstyled social-list " style="display:inline-flex;text-align: center;margin-top: 10px;">
                            <li style="padding-right: 43px;"><a href="https://www.facebook.com/tunkit2k2" target="_blank"><span class="facebook"><i
                                            class="fab fa-facebook-f"></i></span> Facebook</a></li>

                            <li style="padding-left: 43px;"><a href="https://www.instagram.com/_tuankiet.2310" target="_blank"><span class="instagram"><i
                                            class="fab fa-instagram"></i></span> Instagram</a></li>
                        </ul>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="img/quangtran.png" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Tran Dinh Minh Quang</h4>
                            <span>Hue, Viet Nam</span>
                        </div>
                        <p class="author-comment">Content creator</p>
                            <ul class="list-unstyled social-list " style="display:inline-flex;text-align: center;margin-top: 10px;">
                                <li style="padding-right: 43px;"><a href="https://www.facebook.com/profile.php?id=100011954204399" target="_blank"><span class="facebook"><i
                                                class="fab fa-facebook-f"></i></span> Facebook</a></li>

                                <li style="padding-left: 43px;"><a href=""><span class="instagram"><i
                                                class="fab fa-instagram"></i></span> Instagram</a></li>
                            </ul>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="img/thieu.png" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Dinh Thieu Quang</h4>
                            <span>Hue, Vite Nam</span>
                        </div>
                        <p class="author-comment">Content creator</p>
                            <ul class="list-unstyled social-list " style="display:inline-flex;text-align: center;margin-top: 10px;">
                                <li style="padding-right: 43px;"><a href="https://www.facebook.com/quang.dinh.90813236" target="_blank"><span class="facebook"><i
                                                class="fab fa-facebook-f"></i></span> Facebook</a></li>

                                <li style="padding-left: 43px;"><a href="https://www.instagram.com/quangdinh2102"><span class="instagram"><i
                                                class="fab fa-instagram"></i></span> Instagram</a></li>
                            </ul>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="img/bin.png" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Nguyen Duc Le Bin</h4>
                            <span>Hue, Viet Nam</span>
                        </div>
                        <p class="author-comment">Content creator</p>
                        <ul class="list-unstyled social-list " style="display:inline-flex;text-align: center;margin-top: 10px;">
                                        <li style="padding-right: 43px;"><a href="https://www.facebook.com/Quaranthy-112243334556563" target="_blank"><span class="facebook"><i
                                                        class="fab fa-facebook-f"></i></span> Facebook</a></li>

                                        <li style="padding-left: 43px;"><a href=""><span class="instagram"><i
                                                        class="fab fa-instagram"></i></span> Instagram</a></li>
                        </ul>
                    </div><!-- ends: .carousel-single -->
                </div><!-- ends: .testimonial-carousel -->
            </div>
        </div>
    </section><!-- ends: .testimonial-wrapper -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js-->
    <script src="/client/vendor_assets/js/jquery/jquery-1.12.3.js"></script>
    <script src="/client/vendor_assets/js/bootstrap/popper.js"></script>
    <script src="/client/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/client/vendor_assets/js/jquery-ui.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.barrating.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.counterup.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/client/vendor_assets/js/jquery.waypoints.min.js"></script>
    <script src="/client/vendor_assets/js/masonry.pkgd.min.js"></script>
    <script src="/client/vendor_assets/js/owl.carousel.min.js"></script>
    <script src="/client/vendor_assets/js/select2.full.min.js"></script>
    <script src="/client/vendor_assets/js/slick.min.js"></script>
    <script src="/client/theme_assets/js/locator.js"></script>
    <script src="/client/theme_assets/js/main.js"></script>
    <script src="/client/theme_assets/js/map.js"></script>
    <!-- endinject-->
</body>

</html>
