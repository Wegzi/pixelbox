
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
</head>

<body class="bg-light">
    <a href="/" class="btn float-left btn-link waves-effect waves-link text-dark">Back</a>
    <div class="container">
        <div class="row pt-5">
            <div class="col"></div>
            <div class="col-sm-auto">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <form action="/janus" method="">
                            <h5 class="card-title m-3 text-center">Sistema em desenvolvimento</h5>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="123">
                            </div>
                            <div class="form-group">
                            </div>
                            <a href="#" class="btn float-left btn-link waves-effect waves-link">Criar conta</a>
                            <button type="submit" class="btn float-right btn-primary waves-effect waves-light" name="btn" value="enviar">Logar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <script src="js/wave.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
