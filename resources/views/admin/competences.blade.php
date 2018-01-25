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
                <div class="panel-heading">competences</div>
                <div class="panel-body">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>listecategory</td>
                            <th>&nbsp;</th>
                         <th>&nbsp;</th> 
                     </tr>
                    </thead> 
                    @foreach($competences as $competence)       
                      <tr>
                         <td>{{ $competence->listecategory}}</td>  
                         <td><a href="{{ route('modif_competence', array('id'=>$competence->id))}}" class="btn btn-default">Modifier</a></td>
                            <td><a href="{{ route('suppr_competence', array('id'=>$competence->id))}}" class="supprimer btn btn-default">Supprimer</a></td>
                        </tr>  
                           
                    
                    @endforeach
                    </table>
                </div>
            </div>
               <div class="panel panel-default">
                <div class="panel-heading">Ajouter une compétence</div>
                <div class="panel-body">
                    <form method="POST" action="">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_user" value="1">
                         <!-- <label for="skill">Compétence : </label> -->
                         <!-- input type="text" name="listecategory"><br/>  -->
                         <label for="listecategory">Liste des categories  : </label>
                         <input type="text" name="listecategory"><br/> 
                         <input type="submit" name="valider">
                     </form>   



        </div>
    </div>
</div>
@endsection            