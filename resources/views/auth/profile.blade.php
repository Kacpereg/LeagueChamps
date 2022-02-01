@extends('.layout.layout')

@section('content')


<!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" style = "background-image: url('img/bg/breadcrumbs-bg.webp')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Profile - {{$user->name}}</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('welcome')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li> profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">
        <!-- player list section start -->
        <section class="player_details_section mb-125">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-player-details">
                            <div class="side__left">
                                <div class="image">
                                    <img class="img-fluid" src="{{$user->avatar ? asset('/storage/avatars/' . $user->avatar) :asset('/images/defaultavatar.png')}}" alt="">
                                </div>

                                <div class="player-profile">
                                    <h4 class="title">{{$user->ign}}</h4>
                                    <h5 class="level-text">RANK: {{$rank}} LP, MMR: {{$mmr}}</h5>
                                    <div class="content-shape-img">
                                        <img src="{{asset('img/others/tam-text-shape2.webp')}}" alt="">
                                    </div>
                                </div>

                                <div class="social-link">
                                    <a href="https://www.twitch.tv" target="_blank" rel="noopener noreferrer"><i class="icofont-twitch"></i></a>
                                    <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-youtube-play"></i></a>
                                    <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-twitter"></i></a>
                                </div>
                            </div>

                            <div class="side__right">
                                <div class="content">
                                    <span class="title-tag">PLAYER PROFILE</span>
                                    <h4 class="title">{{$user->name}}, {{$user->server}}</h4>
                                    <p>
                                        {{$user->desc}}
                                    </p>
                                    <a class="btn btn-link" href="{{route('edit')}}">Edit Profile</a>
                                </div>
                            </div>

                            <div class="mascot-logo">
                                <img class="img-fluid" src="{{asset('img/others/player-bg-maskot.webp')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- player list section end -->


        <!-- player list section start -->
        <section class="player_list_section mb-125">
            <div class="container">
                <div class="row mb-n50">
                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                        <!--  Single Player List Start-->
                        <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="top">
                                <a class="image" href=""><img src="assets/img/player/list/player-1.webp" alt=""></a>
                                <div class="overlay">
                                    <div class="social-link">
                                        <a href="https://www.twitch.tv" target="_blank" rel="noopener noreferrer"><i class="icofont-twitch"></i></a>
                                        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-youtube-play"></i></a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-twitter"></i></a>
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="player-details.html">THUNDERMAN</a></h4>
                                <h5 class="level-text">40 LEVEL COMPLETED</h5>

                                <div class="content-shape-img">
                                    <img src="assets/img/others/tam-text-shape.webp" alt="">
                                    <img src="assets/img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>

                        </div>
                        <!--  Single Player List End-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                        <!--  Single Player List Start-->
                        <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.1s">
                            <div class="top">
                                <a class="image" href=""><img src="assets/img/player/list/player-2.webp" alt=""></a>
                                <div class="overlay">
                                    <div class="social-link">
                                        <a href="https://www.twitch.tv" target="_blank" rel="noopener noreferrer"><i class="icofont-twitch"></i></a>
                                        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-youtube-play"></i></a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-twitter"></i></a>
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="player-details.html">LION KING</a></h4>
                                <h5 class="level-text">36 LEVEL COMPLETED</h5>

                                <div class="content-shape-img">
                                    <img src="assets/img/others/tam-text-shape.webp" alt="">
                                    <img src="assets/img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>

                        </div>
                        <!--  Single Player List End-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                        <!--  Single Player List Start-->
                        <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1.1s">
                            <div class="top">
                                <a class="image" href=""><img src="assets/img/player/list/player-3.webp" alt=""></a>
                                <div class="overlay">
                                    <div class="social-link">
                                        <a href="https://www.twitch.tv" target="_blank" rel="noopener noreferrer"><i class="icofont-twitch"></i></a>
                                        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-youtube-play"></i></a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-twitter"></i></a>
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="player-details.html">WOLF SMART</a></h4>
                                <h5 class="level-text">40 LEVEL COMPLETED</h5>

                                <div class="content-shape-img">
                                    <img src="assets/img/others/tam-text-shape.webp" alt="">
                                    <img src="assets/img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>

                        </div>
                        <!--  Single Player List End-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                        <!--  Single Player List Start-->
                        <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.1s">
                            <div class="top">
                                <a class="image" href=""><img src="assets/img/player/list/player-4.webp" alt=""></a>
                                <div class="overlay">
                                    <div class="social-link">
                                        <a href="https://www.twitch.tv" target="_blank" rel="noopener noreferrer"><i class="icofont-twitch"></i></a>
                                        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-youtube-play"></i></a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-twitter"></i></a>
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="player-details.html">JOHNNYBRAVO</a></h4>
                                <h5 class="level-text">90 LEVEL COMPLETED</h5>

                                <div class="content-shape-img">
                                    <img src="assets/img/others/tam-text-shape.webp" alt="">
                                    <img src="assets/img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                        <!--  Single Player List Start-->
                        <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.1s">
                            <div class="top">
                                <a class="image" href=""><img src="assets/img/player/list/player-5.webp" alt=""></a>
                                <div class="overlay">
                                    <div class="social-link">
                                        <a href="https://www.twitch.tv" target="_blank" rel="noopener noreferrer"><i class="icofont-twitch"></i></a>
                                        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-youtube-play"></i></a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-twitter"></i></a>
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="player-details.html">GAMER_XBOY</a></h4>
                                <h5 class="level-text">75 LEVEL COMPLETED</h5>

                                <div class="content-shape-img">
                                    <img src="assets/img/others/tam-text-shape.webp" alt="">
                                    <img src="assets/img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>

                        </div>
                        <!--  Single Player List End-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                        <!--  Single Player List Start-->
                        <div class="player_list_single_item wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="1.1">
                            <div class="top">
                                <a class="image" href=""><img src="assets/img/player/list/player-6.webp" alt=""></a>
                                <div class="overlay">
                                    <div class="social-link">
                                        <a href="https://www.twitch.tv" target="_blank" rel="noopener noreferrer"><i class="icofont-twitch"></i></a>
                                        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-youtube-play"></i></a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-twitter"></i></a>
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="icofont-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="player-details.html">WARRIOR-782</a></h4>
                                <h5 class="level-text">102 LEVEL COMPLETED</h5>

                                <div class="content-shape-img">
                                    <img src="assets/img/others/tam-text-shape.webp" alt="">
                                    <img src="assets/img/others/tam-text-shape2.webp" alt="">
                                </div>
                            </div>

                        </div>
                        <!--  Single Player List End-->
                    </div>
                </div>
            </div>
        </section>
        <!-- player list section end -->

        <!-- counterup section start -->
        <section class="counterup_section mb-115 wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="counterup_inner d-flex justify-content-center">
                            <div class="single_counterup one">
                                <div class="counterup_text">
                                    <h2 class="counterup color1">8697</h2>
                                    <span>TWITCH STREAMS</span>
                                </div>
                            </div>
                            <div class="single_counterup two">
                                <div class="counterup_text">
                                    <h2 class="counterup color2">428</h2>
                                    <span>TOTAL GAMES</span>
                                </div>
                            </div>
                            <div class="single_counterup three">
                                <div class="counterup_text">
                                    <h2 class="counterup color3">5367</h2>
                                    <span>YOUTUBE STREAMS</span>
                                </div>
                            </div>
                            <div class="single_counterup four">
                                <div class="counterup_text">
                                    <h2 class="counterup color4">249</h2>
                                    <span>PRO TEAM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counterup section end -->

        <!-- gaming update section start -->
        <section class="gaming_update_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="assets/img/bg/gaming-update.webp">
                            <div class="gaming_update_text">
                                <h2>Connect with us <br>
                                    for gamING update.</h2>
                            </div>
                            <div class="gaming_update_btn">
                                <a class="btn btn-link" href="#">CONNECT NOW <img src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gaming update section end -->

    </div>
    <!-- page wrapper end -->
@endsection
