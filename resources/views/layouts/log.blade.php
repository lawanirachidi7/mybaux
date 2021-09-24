
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Baux </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="BaobabTeh responsive admin baux" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{!! asset('assets/images/favicon.ico') !!}">
        <!-- App css -->

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     -->

        <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{!! asset('assets/css/icons.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('assets/css/app.min.css') !!}" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        {{-- <link href="{!! asset('assets/css/baobabexpress.css') !!}" rel="stylesheet" type="text/css"  id="app-stylesheet" /> --}}

    </head>
    <body class="authentication-bg lock-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">

    
        <div class="account-pages w-100 mt-5 mb-5">
            <div class="container">
    
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mb-0">
    
                            <div class="card-body p-4">
    
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <div class="text-center">
                                            <a href="{{ route('home')}}">
                                                <img src="{!! asset('assets/images/logo-light.png') !!}" alt="" height="120">
                                            </a>
                                        </div>
                                    </div>
    
                                     @yield('content')
                                </div>
                            </div>
    
                        </div>
                        <!-- end card-body -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        </div>
        <!-- end page -->
    
    
        <script src="{!! asset('assets/js/vendor.min.js') !!}"></script>
            <!-- App js -->
        <script src="{!! asset('assets/js/app.min.js') !!}"></script>
    
    </body>
    
</html>