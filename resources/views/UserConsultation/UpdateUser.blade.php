@extends('layouts.Nav')




@section('page')
<i class="fas fa-user"></i> update users data  Matric : <span class="badge badge-primary"><?php echo $users[0]->Reference; ?></span>
@endsection

@section('path')
Users / New User
@endsection





@section('content')
<form method="post"  action="{{route('UpdateUserS1')}}" enctype= "multipart/form-data" style="font-size: 13px">
  {{ csrf_field() }}

<div class="container-fluid" id="container-wrapper">



<div class="msg">

</div>

          <div class="row mb-3">
  

    






 <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <?php  if(isset($_REQUEST['rslt'])){ ?>
                             <div class="alert alert-success" role="alert">
<B>Success</B> the user data has been updated.</div>
                <?php } else{ } ?>
   
              
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" >
                  <h6 class="m-0 font-weight-bold">General Information Form</h6>
                </div>
                <div class="card-body" >
  <div class="form-row">
    <div class="col-md-12 mb-1">
            <label for="Name">Reference:  <span style="color: red">*</span>   (A reference is pre-generated by the system for the new user.)</label>

<input type="text" class="form-control " name="Ref" id="Ref" value="<?php echo $users[0]->Reference; ?>" readonly>
</div></div>


  <div class="form-row">
    <div class="col-md-8 mb-2">
      <label for="Name">Full Name <span style="color: red">*</span></label>
      <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" id="Name" placeholder="" value="<?php echo $users[0]->name; ?>" >
      <div class="ErrName feed">
       
@error('Name')
{{$message}}
@enderror 
      </div>
    </div>



</div>

  <div class="form-row">

 <div class="col-md-4 mb-2">
      <label for="Tel">Address <span style="color: red">*</span></label>
      <input type="tel" class="form-control @error('Address') is-invalid @enderror" name="Address" id="Address" placeholder="" value="<?php echo $users[0]->Address; ?>">
      <div class="ErrAdr feed">
@error('Address')
{{$message }}
@enderror
      </div>
    </div>


   <div class="col-md-4 mb-2">
      <label for="Tel">Tel <span style="color: red">*</span></label>
      <input type="tel" class="form-control @error('Tel') is-invalid @enderror" name="Tel" id="Tel" placeholder="" value="<?php echo $users[0]->Tel; ?>">
      <div class="ErrTel feed">
@error('Tel')
{{$message }}
@enderror
      </div>
    </div>

    <div class="col-md-3 mb-2">
      <label for="Privilege">Privilege <span style="color: red">*</span></label>
      <select class="form-control @error('Privilege') is-invalid @enderror" name="Privilege" id="Privilege">
<option value="<?php echo $users[0]->Role; ?>"><?php echo $users[0]->Role; ?></option>              
<option value="Member">Member</option>
<option value="Admin">Admin</option>
      </select>
      <div class="ErrPriv feed">
@error('Privilege')
{{$message }}
@enderror
      </div>
    </div>

  </div>


           <br>    
                 
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-info">
                  <h6 class="m-0 font-weight-bold">Login Information</h6>
                </div>
                <br>

         <div class="form-row">
    <div class="col-md-12 mb-2">
      <label for="Email">Email <span style="color: red">*</span></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email" id="Email" placeholder="" aria-describedby="inputGroupPrepend3" value="<?php echo $users[0]->email; ?>" >
      </div>
<Span class="ErrEmail feed">
  @error('Email')
{{$message }}
@enderror</Span>
    </div>
  </div>

<br>
    <div class="form-row">
    <div class="col-md-6 mb-2">
 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      





<p>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Reset Password  </button>
</p>
<div class="collapse" id="collapseExample" style="border-radius: 5px;border:1px lightblue solid">
  <div class="card card-body">
    <label for="password">New Password <span style="color: red"></span></label>

    <input type="password" class="form-control @error('Password') is-invalid @enderror" name="Password" id="Password" placeholder="" value="">
  </div>
</div>




      

      <div class="ErrPassword feed">
@error('Password')
{{$message }}
@enderror
      </div>
    </div>
    </div>

  </div>

<hr>
<center><button class="btn" id="save" style="width: 100px,color: white" type="submit"><i class="fas fa-plus-square"></i> Save</button>
 <a href="{{route('UserConsultation')}}" style="width: 100px;" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a></center>




                </div>

<div class="card-footer text-center" >
      
    </div>  </div>
 </div>


              </div>
            </div>















</div>


                    </form>

  <button type="button" class="btn btn-primary" id="showdata" data-toggle="modal" data-target="#exampleModalCenter" style="visibility: hidden"></button>

<script type="text/javascript">


</script>
@endsection