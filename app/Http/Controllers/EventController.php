<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Input;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Events;
use App\Favorites;
use App\Feedbacks;
use App\books;
use App\reviews;
use App\bookpurshased;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserDts;
use App\promotions;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Redirect, Response;

class EventController extends Controller
{
    

///////////////////////////////////////////////////////////////////////////////////////////////////
protected function Bookreviews(Request $request){


$validator = Validator::make($request->all(), [ 
'Reviewsname' => ['required'],
'RefBook' =>['required'],
'ReviewsMessage' =>['required'],

]);

if ($validator->fails()){
return 'please fill the form correctly';
        }


 reviews::create([
        
            "user_Reference"  =>       $request->input('Reviewsname'),
            "Reviews"  =>       $request->input('ReviewsMessage'),
            "Books_Reference"  =>        $request->input('RefBook'),

        ]);

if(reviews::where('user_Reference', '=', $request->input('Reviewsname'))){
return 'Reviews saved';}
else{
    return 'please fill the form correctly for reviews';
}

}

//////////////////////////////////////////////////////////////////////////////////////////////////


protected function Bookpushase(Request $request){

$random = rand();

  $Matric = Auth::user()->Reference;


$validator = Validator::make($request->all(), [ 
'Name' => ['required'],
'Email' =>['required'],
'stock' =>['required'],
'Address' =>['required'],

]);

if ($validator->fails()){
return 'please fill the form correctly';
        }


 bookpurshased::create([
            "Reference"=>     $random ,
            "DocId"  =>       $request->input('DocId'),
            "Title"  =>       $request->input('Title'),
            "Type"  =>        $request->input('Type'),
            "Topics"=>        $request->input('Topics'),
            "Year"  =>        $request->input('Year'),
            "Price" =>        $request->input('Price')*$request->input('stock'),
            "Name" =>         $request->input('Name'),
            "Email" =>        $request->input('Email'),
            "Quantity" =>     $request->input('stock'),
             "Address" =>     $request->input('Address'),
             "Doc" =>     $request->input('DocId').".pdf",
            "User" =>  $Matric,

        ]);



$mail = new PHPMailer(true);
//Enable SMTP debugging.
$mail->SMTPDebug = SMTP::DEBUG_OFF;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "afmedhoumad8@gmail.com";                 
$mail->Password = "gwabicllrqhxddsh";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "afmedhoumad8@gmail.com";
$mail->FromName = "Booking.com";

$mail->addAddress($request->input('Email'), $request->input('name'));

$mail->isHTML(true);

$mail->Subject = "EBOOK STORE You have made a new booking for a book(pending payment)";
$mail->Body = "

Dear ".$request->input('Name')."<br><br><br>
<B>Wowww YOU MADE IT ! : </B> You have made a new booking for the book : <b>".$request->input('Title')."</b> from <B>". $request->input('Year')."</b>";
$mail->AltBody = "Booking.com";

try {
    $mail->send();
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}



if(bookpurshased::where('Reference', '=', $random)){
return 'Booking In progress, please now pay for purshasing';}
else{
    return 'please fill the form correctly for Booking';
}

}

///////////////////////////////////////////////////////////////////////////////////////////////////



protected function cancelHotel(Request $request){

$refr =  $request->input('id');

$query = DB::table('bookpurshaseds')
                            ->where('Reference', $refr)
                            ->limit(1)
                            ->delete();
 if ($query > 0) {
     echo "Booking hotel successfully canceled";
 } else {
       echo "could not be deleted, please try again!";

 }

}


///////////////////////////////////////////////////////////////////////////////////////////////////



protected function updateBookingHotel(Request $request){

$refr =  $request->input('id');


$updated = bookpurshased::where('Reference', $refr)
       ->update([
           'status' => 'confirmed',
                   ]);

if($updated){


$mail = new PHPMailer(true);
//Enable SMTP debugging.
$mail->SMTPDebug = SMTP::DEBUG_OFF;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "afmedhoumad8@gmail.com";                 
$mail->Password = "gwabicllrqhxddsh";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "afmedhoumad8@gmail.com";
$mail->FromName = "Booking.com";

$mail->addAddress($request->input('Email'), $request->input('Name'));

$mail->isHTML(true);

$mail->Subject = "Booking.com You have confirmed your purshase ";
$mail->Body = "

Dear ".$request->input('name')."<br><br><br>
<B>Wowww YOU MADE IT ! :  Reference Number: <B>".$refr."</B> : <B>Confirmed</b><br><hr>

 <br><br> EBOOK store team";
$mail->AltBody = "EBOOK store";

try {
    $mail->send();
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}




    echo "you have made the payment and confirmed purshased the book";
}
else{

        echo "you have not made the payment";

}

}




///////////////////////////////////////////////////////////////////////////////////////////////////


