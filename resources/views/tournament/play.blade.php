@extends('.layout.layout')

@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" style = "background-image: url('img/bg/breadcrumbs-bg.webp')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Create tournament</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('welcome')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li>Match</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumbs area end -->

    <div class="container" style="margin-bottom: 150px">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card upcoming_gaming_list">
                    <h3 class="card-header text-center">Create Tournament</h3>
                    <div class="card-body">



                        <form action="{{ route('tournament.create') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="date" placeholder="date" id="date" class="form-control"
                                       name="date" required autofocus>
                                @if ($errors->has('date'))
                                    <span class="text-danger">{{ $errors->first('date') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Create</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
