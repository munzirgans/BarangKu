<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MyInvento - Register</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{asset('css/all.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height:100vh;">

            {{-- <div class="col-xl-10 col-lg-12 col-md-9"> --}}
                <div class="col-xl-6 col-lg-8 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div class="row justify-content-center align-items-center" style="margin-bottom:20px;">
                                            <i class="fas fa-box text-primary" style="margin-right:20px;font-size:1.75rem;"></i>
                                            <h3 class="text-primary font-weight-bold" style="margin-bottom:0px;">MyInvento</h3>
                                        </div>
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Create an Account!</h1>
                                        @if($errors->any())
                                            <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                                <strong class="">Oops! Some fields need your attention:</strong>
                                                <ul class="text-left mt-2">
                                                    @foreach($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                    <form class="user" action="{{route('register.store')}}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                                    placeholder="First Name"
                                                    name="first_name"
                                                    >
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                                    placeholder="Last Name"
                                                    name="last_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="Email Address"
                                                name="email">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password"
                                                    name="password"
                                                    >
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleRepeatPassword" placeholder="Repeat Password"
                                                    name="password_confirmation"
                                                    >
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block font-weight-bold" style="font-size:16px;" type="submit">
                                            Register
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="/">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{asset('js/all.min.js')}}"></script>

</body>

</html>