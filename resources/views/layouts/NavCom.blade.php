<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ URL::asset('images/logo2.png')}}" rel="icon">
  <title>Come AdminPanel | IUKL Alumni System </title>
  <link href="{{ URL::asset('headers_bootstrap/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('headers_bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/profile_image.css') }}" rel="stylesheet" type="text/css">

  <link href="{{ URL::asset('headers_bootstrap/css/ruang-admin.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/commun.css') }}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

</head>

<body id="page-top" >


<div id="loading"></div>

  <!-- Sidebar -->

  <div id="wrapper" >



<ul class="navbar-nav sidebar sidebar-primary accordion" id="accordionSidebar" >
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" style="background-color: #3b3d85;border-bottom: 0px">
        <div class="sidebar-brand-icon">
          <img src="{{ URL::asset('images/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: white">AgentPanel</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item " style="background:url({{URL::asset('images/abstract-blue-background-with-depth_79603-874.jpg')}}) no-repeat center;background-size: 300px;font-size: 12px;border-radius: 0 0 2px 2px;">


<b class="nav-link">




          <span>
<div class="mb-2 mt-2">
  <Center>

    <a href="#"><img src="@if(Auth::user()->photo != ''){{asset('/storage/images/profile_Images/'.$user[0]->photo)}} @else {{url('/images/icongif.gif')}} @endif" width="60" height="60" class="imga" style="border-radius: 100px;border: solid white 5px;" /></a><br><br>
    <span class="badge badge-pill badge-dark" style="color: yellow;font-size: 12px"><?php $var = preg_split('/[\s,]+/', Auth::user()->name, 3);echo $var[0]." ".$var[1]?></span></Center>
</div>


          </span></b>




</li>

<br>


      <li class="nav-item active d">
        <a class="nav-link" href="{{route('Index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>
      <li class="nav-item active d">
        <a class="nav-link" href="{{route('main')}}">
          <i class="fas fa-fw fa-address-card "></i>
          <span>Member View</span></a>
      </li>


<!--<li class="nav-item active d">
        <a class="nav-link" href="{{route('UserConsultation')}}">
          <i class="fas fa-fw fa-users"></i>
          <span>Users (Consultation)</span></a>
      </li>-->

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
    
     <li class="nav-item active d">
    



        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
          aria-expanded="true" aria-controls="collapseBootstrap">
         <i class="fas fa-tshirt"></i>
          <span> Properties management</span>
        </a>
        <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Properties management</h6>
            <a class="collapse-item" href="{{route('EventsCom')}}">Manage Properties</a>
            <a class="collapse-item" href="{{route('EventsFormCom')}}">Create New Properties</a>
          </div>
        </div>


     </li>

   <li class="nav-item active d">
    



        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap">
         <i class="fas fa-tshirt"></i>
          <span> Feedbacks - Enquiris</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Feedback management</h6>
            <a class="collapse-item" href="{{route('FeedbacksCom')}}">Feedbacks </a>
          </div>
        </div>


     </li>





      <hr class="sidebar-divider">


      <li class="nav-item active d">
        <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>LogOut</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->





    <div id="content-wrapper" class="d-flex flex-column" style="background-color: #f5faf7">
      <div id="content" style="background-color: white;margin-bottom: 50px">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar static-top " style="background-color: #3b3d85;z-index: 12">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
           
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-tasks fa-fw"></i>
                <span class="badge badge-success badge-counter"></span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Quick Links
                </h6>
                <a class="dropdown-item align-items-center" href="{{route('AddUser')}}" >
                  <div class="mb-3">
                    <div class="small text-gray-500">Add 
                    </div>
                    <div  style="height: 12px;">
                      New User (Link)
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="{{route('UserConsultation')}}" >
                  <div class="mb-3">
                    <div class="small text-gray-500">User Consultation
                    </div>
                    <div style="height: 12px;">
                      Consultation (Link)
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#"  >
                  <div class="mb-3">
                    <div class="small text-gray-500">Create Pie Chart
                      <div class="small float-right"><b>75%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

 <span class="ml-2 d-none d-lg-inline text-white small">
<!------------------------>
<i class="fas fa-cog" style="font-size: 15px"></i>
  <span style="font-size: 13px;margin-left: 10px"> 

              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
           
            
                <a class="dropdown-item" href="{{route('ReportM')}}">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Report Member
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>








