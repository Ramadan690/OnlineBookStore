//Nav.blade.php
setInterval(function(){ 
  $(".alert").fadeTo(800, 0).slideUp(500, function(){
        $(this).remove(); 
    }); 
}, 10000);

  $(window).on('load', function () {
    $('#loading').fadeOut();
  }) ;



$(document).ready( function () {
  







  ////////////////////////////////////////////////////////////////////////////////////////


var frmProfileImage = $('#update_profile');


frmProfileImage.submit(function(e) {
e.preventDefault(); 

$('.upload').html('uploading...');
$('.upload').css("background-color","white");
$('.upload').css("color","black");

$.ajax({
            type: 'POST',
            url: "/Profile/upload",
            data: new FormData(this),
            processData: false,
            contentType: false,
            complete: function(){
$('.upload').html('Upload');
$('.upload').css("background-color","green");
$('.upload').css("color","white");


        
    },
            success: function (data) {
 

        $('#data').html(' <img src="https://c.tenor.com/0AVbKGY_MxMAAAAM/check-mark-verified.gif" width="80px"> <br><br><span style="color:green"> success! profile is updated successfully</span> ');

       
$('#notif').modal('show'); 
     $('.pro').css("visibility","hidden");


},
error: function (XMLHttpRequest) {
                var Message = JSON.parse(XMLHttpRequest.responseText);

              //  $('#uploaded').html('<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> '+Message['errors']['image']+'! the file must be 1024Mo of size... </div>');
                //$('#uploaded').css('color','red');
        
        $('#data').html(' <img src="https://cdn.pixabay.com/photo/2017/03/28/01/42/attention-2180765_1280.png" width="80px"> <br><br><span style="color:red">'+Message['errors']['image']+'! the file must be 1024Mo of size...</span>');

       
$('#notif').modal('show');



                },
});

});















//addUser

var frm = $('#Add');

frm.submit(function(e) {
e.preventDefault(); 
$('#save').html('loading...');
$('#save').css("background-color","lightblue")
 $('.ErrImage').html('<img src="https://cdn.dribbble.com/users/2760451/screenshots/5656895/cloud-upload.gif" width="130px">');
$.ajax({
            type: 'POST',
            url: '/UserConsultation/AddUser/Upload',
            data: new FormData(this),
            processData: false,
            contentType: false,
            complete: function(){
            $('#save').html('<i class="fas fa-plus-square"></i> Save');
$('#save').css("background-color","#1270fc");
    },
            success: function (data) {
             $('.msg').html('<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLongTitle"><b>New User</b></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">'+data+'</div><div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></div></div></div></div>');
             $('#showdata').click();

  $('#Remove').css("display","none");

                frm.trigger("reset");
                  var image = document.getElementById("output");
   $('#output').attr("src","http://www.cezarskitchen.com.my/wp-content/themes/consultix/images/no-image-found-360x250.png");
                $('#Ref').attr("value",'RA-'+Math.floor((Math.random() * 100000000000) + 1));

$('.feed').html('');
            },
            error: function (XMLHttpRequest) {
                var Message = JSON.parse(XMLHttpRequest.responseText);
              

if(Message['errors']['image']){
                $('.ErrImage').html('<div class="alert alert-danger" role="alert">'+Message['errors']['image']+'! the file must be 1024Mo of size... </div>');
                $('.ErrImage').css('color','red');
              }else{
                $('.ErrImage').html('<div class="alert alert-success" role="alert">Looks Good</div>');
                $('.ErrImage').css("color","lightgreen");
              }

///////////////////////////////////////////////////////////////////
             if(Message['errors']['Name']){
                $('.ErrName').html(Message['errors']['Name']);
                $('.ErrName').css('color','red');
              }else{
                $('.ErrName').html('Looks Good');
                $('.ErrName').css("color","lightgreen");
              }
//////////////////////////////////////////////////////////////////////
              if(Message['errors']['Categories']){
                $('.ErrC').html(Message['errors']['Categories']);
                $('.ErrC').css('color','red');
              }else{
                $('.ErrC').html('Looks Good');
                $('.ErrC').css("color","lightgreen");
              }
//////////////////////////////////////////////////////////////////////
              if(Message['errors']['Passport']){
                $('.ErrNationality').html(Message['errors']['Passport']);
                $('.ErrNationality').css('color','red');
              }else{
                $('.ErrNationality').html('Looks Good');
                $('.ErrNationality').css("color","lightgreen");
              }
////////////////////////////////////////////////////////////////////
              if(Message['errors']['Tel']){
                $('.ErrTel').html(Message['errors']['Tel']);
                $('.ErrTel').css('color','red');
              }else{
                $('.ErrTel').html('Looks Good');
                $('.ErrTel').css("color","lightgreen");
              }
//////////////////////////////////////////////////////////
              if(Message['errors']['Password']){
                $('.ErrPassword').html(Message['errors']['Password']);
                $('.ErrPassword').css('color','red');
              }else{
                $('.ErrPassword').html('Looks Good');
                $('.ErrPassword').css("color","lightgreen");
              }
//////////////////////////////////////////////////////////////////////
              if(Message['errors']['Graduation']){
                $('.ErrOccupation').html(Message['errors']['Graduation']);
                $('.ErrOccupation').css('color','red');
              }else{
                $('.ErrOccupation').html('Looks Good');
                $('.ErrOccupation').css("color","lightgreen");
              }
/////////////////////////////////////////////////////////////////////////
              if(Message['errors']['Programme']){
                $('.ErrInstitution').html(Message['errors']['Programme']);
                $('.ErrInstitution').css('color','red');
              }else{
                $('.ErrInstitution').html('Looks Good');
                $('.ErrInstitution').css("color","lightgreen");
              }
/////////////////////////////////////////////////////////////////////////

  if(Message['errors']['Privilege']){
                $('.ErrPriv').html(Message['errors']['Privilege']);
                $('.ErrPriv').css('color','red');
              }else{
                $('.ErrPriv').html('Looks Good');
                $('.ErrPriv').css("color","lightgreen");
              }
/////////////////////////////////////////////////////////////////////////
              if(Message['errors']['Email']){
                $('.ErrEmail').html(Message['errors']['Email']);
                $('.ErrEmail').css('color','red');
              }else{
                $('.ErrEmail').html('Looks Good');
                $('.ErrEmail').css("color","lightgreen");
              }


            },
        });    
});


} );


//AddUser.blade.php

  var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
  $('#Remove').css("visibility","visible");
  $('#add').css("visibility","visible");
  $('#bttn').removeAttr('disabled');
};


function RemoveFile() {
   $('#output').attr("src","@if($user[0]->photo != ''){{asset('/storage/images/profile_Images/'.$user[0]->photo)}} @else https://us.123rf.com/450wm/thesomeday123/thesomeday1231712/thesomeday123171200009/91087331-default-avatar-profile-icon-for-male-grey-photo-placeholder-illustrations-vector.jpg?ver=6 @endif");
     $('.pro').css("visibility","hidden");


};




function RefreshReference(){
$('#Ref').attr("value",'RA-'+Math.floor((Math.random() * 100000000000) + 1));
}


$("#sliderUpdateForm").hide();

$( "#editData" ).click(function() {

$("#showdataform,#sliderUpdateForm").slideToggle("slow");




});



