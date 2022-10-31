@extends('layouts.NavCom')


@section('page')
<i class="fas fa-tasks"></i> Feedbacks 
@endsection

@section('path')
Users 
@endsection




@section('content')

<style type="text/css">
  img:active {
    -webkit-transform:scale(1.8);
    transform:scale(1.8);
}
</style>
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
                  <h6 class="m-0 font-weight-bold "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg> Feedbacks   
</h6>

<button style="font-size: 13px;" type="button" id="add_button" class="btn btn-light" onclick="$('#showFeedbacks').DataTable().ajax.reload();"><i class="fas fa-refresh" aria-hidden="true"></i> <b>Refresh</b></button>


                </div>
                <div class="table-responsive p-3">
<!--------------------------------------------->
@csrf
<table id="showFeedbacks" class="table table-sm" style="width:100%">
        <thead>
            <tr>
                <th>Reference</th>
  <th class='Message'>Date/Time</th>
                <th class="Type">Type</th>
                <th class="Sender">Sender</th>
                <th class="Sender">Email</th>

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



    <div class="modal fade " id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " style="width: 400px">
    <div class="modal-content " >
      <div class="modal-header" style="background-color: #7e81ff;color: white;">
        <h7 class="modal-title" id="exampleModalLabel"><B>Feedbacks </B></h7>
        <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body" style="font-size: 13px;">



     <center>  <b> <img src="https://cdn-icons-png.flaticon.com/512/2038/2038898.png" width="70"  class="imga" id="imgEvent" style="border-radius: 10px"><br><br>

<a href = "#"><span id="Email"></span></a></center>
      <hr>
      <b>Reference : </b> <span class="Reference" ></span><br>
      <b>Message : </b> <br>
      <span id="Message" ></span><br>



</div>
      <div class="modal-footer" style="background-color: #7e81ff;font-size: 13px;">
      </div>
    </div>
  </div>
</div>

              </div>

            </div>
  

          </div>



@endsection

