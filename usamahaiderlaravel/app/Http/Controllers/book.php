<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class book extends Controller
{
    function mybook(){
      return view('book');
    }

    function mybookInsertForm(){
      return view('addbook');
    }
    function mybookAdd(Request $request){
      $BID = $request->input('bid');
      $BT = $request->input('bt');
      $BA = $request->input('ba');
      $BP = $request->input('bp');
      $BPB = $request->input('bpb');
      $BC = $request->input('bc');
      $data=array("Isbn"=>$BID,"Title"=>$BT,"Author"=>$BA,"Price"=>$BP,"Publisher"=>$BPB,"copies"=>$BC);
      DB::table('books')->insert($data);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/book">Click Here</a> to go back.';
    }
    function mybookView(){
      $books = DB::select('select * from books');
      return view('viewbook',['books'=>$books]);

    }
    function mybookUpdate(){
      return view('updatebook');
    }
    function mybookDeleteForm(){
      return view('deletebook');
    }
    function mybookDelete(Request $request){
      $BID = $request->input('bid');
      DB::delete('delete from books where Isbn = ?',[$BID]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/book">Click Here</a> to go back.';
    }







    function registercourse(){
      return view('registercourse');
    }
    function registercourseForm(){
      return view('addregistercourse');
    }

    function registercourseAdd(Request $request){
      $CC = $request->input('cc');
      $TID = $request->input('tid');
      $SEC = $request->input('s');
      $data=array("code"=>$CC,"Tid"=>$TID,"section"=>$SEC);
      DB::table('teach')->insert($data);
      echo "Course Added successfully.<br/>";
      echo '<a href = "/registercourse">Click Here</a> to go back.';
    }
    function registercourseDropForm(){
      return view('dropregistercourse');
    }
    function registercourseDrop(Request $request){
      $CC = $request->input('cc');
      DB::delete('delete from teach where code = ?',[$CC]);
      echo "Course dropped successfully.<br/>";
      echo '<a href = "/registercourse">Click Here</a> to go back.';
    }
}