<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background-color: #fafbff; opacity: 0.6;border: 1px solid #fbc5ad;border-radius: 0 0 5px 5px
">
       
       <span style="font-size: 15px;color: grey"> <b>@yield('page')</b></span>

          <ul class="navbar-nav ml-auto">


            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span style="font-size: 12px;color: black"> <!--@yield('path')--> 

                  <?php date_default_timezone_set("Asia/Kuala_Lumpur");?> 

                    
                    <button type="button" class="btn time" style="color: black;border-style: inset;color: white;font-size: bold;font-size: 13px;background-color: #66bb6a;border-radius: 4px 4px 20px 20px" disabled="">
  <?php echo date('d/m/Y');?> <span class="badge badge-light"><?php echo date('H:i');?></span>
</button>
                  </span> 
              </a>
             
            </li>

<hr>
          </ul>

        </nav>






       
        <!-- Topbar -->

@yield('content')

</div>


        


</div>

<footer class="sticky-footer" style="background-color: #2747CF;color: white;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b>Abdifatah</a></b>
            </span>
          </div>
        </div>
      </footer>






  <!-- Modal Logout -->
       <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>



<!--Notification modal-->

<!-- Modal -->
<div class="modal fade " id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document" >
    <div class="modal-content">
      <div class="modal-header" style="background-color: #7e81ff;color: white;">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-bell"></i> Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <center><span id="data" style="font-size: 12px"></span></center>
      </div>
      <div class="modal-footer" style="background-color: #7e81ff;color: white;">
      </div>
    </div>
  </div>
</div>


</body>
</html>



  <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('headers_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ URL::asset('headers_bootstrap/vendor/jquery-easing/jquery.easing.min.js') }} "></script>
  <script src="{{ URL::asset('headers_bootstrap/js/ruang-admin.min.js') }} "></script>
  <script src="{{ URL::asset('headers_bootstrap/vendor/chart.js/Chart.min.js') }} "></script>
  <script src="{{ URL::asset('headers_bootstrap/js/demo/chart-area-demo.js') }} "></script>  
<!-- datatable -->
<script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/AdminPanelJS/commun.js') }}"></script>


<script type="text/javascript"> 


$(document).ready( function () {



$('#showFeedbacks').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('AllFeedbacks')}}",
    "columns": [
   {"data" : "Reference"},
    {"data" : "updated_at"},
    {"data" : "Type"},
    {"data" : "Sender"},
    {"data" : "Email"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<button type="button" name="show"  class="btn btn-primary btn-sm check" style="font-size:9px" onclick="showFeedback(`'+data['Reference']+'`,`'+data['Email']+'`,`'+data['Message']+'`)"><i class="fas fa-info-circle"></i></button>';
  }}
    ]

  })




$('#showEvents').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('AllEventsCOM')}}",
    "columns": [
    {"data" : "Reference"},
    {"data" : "E_title"},
    {"data" : "Type"},
    {"data" : "Categorie"},
    {"data" : "State"},
    {"data" : "City"},
    {"data" : "Street_Address"},
    {"data" : "Furnishing"},
    {"data" : "price"},

 {"data": null,
  render: function ( data, type, row ) {
    return '<a href="/Events/Update_Events/'+data['Reference']+'" target="_blank"><button type="button" name="update"  class="btn btn-success btn-sm update" style="font-size:9px"><i class="fas fa-edit"></i></button></a> <button type="button" name="delete" class="btn btn-danger btn-sm Eventdelete" style="font-size:9px" onclick="deleteRow(`'+data['Reference']+'`)"><i class="fas fa-trash-alt"></i></button> <button type="button" name="show"  class="btn btn-primary btn-sm check" style="font-size:9px" onclick="showEvents(`'+data['image']+'`,`'+data['Reference']+'`,`'+data['E_title']+'`,`'+data['about']+'`,`'+data['Type']+'`,`'+data['Categorie']+'`,`'+data['State']+'`,`'+data['City']+'`,`'+data['Street_Address']+'`,`'+data['Furnishing']+'`,`'+data['price']+'`,`'+data['build_year']+'`,`'+data['sqft']+'`,`'+data['postor']+'`,`'+data['updated_at']+'`,`'+data['bedroom']+'`,`'+data['bathroom']+'`)"><i class="fas fa-info-circle"></i></button>';
  }}
    ]

  })

  });


