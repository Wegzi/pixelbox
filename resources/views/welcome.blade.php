<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>PixelBox</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <meta name='author' content='Lucas Ramos'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,400|Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
</head>

<body class="bg-red">
    <nav class="navbar navbar-light bg-transparent">
        <a class="navbar-brand text-white" href="https://github.com/Wegzi?tab=repositories" target="_blank" style="font-family: 'Josefin Sans', sans-serif; ">github</a>
    </nav>

    <div class="container mt-1">
        <h1 class="font-weight-thin text-center" style="font-family: 'Josefin Sans', sans-serif; font-size: 5rem;">PixelBox</h1>

        <div class="row mt-5">
            <div class="col">
                <div class="card bg-navy shadow">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent text-pale">Cras justo odio</li>
                            <li class="list-group-item bg-transparent text-pale">Dapibus ac facilisis in</li>
                            <li class="list-group-item bg-transparent text-pale">Morbi leo risus</li>
                            <li class="list-group-item bg-transparent text-pale">Porta ac consectetur ac</li>
                            <li class="list-group-item bg-transparent text-pale">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <p class="p-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula eros a odio aliquam.<br>
                    <a href="/login" class="btn btn-warning waves-effect waves-link">Janus</a>
                </p>
            </div>
        </div>

    </div>
    <div class="container-fluid mt-3">
        <div class="row mt-5 p-5">
            <div class="col-sm-0 col-md-0 col-lg-3"></div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula eros a odio aliquam,
                    et sodales lacus interdum. Nam fringilla turpis id eros pretium, quis porttitor risus volutpat.
                </p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-5">
                <div class="card bg-navy shadow">
                    <img src="{{ asset('img/dashboard.png') }}" class="card-img">
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row mt-5 p-5">
            <div class="col-sm-12 col-md-6 col-lg-5 mb-3">
                <div class="card bg-navy shadow">
                    <img src="{{ asset('img/dashboard.png') }}" class="card-img">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula eros a odio aliquam,
                    et sodales lacus interdum. Nam fringilla turpis id eros pretium, quis porttitor risus volutpat.
                    In consequat ullamcorper sapien in pretium. Donec bibendum mattis ante quis condimentum.
                </p>
            </div>
            <div class="col-sm-0 col-md-0 col-lg-3"></div>
        </div>

    </div>

    <div class="container-fluid bg-ruby">
        <div class="container py-5">

            <div class="row">
                <div class="col-6">
                    <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                        <div class="row no-gutters p-3">
                            <div class="col- card bg-navy-transparent" style="height:50px; width:50px; color:#efdab9; font-size:35px; text-align:center;">
                                <i class="far fa-arrow-alt-circle-down" style="margin-top:7px"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body m-0 pl-3 p-1">
                                    <h5 class="card-title m-0">Card title</h5>
                                    <p class="card-text">This This content is a little bit longer.This This content is a little bit longer.This This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                        <div class="row no-gutters p-3">
                            <div class="col- card bg-navy-transparent" style="height:50px; width:50px; color:#efdab9; font-size:35px; text-align:center;">
                                <i class="far fa-arrow-alt-circle-down" style="margin-top:7px"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body m-0 pl-3 p-1">
                                    <h5 class="card-title m-0">Card title</h5>
                                    <p class="card-text">This This content is a little bit longer.This This content is a little bit longer.This This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                        <div class="row no-gutters p-3">
                            <div class="col- card bg-navy-transparent" style="height:50px; width:50px; color:#efdab9; font-size:35px; text-align:center;">
                                <i class="far fa-arrow-alt-circle-down" style="margin-top:7px"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body m-0 pl-3 p-1">
                                    <h5 class="card-title m-0">Card title</h5>
                                    <p class="card-text">This This content is a little bit longer.This This content is a little bit longer.This This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                        <div class="row no-gutters p-3">
                            <div class="col- card bg-navy-transparent" style="height:50px; width:50px; color:#efdab9; font-size:35px; text-align:center;">
                                <i class="far fa-arrow-alt-circle-down" style="margin-top:7px"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body m-0 pl-3 p-1">
                                    <h5 class="card-title m-0">Card title</h5>
                                    <p class="card-text">This This content is a little bit longer.This This content is a little bit longer.This This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                        <div class="row no-gutters p-3">
                            <div class="col- card bg-navy-transparent" style="height:50px; width:50px; color:#efdab9; font-size:35px; text-align:center;">
                                <i class="far fa-arrow-alt-circle-down" style="margin-top:7px"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body m-0 pl-3 p-1">
                                    <h5 class="card-title m-0">Card title</h5>
                                    <p class="card-text">This This content is a little bit longer.This This content is a little bit longer.This This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                        <div class="row no-gutters p-3">
                            <div class="col- card bg-navy-transparent" style="height:50px; width:50px; color:#efdab9; font-size:35px; text-align:center;">
                                <i class="far fa-arrow-alt-circle-down" style="margin-top:7px"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body m-0 pl-3 p-1">
                                    <h5 class="card-title m-0">Card title</h5>
                                    <p class="card-text">This This content is a little bit longer.This This content is a little bit longer.This This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>

<script src="{{ asset('js/wave.js') }}"></script>
</html>
