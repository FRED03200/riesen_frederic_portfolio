@extends('template')
@section('main')
<main class="container">

    <p><br><div class="container">
<div >
    <div class="form-area">  
        <form role="form" method="POST" action="{{route('saveContact')}}">
          {{ csrf_field() }}
        <br style="clear:both">
                    <div class="vert">
                    <p>CONTACT</p>
                    </div>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name:" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Prenom:" required>
          </div>
           <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email:" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="object" name="object" placeholder="Objet:" required>
          </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message:" maxlength="300" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
            
        <input type="submit" id="submit" name="submit" class="btn btn-primary pull-right" value="VALIDER"/>
        </form>
    </div>
</div>
</div>
    </div>
 
  </div>
  
</main>

@endsection
