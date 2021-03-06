<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.ico" rel="icon">
    <title>@yield('title')</title>
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}
    {{ HTML::style('css/styles.css') }}
    {{ HTML::style('css/paper.css') }}
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <a href="{{ action('ItemController@index') }}" class="navbar-brand">Shopping List - Home</a>
                    </div>
                </nav>
                @yield('content')
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>