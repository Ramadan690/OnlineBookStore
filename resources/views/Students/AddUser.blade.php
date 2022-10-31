@extends('layouts.Nav')




@section('page')
<i class="fas fa-user"></i> Add User Form
@endsection

@section('path')
Users / New User
@endsection





@section('content')
<form method="post"  action="{{route('AddStudentsUpload')}}" enctype= "multipart/form-data"  style="font-size: 13px">
  {{ csrf_field() }}

<div class="container-fluid" id="container-wrapper">



<div class="msg">

</div>


          <div class="row mb-3">
  

           
            <!-- Pie Chart -->





              

 <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">

<?php  if(isset($_REQUEST['rslt'])){ ?>
                             <div class="alert alert-success" role="alert">
<B>Success</B> the user data has been updated.</div>
                <?php } else{ } ?>
              
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: #6B80FB">
                  <h6 class="m-0 font-weight-bold">General Information Form</h6>
                </div>
                <div class="card-body">
 <?php
if(isset($msg)){
  ?>
<div class="alert alert-warning" id="success-alert">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Alert! </strong> <?php echo $msg; ?>
</div>

<?php
}
else{
};
?>


  <div class="form-row">
    <div class="col-md-8 mb-2">
      <label for="Name">Full Name <span style="color: red">*</span></label>
      <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" id="Name" placeholder="" value="{{ old('Name') }}" >
      <div class="ErrName feed">
       
@error('Name')
{{$message}}
@enderror 
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <label for="Matric">Matric <span style="color: red">*</span></label>
<input type="Number" class="form-control @error('Matric') is-invalid @enderror" name="Matric" id="Matric" value="{{ old('Matric') }}">
      <div class="ErrSexe feed">
@error('Matric')
{{$message }}
@enderror         
      </div>
    </div>

</div>

  <div class="form-row">
     <div class="col-md-5 mb-2">
      <label for="Passport">Passport <span style="color: red">*</span></label>
<input type="text" class="form-control @error('Passport') is-invalid @enderror" name="Passport" id="Passport" value="{{ old('Passport') }}">

      <div class="ErrNationality feed">
@error('Passport')
{{$message }}
@enderror
      </div>
    </div>




  </div>

  <div class="form-row">
 

     <div class="col-md-6 mb-2">
      <label for="Programme">Programme</label>
      <Select  class="form-control @error('Programme') is-invalid @enderror" id="Programme" name="Programme" placeholder="" value="{{old('Programme')}} ">
<option value="">...</option>
<option value="Bachelor of Architecture">Bachelor of Architecture </option>
<option value="Bachelor of Business ">Bachelor of Business </option>
<option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
<option value="Bachelor of Science in Business">Bachelor of Science in Business</option>
<option value="Bachelor of Computer Science">Bachelor of Computer Science</option>
<option value="Bachelor of Science in Engineering">Bachelor of Science in Engineering</option>
      </Select>
      <div class="ErrInstitution feed">
@error('Programme')
{{$message }}
@enderror
      </div>
    </div>
  </div>

           <br>    







<hr>
<center><button class="btn" id="save" style="width: 100px;background-color: #1270fc;color: white" type="submit"><i class="fas fa-plus-square"></i> Save</button>
 <a href="{{route('UserConsultation')}}" style="width: 100px;" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a></center>




                </div>

<div class="card-footer text-center" style="background-color: #6B80FB">
      
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
