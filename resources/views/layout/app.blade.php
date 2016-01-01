<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CodeCommerce</title>

    <!-- Bootstrap -->
    <!--link rel="stylesheet" href="{{ asset('css/app.css') }}">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css">
    <!--<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                       <a href="/"><span><h1>CodeCommerce</h1></span></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="http://commerce.dev/sign">Cadastra-se</a></li>
                            <li><a href="http://commerce.dev/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main role="main">
        @yield('content')
    </main>

    <footer>

    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
</body>
</html>
