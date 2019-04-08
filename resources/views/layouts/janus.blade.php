<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel='stylesheet' type='text/css' href='{{ asset('css/app.css') }}' />
    <link rel='stylesheet' type='text/css' href='{{ asset('css/style.css') }}' />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='shortcut icon' href='https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg' type='image/x-icon'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Janus Dashboard</title>
</head>

<body>
    <div class="container-fluid p-0" style="height: 100%;">
        <!-- TOP -->
        <div class="row m-0">
            <div class="main-sidebar h-100 col-12 col-md-3 col-lg-2  shadow z-index11 m-0 p-0 bg-light mobile-0 position-fixed">
                @include('includes.sidemenu')
            </div>

            @yield('content')
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/wave.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>

</html>
