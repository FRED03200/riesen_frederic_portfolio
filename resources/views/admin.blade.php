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
                <div class="panel-heading">Messages reçus</div>
                <div class="panel-body">
                    <table class="table table-striped">
                    <thead><tr><th>Nom Prénom</th><th>Objet</th><th>Email</th><th>Message</th><th>Action</th></tr></thead>                      
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->surname }} {{ $contact->name }}</td>
                            <td>{{ $contact->object }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                              <a class="supprimer" href="{{ url('delete', array('id'=>$contact))}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
