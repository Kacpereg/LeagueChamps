@extends('.layout.layout')

@section('content')

    <div class="breadcrumbs_aree breadcrumbs_bg" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>CREATE A POST</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home </a></li>
                            <li> <span>//</span></li>
                            <li>  PAGES</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact_page_section mb-140">
        <div class="container">
    <div class="contact_form_area">
        <div class="section_title text-center mb-60">
            <h2>CREATE A POST</h2>
            <p>Share Your experiences with others,</p>
        </div>
        <div class="contact_form_inner">
            <form id="contact-form" action="{{route('posts.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form_input">
                            <input name="title"  placeholder="Title" type="text">
                        </div>
                    </div>
                </div>
                <div class="form_textarea">
                    <textarea name="text" placeholder="Text"></textarea>
                </div>
                <div class="form_input_btn text-center">
                    <button type="submit" class="btn btn-link">Create <img src="assets/img/icon/arrrow-icon.webp" alt=""></button>
                </div>
                <p class="form-message"></p>
            </form>
        </div>
    </div>
        </div>
@endsection
