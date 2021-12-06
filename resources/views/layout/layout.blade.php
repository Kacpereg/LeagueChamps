<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LeagueChamps</title>
    <meta name="description" content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world."/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/png">

    <!-- CSS
    ========================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Metal+Mania&display=swap" rel="stylesheet">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ mix("css/animate.css") }}">
    <link rel="stylesheet" href="{{ mix("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ mix("css/style.css") }}">
    <link rel="stylesheet" href="{{ mix("css/slick.css") }}">
    <link rel="stylesheet" href="{{ mix("css/icofont.min.css") }}">
    <link rel="stylesheet" href="{{ mix("css/nice-select.css") }}">
    <link rel="stylesheet" href="{{ mix("css/magnific-popup.css") }}">
</head>

<body class="body__bg" data-bgimg="{{ asset('img/bg/body-bg.webp') }}">

<!--offcanvas menu area start-->
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="icofont-close"></i></a>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Match</a>
                                <ul class="sub-menu">
                                    <li><a href="match.html">Match Page</a></li>
                                    <li><a href="match-details.html">Match Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="all-game.html">All Game</a></li>
                                    <li><a href="game-details.html">Game Details</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="players.html">Players</a></li>
                                    <li><a href="player-details.html">Player Details</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                    <li><a href="blog-grid-without-sidebar.html">Blog Grid Without Sidebar</a></li>
                                    <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->
<!--header area start-->
<header class="header_section header_transparent sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_header d-flex justify-content-between align-items-center">
                    <div class="header_logo">
                        <a class="sticky_none" href="index.html"><img src="assets/img/logo/logo.webp" alt=""></a>
                    </div>
                    <!--main menu start-->
                    <div class="main_menu d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="match.html">Match</a>
                                    <ul class="sub_menu">
                                        <li><a href="match.html">Match Page</a></li>
                                        <li><a href="match-details.html">Match Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub_menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="all-game.html">All Game</a></li>
                                        <li><a href="game-details.html">Game Details</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="players.html">Players</a></li>
                                        <li><a href="player-details.html">Player Details</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-left-sidebar.html">blog</a>
                                    <ul class="sub_menu">
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
                                        <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                        <li><a href="blog-grid-without-sidebar.html">Blog Grid Without Sidebar</a></li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--main menu end-->
                    <div class="header_right_sidebar d-flex align-items-center">
                        <div class="sing_up_btn">
                            <a class="btn btn-link" href="/login">SIGN UP <img src="assets/img/icon/arrrow-icon2.webp" alt=""> </a>
                        </div>
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="icofont-navigation-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->
@yield('content')

    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="main_footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main_footer_inner d-flex">
                            <div class="footer_widget_list">
                                <div class="footer_logo">
                                    <a href="#"><img src="{{ asset('img/logo/logo.webp') }}" alt=""></a>
                                </div>
                                <div class="footer_contact_desc">
                                    <p>It long estabhed fact that reader
                                        will ditracted the readable content
                                        looking using readable.</p>
                                </div>
                                <div class="footer_social">
                                    <ul class="d-flex">
                                        <li><a class="facebook" href="https://www.facebook.com"><i class="icofont-facebook"></i></a></li>
                                        <li><a class="dribbble" href="https://dribbble.com"><i class="icofont-dribbble"></i></a></li>
                                        <li><a class="youtube" href="https://www.youtube.com"><i class="icofont-youtube-play"></i></a></li>
                                        <li><a class="twitter" href="https://twitter.com"><i class="icofont-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer_widget_list contact">
                                <h3>Contact</h3>
                                <div class="footer_contact_info">
                                    <div class="footer_contact_info_list">
                                        <span>Location:</span>
                                        <p>136 Harding Ave
                                            Wheeling, West Virginia</p>
                                    </div>
                                    <div class="footer_contact_info_list">
                                        <span>Phone:</span>
                                        <p><a href="#">00 (62) 632 867 4497</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer_widget_list">
                                <h3>today’s winners</h3>
                                <div class="footer_winners_gallery">
                                    <div class="footer_winners_list d-flex">
                                        <div class="footer_winners_thumb">
                                            <a href="game-details.html"><img src="{{ asset('img/others/winners1.webp') }}" alt=""></a>
                                        </div>
                                        <div class="footer_winners_thumb">
                                            <a href="game-details.html"><img src="{{ asset('img/others/winners2.webp') }}" alt=""></a>
                                        </div>
                                        <div class="footer_winners_thumb">
                                            <a href="game-details.html"><img src="{{ asset('img/others/winners3.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="footer_winners_list d-flex">
                                        <div class="footer_winners_thumb">
                                            <a href="game-details.html"><img src="{{ asset('img/others/winners4.webp') }}" alt=""></a>
                                        </div>
                                        <div class="footer_winners_thumb">
                                            <a href="game-details.html"><img src="{{ asset('img/others/winners5.webp') }}" alt=""></a>
                                        </div>
                                        <div class="footer_winners_thumb">
                                            <a href="game-details.html"><img src="{{ asset('img/others/winners6.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer_widget_list footer_list_menu">
                                <h3>Content</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="about.html"> Copywriting</a></li>
                                        <li><a href="about.html">Social Media</a></li>
                                        <li><a href="about.html">Interactive Media</a></li>
                                        <li><a href="about.html">Motion Design</a></li>
                                        <li><a href="about.html">Illustration</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_bottom_inner d-flex justify-content-between">
                            <div class="copyright_right">
                                <p> © 2021  BONX  Made with  <i class="icofont-heart"></i>  by <a href="https://hasthemes.com">HasThemes</a></p>
                            </div>
                            <div class="footer_bottom_link_menu">
                                <ul class="d-flex">
                                    <li><a href="about.html">Terms & Condition  </a></li>
                                    <li><a href="about.html">Privacy Policy  </a></li>
                                </ul>
                            </div>

                            <div class="scroll__top_icon">
                                <a id="scroll-top" href="#"><img src="{{ asset('img/icon/scroll-top.webp') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->


<!-- JS
============================================ -->
<!--modernizr min js here-->
{{--<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>--}}

<!-- Vendor JS -->

<script src="{{ mix("js/vendor/modernizr-3.7.1.min.js") }}"></script>
<script src="{{ mix("js/vendor/jquery-3.6.0.min.js") }}"></script>
<script src="{{ mix("js/vendor/jquery-migrate-3.3.2.min.js") }}"></script>
<script src="{{ mix("js/vendor/popper.js") }}"></script>
<script src="{{ mix("js/vendor/bootstrap.min.js") }}"></script>
<script src="{{ mix("js/slick.min.js") }}"></script>
<script src="{{ mix("js/wow.min.js") }}"></script>
<script src="{{ mix("js/jquery.nice-select.js") }}"></script>
<script src="{{ mix("js/jquery.magnific-popup.min.js") }}"></script>
<script src="{{ mix("js/jquery.counterup.min.js") }}"></script>
<script src="{{ mix("js/jquery-waypoints.js") }}"></script>



<!-- Main JS -->
{{--<script src="assets/js/main.js"></script>--}}


</body>

</html>