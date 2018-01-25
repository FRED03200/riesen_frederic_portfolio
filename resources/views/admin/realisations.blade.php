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
                <div class="panel-heading">réalisation</div>
                <div class="panel-body">
                    <table class="table table-striped">
                    <thead><tr><th>title</th><th>date_creation</th><th>image</th><th>descriptive</th>
                     <th>&nbsp;</th>
                     <th>&nbsp;</th>   
                    </tr></thead>                      
                    @foreach($realisations as $realisation)
                        <tr>
                            <td>{{ $realisation->title }}</td>
                            <td>{{ $realisation->date_creation }}</td>
                            <td>{{ $realisation->image }}</td>
                            <td>{{ $realisation->descriptive }}</td>
                            <td><a href="{{ route('modif_realisation', array('id'=>$realisation->id))}}" class="btn btn-default">Modifier</a></td>
                            <td><a href="{{ route('suppr_realisation', array('id'=>$realisation->id))}}" class="supprimer btn btn-default">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une réalisation </div>
                <div class="panel-body">
                    <form method="POST" action="">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_user" value="1">
                        <label for="title">Titre : </label>
                        <input type="text" name="title"><br/>
                        <label for="descriptive">Descriptive : </label>
                        <textarea name="descriptive"></textarea><br/>
                        <label for="date_creation">Date de création : </label>
                        <input type="date" name="date_creation"><br/>
                        <label for="image">Image : </label>
                        <input type="image " name="image"><br/>
                        <input type="submit" name="valider">
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection            