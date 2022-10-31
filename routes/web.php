<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('Main');
})->name('main');



Route::get('/Events','EventController@MainEvents')->name('events');




// Login...
Route::get('/login', function () {
    return view('auth.login');
})->name('login');



Route::get('/register', function () {
    return view('auth.register');
});


Auth::routes();

//No Redirect after LogOut...
Route::group(['middleware' => ['preventBackHistory','auth']], function(){




//Committee
Route::get('/Committee', function(){

	$data = Auth::user();

	    return view('com');
})->name('comt');


//Index...
Route::get('/index', 'HomeController@index')->name('Index');

////////////////





Route::get('/Report/Member', 'UsersController@ReportM')->name('ReportM');
Route::get('/Report/Events', 'EventController@ReportE')->name('ReportE');



///////////////////////////////////////////////////////////////////////////////////////////////

//Profile picture
Route::get('/Profile_Picture','ProfileController@ProfilePicture')->name('Profile_Picture');

//User Consultation...
Route::get('/UserConsultation','UsersController@showUsers')->name('UserConsultation');

//Show all User
Route::get('/UserConsultation/User/show','UsersController@GetUsers')->name('Allusers');

//Add New User
Route::get('/UserConsultation/AddUser',function () {return view('UserConsultation.AddUser');})->name('AddUser');
Route::post('/UserConsultation/AddUser/Upload','UsersController@create')->name('AddUserUpload');

Route::get('/UserConsultation/AddUser/delete','UsersController@Delete')->name('DeleteUser');

Route::get('/UserConsultation/Update/{yo}','UsersController@Select')->name('UpdateUser');
Route::post('/UserConsultation/Update/Updated','UsersController@Update')->name('UpdateUserS1');



//Profile
Route::get('/Profile','ProfileController@index')->name('profile');
Route::post('/Profile/Update/Updated','ProfileController@Update')->name('UpdateProfileS1');




Route::post('/Profile/upload','ProfileController@UploadImage')->name('UpdateprofileImage');
//upload image
Route::post('/Profile_Picture','ProfileController@UploadImage')->name('uploadimage');



/////////////////////////////////////////////////////////////////////////////////////////////////

//Events management
Route::get('/Event',function () {
    return view('Events.UserConsultation');
})->name('product');

Route::get('/Events/CreateEvents',function () {return view('Events.AddUser');})->name('EventsForm');
Route::post('/Events/CreateEvents/create','EventController@create')->name('CreateEvent');
Route::get('/UserConsultation/Events/show','EventController@GetEvents')->name('AllEvents');

Route::get('/Events/Update_Events/{ref}','EventController@Select')->name('UpdateEvents');
Route::post('/Events/Update_Events/update','EventController@Update')->name('UpdateEvents1');

////////////////////////////////////////////////////////////////////////////
Route::get('/Events/delete','EventController@Delete')->name('DeleteEvents');



//////////////////////////////////////////////////////////////////////COMMITTEE


Route::get('/Committee/Events',function () {return view('Committee.UserConsultation');})->name('EventsCom');
Route::post('/Committee/Events/CreateEvents/creating','EventController@createCom')->name('CreateEventCom');
Route::get('/Committee/property/view/Feedbacks','EventController@SendFeedback')->name('SendFeedbacks');


Route::get('/Committee/Events/CreateEvents',function () {return view('Committee.AddUser');})->name('EventsFormCom');
Route::get('/Committee/Events/show','EventController@GetEventsCommitte')->name('AllEventsCOM');



Route::get('/Committee/Feedbacks',function () {return view('Committee.Feedbacks');})->name('FeedbacksCom');
Route::get('/Committee/Feedbacks/show','EventController@GetFeedbacks')->name('AllFeedbacks');





//////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/Main/profile','ProfileController@index')->name('profileMain');
Route::get('/Main/profile/Update','ProfileController@UpdateProfile')->name('profileUpdate');


//////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/Events/{name}','EventController@MainEvents')->name('EventSelect');


Route::get('/Events/property/View','EventController@property')->name('PropertyV');

Route::get('/Events/property/View/Favorites','EventController@favorites')->name('PropertySave');

Route::get('/Events/property/Favorites','EventController@favoritesViews')->name('PropertyVFavorites');


/////////////////////////////////////////////////////////////////////////////////////////////////////////



Route::get('/IUKL/Student/show','students@GetUsers')->name('Allstudents');

Route::get('/IUKL/Student','students@showUsers')->name('studentsConsultation');
Route::get('/IUKL/Student/AddUser',function () {return view('Students.AddUser');})->name('Addstudents');

Route::post('/IUKL/Student/Addstudents/Upload','students@create')->name('AddStudentsUpload');

Route::get('/IUKL/Student/AddUser/delete','students@Delete')->name('Deletestudent');

Route::get('/IUKL/Student/Update/{yo}','students@Select')->name('UpdateStudents');
Route::post('/IUKL/Student/Update/Updated','students@Update')->name('UpdateStudents1');

///////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/Events/Books/View','EventController@property')->name('BooksV');
Route::get('/Events/Books/manage','EventController@books')->name('BooksM');

Route::get('/Events/property/View/Favorites','EventController@favorites')->name('BookSave');


Route::get('/Events/Books/View/Booking_Purshase','EventController@Bookpushase')->name('Bookpushase');
Route::get('/reviews','EventController@Bookreviews')->name('Bookreviews');


Route::get('/Committee/MyPurshase',function () {return view('MyPurshase');})->name('MyPurshase');

Route::get('/Committee/MyPurshase/data','EventController@Mybookings')->name('MyPurshasedata');

Route::get('/Committee/MyPurshase/data/update','EventController@updateBookingHotel')->name('updateBook');
Route::get('/Committee/Hotel/view/Booking/delete','EventController@cancelHotel')->name('DeleteBook');







//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



Route::get('/AddPromotion/promotion', function(){
    return view('Promotion.AddPromotion');})->name('promotion');


Route::post('/AddPromotion/adding','EventController@Promotion')->name('AddingPromotion');

Route::get('/promotions',function () {return view('promo');})->name('promo');
Route::get('/promo/data','EventController@MyPromotions')->name('promodata');




});





// LogOut...
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
})->name('logout');









