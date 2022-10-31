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
                    <span style="font-size: 13px">Home/Search</span>
                        <center><h5>Browser available books</h5></center>
          



<div class="card" style="margin-top:10px;background-color: #132E85;">
  <div class="card-body">



<div class="input-group">
 
<img src="{{ asset('images/logo3.png') }}" width="50" style="border-radius:10px">

 <div class="input-group-prepend" style="border:1px solid #989898;margin-left: 10px;">
  </div>
   <input type="text" class="form-control" placeholder="Title Keyword" id="title" aria-label="Example text with button addon" aria-describedby="button-addon1">

 <div class="input-group-prepend" style="border:1px solid #989898;">
  </div>
 <input type="text" class="form-control" placeholder="Authors name" id="author" aria-label="Example text with button addon" aria-describedby="button-addon1" >


  <div class="input-group-prepend" style="border:1px solid #989898;">
  </div>
 <select class="form-select" id="type">
    <option value="<?php if(isset($_GET["Type"])) {echo $_GET["Type"];}else{} ?>" selected>Type : <?php if(isset($_GET["Type"])) {echo $_GET["Type"];}else{} ?></option>
    <option value="Conference" >Conference</option>
    <option value="Books">Books</option>
    <option value="Journals and Magazines">Journals & Magazines</option>
    <option value="Articles">Articles</option>
    <option value="Papers">Papers</option>
  </select>
  
 <div class="input-group-prepend" style="border:1px solid #989898;">
  </div>
 <select class="form-select" id="publishers">
    <option value="<?php if(isset($_GET["publishers"])) {echo $_GET["publishers"];}else{} ?>" selected>Publisher : <?php if(isset($_GET["publishers"])) {echo $_GET["publishers"];}else{} ?></option>
    <option value="IEEE" >IEEE</option>
    <option value="DirectScience">DirectScience</option>

  </select>

<button type="button" class="btn btn-danger" onclick="changeurl()" style="margin-left:10px">Search <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>


<!-- Button trigger modal -->


<button type="button" class="btn btn-light" onclick="window.location.href = 'http://localhost:8000/Events'" style="margin-left: 10px;border:1px solid black">Clear</button>


</div></div>










<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #132e85;">
      <div class="modal-header" style="background-color: white;">
        <h5 class="modal-title" id="exampleModalLabel"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
  <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
</svg> Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        



<form>


<div class="input-group mb-3">
 <select class="form-select" id="themes">
    <option value="<?php if(isset($_GET["themes"])) {echo $_GET["themes"];}else{} ?>" selected>Theme : <?php if(isset($_GET["themes"])) {echo $_GET["themes"];}else{} ?></option>
    <option value="Computing and Processing" >Computing and Processing</option>
    <option value="Communication">Communication</option>
    <option value="Logistic and Transport">Logistic and Transport</option>
    <option value="Business and Economics">Business and Economics</option>
    <option value="Engineering">Engineering</option>
    <option value="Medical">Medical</option>
  </select>
</div>

<div class="input-group mb-3">
 <select class="form-select" id="topics">
  <option value="<?php if(isset($_GET["topics"])) {echo $_GET["topics"];}else{} ?>" selected>Topics : <?php if(isset($_GET["topics"])) {echo $_GET["topics"];}else{} ?></option>
    <option value="Software Engineering">Software Engineering</option>
    <option value="Physics">Physics</option>
    <option value="Medical Ontology">Medical Ontology</option>
    <option value="Artificial intelligence">Artificial intelligence</option>
    <option value="Theory of computation">Theory of computation</option>
    <option value="Computer networks">Computer networks</option>
    <option value="Computer security in cryptography">Computer security in cryptography</option>
    <option value="Accounting">Accounting</option>
    <option value="Marketing">Marketing</option>
    <option value="Finance">Finance</option>
    <option value="Human resources">Human resources</option>
    <option value="Economics">Economics</option>
    <option value="Sociology">Sociology</option>
    <option value="Tourism Studies">Tourism Studies</option>
    <option value="International Relations">International Relations</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Biology">Biology</option>
    <option value="Physics">Physics</option>
    <option value="Physics">Physics</option>
  </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">RM</span><input type="Number" class="form-control" id="MIprice" placeholder="Min price" aria-label="Recipient's username" aria-describedby="basic-addon2" size="10" > <span class="input-group-text">RM</span><input type="Number" id="MAprice" class="form-control" placeholder="Max price" aria-label="Recipient's username" aria-describedby="basic-addon2" size="10">
  
</div>


