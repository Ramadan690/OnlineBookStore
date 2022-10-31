@extends('layouts.Nav')




@section('page')
<i class="fas fa-user"></i> update users data  Matric : <span class="badge badge-primary"><?php echo $users[0]->Matric; ?></span>
@endsection

@section('path')
Users / New User
@endsection





@section('content')
<form method="post"  action="{{route('UpdateStudents1')}}" enctype= "multipart/form-data" style="font-size: 13px">
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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: #6B80FB">
                  <h6 class="m-0 font-weight-bold">General Information Form</h6>
                </div>
                <div class="card-body">


  <div class="form-row">
    <div class="col-md-8 mb-2">
      <label for="Name">Full Name <span style="color: red">*</span></label>
      <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" id="Name" placeholder="" value="<?php echo $users[0]->Name; ?>" >
      <div class="ErrName feed">
       
@error('Name')
{{$message}}
@enderror 
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <label for="Matric">Matric <span style="color: red">*</span></label>
<input type="Number" class="form-control @error('Matric') is-invalid @enderror" name="Matric" id="Matric" value="<?php echo $users[0]->Matric; ?>" readonly>
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
<input type="text" class="form-control @error('Passport') is-invalid @enderror" name="Passport" id="Passport" value="<?php echo $users[0]->Passport; ?>">

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
<option value="<?php echo $users[0]->Programme; ?>"><?php echo $users[0]->Programme; ?></option>
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

<center><button class="btn" id="save" style="width: 100px;background-color: #1270fc;color: white" type="submit"><i class="fas fa-plus-square"></i> Save</button>
 <a href="{{route('studentsConsultation')}}" style="width: 100px;" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a></center>




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
