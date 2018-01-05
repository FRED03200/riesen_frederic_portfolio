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
<body>
<header>
    <h1>FREDERIC  RIESEN</h1>
    <div class="blanc container-fluid">
    <h2>Training has afformac VICHY</h2>
    </div>
<div class="rouge">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('mytraining')}}">Ma formation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('myskills')}}">Mes compétences</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('myachievements')}}">Mes réalisations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="{{route('contactform')}}">Contact</a>
  </li>
</ul>
</div>
</header>
@yield('main')
<footer>
    <script type="text/javascript" src="http://platform.linkedin.com/in.js"></script>
<script type="in/share" right="top"></script>

</footer>
</body>
</html>