   protected function Mybookings(Request $request){

  $Matric = Auth::user()->Reference;


$Users = DB::table('bookpurshaseds')
            ->select('*')
            ->where('User', $Matric)
            ->get();
return datatables($Users)->make(true);

}


/////////////////////////////////////////////////////////////////////////
   protected function MyPromotions(Request $request){

  $Matric = Auth::user()->Reference;


$Users = DB::table('promotions')
            ->select('*')
            ->get();
return datatables($Users)->make(true);

}


//////////////////////////////////////////////////////////////////////////////////////////////////////


public function GetEventsCommitte(){

  $Num = Auth::user()->Reference;

$Users = DB::table('events')
            ->select('image','Reference','E_title','Type','Categorie','price','bedroom','bathroom','Street_Address','City','State','sqft','Furnishing','build_year','about','postor','updated_at')
            
            ->get();

return datatables($Users)->make(true);


}
////////////////////////////////////////////////////////////////////////////



public function GetFeedbacks(){

  $Num = Auth::user()->Reference;

$Users = DB::table('feedbacks')
            ->select('Reference','Type','Sender','Email','Message','updated_at')
            
            ->get();

return datatables($Users)->make(true);


}
///////////////////////////////////////////////////////////////////////////////////////////////


protected function SendFeedback(Request $request){

$random = rand();

$validator = Validator::make($request->all(), [
'name' => ['required'],
'Email' =>['required'],
'Objects' =>['required'],
'Message' =>['required'],
]);

if ($validator->fails()){
return 'please fill the form correctly';
        }


 Feedbacks::create([
            'Reference' => $random,
            'Sender' => $request->input('name'),
            'Email' =>$request->input('Email'),
            'User_Ref' =>$request->input('ref'),
            'Type' => $request->input('Objects'),
            'Message' => $request->input('Message'),
        ]);



if(Feedbacks::where('Reference', '=', $random)){
return 'Request submitted successfully, we will get back to you as soon as possible';}
else{
    return 'please fill the form correctly';
}

}


////////////////////////////////////////////////////////////////////////////////////////////////



public function ReportE(){

$Users = DB::table('events')
            ->select('image','Reference','E_title','about','date','duration','Location','created_at')
            ->get();

$count = DB::table('events')->count();


return view('ReportE',['users'=>$Users,'member'=>$count]);
}

////////////////////////////////////////////////////////////////////////////////////


public function favorites(Request $request){


$Users = DB::table('favorites')
            ->select('BookRef','User_Ref')
            ->where('BookRef',$request->input("Ref"))
            ->where('User_Ref',$request->input('UserRef'))
            ->count() > 0;


if($Users > 0 ){


$delete = DB::table('favorites')
->where('BookRef',$request->input("Ref"))
->where('User_Ref',$request->input('UserRef'))
->delete();

echo "Unsaved";
}
else{
Favorites::create([   
            'BookRef' => $request->input('Ref'),
            'User_Ref' => $request->input('UserRef'),
        ]);
echo "saved successfully";

}


}
////////////////////////////////////////////////////////////////////////////////////



public function favoritesViews(){


$Users = DB::table('books')
            ->select('*')
            ->join('favorites', 'favorites.BookRef', '=', 'books.Reference')
            ->where('User_Ref',Auth::user()->Reference)
            ->get();


return view('Favorites',['events'=>$Users]);



}


/////////////////////////////////////////////////////////////////////////////////////

public function MainEvents(Request $request){





$c = "";

if(count($_GET)) {


if ($request->has('publishers') && $request->filled('publishers')) {
        $c .= " AND Publisher = '".$request->query('publishers')."' ";
      }

if ($request->has('Type') && $request->filled('Type')) {
        $c .= " AND Type = '".trim($request->query('Type'))."' ";
}


if ($request->has('title') && $request->filled('title')) {
        $c .= " AND Title LIKE  '%".trim($request->query('title'))."%' ";
}










if ($request->has('themes') && $request->filled('themes')) {
        $c .= " AND themes = '".trim($request->query('themes'))."' ";
}

if ($request->has('year') && $request->filled('year')) {
        $c .= " AND Year = '".trim($request->query('year'))."' ";
}

if ($request->has('core') && $request->filled('core')) {
        $c .= " AND core = '".trim($request->query('core'))."' ";
}

if ($request->has('topics') && $request->filled('topics')) {
        $c .= " AND Topics = '".trim($request->query('topics'))."' ";
}




if ($request->has('MAprice') && $request->filled('MAprice')) {

if($request->has('MIprice') && $request->filled('MIprice')){
$c .= " AND price BETWEEN ".$request->query('MIprice')." AND ".$request->query('MAprice')."";}

else{ $c .= " AND price <= ".$request->query('MAprice')." ";}
}


if($request->has('MIprice') && $request->filled('MIprice')){
$c .= " AND price >= ".$request->query('MIprice')." ";}



if ($request->has('authors') && $request->filled('authors')) {
        $c .= " AND Author1 LIKE  '%".trim($request->query('authors'))."%' ";
        $c .= " OR Author2 LIKE  '%".trim($request->query('authors'))."%' ";
        $c .= " OR Author3 LIKE  '%".trim($request->query('authors'))."%' ";

}





$events = DB::select("select * from books where '1' = '1' ".$c);



return view('Main_Events',['events' => $events]);}




else{

$events = DB::table('books')
            ->select('id', 'Reference', 'image', 'Title', 'Author1', 'Author2', 'Author3', 'Publisher', 'Type', 'themes', 'Topics', 'price','stock','Year', 'Pages', 'Chapter', 'core', 'Abstract','Introduction', 'created_at', 'updated_at')
            ->get();

return view('Main_Events',['events'=>$events]);}

}




////////////////////////////////////////////////////////////////////////////////////////////////////







public function property(Request $request){

$property = $request->query('id');


$P = DB::table('books')
            ->select('id', 'Reference', 'image', 'Title', 'Author1', 'Author2', 'Author3', 'Publisher', 'Type', 'themes', 'Topics', 'price', 'Year', 'Pages', 'Chapter', 'core','stock','Abstract','Introduction', 'created_at', 'updated_at')
            ->where('Reference',$property)
            ->get();


$R = DB::table('reviews')
            ->select('user_Reference', 'Reviews', 'Books_Reference', 'updated_at')
            ->where('Books_Reference',$property)
            ->get();


return view('Events_View',['events'=>$P,'reviews'=>$R]);
}

/////////////////////////////////////////////////////////////////////////////////////////////////////



public function Books(Request $request){

$property = $request->query('id');


$P = DB::table('books')
            ->select('id', 'Reference', 'image', 'Title', 'Author1', 'Author2', 'Author3', 'Publisher', 'Type', 'themes', 'Topics', 'price', 'Year', 'Pages', 'Chapter', 'core','stock','Abstract','Introduction', 'created_at', 'updated_at')
            ->get();


return datatables($P)->make(true);
}







/////////////////////////////////////////////////////////////////////////////////////////////////////


protected function create(Request $request){
$ref = $request->input('Ref');

  $Matric = Auth::user()->Matric;



$validator = Validator::make($request->all(), [
'Title' =>['required'],
'Abstract' =>['required'],
'Introduction' =>['required'],
'Authors' =>['required'],
'type' =>['required'],
'publishers' =>['required'],
'themes' =>['required'],
'topics' =>['required'],
'price' =>['required'],
'yearP' =>['required'],
'page' =>['required'],
'Chapter' =>['required'],
'core' =>['required'],


]);

if ($validator->fails()){
return redirect()->route('EventsForm')->withErrors($validator->errors());   
        }



//image upload
if($request->hasFile('image')){
  
$extention = $request->file('image')->extension();
$request->image->storeAs('/images/Events',$ref.'.'.$extention,'public');
$imageName = $ref.'.'.$extention;
}else{
	$imageName = '';
}

//upload data in database

books::create([

            'Reference' => $ref,
            'Title' => $request->input('Title'),
            'Abstract' =>$request->input('Abstract'),
            'Introduction' => $request->input('Introduction'),
            'Author1' => $request->input('Authors'),
            'Publisher' => $request->input('publishers'),
            'themes' => $request->input('themes'),
            'Topics' => $request->input('topics'),
            'price' => $request->input('price'),
            'Year' => $request->input('yearP'),
            'Pages' => $request->input('page'),
            'Chapter' => $request->input('Chapter'),
            'core' => $request->input('core'),
            'Type'  => $request->input('type'),

        ]);




return redirect()->route('EventsForm', ['msg' => "success"]);

}
///////////////////////////////////////////////////////////////////////////////////////////////////////




protected function createCom(Request $request){


$ref = $request->input('Ref');




$validator = Validator::make($request->all(), [
'image' => ['required'],
'Title' =>['required','regex:/^[A-Za-z0-9 ]/', 'max:500'],
'Categorie' =>['required'],
'types' =>['required'],
'Bedroom' =>['required'],
'Bathroom' =>['required'],
'Furninshing' =>['required'],
'Sqft' =>['required'],
'State' =>['required'],
'City' =>['required','regex:/^[A-Za-z0-9 ]/', 'max:500'],
'Price' =>['required'],

]);

if ($validator->fails()){
return redirect()->route('EventsFormCom')->withErrors($validator->errors());   
        }



//image upload
if($request->hasFile('image')){
  
$extention = $request->file('image')->extension();
$request->image->storeAs('/images/Events',$ref.'.'.$extention,'public');
$imageName = $ref.'.'.$extention;
}else{
  $imageName = '';
}

//upload data in database
  $Matric = Auth::user()->Reference;

events::create([
          'Type' => $request->input('types'),
           'Categorie'=> $request->input('Categorie'),
           'Reference' => $ref,
           'E_title' => $request->input('Title'),
           'price' => $request->input('Price'),
           'bedroom' => $request->input('Bedroom'),
           'bathroom' => $request->input('Bathroom'),
           'Street_Address' => $request->input('Street_Address'),
           'City' => $request->input('City'),
           'State' => $request->input('State'),
           'sqft' => $request->input('Sqft'),
           'Furnishing' => $request->input('Furninshing'),
           'build_year' => $request->input('build_year'),
           'about' => $request->input('About'),
           'postor' => $Matric,
           'image' =>$imageName,
        
        ]);


return redirect()->route('EventsFormCom', ['msg' => "success"]);

}



//////////////////////////////////////////////////////////////////////////////////////////////////////




public function Select($ref) {
      $users = DB::select('select * from books where Reference = ?',[$ref]);

if($users){

      return view('Events.UpdateUser',['users'=>$users]);}
      else{
        return view('Events.Userconsultation');
      }
   }

////////////////////////////////////////////////////////////////////////////////////////////////////


protected function Update(Request $request){
$ref = $request->input('Ref');


$validator = Validator::make($request->all(), [
'Title' =>['required'],
'Abstract' =>['required'],
'Introduction' =>['required'],
'Authors' =>['required'],
'type' =>['required'],
'publishers' =>['required'],
'themes' =>['required'],
'topics' =>['required'],
'price' =>['required'],
'yearP' =>['required'],
'page' =>['required'],
'Chapter' =>['required'],
'core' =>['required'],


]);



if ($validator->fails()){
return Redirect('/Events/Update_Events/'.$ref)->withErrors($validator->errors());   
        }



if($request->hasFile('image')){
  
$extention = $request->file('image')->extension();
$request->image->storeAs('/images/Events',$ref.'.'.$extention,'public');
$imageName = $ref.'.'.$extention;


books::where('Reference', $ref)
       ->update([
             'Reference' => $ref,
            'Title' => $request->input('Title'),
            'Abstract' =>$request->input('Abstract'),
            'Introduction' => $request->input('Introduction'),
            'Author1' => $request->input('Authors'),
            'Publisher' => $request->input('publishers'),
            'themes' => $request->input('themes'),
            'Topics' => $request->input('topics'),
            'price' => $request->input('price'),
            'Year' => $request->input('yearP'),
            'Pages' => $request->input('page'),
            'Chapter' => $request->input('Chapter'),
            'core' => $request->input('core'),
            'Type'=> $request->input('type'),
        ]);


}else{

	
	books::where('Reference', $ref)
       ->update([
      'Reference' => $ref,
            'Reference' => $ref,
            'Title' => $request->input('Title'),
            'Abstract' =>$request->input('Abstract'),
            'Introduction' => $request->input('Introduction'),
            'Author1' => $request->input('Authors'),
            'Publisher' => $request->input('publishers'),
            'themes' => $request->input('themes'),
            'Topics' => $request->input('topics'),
            'price' => $request->input('price'),
            'Year' => $request->input('yearP'),
            'Pages' => $request->input('page'),
            'Chapter' => $request->input('Chapter'),
            'core' => $request->input('core'),
            'Type'=> $request->input('type'),
        ]);


}




return Redirect('/Events/Update_Events/'.$ref.'?rslt=success');




}

//////////////////////////////////////////////////////////////////










public function SelectCom($ref) {

      $users = DB::table('events')
            ->select('image','Reference','E_title','Type','Categorie','price','bedroom','bathroom','Street_Address','City','State','sqft','Furnishing','build_year','postor','about','updated_at')
            ->where('Reference',$ref)
            ->get();

if($users){

      return view('Committee.UpdateUser',['users'=>$users]);}

      else{
        return view('Committee.Userconsultation');
      }
   }









/////////////////////////////////////////////////////////////////





protected function Delete(Request $request){

$refr =  $request->input('id');

$query = DB::table('books')
                            ->where('Reference', $refr)
                            ->limit(1)
                            ->delete();


 if ($query > 0) {
     echo "successfully deleted";
 } else {
       echo "could not be deleted, please try again!";

 }

}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







protected function Promotion(Request $request){
$ref = $request->input('Ref');





$validator = Validator::make($request->all(), [
'Name' =>['required'],
'Promotion' =>['required'],


]);



if ($validator->fails()){
return redirect()->route('promotion')->withErrors($validator->errors());   
        }


promotions::create([

            'Reference' => $ref,
            'Name' => $request->input('Name'),
            'Promotion' =>$request->input('Promotion'),
       
        ]);


$math1 = 150 * ($request->input('Promotion')/100);
$math = 150 - $math1 ;


$updated =  DB::update('update books set price = ? ', [$math]);


return redirect()->route('promotion', ['msg' => "success"]);

}















}
