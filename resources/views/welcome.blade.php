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
                    <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula eros a odio aliquam,</p>
                </div>
            </div>

        </div>
        <div class="container-fluid mt-3">
            <div class="row mt-5 p-5">
                <div class="col">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula eros a odio aliquam,
                        et sodales lacus interdum. Nam fringilla turpis id eros pretium, quis porttitor risus volutpat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis vestibulum tortor, a feugiat dolor.
                        In consequat ullamcorper sapien in pretium. Donec bibendum mattis ante quis condimentum.
                        Vivamus nulla lacus, efficitur et dapibus vitae, faucibus a velit. Fusce viverra bibendum laoreet.
                        Sed sagittis, augue in consectetur lobortis, sem ipsum sollicitudin magna, ultrices feugiat est ex sed urna.
                        Nullam egestas sapien tortor, sed imperdiet nibh efficitur id. Morbi eget tempus mi, et vehicula arcu.
                        Phasellus quis elementum velit, nec convallis elit. Duis eu quam molestie, pellentesque justo eu, laoreet tellus.
                        Sed et efficitur velit, vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.
                    </p>
                </div>
                <div class="col-4">
                    <div class="card bg-navy shadow">
                        <img src="{{ asset('img/dashboard.png') }}" class="card-img">
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row mt-5 p-5">
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="card bg-navy shadow">
                        <img src="{{ asset('img/dashboard.png') }}" class="card-img">
                    </div>
                </div>
                <div class="col">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula eros a odio aliquam,
                        et sodales lacus interdum. Nam fringilla turpis id eros pretium, quis porttitor risus volutpat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis vestibulum tortor, a feugiat dolor.
                        In consequat ullamcorper sapien in pretium. Donec bibendum mattis ante quis condimentum.
                        Vivamus nulla lacus, efficitur et dapibus vitae, faucibus a velit. Fusce viverra bibendum laoreet.
                        Sed sagittis, augue in consectetur lobortis, sem ipsum sollicitudin magna, ultrices feugiat est ex sed urna.
                        Nullam egestas sapien tortor, sed imperdiet nibh efficitur id. Morbi eget tempus mi, et vehicula arcu.
                        Phasellus quis elementum velit, nec convallis elit. Duis eu quam molestie, pellentesque justo eu, laoreet tellus.
                        Sed et efficitur velit, vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.
                    </p>
                </div>
            </div>

        </div>

        <div class="container-fluid bg-ruby">
            <div class="container py-5">

                <div class="row">
                    <div class="col-6">
                        <p class="p-3 card bg-navy shadow">vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.</p>
                    </div>
                    <div class="col-6">
                        <p class="p-3 card bg-navy shadow">vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.</p>
                    </div>
                    <div class="col-6">
                        <p class="p-3 card bg-navy shadow">vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.</p>
                    </div>
                    <div class="col-6">
                        <p class="p-3 card bg-navy shadow">vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.</p>
                    </div>
                    <div class="col-6">
                        <p class="p-3 card bg-navy shadow">vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.</p>
                    </div>
                    <div class="col-6">
                        <p class="p-3 card bg-navy shadow">vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.</p>
                    </div>
                    <div class="col-6">
                        <p class="p-3 card bg-navy shadow">vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.</p>
                    </div>
                    <div class="col-6">
                        <p class="p-3 card bg-navy shadow">vitae luctus nunc. Mauris et arcu quis arcu sollicitudin vestibulum.</p>
                    </div>
                </div>

            </div>
        </div>


    </body>
</html>
