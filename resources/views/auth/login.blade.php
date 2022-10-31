
@extends('layouts.Login_Layout')

@section('content')




<form method="POST" action="{{ route('login') }}" style="max-width:600px;margin:auto;background-color: white;position: relative;padding: 20px;padding-bottom:10px ; border: 1px lightblue solid;border-radius: 10px;margin-top: 40px
" id="formd">
{{ csrf_field() }}

  <center><h5><b><span style="color: green;text-shadow: 0 0 3px #FF0000;">BOOK ECOMMERCE SYSTEM</span> <span style="text-shadow: 0 0 3px #FF0000;"></span></b></h5> <hr>

   <h6><b>Login</b></h6>


  </center><br>




<div class="container">
@if (count($errors))
<div class=" alert uk-alert-danger" style="background-color: white;color: red;border:1px solid #DDE9FC;border-left:8px #CC1C00 solid;border-radius: 13px 2px 2px 13px" >
  <!--<button type="button" class="uk-alert-close"  uk-close></button>-->
     <span id="spincorrect" style="font-size:13px">          
 <strong>- {{ $errors->first('email') }}
 - {{ $errors->first('password') }}</strong>
 </span>
</div>
</div>
@endif


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="example@outlook.fr" id="email"  value="{{ old('email') }}"  autofocus   style="border: 1px solid #ccc;border-radius: 3px">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password"  name="password" aria-describedby="passwordHelp" placeholder="Password" style="  border: 1px solid #ccc;border-radius: 3px">
    <small id="passwordHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary btn-md btn-block" lass="btn btn-link" href="{{ route('password.request') }}" id="bttn" >Sign In</button>
  <div class="form-group">
                                
Don't have an account ? <a href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                        
                          

</div>

</form>


<script type="text/javascript">


$('#formd').submit(function() {


    $('#bttn').html('Please wait...');
    $('#bttn').css('opacity','0.5');


});

</script>




@endsection