function showFeedback(Reference,Email,Message){

$('.Reference').html(Reference);
$('#Email').html(Email);
$('#Message').html(Message);

$('#detailModal').modal('show');

$('.btn-primary').on('click',function(){
  $('#detailModal').modal('hide');

})



}





function deleteRow(ref){
   
   if (confirm('Are you sure you want to delete this events with the Reference : '+ref+' ?')) {

    $.ajax(
    {
        url: '{{route("DeleteEvents")}}',
        type: 'get',
        data: {
            "id": ref,
        },
        success: function (result){
            alert(result);
            $('#showEvents').DataTable().ajax.reload();
        }
    });
  }}







function showEvents(image,Reference,E_title,about,Type,Categorie,State,city,Street_Address,Furnishing,price,build_year,sqft,postor,updated_at,bedroom,bathroom){

$('#Reference').html(Reference);
$('#Type').html(Type);
$('#about').html(about);
$('#Categorie').html(Categorie);
$('#NameU').html(E_title);
$('#imgEvent').attr("src","/storage/images/Events/"+image);

$('#State').html(State);
$('#Street_Address').html(Street_Address);
$('#Furnishing').html(Furnishing);
$('#price').html(price);
$('#build_year').html(build_year);
$('#sqft').html(sqft+" sq.ft");
$('#postor').html(postor);
$('.city').html(city);
$('#bedroom').html("Bedroom : "+bedroom);
$('#bathroom').html("Bathroom : "+bathroom);

$('#updated').html(updated_at);

$('#detailModal').modal('show');

$('.btn-primary').on('click',function(){
  $('#detailModal').modal('hide');

})



}

















    $('#showuser').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('Allusers')}}",
    "columns": [
    {"data" : "Name"},
    {"data" : "Matric"},
    {"data" : "Email"},
    {"data" : "Passport"},
    {"data" : "Programme"},
    {"data" : "Role"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<a href="/UserConsultation/Update/'+data['Reference']+'" target="_blank"><button type="button" name="update"  class="btn btn-success btn-sm update" style="font-size:11px"><i class="fas fa-edit"></i></button></a> <button type="button" name="delete"  class="btn btn-danger btn-sm delete" style="font-size:11px" onclick="deleteRowUser(`'+data['Reference']+'`)"><i class="fas fa-trash-alt"></i></button> <button type="button" name="delete"  class="btn btn-primary btn-sm check" style="font-size:11px" onclick="showdata(`'+data['photo']+'`,`'+data['GraduationYear']+'`,`'+data['Name']+'`,`'+data['Matric']+'`,`'+data['Email']+'`,`'+data['Passport']+'`,`'+data['Programme']+'`,`'+data['Tel']+'`,`'+data['Role']+'`)"><i class="fas fa-info-circle"></i></button>';
  }}
    ]

  })





function showdata(photo,GraduationYear,Name,Matric,Email,Passport,Programme,Tel,Role){

$('#RefU').html(Matric);
$('#SexeU').html(Passport);
$('#NationalityU').html(GraduationYear);
$('#OccupationU').html(Programme);
$('#NameU').html(Name);
$('#TelU').html(Tel);
$('#EmailU').html(Email);
$('#Role').html(Role);

if(photo == 'null'){
   $('.imga2').attr("src",'/images/icongif.gif'); }

    else{
   $('.imga2').attr("src","/storage/images/profile_Images/"+photo);}


$('#detailModal').modal('show');

$('.btn-primary').on('click',function(){
  $('#detailModal').modal('hide');

})

}


function deleteRowUser(Matric){
   
   if (confirm('Are you sure you want to delete this events with the Matric : '+Matric+' ?')) {

    $.ajax(
    {
        url: '{{route("DeleteUser")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showuser').DataTable().ajax.reload();

        }

    });
  }


}






</script>














<style type="text/css">
.time {
    opacity: 0;  
    animation: opacityOn 5s normal forwards;
    animation-delay: 1s;
}

@keyframes opacityOn {
    0% {
        opacity: 0.6;
    }
    10% {
        opacity: 0.2;
    }
    20% {
        opacity: 0.6;
    }
    30% {
        opacity: 0.2;
    }
    40% {
        opacity: 0.6;
    }
    50% {
        opacity: 0.2;
    }
    60% {
        opacity: 0.6;
    }
    70% {
        opacity: 0.2;
    }
    80% {
        opacity: 0.6;
    }
    90% {
        opacity: 0.2;
    }
    100% {
        opacity: 0.6;
    }




}
</style>