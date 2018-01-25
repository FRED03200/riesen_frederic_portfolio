@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Modifier la formation</div>
    <div class="panel-body">
        <form method="POST" action="{{url('modifformation')}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $formation->id }}">
            <input type="hidden" name="id_user" value="1">
            <div class="form-group {{ $errors->has('organized') ? 'has-error' : '' }}">
                <label for="organized">Organisme : </label>
                <input type="text" class="form-control" name="organized" value="{{ $formation->organized }}"><br/>
            </div>
            <div class="form-group {{ $errors->has('contenue') ? 'has-error' : '' }}">
                 <label for="contenue">Contenu : </label>
                 <textarea name="contenue">{{ $formation->contenue }}</textarea><br/>
            </div>
            <div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
                <label for="start_date">Date de début : </label>
                <input type="date_time" name="start_date" value="{{ $formation->start_date }}"><br/>
            </div>
            <div class="form-group {{ $errors->has('expitation_date') ? 'has-error' : '' }}">
               <label for="expiration_date">Date de fin : </label>
               <input type="date_time" name="expiration_date" value="{{ $formation->expiration_date }}"><br/>
            </div>   
            <input type="submit" name="valider">
        </form>
    </div>
</div>
@endsection