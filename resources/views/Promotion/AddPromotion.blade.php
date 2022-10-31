@extends('layouts.Nav')




@section('page')
<i class="fas fa-user"></i> Add Promotion
@endsection

@section('path')
Promotion / Add Promotion
@endsection





@section('content')
<?php $random = 'RA-'.rand(0,1).''.rand();?>
<form method="post"  action="{{route('AddingPromotion')}}" enctype= "multipart/form-data" style="font-size: 13px">
  {{ csrf_field() }}

<div class="container-fluid" id="container-wrapper">


<div class="msg">

</div>


          <div class="row mb-3">
  

           






 <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" >
                  <h6 class="m-0 font-weight-bold">General Information Form</h6>
                </div>
                <div class="card-body">


  <div class="form-row">
    <div class="col-md-12 mb-1">
            <label for="Name">Reference:  <span style="color: red">*</span>   (A reference is pre-generated by the system for the new user.)</label>
<a onclick="RefreshReference()" style="float: right"><i class="fas fa-sync-alt" style="color: lightgreen"></i></a>
<input type="text" class="form-control " name="Ref" id="Ref" value="<?php echo $random?>" readonly>
</div></div>

  <div class="form-row">
    <div class="col-md-8 mb-2">
      <label for="Name">Name <span style="color: red">*</span></label>
      <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" id="Name" placeholder="" value="{{ old('Name') }}" >
      <div class="ErrName feed">
       
@error('Name')
{{$message}}
@enderror 
      </div>
    </div>





   <div class="col-md-4 mb-2">
      <label for="Promotion">Promotion <span style="color: red">*</span></label>
      <input type="Text" class="form-control @error('Promotion') is-invalid @enderror" name="Promotion" id="Promotion" placeholder="" value="{{old('Promotion')}}">
      <div class="ErrTel feed">
@error('Promotion')
{{$message }}
@enderror
      </div>
    </div>


  </div>


 <?php
if(isset($_GET['msg'])){
  ?>
<div class="alert alert-success" id="success-alert">
  <button type="button" class="close" data-dismiss="">x</button>
  <strong>Success! </strong> data added <?php echo $_GET['msg']; ?>
</div>

<?php
}
else{
};
?>
<hr>

<center><button class="btn btn-primary" id="save" type="submit"><i class="fas fa-plus-square"></i> Save</button>
 <a href="{{route('UserConsultation')}}" style="width: 100px;" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a></center>




                </div>

<div class="card-footer text-center">
      
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
