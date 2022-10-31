<!DOCTYPE html>
<html ang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Real Estate</title>
        <link rel="icon" type="{{ asset('images/logo3.png')}}" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/Main.css') }}" rel="stylesheet" />
          <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>
          

    </head>
  



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
                    <span style="font-size: 13px;color: green">Home/Property</span>
                        <center><h5>Book</h5></center>
           

<br>




<ul class="cards">







<div class="card" style="margin-top:10px;background-color:#F3F3F3">
  <div class="card-body">


@foreach ($events as $event)


<?php
if(isset($_GET["Ref"])) {
 
 if($_GET["Ref"] == $event->Reference){
 echo "<style>.card{$event->Reference}{background-color:#EEF7CE}</style>";}

}
else{

}
?>






<div class="row">

<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="card-body" style="background-color: #4b4f4e;">
       <CENTER><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">

<?php if(isset($event->image)){ ?>
<img src="{{asset('/storage/images/Events/'.$event->image)}}" class="img-fluid rounded" alt="Responsive image" id="pro" width="350">
<?php }
else{?>
<img src="{{asset('/storage/images/Events/paper.png')}}" class="img-fluid rounded" alt="Responsive image" id="pro" width="350">

<?php    
}
?>
       </a></CENTER></div>
</div>
</div>
</div>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">

        <center><img src="https://cdn-icons-png.flaticon.com/512/1903/1903162.png" width="50px" style="margin-bottom:10px"></center>
        <h5 class="card-title"><a href="#" style="text-decoration: none;margin-bottom:10px"> {{$event->Title}}</a></h5>
        <p class="card-text"><b >Authors : </b> <a href="#" style="text-decoration: none;margin-bottom:10px">{{$event->Author1}}, {{$event->Author2}}, {{$event->Author3}}</a>  

          <a href="#" id="saved"><span style="float:right;font-size: 16px" class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> save</span></a> 

<script>
  $("#saved").click(function(e) {

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
        type: "get",
        url: "{{route('BookSave')}}",
        data: { 
            Ref: "{{$event->Reference}}",
            UserRef: "<?php echo Auth::user()->Reference; ?>", 
        },
        success: function(result) {
            alert(result);
        },
        error: function(result) {
            alert(result);
        }
    });
});

</script>

<hr>
<b>Publisher</b> : <span style="float:right;color: RED"><B>{{$event->Publisher}}</B></span><br>

<b>Type of paper</b> : <span style="float:right">{{$event->Type}}</span><br>

<b>Theme</b> : <span style="float:right">{{$event->themes}}</span><br>

<b>Topics</b> : <span style="float:right">{{$event->Topics}}</span><br>

<b>Pulished Year</b> : <span style="float:right"><b>{{$event->Year}}</b></span>
<hr>
<b>No of Pages</b> : <span style="float:right">{{$event->Pages}}</span><br>
<b>No of Chapter</b> : <span style="float:right">{{$event->Chapter}}</span>

        </p>
<hr>
        <center><a href="#purshase" class="btn btn-danger"><img src="https://iconarchive.com/download/i7909/hopstarter/soft-scraps/Adobe-PDF-Document.ico" width="20">Purshase</a></center>
      </div>
    </div>
  </div>
  <div class="col" >
    <div class="card" style="text-align: justify;text-justify: inter-word;">
      <div class="card-body">
        <h5 class="card-title">Abstract</h5>
        <hr>
        <p class="card-text">{{$event->Abstract}}</p>
        <hr>
<h5 class="card-title">Introction</h5>
<hr>
        <p class="card-text">{{$event->Introduction}}</p>
<center><p>....</p></center>
      </div>
    </div>
  </div>


</div>
  




@endforeach



<div class="col" > 
    <div class="card" id="purshase" style="text-align: justify;text-justify: inter-word;">
      <div class="card-body">
<h5>Purshase informations</h5>
<hr>
 <form method="POST" id="Booking" onsubmit="return Booking(event)">
{{csrf_field()}}

<div class="mb-3">
  <input type="text" class="form-control" name="ref" id="ref" placeholder="" value="{{Auth::user()->Reference}}" readonly></div>

<div class="mb-3">
<label for="name" class="form-label"> Full Name </label><br>
  <input type="text" class="form-control" name="name" id="name" placeholder=""></div>

