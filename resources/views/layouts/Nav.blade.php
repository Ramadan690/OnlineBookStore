<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ URL::asset('images/logo2.png')}}" rel="icon">
  <title>AdminPanel | IUKL Alumni System</title>
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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('Index')}}" style="background-color: black;border-bottom: 0px">
        <div class="sidebar-brand-icon">
          <img src="{{ URL::asset('images/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: white">AdminPanel</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item " style="background:url({{URL::asset('images/1710608567.jpg')}}) no-repeat center;background-size: 300px;font-size: 12px;border-radius: 0 0 2px 2px;">


<b class="nav-link">




<!--{{asset('/storage/images/profile_Images/'.$user[0]->photo)}} -->
          <span>
<div class="mb-2 mt-2">
  <Center>

    <a href="{{route('profile')}}"><img src="@if($user[0]->photo != ''){{asset('/storage/images/profile_Images/'.$user[0]->photo)}} @else {{url('/images/icongif.gif')}} @endif" width="60" height="60" class="imga" style="border-radius: 100px;border: solid white 5px;" /></a><br><br>
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
      
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fas fa-lock"></i>
          <span> User Management</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">User Management</h6>
            <a class="collapse-item" href="{{route('UserConsultation')}}">Manage Users Account</a>
            <a class="collapse-item" href="{{route('AddUser')}}">Add New User</a>

           
          </div>
        </div>

     </li>






     <li class="nav-item active d">
    



        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
          aria-expanded="true" aria-controls="collapseBootstrap">
         <i class="fas fa-tshirt"></i>
          <span> Books management</span>
        </a>
        <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Book management</h6>
            <a class="collapse-item" href="{{route('product')}}">Manage Book</a>
            <a class="collapse-item" href="{{route('EventsForm')}}">Create New Book</a>
          </div>
        </div>


     </li>




   <li class="nav-item active d">
    



        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap">
         <i class="fas fa-tshirt"></i>
          <span> Promotion</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Promotion</h6>
            <a class="collapse-item" href="{{route('promotion')}}">Add new Promotion</a>
          </div>
        </div>


     </li>


            <!--<a class="collapse-item" href="{{route('product')}}">Manage Book</a>
            <a class="collapse-item" href="{{route('EventsForm')}}">Create New Book</a>-->



      <hr class="sidebar-divider">

<li class="nav-item active d">
        <a class="nav-link" href="{{route('profile')}}">
          <i class="fas fa-fw fa-address-card "></i>
          <span>Profile</span></a>
      </li>

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
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar static-top " style="background-color: black;z-index: 12">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
           
      
           
          
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
                <a class="dropdown-item" href="{{route('profile')}}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
            
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
              <b>Robel</a></b>
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







$('#showEvents').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('BooksM')}}",
    "columns": [
    {"data" : "Reference"},
    {"data" : "Title"},
    {"data" : "Author1"},
    {"data" : "Type"},
    {"data" : "themes"},
    {"data" : "Topics"},
    {"data" : "price"},
    {"data" : "Year"},
    {"data" : "core"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<a href="/Events/Update_Events/'+data['Reference']+'" target="_blank"><button type="button" name="update"  class="btn btn-success btn-sm update" style="font-size:9px"><i class="fas fa-edit"></i></button></a> <button type="button" name="delete" class="btn btn-danger btn-sm Eventdelete" style="font-size:9px" onclick="deleteRow(`'+data['Reference']+'`)"><i class="fas fa-trash-alt"></i></button> ';
  }}
    ]

  })

  });




function deleteRow(ref){
   
   if (confirm('Are you sure you want to delete this book with the Reference : '+ref+' ?')) {

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
  }


}









function showEvents(image,Reference,E_title,about,date,duration,Location,created_at){

$('#RefU').html(Reference);
$('#SexeU').html(duration+' hours');
$('#NationalityU').html(about);
$('#OccupationU').html(date);
$('#NameU').html(E_title);
$('#TelU').html(Location);
$('#imgEvent').attr("src","/storage/images/Events/"+image);

$('#Created').html(created_at);

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
    {"data" : "Reference"},
    {"data" : "name"},
    {"data" : "email"},
    {"data" : "Role"},
    {"data" : "Tel"},
    {"data" : "Address"},

 {"data": null,
  render: function ( data, type, row ) {
    return '<a href="/UserConsultation/Update/'+data['Reference']+'" target="_blank"><button type="button" name="update"  class="btn btn-light btn-sm update" style="font-size:11px"><i class="fas fa-edit"></i></button></a> <button type="button" name="delete"  class="btn btn-light btn-sm delete" style="font-size:11px" onclick="deleteRowUser(`'+data['Reference']+'`)"><i class="fas fa-trash-alt"></i></button> <button type="button" name="delete"  class="btn btn-light btn-sm check" style="font-size:11px" onclick="showdata(`'+data['photo']+'`,`'+data['Role']+'`,`'+data['name']+'`,`'+data['Reference']+'`,`'+data['email']+'`,`'+data['Role']+'`,`'+data['Address']+'`,`'+data['Tel']+'`)"><i class="fas fa-info-circle"></i></button>';
  }}
    ]

  })





function showdata(photo,Role,Name,Reference,Email,Role,Address,Tel){

$('#RefU').html(Reference);
$('#Address').html(Address);
$('#NameU').html(Name);
$('#TelU').html(Tel);
$('#EmailU').html(Email);
$('#Role').html(Role);

if(photo == 'null'){
   $('.imga2').attr("src",'https://cdn-icons-png.flaticon.com/512/64/64572.png'); }

    else{
   $('.imga2').attr("src","/storage/images/profile_Images/"+photo);}


$('#detailModal').modal('show');

$('.btn-primary').on('click',function(){
  $('#detailModal').modal('hide');

})

}


function deleteRowUser(Matric){
   
   if (confirm('Are you sure you want to delete this user : '+Matric+' ?')) {

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








    var now = new Date();
now.setMinutes(now.getMinutes() - now.getTimezoneOffset());

    $('#date').attr('min', now.toISOString().slice(0,16));








function deleteRowStudent(Matric){
   
   if (confirm('Are you sure you want to delete this Student with the Matric : '+Matric+' ?')) {

    $.ajax(
    {
        url: '{{route("Deletestudent")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showstudents').DataTable().ajax.reload();

        }

    });
  }}










    $('#showstudents').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('Allstudents')}}",
    "columns": [
    {"data" : "Name"},
    {"data" : "Matric"},
    {"data" : "Passport"},
    {"data" : "Programme"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<a href="/IUKL/Student/Update/'+data['Matric']+'" target="_blank"><button type="button" name="update"  class="btn btn-success btn-sm update" style="font-size:11px"><i class="fas fa-edit"></i></button></a> <button type="button" name="delete"  class="btn btn-danger btn-sm delete" style="font-size:11px" onclick="deleteRowStudent(`'+data['Matric']+'`)"><i class="fas fa-trash-alt"></i></button>';
  }}
    ]

  })












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