<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\DB;
use App\iuklstudents;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

class students extends Controller
{


   /////////////////////////////////////////////
public function showUsers(){
return view('Students.UserConsultation');
}
/////////////////////////////////////////////

public function GetUsers(){

$Users = DB::table('iuklstudents')
            ->select('Name','Matric','Passport','Programme')
            ->get();



return datatables($Users)->make(true);

}
//////////////////////////////////////////////////////////////////////////

protected function Delete(Request $request){

$refr =  $request->input('id');

$query = DB::table('iuklstudents')
                            ->where('Matric', $refr)
                            ->limit(1)
                            ->delete();

 if ($query > 0) {

echo "successfully deleted";}
 else {
       echo "could not be deleted, please try again!".$refr;

 }

}

//////////////////////////////////////////////////////

public function Select($ref) {
      $users = DB::select('select * from iuklstudents
where Matric = ?',[$ref]);

if($users){

      return view('Students.UpdateUser',['users'=>$users]);}
      else{
        return view('Students.Userconsultation');
      }
   }

//////////////////////////////////////////////////////////////





protected function Update(Request $request){
$ref = $request->input('Matric');


$validator = Validator::make($request->all(), [
'Name' =>['required', 'regex:/^[A-Za-z ]+$/', 'max:255'],
'Matric' =>['required', 'regex:/^[0-9]+$/', 'max:255'],
'Passport' =>['required', 'regex:/^[A-Za-z0-9 ]+$/', 'max:255'],
'Programme' =>['required','regex:/^[A-Za-z0-9 ]+$/', 'max:255'],
]);



if ($validator->fails()){
return Redirect('/IUKL/Student/Update/'.$ref)->withErrors($validator->errors());   
        }

$User = iuklstudents::where('Matric', $ref)
       ->update([
            'Name' => $request->input('Name'),
            'Matric' =>$ref,
            'Passport' => $request->input('Passport'),
            'Programme' => $request->input('Programme'),

        ]);




    return Redirect('/IUKL/Student/Update/'.$ref.'?rslt=success');




}


/////////////////////////////////////////////////////////////////////////////



protected function create(Request $request){


$data = request()->validate([
'Name' =>['required', 'regex:/^[A-Za-z ]+$/', 'max:255'],
'Matric' =>['required', 'regex:/^[0-9]+$/', 'max:255','unique:iuklstudents'],
'Passport' =>['required', 'regex:/^[A-Za-z0-9 ]+$/', 'max:255','unique:iuklstudents'],
'Programme' =>['required','regex:/^[A-Za-z0-9 ]+$/', 'max:255'],
]);




iuklstudents::create([
            'Name' => $request->input('Name'),
            'Programme' => $request->input('Programme'),
            'Passport' =>$request->input('Passport'),
            'Matric' => $request->input('Matric'),
        ]);



return Redirect('/IUKL/Student/AddUser?rslt=success');



}

///////////////////////////////////////////////////////////////////////////////////////////////////////










}
