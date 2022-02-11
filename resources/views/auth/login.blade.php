@extends('.layout.layout')

@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg" style = "background-image: url('img/bg/breadcrumbs-bg.webp')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>SIGN IN</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('welcome')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->

    <div class="page_wrapper" style="margin-top: 100px; margin-bottom: 50px">
        <main class="login-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card upcoming_gaming_list">
                            <h3 class="card-header text-center">Login</h3>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login.custom') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                               autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block">Sign in</button>
                                    </div>
                                    <div class="mt-3">
                                        <span>Don't have account?</span>
                                        <span><a href="{{route('register-user')}}">Register</a></span>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
