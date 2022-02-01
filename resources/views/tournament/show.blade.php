@extends('.layout.layout')

@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" style = "background-image: url('/img/bg/breadcrumbs-bg.webp')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Tournament {{$tournament->id}}</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('welcome')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li>{{$tournament->date}}</li>
                        </ul>
                    </div>
                    @if(! in_array(Auth::id(), $tournament->players) && Auth::user())
                    <div class="sing_up_btn text-center">
                        <a class="btn btn-link" href="{{route('tournament.register', $tournament)}}">JOIN <img src="{{asset('img/icon/arrow-icon2.webp')}}" alt=""> </a>
                    </div>
                    @elseif(in_array(Auth::id(), $tournament->players))
                        <div class="sing_up_btn text-center">
                            <p>
                                You are registered into this tournament<br>
                                Wait for brackets
                            </p>
                        </div>
                    @elseif(! Auth::user())
                        <div class="sing_up_btn text-center">
                            <a class="btn btn-link" href="{{route('login')}}">JOIN <img src="{{asset('img/icon/arrow-icon2.webp')}}" alt=""> </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumbs area end -->

    <!-- upcoming gaming section start -->
    <section class="upcoming_gaming_section mb-125">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h1>Players</h1>
                    @foreach($tournament->players as $player)
                        <h2>{{User::find($player)->name}}</h2>
                    @endforeach
            </div>
        </div>
    </section>

    <!-- upcoming gaming section start -->
    <section class="upcoming_gaming_section mb-125">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Upcoming Matches</h2>
                <p>Below You can see first 2 games of the tournament</p>
            </div>
            <div class="upcoming_gaming_inner">

                @foreach($matches as $match)
                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center" data-wow-delay="0.3s" data-wow-duration="1.3s">
                    <div class="upcoming_gaming_text">
                        <p>20 August 2021  -  09:00 PM</p>
                        <h3><a href="#">{{User::find($match->team1[0])->name}}<br> vs <br> {{User::find($match->team2[0])->name}}</a></h3>
                        @if(Auth::id() === $match->team1[0] || Auth::id() === $match->team2[0])
                        <span>Lobby name: {{$match->lobby_name}}</span>
                        <span>Password: {{$match->lobby_password}}</span>
                        @endif
                    </div>
                    <div class="upcoming_gaming_thumb d-flex align-items-center">
                        <div class="single_upcoming_thumb">
                            <img style ="width: 500px" src="{{User::find($match->team1[0])->avatar ? asset('/storage/avatars/' . User::find($match->team1[0])->avatar) :asset('/images/defaultavatar.png')}}" alt="">
                        </div>
                        <div class="single_upcoming_thumb">
                            <img src="{{asset('img/others/game-vs3.webp')}}" alt="">
                        </div>
                        <div class="single_upcoming_thumb">
                            <img style ="width: 500px" src="{{User::find($match->team2[0])->avatar ? asset('/storage/avatars/' . User::find($match->team2[0])->avatar) :asset('/images/defaultavatar.png')}}" alt="">
                        </div>
                    </div>
                </div>
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