<div class="input-group mb-3">
 <select class="form-select" id="yearP">
    <option value="<?php if(isset($_GET["year"])) {echo $_GET["year"];}else{} ?>">Year : <?php if(isset($_GET["year"])) {echo $_GET["year"];}else{} ?></option>
    <option value="2022">2022</option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
   

  </select>
</div>
<div class="input-group mb-3">
 <select class="form-select" id="core">
  <option value="<?php if(isset($_GET["core"])) {echo $_GET["core"];}else{} ?>">Core <?php if(isset($_GET["core"])) {echo $_GET["core"];}else{} ?></option>
  <option value="Hardcore">Hardcore</option>
  <option value="Papercore">Papercore</option>

  </select>
</div>

</form>



      </div>
      <div class="modal-footer" style="background-color: white;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="changeurl()">Apply</button>
      </div>
    </div>
  </div>
</div>



</div>




<hr class="style-four">

<div class="card" style="background-color:#F3F3F3" >
  <div class="card-body">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:1px solid #989898;border-radius: 3px;float: right;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
  <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
</svg> Filter
</button>


<br>
<div class="container" style="margin-top:30px">

<?php $i = 0; ?>
@foreach ($events as $event)

<?php

$i = $i+1;


if(isset($_GET["Ref"])) {
 
 if($_GET["Ref"] == $event->Reference){
 echo "<style>.card{$event->Reference}{background-color:#EEF7CE}</style>";} }else{}?>


   






<div class="card" style="margin-top:10px">
  <div class="card-body">
    <p><a href="{{route('BooksV',['id'=>$event->Reference])}}" style="text-decoration: none;margin-bottom:10px"> <h6><img src="https://cdn-icons-png.flaticon.com/512/806/806177.png" width="16px"> <b>{{$event->Title}}</b></h6></a></p>
    <p style=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> <b>Authors : </b> {{$event->Author1}}, {{$event->Author2}}, {{$event->Author3}} <b style="float:right;color:Red">RM {{$event->price}}</b><br>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> <b>Year: </b> {{$event->Year}} | <B>{{$event->Type}}</B> | {{$event->core}} | Publisher: {{$event->Publisher}}</p>

<p> <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" style="background-color:white;color: black;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$event->Reference}}" aria-expanded="true" aria-controls="collapseOne">
        <B>Abstract</B>
      </button>
    </h2>
    <div id="collapseOne{{$event->Reference}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="text-align: justify;text-justify: inter-word;">
      {{$event->Abstract}}
      </div>
    </div>
  </div>
</div>

</p>
  </div>
</div>



     

@endforeach


<br>
<?php echo $i." of books found"; ?> 
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


var citiesByState = {
Johor: ["Bhubaneswar","Puri","Cuttack"],
Kuala_Lumpur: ["KL","Pune","Nagpur"],
Selangor: ["Kajang","Sepang"]
}

function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = '<option value="">Choose a City</option>'+citiesOptions;
}
}



function changeurl(){

var count = "";


var author = document.getElementById("author");
var Avalue = author.value;

var type = document.getElementById("type");
var Tvalue = type.value;

var publishers = document.getElementById("publishers");
var Pvalue = publishers.value;

var title = document.getElementById("title");
var Tivalue = title.value;



var themes = document.getElementById("themes");
var Tevalue = themes.value;

var yearP = document.getElementById("yearP");
var Yvalue = yearP.value;

var core = document.getElementById("core");
var Covalue = core.value;

var topics = document.getElementById("topics");
var Tovalue = topics.value;


var ma = document.getElementById("MAprice");
var MAvalue = ma.value;

var mi = document.getElementById("MIprice");
var MIvalue = mi.value;


if(Avalue != ""){
count += "&authors="+Avalue;
}

if(Tvalue != ""){
count += "&Type="+Tvalue;
}


if(Pvalue != ""){
count += "&publishers="+Pvalue;
}


if(Tivalue != ""){
count += "&title="+Tivalue;
}






if(Tevalue != ""){
count += "&themes="+Tevalue;
}


if(Yvalue != ""){
count += "&year="+Yvalue;
}


if(Covalue != ""){
count += "&core="+Covalue;
}


if(Tovalue != ""){
count += "&topics="+Tovalue;
}




if(MAvalue != ""){
  if(MIvalue > MAvalue){
    count += "&MAprice="+MAvalue;
  }
  else{
count += "&MAprice="+MAvalue;}
}




if(MIvalue != ""){

  if(MAvalue != ""){
  if(MIvalue > MAvalue){
    count += "&MIprice="+MAvalue;
  }
  else{
count += "&MIprice="+MIvalue;}}
else{
count += "&MIprice="+MIvalue;
}}







 window.location.href = 'http://localhost:8000/Events?'+count;

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