<div class="mb-3">
  <label for="Email" class="form-label"> Email </label>
  <input type="email" class="form-control" id="Email" name="Email" placeholder="name@example.com">
</div>

<div class="mb-3" >
  <label for="stock" class="form-label"> Quantity </label>
  <input type="Number" class="form-control" id="stock" name="stock" maxlength="{{$event->stock}}" value="1" min="1" value="10000000">
</div>


<div class="mb-3">
  <label for="stock" class="form-label"> Address </label>
  <input type="text" class="form-control" id="Address" name="Address" placeholder="Full Address">
</div>

<div class="mb-3">

<center><button type="submit" class="btn btn-danger" onclick="payment()" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
</svg> Purshase </button></center>
</div>



</form>




</div></div></div>

<br><br>


<br><br><br>








<div class="col" > 


<div>
     <form method="POST" id="Reviews" onsubmit="return Reviewing(event)">
{{csrf_field()}}

    <div class="mb-3">
  <input type="text" class="form-control" name="RefBook" id="RefBook" Value="{{$event->Reference}}">
  </div>

<div class="mb-3">
  <input type="text" class="form-control" name="Reviewsname" id="Reviewsname" Value="{{Auth::user()->name}}">
  </div>

  <div class="mb-3">
  <textarea class="form-control" id="ReviewsMessage" name="ReviewsMessage"></textarea>
  </div>

<button type="submit" class="btn btn-danger" >  Send </button>
 </form>
</div>


<br>




<B>Reviews</B>
<hr>


<div>
    
@foreach ($reviews as $review)



<b>{{$review->user_Reference}}</b> | {{$review->updated_at}} | {{$review->Reviews}}<hr>




@endforeach
</div>


</div>






















</div></div>














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





function mySubmitFunction(e){
    e.preventDefault();


var name = $("#name").val();
var ref = $("#ref").val();
var Email = $("#Email").val();
var Objects = $("#Objects").val();
var Message = $("#Message").val();


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $.ajax(
    {
        url: '{{route("SendFeedbacks")}}',
        type: 'get',
        data: {
            "name": name,
            "ref": ref,
            "Email": Email,
            "Objects": Objects,
            "Message": Message,
        },
        success: function (data){
            alert(data);
            $('#feedback').trigger("reset");

        },
        error: function (data) {
            },

    });

}





function Booking(e){
    e.preventDefault();

var name = $("#name").val();
var Email = $("#Email").val();
var stock = $("#stock").val();
var Address = $("#Address").val()

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $.ajax(
    {
        url: '{{route("Bookpushase")}}',
        type: 'get',
        data: {

            "DocId":'<?php echo $event->Reference; ?>',
            "Title": '<?php echo $event->Title; ?>',
            "Type": '<?php echo $event->Type; ?>',
            "Topics": '<?php echo $event->Topics; ?>',
            "Year": '<?php echo $event->Year; ?>',
            "Price": '<?php echo $event->price; ?>',
            "User":'<?php echo Auth::user()->Reference; ?>',
            "Name": name,
            "Email": Email,
            "stock": stock,
            "Address": Address,

        },
        success: function (data){
            alert(data);

        },
        error: function (data) {
            },

    });

}






function Reviewing(e){
    e.preventDefault();

var Reviewsname = $("#Reviewsname").val();
var RefBook = $("#RefBook").val();
var ReviewsMessage = $("#ReviewsMessage").val();

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $.ajax(
    {
        url: '{{route("Bookreviews")}}',
        type: 'get',
        data: {

            "Reviewsname":Reviewsname,
            "RefBook": RefBook,
            "ReviewsMessage": ReviewsMessage,
        

        },
        success: function (data){
            alert(data);

        },
        error: function (data) {
            },

    });

}



</script>

</ul>


                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
     
        <!-- Contact section-->
       
        <!-- Footer-->
      <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">"“Learn every day, but especially from the experiences of others. It’s cheaper,"said John C. Bogle, an investor and founder of Vanguard Group.</p>
                <p class="m-0 text-center text-white">Copyright © 2022 IUKL All rights reserved. Powered by Robel</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ URL::asset('js/Main.css') }}"></script>
    </body>
</html>
<script type="text/javascript">
      $(window).on('load', function () {
    $('#loading').fadeOut();
  }) ;
</script>