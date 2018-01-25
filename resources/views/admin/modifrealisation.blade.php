@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Modifier les réalisations</div>
    <div class="panel-body">
        <form method="POST" action="{{url('modifrealisation')}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $realisation->id }}">
            <input type="hidden" name="id_user" value="1">
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">Titre : </label>
                <input type="text" class="form-control" name="title" value="{{ $realisation->title }}"><br/>
            </div>
            <div class="form-group {{ $errors->has('date_creation') ? 'has-error' : '' }}">
                 <label for="date_creation">Date de création : </label>
                 <textarea name="date_creation">{{ $realisation->date_creation }}</textarea><br/>
            </div>
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label for="image">Image : </label>
                <input type="image" name="image" value="{{ $realisation->image }}"><br/>
            </div>
            <div class="form-group {{ $errors->has('descriptive') ? 'has-error' : '' }}">
               <label for="descriptive">Descriptive : </label>
               <input type="descriptive" name="descriptive" value="{{ $realisation->descriptive }}"><br/>
            </div>   
            <input type="submit" name="valider">
        </form>
    </div>
</div>
@endsection