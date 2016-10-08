<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loja Certa</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/css/mdb.min.css">

    <link rel="stylesheet" href="/css/style.css" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>


<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo-desk" href="/dashboard"> <img src="/image/logobranco.png" alt="Loja certa"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" style="float:right !important;">
            <li><a href="/sair">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
<div class="container" style="padding-top:30px">
    @yield('content')
</div>

<footer>
        <section class="container"
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <li><a href=""><strong>Downloads</strong></a></li>
                        <li><a href="">iPhone/iPad/iPod</a></li>
                        <li><a href="">Android</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href=""><strong>Empresa</strong></a></li>
                        <li><a href="">Quem Somos</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href=""><strong>Marketplace</strong></a></li>
                        <li><a href="">Vendedores</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href=""><strong>Legal</strong></a></li>
                        <li><a href="">Termos & Condições</a></li>
                        <li><a href="">Política de Privacidade</a></li>
                    </ul>
                </div>
            </div>    
        </section>
    </footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85361665-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>