<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login - MyInvento</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{asset('css/all.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh;">

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
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Welcome Back!</h1>
                                        @if(session('success'))
                                            <div class="alert alert-success font-weight-bold alert-dismissible fade show" role="alert">
                                                {{session('success')}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        @if($errors->has('login-failed'))
                                            <div class="alert alert-danger text-center alert-dismissible fade show font-weight-bold" role="alert">
                                                {{$errors->first('login-failed')}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @elseif($errors->any())
                                            <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                                <strong class="">Oops! Login failed. Here are some possible reasons:</strong>
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
                                    <form class="user" action="{{route('login.store')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password"
                                                name="password"
                                                >
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block font-weight-bold" style="font-size:16px;">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="/register">Create an Account!</a>
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