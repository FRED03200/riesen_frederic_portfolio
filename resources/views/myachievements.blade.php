@extends('template')
@section('main')
<main class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    @foreach($liste as $projet)
     @if ($loop->first)
      <div class="carousel-item active">
     @else
      <div class="carousel-item ">
      @endif
    <p>Titre du projet: {{$projet->title}}</p>
    <p>Date de création: {{Carbon\Carbon::parse($projet->date_creation)->format('d-m-Y')}}</p>
      <img class="d-block w-100" src="img/{{$projet->image}}" alt="{{$projet->title}}" width="100%" height="80%">
    <p>{{$projet->descriptive}}</p>
    </div>
    @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
   
    
    
</main>
@endsection
