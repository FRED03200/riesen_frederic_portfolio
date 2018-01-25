@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">formations</div>
                <div class="panel-body">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Organized</th>
                            <th>Contenue</th>
                            <th>Start_date</th>
                            <th>Expiration_date</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        <tr>
                    </thead>                      
                    @foreach($formations as $formation)
                        <tr>
                            <td>{{ $formation->organized }}</td>
                            <td>{{ $formation->contenue }}</td>
                            <td>{{ $formation->start_date }}</td>
                            <td>{{ $formation->expiration_date }}</td>
                            <td><a href="{{ route('modif_formation', array('id'=>$formation->id))}}" class="btn btn-default">Modifier</a></td>
                            <td><a href="{{ route('suppr_formation', array('id'=>$formation->id))}}" class="supprimer btn btn-default">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une formation</div>
                <div class="panel-body">
                    <form method="POST" action="">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_user" value="1">
                        <label for="organized">Organisme : </label>
                        <input type="text" name="organized"><br/>
                        <label for="contenue">Contenu : </label>
                        <textarea name="contenue"></textarea><br/>
                        <label for="start_date">Date de début : </label>
                        <input type="date" name="start_date"><br/>
                        <label for="expiration_date">Date de fin : </label>
                        <input type="date" name="expiration_date"><br/>
                        <input type="submit" name="valider">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection            