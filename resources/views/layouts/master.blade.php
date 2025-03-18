<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - MyInvento</title>
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
        @yield('custom-link')
    </head>
    <body id="page-top">
        <div id="wrapper">
        
            @include('layouts.sidebar')

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('layouts.navbar')
                    <div class="container-fluid">
                        {{-- <div class="row justify-content-center align-items-center"> --}}
                            {{-- @if($errors->has('info'))
                                <div class="alert alert-danger font-weight-bold alert-dismissible fade show" role="alert">
                                    {{$errors->first('info')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @elseif(session('success'))
                                <div class="alert alert-success font-weight-bold alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif --}}
                        {{-- </div> --}}
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">@yield('heading')</h1>
                        <p class="mb-4 text-dark">@yield('sub-heading')</p>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <script src="{{asset('js/all.min.js')}}"></script>

        @yield('custom-script')
    </body>

</html>
