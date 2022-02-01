@extends('layout.layout')

@section('content')

<!--offcanvas menu area start-->
{{--siema--}}


<!-- page wrapper start -->
<div class="page_wrapper">

    <!--slide banner section start-->
    <section class="hero_banner_section d-flex align-items-center mb-130" style="background-image: url('img/bg/img1.jpg'); margin-top: 120px">
        <div class="container">
            <div class="hero_banner_inner">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="hero_content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">League <br>
                                Champs</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Become a legend.</p>
                            <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s" href="{{route('register-user')}}">Play Now <img src="{{asset('img/icon/arrow-icon.webp')}}" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_position_img">
            <img src="assets/img/bg/hero-position-img.webp" alt="">
        </div>
    </section>
    <!--slider area end-->

    <!-- gaming  world section start -->
    <section class="gaming_world_section mb-140">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>YOU ARE MOST WELCOME <br>
                    IN GAMING WORLD.</h2>
            </div>
            <div class="gaming_world_inner">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single_gaming_world wow fadeInUp" style="background-image: url('img/others/gaming-world-bg1.webp')" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="gaming_world_thumb">
                                <img src={{asset('img/custom/twitch.png')}} alt="">
                            </div>
                            <div class="gaming_world_text">
                                <h3>Live Streaming</h3>
                                <p>When unknown printer took
                                    type and scrambled it to make type
                                    specimen book centuries,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single_gaming_world wow fadeInUp" style="background-image: url('img/others/gaming-world-bg2.webp')" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="gaming_world_thumb">
                                <img src={{asset('img/custom/reddit.png')}} alt="">
                            </div>
                            <div class="gaming_world_text">
                                <h3>Game News</h3>
                                <p>When unknown printer took
                                    type and scrambled it to make type
                                    specimen book centuries,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single_gaming_world wow fadeInUp" style="background-image: url('img/others/gaming-world-bg2.webp')" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="gaming_world_thumb">
                                <img src={{asset('img/custom/lol.png')}} alt="">
                            </div>
                            <div class="gaming_world_text">
                                <h3>Game Tournaments</h3>
                                <p>When unknown printer took
                                    type and scrambled it to make type
                                    specimen book centuries,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gaming  world section end -->

    <!-- gaming video section start -->
    <section class="gaming_video_section mb-118 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gaming_video_inner slick_navigation slick__activation" data-slick='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                            {"breakpoint":500, "settings": { "slidesToShow": 1 } }
                            ]
                        }'>
                        <div class="gaming_video_thumb">
                            <img src="{{asset('img/custom/streampic.webp')}}" alt="">
                            <div class="gaming_video_paly_icon">
                                <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img src="{{asset('img/others/play-btn.webp')}}" alt=""></a>
                            </div>
                            <div class="live_streaming_text">
                                <h3>Watch Live Streaming</h3>
                            </div>
                        </div>
                        <div class="gaming_video_thumb">
                            <img src="{{asset('img/custom/streampic.webp')}}" alt="">
                            <div class="gaming_video_paly_icon">
                                <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img src="{{asset('img/others/play-btn.webp')}}" alt=""></a>
                            </div>
                            <div class="live_streaming_text">
                                <h3>Watch Live Streaming</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gaming video section end -->

    <!-- upcoming gaming section start -->
    <section class="upcoming_gaming_section mb-125">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Upcoming Tournaments</h2>
            </div>
            <div class="upcoming_gaming_inner">
                @foreach($tournaments as $tournament)
                    <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center" data-wow-delay="0.3s" data-wow-duration="1.3s">
                        <div class="upcoming_gaming_text">
                            <p>{{$tournament->date}}</p>
                            <h3><a href="{{route('tournament.show', $tournament->id)}}">Tournament {{$tournament->id}}</a></h3>
                            <span>1 vs 1 Howling Abyss</span>
                        </div>
                        <div class="upcoming_gaming_thumb d-flex align-items-center">
                            <div >
                                <a href="{{route('tournament.show', $tournament->id)}}"><img src="{{asset('img/custom/aram.webp')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- upcoming gaming section end -->

    <!-- counterup section start -->
    <section class="counterup_section mb-115 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
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

    <!-- popular gaming  section start -->
    <section class="popular_gaming_section mb-140">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Popular GAME</h2>
                <p>When unknown printer took type and scrambled it to make <br>
                    type specimen book centuries,</p>
            </div>
            <div class="popular_gaming_inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img src="{{asset('img/custom/lolpic2.webp')}}" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img src="{{asset('img/icon/arrow-icon.webp')}}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img src="{{asset('img/custom/lolpic1.webp')}}" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img src="{{asset('img/icon/arrow-icon.webp')}}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img src="{{asset('img/custom/lolpic3.webp')}}" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img src="{{asset('img/icon/arrow-icon.webp')}}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img src="{{asset('img/custom/lolpic4.webp')}}" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img src="{{asset('img/icon/arrow-icon.webp')}}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular gaming section end -->

    <!-- testimonial section start -->
    <section class="testimonial_section wow fadeInUp" style="background-image: url('/img/others/testimonial-bg-fullwidth.webp')" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title mb-60">
                        <h2>What people say <br>
                            ABOUT <span>League Champs.</span></h2>
                    </div>
                    <div class="testimonial_inner slick__activation slick_navigation" data-slick='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                            {"breakpoint":576, "settings": { "slidesToShow": 1 } }
                            ]
                        }' style="background-image: url('/img/others/testimonial-bg.webp')">
                        <div class="testimonial_list d-flex align-items-center">
                            <div class="testimonial_thumb">
                                <img src={{asset('img/custom/caedrel.webp')}} alt="">
                            </div>
                            <div class="testimonial_content">
                                <div class="testimonial_desc">
                                    <p>It is a long established fact that a reader will be distracted the
                                        readable content of page when looking at it layout the point using
                                        lorem Ipsum is that it has a more-or-less normal distribution lette
                                        as opposed to using making it look like readable english,
                                        many desktop publishing packages and web page now editors.</p>
                                </div>
                                <div class="testimonial_author">
                                    <h3>Caedrel</h3>
                                    <span>Top Rated Gamer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_list d-flex align-items-center">
                            <div class="testimonial_thumb">
                                <img src={{asset('img/custom/lscoach.webp')}} alt="">
                            </div>
                            <div class="testimonial_content">
                                <div class="testimonial_desc">
                                    <p>
                                        "League of Legends"to przede wszystkim darmowa gra.
                                        Riot Games zarabia na niej poprzez mikropłatności.
                                        Bardzo cieszy fakt, że wszystko, co w tej grze ma wpływ na jakość prowadzonej przez nas gry, możemy kupić za wirtualne pieniądze.
                                        Większość dodatków kosmetycznych wymaga sięgnięcia po prawdziwą gotówkę.
                                    </p>
                                </div>
                                <div class="testimonial_author">
                                    <h3>LS</h3>
                                    <span>Top Rated Coach</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- blog section start -->
    <section class="blog_section mb-90">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2><a href="{{route('forum')}}">Latest Posts</a></h2>
                <p>Read what other players think and share <br> your opinion on forum</p>
            </div>

            <div class="row blog_inner">
                @foreach($posts as $post)
                <div class="col-lg-6">
                    <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="{{$post->getUser()->avatar ? asset('/storage/avatars/' . $post->getUser()->avatar) :asset('/images/defaultavatar.png')}}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_date">
                                <span><i class="icofont-calendar"></i>  {{$post->created_at}} by {{$post->getUser()->name}}</span>
                            </div>
                            <h3><a href="{{route('posts.show', $post)}}">{{$post->title}}</a></h3>
                            <a href="{{route('posts.show', $post)}}">READ MORE</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog section end -->

    <!-- gaming update section start -->
    <section class="gaming_update_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gaming_update_inner d-flex justify-content-between align-items-center" style="background-image: url('img/custom/porowide.webp')">
                        <div class="gaming_update_text">
                            <h2>Create LeagueChamps<br>
                                Account for free</h2>
                        </div>
                        <div class="gaming_update_btn">
                            <a class="btn btn-link" href="{{route('register-user')}}">Register <img src="{{asset('img/icon/arrow-icon.webp')}}" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gaming update section end -->

</div>
<!-- page wrapper end -->
