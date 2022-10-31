@extends('layouts.Login_Layout')

@section('content')






<form method="POST" action="{{ route('password.email') }}" style="max-width:600px;margin:auto;background-color: white;position: relative;padding: 20px;padding-bottom:10px ; border: 1px lightblue solid;border-radius: 10px;margin-top: 40px
" id="formd">
{{ csrf_field() }}

  <center><h5><b><span style="color: red;text-shadow: 0 0 3px #FF0000;">Welcome</span> <span style="text-shadow: 0 0 3px #FF0000;"> to RA : AdminPanel</span></b></h5> <hr>

   <h6><b>Reset Password</b></h6>


  </center><br>



<div class="container">


@if (session('status'))


<div class=" alert uk-alert-success" style="background-color: white;color: red;border:1px solid #DDE9FC;border-left:8px #CC1C00 solid;border-radius: 13px 2px 2px 13px" >
  <!--<button type="button" class="uk-alert-close"  uk-close></button>-->
     <span id="spincorrect" style="font-size:13px">          
     - {{ session('status') }}
 </span>
</div>

@endif

@if ($errors->has('email'))
<div class=" alert uk-alert-success" style="background-color: white;color: red;border:1px solid #DDE9FC;border-left:8px #CC1C00 solid;border-radius: 13px 2px 2px 13px" >
  <!--<button type="button" class="uk-alert-close"  uk-close></button>-->
     <span id="spincorrect" style="font-size:13px">          
 <strong>- {{ $errors->first('email') }}</strong>
 </span>
</div>
</div>
 @endif


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="example@outlook.fr" id="email"  value="{{ old('email') }}"  autofocus   style="border: 1px solid #ccc;border-radius: 3px">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>



  <button type="submit" class="btn btn-primary btn-md btn-block" lass="btn btn-link" href="{{ route('password.request') }}" id="bttn" >Send Password Reset Link</button>

<p><a  href="{{ route('login') }}" style="float: right" ><b>Go back to Sign In</b></a>
<br></p>
</form>


<script type="text/javascript">

$('#formd').submit(function() {


    $('#bttn').html('Please wait...');
    $('#bttn').css('opacity','0.5');


});

</script>



@endsection
