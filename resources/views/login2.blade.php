@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Please Sign In')
               @section ('login_panel_body')
               <h2>Log In</h2>
    
                <form method="POST" action="/loginsend">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label for="username">Email:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
 
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
 
                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
                </div>
                </form>
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop