@extends('.layout.layout')

@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" style = "background-image: url('img/bg/breadcrumbs-bg.webp')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Highscores</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('welcome')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li>Highscores</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumbs area end -->

    <!-- upcoming gaming section start -->
    <section class="upcoming_gaming_section mb-125">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Best LeagueChamps Players</h2>
            </div>
            <div class="upcoming_gaming_inner row" style="text-align: center">
                @foreach($rankArray as $item)
                    <div class="col-2"></div>
                    <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center col-8 mb-35" data-wow-delay="0.3s" data-wow-duration="1.3s">
                        <div class="upcoming_gaming_text">
                            <p>
                                <a href="https://{{$item['user']->server}}.op.gg/summoner/userName={{$item['user']->ign}}" target="_blank" rel="noopener noreferrer"></a>
                            </p>
                            <h3><a href="{{route('customprofile', $item['user']->name)}}">{{$item['user']->name}}</a></h3>
                            <h4><a href="https://{{$item['user']->server}}.op.gg/summoner/userName={{$item['user']->ign}}">IGN: {{$item['user']->ign}} </a></h4>
                            <h4>RANK: {{$item['rank']}} LP</h4>
                            <h4>SERVER: {{$item['user']->server}}</h4>
                        </div>
                        <div class="upcoming_gaming_thumb d-flex align-items-center">
                            <div>
                                <a href="{{route('customprofile', $item['user']->name)}}">
                                    <img style = "height: 200px;width: 200px" class="img-fluid" src="{{$item['user']->avatar ? asset('/storage/avatars/' . $item['user']->avatar) :asset('/images/defaultavatar.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- upcoming gaming section end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">

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
