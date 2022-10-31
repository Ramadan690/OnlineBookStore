@extends('layouts.Nav')


@section('page')
<i class="fas fa-tasks"></i> Books management 
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


</div>







      


          <div class="row">
            <!-- Datatables -->


            <div class="col-lg-12">

              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: #6B80FB">
                  <h6 class="m-0 font-weight-bold "><i class="fas fa-users"></i> Book   
</h6>

<button style="font-size: 13px;" type="button" id="add_button" class="btn btn-light" onclick="$('#showEvents').DataTable().ajax.reload();"><i class="fas fa-refresh" aria-hidden="true"></i> <b>Refresh</b></button>
<a href="{{ route('EventsForm') }}" target="_blank" style="float: right;">
  <button style="font-size: 13px;" type="button" id="add_button" class="btn btn-warning"><i class="fas fa-plus-square"></i> <b>Add new Book</b></button>

</a>

                </div>
                <div class="table-responsive p-3">
<!--------------------------------------------->
@csrf
<table id="showEvents" class="table table-sm" style="width:100%">
        <thead>
            <tr>
                <th>Reference</th>
                <th class="Title">Title</th>
                <th class="about">Author</th>
                <th class="date">Type</th>
                <th class="dur">themes</th>
                <th class="dur">Topics</th>
                <th class="dur">price</th>
                <th class="dur">Year</th>
                <th class="dur">core</th>
                <th class="action" style="width: 13%"></th>
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
        <h7 class="modal-title" id="exampleModalLabel"><B>Events  <span class="badge bg-warning" id="RefU" style="color: white"></B></h7>
        <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body" style="font-size: 13px;">



     <center>  <b>  <img src=""   width="150" height="150" class="imga" id="imgEvent" style="border-radius: 100px;border: solid lightblue 5px;"><br><br>

<span id="NameU"></span></b> <br>
      </center>
      <hr>

<span id="NationalityU" ></span><br>
<hr>
<b>Duration : </b> <span id="SexeU" style="float: right"></span><br>
<hr>
<b>Date : </b><span id="OccupationU" style="float: right"></span><br>
<hr>
<b>Address : </b><span id="TelU" style="float: right"></span><br>

      </div>
      <div class="modal-footer" style="background-color: #7e81ff;font-size: 13px;">
        <span style="color: white">Created : </span> <span id="Created" style="color: white"></span>
      </div>
    </div>
  </div>
</div>

              </div>

            </div>
  

          </div>




@endsection

