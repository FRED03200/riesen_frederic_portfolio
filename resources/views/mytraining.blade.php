@extends('template')
@section('main')
    <main class="container">
      
          <p><br/><u>MA FORMATION</u><br/></p>

          @foreach($liste as $formation)
          <p> Du {{ Carbon\Carbon::parse($formation->start_date)->format('d-m-Y') }} au {{ Carbon\Carbon::parse($formation->expiration_date)->format('d-m-Y') }}:<br/> 
          {{ $formation->contenue }} {{ $formation->organized }}.</p>
          @endforeach

    </main>
    @endsection