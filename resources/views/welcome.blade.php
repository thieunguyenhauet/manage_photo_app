<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .sign {
      padding-left: 20px;
      padding-right: 20px;
    }
    a {
      color: white;
    }
  </style>
</head>

<body>
  <header>
    <!-- thanh navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" dir="display">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Picture</a></li>
            <li><a href="#">Album</a></li>
          </ul>
          <div class="navbar-form navbar-right">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
              </div>
            </div>
            <a class="sign" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            <a class="sign" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
          </div>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container-fluid -->
    </nav>
  </header>
  <div class="container">
  </div>
</body>

</html>
