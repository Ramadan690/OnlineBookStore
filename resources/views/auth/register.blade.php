@extends('layouts.Login_Layout')

@section('content')



<form method="POST" action="{{ route('register') }}" style="max-width:1000px;margin:auto;background-color: white;position: relative;padding: 20px;padding-bottom:10px ; border: 1px lightblue solid;border-radius: 10px;margin-top: 40px
" id="formd">
{{ csrf_field() }}
  <center><h5><b><span style="color: red;text-shadow: 0 0 3px #FF0000;">BOOK ECOMMERCE SYSTEM</span> <span style="text-shadow: 0 0 3px #FF0000;"></span></b></h5> <hr>
  <h6><b>{{ __('Register to new account') }}</b></h6></center><br>



<div class="container">



<?php
if(isset($msgs)){
  ?>
   <div class="alert alert-primary" id="success-alert">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Success! </strong> You have been successfully registered. you can proceed to Login now
</div>

<?php
}
else{?>

<?php
};
?>




@if (count($errors))
<div class=" alert uk-alert-danger" style="background-color: white;color: red;border:1px solid #DDE9FC;border-left:8px #CC1C00 solid;border-radius: 13px 2px 2px 13px" >
  <!--<button type="button" class="uk-alert-close"  uk-close></button>-->
     <span id="spincorrect" style="font-size:13px">          
 <strong>
 
Please Fill all the field Correctly! 

@error('email')
<?php echo "| "?>{{$message }}<?php echo " |"?>@enderror

@error('password')
<?php echo "| "?>{{$message }}<?php echo " |"?>@enderror

@error('Passport')
<?php echo "| "?>{{$message }}<?php echo " |"?>@enderror


@error('Tel')
<?php echo "| "?>{{$message }}<?php echo " |"?>@enderror

@error('Address')
<?php echo "| "?>{{$message }}<?php echo " |"?>@enderror

 </strong>
 </span>
</div>
</div>
@endif



<div class="form-row">
    <div class="col-md-6 mb-2">
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name">Full Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="emailHelp" placeholder="Full Name" id="name"  value="{{ old('name') }}"  autofocus   style="border: 1px solid #ccc;border-radius: 3px">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
</div>

    <div class="col-md-6 mb-2">

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="emailHelp" placeholder="Email address" id="email"  value="{{ old('email') }}"  autofocus   style="border: 1px solid #ccc;border-radius: 3px">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
</div>

</div>



<div class="form-row">
    <div class="col-md-6 mb-2">

  <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
    <label for="Address">Address</label>
    <input type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" aria-describedby="emailHelp" placeholder="Address" id="Address"  value="{{ old('Address') }}"  autofocus   style="border: 1px solid #ccc;border-radius: 3px">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
</div>

    <div class="col-md-6 mb-2">
        <div class="form-group{{ $errors->has('Tel') ? ' has-error' : '' }}">
    <label for="Number">Tel</label>
    <input type="Number" class="form-control @error('Tel') is-invalid @enderror" name="Tel" aria-describedby="emailHelp" placeholder="Contact number.." id="Tel"  value="{{ old('Tel') }}"  autofocus   style="border: 1px solid #ccc;border-radius: 3px">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
</div>
</div>


<div class="form-row">
    <div class="col-md-6 mb-2">
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"  name="password" aria-describedby="passwordHelp" placeholder="Password" style="  border: 1px solid #ccc;border-radius: 3px">
    <small id="passwordHelp" class="form-text text-muted"></small>
  </div>
</div>


    <div class="col-md-6 mb-2">
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password-confirm">Confirm Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-confirm"  name="password_confirmation" aria-describedby="passwordHelp" placeholder="Confirm Password" style="  border: 1px solid #ccc;border-radius: 3px">
    <small id="passwordHelp" class="form-text text-muted"></small>
  </div>
</div>
</div>



  <button type="submit" class="btn btn-primary btn-md btn-block" lass="btn btn-link" href="{{ route('password.request') }}" id="bttn" >Sign Up</button>
  <div class="form-group">
                                


Already have an account ? <a href="{{ route('login') }}">{{ __('Sign In') }}</a>
                                        
                          

</div>

</form>


<script type="text/javascript">
$('#formd').submit(function() {
    $('#bttn').html('Please wait...');
    $('#bttn').css('opacity','0.5');
});

</script>

@endsection
