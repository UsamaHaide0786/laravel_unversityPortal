<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Session;
class portalUser extends Controller
{
  function login(){
    return view('login');
  }

  function home(){
  return view('myhome');

}


//Teachers
function myteacherIssue(){
  $issue = DB::select('select * from teacherissue');
  return view('teacherissue',['issue'=>$issue]);


}
function myteachers(){
  return view('teachers');
}



function myteachersInsertForm(){
  return view('addteachers');
}
function myteachersAdd(Request $request){
  $TID = $request->input('tid');
  $FN = $request->input('fn');
  $LN = $request->input('ln');
  $D = $request->input('d');
  $E = $request->input('e');
  $data=array("Tid"=>$TID,"Firstname"=>$FN,"Lastname"=>$LN,"Designation"=>$D,"Experience"=>$E);
  DB::table('teachers')->insert($data);
  echo "Record inserted successfully.<br/>";
  echo '<a href = "/teacher">Click Here</a> to go back.';
}
function myteachersView(){
  $teachers = DB::select('select * from teachers');
  return view('viewteachers',['teachers'=>$teachers]);


}
function myteachersUpdate(){
  return view('updateteachers');
}
function myteachersDeleteForm(){
  return view('deleteteachers');
}
function myteachersDelete(Request $request){
  $TID = $request->input('tid');
  DB::delete('delete from teachers where Tid = ?',[$TID]);
  echo "Record deleted successfully.<br/>";
  echo '<a href = "/teacher">Click Here</a> to go back.';

}



//Students
function mystudents(){
  return view('student');
}
function mystudentsInsertForm(){
  return view('addstudent');
}
function mystudentsAdd(Request $request){
  $SID = $request->input('sid');
  $SN = $request->input('sn');
  $FN = $request->input('fn');
  $ADD = $request->input('add');
  $DOB = $request->input('dob');
  $PID = $request->input('pid');
  $GPA = $request->input('gpa');
  $G = $request->input('g');
  $data=array("sid"=>$SID,"sname"=>$SN,"fname"=>$FN,"address"=>$ADD,"dob"=>$DOB,"pid"=>$PID,"gpa"=>$GPA,"gender"=>$G);
  DB::table('student')->insert($data);
  echo "Record inserted successfully.<br/>";
  echo '<a href = "/student">Click Here</a> to go back.';
}
function mystudentsView(){
  $students = DB::select('select * from student');
  return view('viewstudent',['students'=>$students]);
}
function mystudentsUpdate(){
  return view('updatestudent');
}
function mystudentsDeleteForm(){
  return view('deletestudent');
}
function mystudentsDelete(Request $request){
  $SID = $request->input('sid');
  DB::delete('delete from student where sid = ?',[$SID]);
  echo "Record deleted successfully.<br/>";
  echo '<a href = "/student">Click Here</a> to go back.';
}




//Societies
function mysocieties(){
  return view('societies');

}
function mysocietiesInsertForm(){
  return view('addsociety');
}
function mysocietyAdd(Request $request){
  $SID = $request->input('sid');
  $SN = $request->input('sn');
  $ST = $request->input('st');
  $data=array("socid"=>$SID,"socname"=>$SN,"type"=>$ST);
  DB::table('societies')->insert($data);
  echo "Record inserted successfully.<br/>";
  echo '<a href = "/societies">Click Here</a> to go back.';
}
function mysocietyView(){
  $societies = DB::select('select * from societies');
  return view('viewsociety',['societies'=>$societies]);

}
function mysocietyUpdate(){
  return view('updatesociety');
}
function mysocietyDeleteForm(){
  return view('deletesociety');
}
function mysocietyDelete(Request $request){
  $SID = $request->input('sid');
  DB::delete('delete from societies where socid = ?',[$SID]);
  echo "Record deleted successfully.<br/>";
  echo '<a href = "/societies">Click Here</a> to go back.';
}




//Sessions
function mysessions(){
  return view('sessions');
}
function mysessionsInsertForm(){
  return view('addsessions');
}
function mysessionsAdd(Request $request){
  $SID = $request->input('sid');
  $ST = $request->input('st');
  $SD = $request->input('sd');
  $data=array("sesid"=>$SID,"stitle"=>$ST,"sdate"=>$SD);
  DB::table('sessions')->insert($data);
  echo "Record inserted successfully.<br/>";
  echo '<a href = "/sessions">Click Here</a> to go back.';
}
function mysessionsView(){
  $sessions = DB::select('select * from sessions');
  return view('viewsessions',['sessions'=>$sessions]);

}
function mysessionsUpdate(){
  return view('updatesessions');
}
function mysessionsDeleteForm(){
  return view('deletesessions');
}
function mysessionsDelete(Request $request){
  $SID = $request->input('sid');
  DB::delete('delete from sessions where sesid = ?',[$SID]);
  echo "Record deleted successfully.<br/>";
  echo '<a href = "/sessions">Click Here</a> to go back.';

}




//Users
function myuser(){
  return view('user');
}
function myuserInsertForm(){
  return view('adduser');
}
function myuserAdd(Request $request){
  $UID = $request->input('uid');
  $TID = $request->input('tid');
  $PSW = $request->input('psw');
  $data=array("id"=>$UID,"tid"=>$TID,"password"=>$PSW);
  DB::table('user')->insert($data);
  echo "Record inserted successfully.<br/>";
  echo '<a href = "/user">Click Here</a> to go back.';
}
function myuserView(){
  $users = DB::select('select * from user');
  return view('viewuser',['users'=>$users]);


}
function myuserUpdate(){
  return view('updateuser');
}
function myuserDeleteForm(){
  return view('deleteuser');
}
function myuserDelete(Request $request){
  $UID = $request->input('uid');
  DB::delete('delete from user where id = ?',[$UID]);
  echo "Record deleted successfully.<br/>";
  echo '<a href = "/user">Click Here</a> to go back.';

}
}
