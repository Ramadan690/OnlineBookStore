
@extends('layouts.Login_Layout')

@section('content')



<form method="post"  action="{{route('uploadimage')}}" enctype= "multipart/form-data"  style="max-width:600px;margin:auto;background-color: white;position: relative;padding: 20px;padding-bottom:10px ; border: 1px lightblue solid;border-radius: 10px;margin-top: 40px
" id="formd">
{{ csrf_field() }}

  <center><h5><b><span style="text-shadow: 0 0 3px #FF0000;">IUKL Alumni System</span></b></h5> <hr>

   <h6><b>Choose a profile image</b></h6> </center><br>

<div class="container">

<div class="form-group">



<div class="profile-pic">
  <label class="-label" for="file">
    <span class="glyphicon glyphicon-camera"></span>
    <span>Change Image</span>
  </label>
  <input id="file" type="file" name="image" onchange="loadFile(event)"/>
  <img src="@if($user[0]->photo != ''){{asset('/storage/images/profile_Images/'.$user[0]->photo)}} @else {{url('/images/icongif.gif')}} @endif" id="output" width="200" />
</div>
 <div style="color: red"><center>
    @error('image')
{{$message}}
@enderror </center>
  </div>
  </div>
 










<div class="btn-group btn-block">
<button type="submit" class="btn btn-primary mr-2 rounded" lass="btn btn-link" href="{{ route('password.request') }}" id="bttn" disabled="">Save</button><a class="btn btn-outline-primary mr-2 rounded" lass="btn btn-link" href="{{ route('main') }}" style="background-color: white;border:1px solid dodgerblue;color:dodgerblue; ">Skip</a>
</div>



<br>


  <!--
  <div class="form-group">
 <b><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} > Remember Me <a  href="{{ route('password.request') }}" style="float: right" >Forgot Your Password?</a></b><br><br>

</div>-->

</form>
<hr>
<p>
1.<span style="color: lightgreen">THANK YOU</span> for registering to our platform.<br>
2. You may change your profile picture right now, and only jpg,png are allowed for now.<br>
3. you can update later on Profile>image</p>
<script type="text/javascript">
$('#formd').submit(function() {
$('#bttn').html('Please wait...');
$('#bttn').css('opacity','0.5');});



var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
  $('#bttn').removeAttr('disabled')
};

</script>

@endsection
