<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online Book Store</title>
        <link rel="icon" type="{{ asset('images/logo3.png') }}" href="assets/favicon.ico" />
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

        <header class="text-white">

 <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{ asset('images/IUKL Video.mp4') }}" type="video/mp4">
  </video>



            <div class="container px-4 text-center" style="margin-top: 7%">



                <h1 class="fw-bolder"><span style="text-shadow: 0 0 10px black;color: yellow;-webkit-text-stroke: 2px black;font-size: 70px">BOOK ECOMMERCE SYSTEM</span></h1>
                <p style="color: white;text-shadow: 0 0 10px black;font-weight: bold;">Find out about our diversity of Books, journals, Articles and papers availabale</p>


 @guest
                                <a class="btn btn-lg btn-danger" style="border-radius: 100px;font-size: 15px" href="{{asset('/login')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> Become a member</a>
                            
                           
                        @else
                      
                            
<a class="btn btn-lg btn-danger" style="border-radius: 100px;font-size: 15px" href="{{route('events')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> Let's Search</a>
                             
                           
                        @endguest






            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-10">
                        <h2>About Us</h2>
                        <p class="lead"><center> <img src="{{ asset('images/logo3.png') }}" style="width: 40%;border-radius: 8px;"> <Br><B> " Bookstores are lonely forts, spilling light onto the sidewalk.. " </B></center></p>
                        <p class="lead" style="font-size: 17px;text-align: justify;text-justify: inter-word">

                           With the online bookstore system, consumers do not need to blindly go to various places to find their own books, but
only in a computer connected to the Internet log on online bookstore system[4], in the search box, type you want to find
Of the book information retrieval, you can efficiently know whether the site has its own books, if you can online direct
purchase, if not, you can change the home bookstore to continue to search or provide advice to the seller in order to
supply, This greatly facilitates every consumer, saving time and labor.
The online bookstore system can not only reduce costs, save time, space, to bring convenience to everyone, but also
to promote the development of the logistics industry, serve three purposes, mutual benefit. More importantly, in today's
world, the increasingly close ties between countries, more frequent exchanges, the economy tends to globalization,
which promote the future development of online bookstore system has some practical significance.</p>
                        <ul>
                            <li> <b>Our Motto : </b> For easier Book Accesssibility</li>

                            <li><b>Our Mission :</b>to sell books, preferably lots of them. You must never forget this goal, though it can sometimes be overlooked by the daily demands of the business in terms of managing stock, supervising staff and keeping records.</li>


                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Services we offer</h2>
                        <p class="lead">

<ul >
                            <li>-><b style="font-size: 20px">● </b> To allow people can check rental or buy property </li>

                            <li>-><b style="font-size: 20px">● </b> Enable user to find real estate agent and Gives real estate agent to post properties</li>

                            <li>-><b style="font-size: 20px">● </b> The Admin should maintain property. Admin identify property type as it is residential or commercial property</li>

 
  
   


                        </ul>

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contact us</h2>
                        <p class="lead">


<div class="row">
  <div class="col-sm-6">
    <div class="card" style="background-color:#F9F9F9">
      <div class="card-body">
        <p class="card-text">
<b> - Address</b><br>
Infrastructure university Kuala Lumpur De Centrum City, Jalan Ikram-Uniten, 43000 Kajang, Selangor</p>

<p><b> - Phone</b><br>
(+60) 11-2630 6299</p>

<p><B> - Email</B><br>
enquiries@iukl.edu.my (Malaysian)<Br>
 imo@iukl.edu.my  (International)

        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body">
      <center> <h5 class="card-title">Feedback Request</h5></center>
        <p class="card-text">

 <form method="POST" id="feedback" onsubmit="return mySubmitFunction(event)">
{{csrf_field()}}

<div class="mb-3">
<label for="name" class="form-label"> To : </label><br>
  <input type="text" class="form-control" name="ref" id="ref" placeholder="" value="admin" readonly></div>

<div class="mb-3">
<label for="name" class="form-label">From : Full Name </label><br>
  <input type="text" class="form-control" name="name" id="name" placeholder=""></div>

<div class="mb-3">
  <label for="Email" class="form-label"> Email </label>
  <input type="email" class="form-control" id="Email" name="Email" placeholder="name@example.com">
</div>

<div class="mb-3">
<label for="Objects" class="form-label"> Object </label>
<select class="form-control" id="Objects" name="Objects">
  <option value="Agent Request" selected>Feedback Request</option>
  <option value="Enquries">Enquries</option>
</select>
</div>

<div class="mb-3">
  <label for="Message" class="form-label">Message</label>
  <textarea class="form-control" id="Message" name="Message" rows="3"></textarea>
</div>

<div class="mb-3">
<button type="submit" class="btn btn-primary" >Request</button>
</div>

</form>

        </p>
      </div>
    </div>
  </div>
</div>

                        </p>
                    </div>
                </div>
            </div>
        </section>
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

</script>