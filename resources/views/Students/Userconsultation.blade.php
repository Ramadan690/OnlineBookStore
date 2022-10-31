@extends('layouts.Nav')


@section('page')
<i class="fas fa-tasks"></i> Students Consultation
@endsection

@section('path')
Users 
@endsection




@section('content')


        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">



          <!-- Row -->
          


          <div class="row">




  <!-- Earnings (Monthly) Card Example -->
   
            <!-- Earnings (Annual) Card Example -->
     
            <!-- New User Card Example -->
       
            <!-- Pending Requests Card Example -->
        

</div>







      


          <div class="row">
            <!-- Datatables -->


            <div class="col-lg-12">

              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: #6B80FB">
                  <h6 class="m-0 font-weight-bold "><i class="fas fa-users"></i> Users   
</h6>

<button style="font-size: 13px;" type="button" id="add_button" class="btn btn-light" onclick="$('#showstudents').DataTable().ajax.reload();"><i class="fas fa-refresh" aria-hidden="true"></i> <b>Refresh</b></button>
<a href="{{ route('AddUser') }}" target="_blank" style="float: right;"><button style="font-size: 13px;" type="button" id="add_button" class="btn btn-light"><i class="fas fa-plus-square"></i> <b>Add Users</b></button></a>
                </div>
                <div class="table-responsive p-3">
<!--------------------------------------------->
@csrf
<table id="showstudents" class="table table-sm" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Matric</th>
                <th>Passport</th>
                <th>Programme</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
     
    </table>

<!--
<button type="button" name="update"  class="btn btn-success btn-sm update" style="font-size:11px"><i class="fas fa-edit"></i></button></button> 

<button type="button" name="delete"  class="btn btn-danger btn-sm delete" style="font-size:11px"><i class="fas fa-trash-alt"></i></button> 

<button type="button" name="delete"  class="btn btn-primary btn-sm check" style="font-size:11px"><i class="fas fa-info-circle"></i></button>
-->


                </div>


<div class="card-footer text-center" style="background-color: #6B80FB">
      
    </div>  

    <div class="modal fade " id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width: 400px">
    <div class="modal-content" >
      <div class="modal-header" style="background-color: #7e81ff;color: white;">
        <h5 class="modal-title" id="exampleModalLabel"><B>User Details</B></h5>
        <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">



     <center>  <img src="{{url('/images/icongif.gif')}}"   width="150" height="150" class="imga imga2" style="border-radius: 100px;border: solid lightblue 5px;"><br><br>

     <b> <span id="NameU"></span></b><br><span class="badge bg-success" id="RefU" style="color: white"> </center>

<hr>
<b>Role : </b> <span id="Role" style="float: right"></span><br>
<b>Passport/IC : </b> <span id="SexeU" style="float: right"></span><br>
<b>Graduation Year : </b><span id="NationalityU" style="float: right"></span><br>
<b>Programme : </b><span id="OccupationU" style="float: right"></span><br>
<b>Tel : </b><span id="TelU" style="float: right"></span><br>
<b>Email : </b><span id="EmailU" style="float: right"></span><br>

      </div>
      <div class="modal-footer" style="background-color: #7e81ff;">
      </div>
    </div>
  </div>
</div>

              </div>

            </div>
  

          </div>




@endsection

