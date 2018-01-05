@extends('template')
@section('main')
    <main class="container">
      
          <p><br/><u>MA FORMATION</u><br/></p>

          @foreach($liste as $formation)
          <p> Du {{ $formation->start_date }} au {{ $formation->expiration_date }}:<br/> 
          {{ $formation->contenue }} {{ $formation->organized }}.</p>
          @endforeach

    </main>
    @endsection