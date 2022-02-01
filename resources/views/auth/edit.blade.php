@extends('.layout.layout')

@section('content')


    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Profile - {{$user->name}}</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('welcome')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li> Edit profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <div class="page_wrapper" style="margin-bottom: 50px">
        <div class="signup-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card upcoming_gaming_list">
                            <h3 class="card-header text-center">Edit Profile</h3>
                            <div class="card-body">

                                <form action="{{ route('update') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input value = "{{ $user->name }}" type="text" placeholder="Name" id="name" class="form-control" name="name"
                                               required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <input value = "{{ $user->email }}" type="text" placeholder="Email" id="email_address" class="form-control"
                                               name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <select name="server" class="form-control">
                                            <option value="EUW"     @if($user->server == 'EUW')    selected @endif>EUW</option>
                                            <option value="EUNE"    @if($user->server == 'EUNE')   selected @endif>EUNE</option>
                                            <option value="NA"      @if($user->server == 'NA')     selected @endif>NA</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <input value = "{{ $user->date_of_birth }}" type="date" placeholder="date" id="date_of_birth" class="form-control"
                                               name="date_of_birth" required>
                                        @if ($errors->has('date_of_birth'))
                                            <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <input value = "{{ $user->ign }}" type="text" placeholder="In game Name" id="name" class="form-control" name="ign"
                                               autofocus>
                                        @if ($errors->has('ign'))
                                            <span class="text-danger">{{ $errors->first('ign') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <input value = "{{ $user->desc }}" type="text" placeholder="Description" id="name" class="form-control" name="desc"
                                               autofocus>
                                        @if ($errors->has('desc'))
                                            <span class="text-danger">{{ $errors->first('desc') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <select name="mainrole" class="form-control">
                                            <option value="TOP"       @if($user->mainrole == 'TOP')     selected @endif>TOP</option>
                                            <option value="JUNGLE"    @if($user->mainrole == 'JUNGLE')  selected @endif>JUNGLE</option>
                                            <option value="MID"       @if($user->mainrole == 'MID')     selected @endif>MID</option>
                                            <option value="BOT"       @if($user->mainrole == 'BOT')     selected @endif>BOT</option>
                                            <option value="SUPPORT"   @if($user->mainrole == 'SUPPORT') selected @endif>SUPPORT</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <input value = "{{ $user->mainchamp }}" type="text" placeholder="Main champion" id="name" class="form-control" name="mainchamp"
                                               autofocus>
                                        @if ($errors->has('mainchamp'))
                                            <span class="text-danger">{{ $errors->first('mainchamp') }}</span>
                                        @endif
                                    </div>

                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block">Update information</button>
                                    </div>
                                </form>

                            </div>

                            <div class="card-body">
                                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="d-grid mx-auto">
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="d-grid mx-auto">
                                            <button type="submit" class="btn btn-dark btn-block">Upload avatar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
