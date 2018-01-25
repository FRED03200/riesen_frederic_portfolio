@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Modifier mes competences</div>
    <div class="panel-body">
        <form method="POST" action="{{url('modifcompetence')}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $competence->id }}">
            <input type="hidden" name="id_user" value="1">
            <div class="form-group {{ $errors->has('listecategory') ? 'has-error' : '' }}">
                <label for="listecategory">liste des catégories : </label>
                <input type="text" class="form-control" name="listecategory" value="{{ $competence->listecategory }}"><br/>
           
            <input type="submit" name="valider">
        </form>
    </div>
</div>
@endsection