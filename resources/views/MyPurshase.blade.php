<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Real Estate</title>
        <link rel="icon" type="{{ asset('images/logo3.png')}}" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/Main.css') }}" rel="stylesheet" />
          <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"> 
<!-- datatable -->
<script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


    </head>
  



<style type="text/css">
:root {
  --surface-color: #fff;
  --curve: 20;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: #fef8f8;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;

}

.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
  
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 0.5em;
  padding: 0.5em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;


}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 0.8em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: black;
  background-color: yellow
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}    
hr.style-four {
     border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}

th{
  font-size: 15px;
}
td{
    font-size: 13px;

}

</style>


    <body id="page-top">


                            <div id="loading"></div>

        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"><img src="{{ asset('images/logo3.png') }}" id="logo" width="120px" style="border-radius: 10px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        

\


                           @guest
                             <li class="nav-item"><a class="nav-link" href="{{route('main')}}">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{asset('/login')}}" style="color: white;">{{ __('Sign In') }}</a></li>

<script type="text/javascript">
    window.location = "http://localhost:8000/login";
</script>
                            
                           
                        @else
                   <li class="nav-item"><a class="nav-link" href="{{route('main')}}">Home</a></li>
                         <li class="nav-item"><a class="nav-link" href="{{route('events')}}" > Books </a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{route('promo')}}" > Promotions </a></li>

                         <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{route('PropertyVFavorites')}}">Favorites</a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('MyPurshase')}}">MyPurshase</a></li>

                                                <li class="nav-item"><a class="nav-link" href="{{route('profileMain')}}">Profile</a></li>

                               <li class="nav-item"><a class="nav-link" href="{{asset('/login')}}" style="color: white;"> 
                                  <?php 

                                 $var = preg_split('/[\s,]+/', Auth::user()->name, 3);
                                 echo $var[0]." ".$var[1];

                                 ?></a></li>
                             
                           
                        @endguest


</a> 
                        </li>

<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">

                           @guest
                                {{ __('') }}</a>
                            
                           
                        @else
                      
                                
                          <span style="font-size: 13px">  LogOut </span> 
                             
                           
                        @endguest
</a>
                        </li>




                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->

       
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-15">
                    <span style="font-size: 13px">Home/Favorites</span>
                    <hr>
                        <center><h3>Book to purshase</h3></center>
           


<div >

<div class="card" style="margin-top:20px">
  <h5 class="card-header">Book</h5>
  <div class="card-body">
    <h5 class="card-title">purshase</h5>

<table id="showHotelBookings" class="table table-sm" style="width:100%;">
        <thead>
            <tr>
                <th class="Reference">Reference</th>
                <th class="Title">Title</th>
                <th class='Type'>Type</th>
                <th class="Topics">Topics</th>
                <th class="Year">Year</th>
                <th class="Quantity">Quantity</th>
                <th class="Price">Price</th>
                <th class="Address">Address</th>
                <th class="Status" >Status</th>
                <th class="action" ></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

  </div>
</div>




</div>




<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="input-group mb-3">
  <div class="input-group-text">
    Name on Card
  </div>
  <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Robel .. .. ">
</div>

<div class="input-group mb-3">
<div class="input-group">
  <div class="input-group-text">
    Credit card number
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="1111-2222-3333-4444">
</div>
</div>

<div class="input-group mb-3">
<div class="input-group">
  <div class="input-group-text">
Exp Month
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="september">
</div>
</div>

<div class="input-group mb-3">
<div class="input-group">
  <div class="input-group-text">
CVV  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="352">
</div>
</div>


<div class="input-group mb-3">
<div class="input-group">
  <div class="input-group-text">
Exp Year
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="2018">
</div>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="checkout">CheckOut</button>
      </div>
    </div>
  </div>
</div>

</div>











    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}



$(document).ready( function () {

$('#showHotelBookings').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('MyPurshasedata')}}",
    "columns": [
   {"data" : "Reference"},
    {"data" : "Title"},
    {"data" : "Type"},
    {"data" : "Topics"},
    {"data" : "Year"},
    {"data" : "Quantity"},
     {"data" : "Price"},
     {"data" : "Address"},
    {"data" : "status"},
 {"data": null,
  render: function ( data, type, row ) {

if(data['status'] == 'confirmed'){

   var pdf = data['Doc']; 

   var base_url = '{!! url('/') !!}';
var name1 = '/images/'+data['Doc'];

    return "<a href='"+base_url+name1+"' >Download eBook</a> <button type='button' name='show'  class='btn btn-danger btn-sm check' style='font-size:13px' onclick='CancelHotel(`"+data['Reference']+"`)'>Cancel</button>"
}else{

    return '<button type="button" name="show"  class="btn btn-primary btn-sm check" style="font-size:13px" onclick="PaymentHotel(`'+data['Reference']+'`,`'+data['Email']+'`,`'+data['Name']+'`)">Pay</button> <button type="button" name="show"  class="btn btn-danger btn-sm check" style="font-size:13px" onclick="CancelHotel(`'+data['Reference']+'`)">Cancel</button>';
}


  }}
    ]

  })



});

//////////////////////////////////////////////////////////////////////////////////////////////////////

function CancelHotel(Matric){


    if (confirm('Are you sure you want to cancel this booking : '+Matric+' ?')) {
    $.ajax(
    {
        url: '{{route("DeleteBook")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showHotelBookings').DataTable().ajax.reload();  } }); }

}



function PaymentHotel(Matric,Email,Name){
  
  $('#exampleModalCenter').modal('show');

  $( "#checkout" ).click(function() {
     $('#exampleModalCenter').modal('hide');

    $.ajax(
    {
        url: '{{route("updateBook")}}',
        type: 'get',
        data: {
            "id": Matric,
            "Email": Email,
            "Name" : Name,

        },
        success: function (result){
            alert(result);
            $('#showHotelBookings').DataTable().ajax.reload();  } });

    });
    
}


////////////////////////////////////////////////////////////////////



</script>


                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
     <
        <!-- Contact section-->
       <
        <!-- Footer-->
             <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">"“Learn every day, but especially from the experiences of others. It’s cheaper,"said John C. Bogle, an investor and founder of Vanguard Group.</p>
                <p class="m-0 text-center text-white">Copyright © 2022 IUKL All rights reserved. Powered by Robel</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
<script type="text/javascript">
      $(window).on('load', function () {
    $('#loading').fadeOut();
  }) ;
</script>