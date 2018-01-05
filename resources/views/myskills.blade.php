@extends('template')
@section('main')
<main class="container">
  
    <p><u>MES COMPETENCES</u></p>
    @foreach($liste as $skill)
        <p>{{ $skill->listecategory }}</p>
    @endforeach

</main>
@endsection