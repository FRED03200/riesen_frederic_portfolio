<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
    <script src="{{url('/js/jquery-3.2.1.js')}}" ></script>
    <script src="{{url('/js/popper.js')}}"></script>
    <script src="{{url('/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <title>projetportfolio</title>
</head>
<body class="container-fluid">
<header class="row mt-3">
  <div class="col-md-1 col-sm-0"></div>
    <div class="container col-md-5 sm-12 circle">
    <h1>FREDERIC  RIESEN</h1>
    <h2>Training has Aformac VICHY</h2>
    </div>
    <div class="col-md-6 sm-12 bleu pt-md-5">
    <script type="text/javascript" src="http://platform.linkedin.com/in.js"></script>
<script type="in/share" right="top"></script>
  </div>
<div class="container-fluid rouge mt-md-3">
    <ul class="nav center">
  <li class="nav-item">
    <a class="nav-link" href="{{route('mytraining')}}">Ma formation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('myskills')}}">Mes compétences</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('myachievements')}}">Mes réalisations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('contactform')}}">Contact</a>
  </li>
</ul>
</div>
</header>
@yield('main')
<footer>
  <div class="marron">
  <p>@2017.frederic.riesen</p>
</div>
</footer>
</body>
</html>