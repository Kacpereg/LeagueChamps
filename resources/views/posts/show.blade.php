@extends('.layout.layout')

@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" style="background-image: url('/img/bg/breadcrumbs-bg.webp');">
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
                    <div class="sing_up_btn text-center mt-5">
                        <a class="btn btn-link" href="{{route('posts.create')}}">CREATE A POST <img src={{asset('img/icon/arrow-icon2.webp')}} alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_details_section mb-130">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog_details_inner">
                        <div class="blog_details_header text-center">
                            <div class="blog__meta_date">
                                <ul class="d-flex justify-content-center">
                                    <li><span>By</span> {{$user->name}}   </li>
                                    <li> {{$post->created_at}}  </li>
                                    <li>0 min read</li>
                                </ul>
                            </div>
                            <div class="blog_details_title">
                                <h2>{{$post->title}}</h2>
                            </div>
                        </div>
                        <div class="blog_sticky_thumb">
                            <img src="assets/img/blog/blog-sticky.webp" alt="">
                        </div>
                        <div class="blog_details_content ">
                            <div class="blog_details_content_step">
                                <div class="blog_details_desc">
                                    <p>{{$post->text}}</p>
                                </div>
                            </div>


                            </div>
                            <div class="post__social d-flex justify-content-between align-items-center">
                                <h3>Share this article:</h3>
                                <ul class="d-flex">
                                    <li><a href="https://www.facebook.com"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="https://www.skype.com"><i class="icofont-skype"></i></a></li>
                                    <li><a href="https://twitter.com"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog_comment_wrapper">
                        <div class="comments_box">
                            <div class="comments_title">
                                <h2>COMMENTS (04)</h2>
                            </div>
                            <div class="comment_list d-flex">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/post-comment1.webp" alt="">
                                </div>
                                <div class="comment_content">
                                    <a href="#"> <img src="assets/img/icon/reply.webp" alt=""> </a>
                                    <h3>Randolph Frazier</h3>
                                    <span> Web Designer</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem sum has been
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv
                                        with desktop publishing software like including versions.</p>
                                </div>
                            </div>
                            <div class="comment_list d-flex">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/post-comment2.webp" alt="">
                                </div>
                                <div class="comment_content">
                                    <a href="#"> <img src="assets/img/icon/reply.webp" alt=""> </a>
                                    <h3>Kenia Bumgarner</h3>
                                    <span> user Interface designer</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem sum has been
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv
                                        with desktop publishing software like including versions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                            <div class="comments_title">
                                <h2>Leave A Comment</h2>
                            </div>
                            <div class="comments_form_inner">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="comments_form_input">
                                                <input placeholder="Name *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="comments_form_input">
                                                <input placeholder="Email *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="comments_form_input">
                                                <input placeholder="Address *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="comments_form_input">
                                                <input placeholder="Subject" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="comments_form_input">
                                                <textarea placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments_submit_btn text-center">
                                        <a class="btn btn-link" href="#">SUBMIT NOW <img src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section area end-->
    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">
    </div>
    <!-- page wrapper end -->

@endsection
