@extends('.layout.layout')

@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" style = "background-image: url('img/bg/breadcrumbs-bg.webp')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Forum</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('welcome')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li>discussions</li>
                        </ul>
                    </div>
                    <div class="sing_up_btn text-center">
                        <a class="btn btn-link" href="{{route('posts.create')}}">CREATE A POST <img src="assets/img/icon/arrrow-icon2.webp" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">

        <!-- blog page section start -->
        <section class="blog_page_section mb-140">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog_page_wrapper">
                                <div class="blog_page_inner">
                                    @foreach($posts as $post)
                                    <div class="single_blog d-flex align-items-center">
                                        <div class="blog_thumb">
                                            <a href={{route('posts.show', $post)}}><img src="{{$post->getUser()->avatar ? asset('/storage/avatars/' . $post->getUser()->avatar) :asset('/images/defaultavatar.png')}}" alt=""></a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_date">
                                                <span><i class="icofont-calendar"></i>  {{$post->created_at}} by {{$post->getUser()->name}}</span>
                                            </div>
                                            <h3><a href="{{route('posts.show', $post)}}">{{$post->title}}</a></h3>
                                            <a href="{{route('posts.show', $post)}}">READ MORE</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="pagination pagination_pages">
                                    <ul>
                                        <li class="current"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="next"><a href="#"><i class="icofont-rounded-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog_sidebar blog_widget">
                                <div class="blog_widget_list mb-50">
                                    <h3>Search Here</h3>
                                    <div class="widget_search">
                                        <form action="#">
                                            <input placeholder="Search here" type="text">
                                            <button type="submit"><i class="icofont-search-1"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="blog_widget_list mb-50">
                                    <h3>POST CATEGORY</h3>
                                    <div class="widget_category blog_widget_category">
                                        <ul>
                                            <li><a href="#"><i class="icofont-rounded-double-right"></i> Single Player </a></li>
                                            <li><a href="#"><i class="icofont-rounded-double-right"></i> Legendary </a></li>
                                            <li><a href="#"><i class="icofont-rounded-double-right"></i> ES Sports </a></li>
                                            <li><a href="#"><i class="icofont-rounded-double-right"></i> Animation Game </a></li>
                                            <li><a href="#"><i class="icofont-rounded-double-right"></i> Offline Game </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog_widget_thumb mb-50">
                                    <img src="{{asset('img/custom/freljord.webp')}}" alt="">
                                    <div class="widget_play_btn">
                                        <a class="btn btn-link" href="all-game.html">Play Now <img src="{{asset('img/icon/arrow-icon.webp')}}" alt=""> </a>
                                    </div>
                                </div>
                                <div class="blog_widget_list tags">
                                    <h3>Tags</h3>
                                    <div class="widget_tags">
                                        <ul>
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Advanture</a></li>
                                            <li><a href="#"> Esports</a></li>
                                            <li><a href="#">Fantasy</a></li>
                                            <li><a href="#">Fortnite</a></li>
                                            <li><a href="#">Matches</a></li>
                                            <li><a href="#">Streamers</a></li>
                                            <li><a href="#">Gamer</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- blog page section end -->

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
                                <a class="btn btn-link" href="contact.html">CONNECT NOW <img src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
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
