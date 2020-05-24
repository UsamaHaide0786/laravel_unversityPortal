<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class cafe extends Controller
{
    function mycafe(){
      return view('cafe');
    }
    ////////////////////////////////
    //Products Crud
    function mycafeProducts(){
      return view('product');
    }


    //insert
    function mycafeProductInsertForm(){
      return view('addproduct');
    }
    function mycafeProductsAdd(Request $request){

      $productId = $request->input('productId');
      $productName = $request->input('productName');
      $productPrice = $request->input('productPrice');
      $data=array("Productid"=>$productId,"Productname"=>$productName,"Price"=>$productPrice);
      DB::table('products')->insert($data);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/cafe/products">Click Here</a> to go back.';
    }

    //View
    function mycafeProductsView(){
      $products = DB::select('select * from products');
      return view('viewproduct',['products'=>$products]);
    }

    //update
    function mycafeProductsUpdateForm(){
      return view('updateproduct');
    }
    function mycafeProductsUpdate(Request $request){
      $uproductId = $request->input('uproductId');
      $productId = $request->input('productId');
      $productName = $request->input('productName');
      $productPrice = $request->input('productPrice');
      $data=array("Productid"=>$productId,"Productname"=>$productName,"Price"=>$productPrice);
      DB::table('products')->insert($data)->where('Productid','=','$uproductId');
      echo "Record updated successfully.<br/>";
      echo '<a href = "/cafe/products">Click Here</a> to go back.';
    }

    //delete
    function mycafeProductsDeleteForm(){
      return view('deleteproduct');
    }
    function mycafeProductsDelete(Request $request){
      $productId = $request->input('pid');
      DB::delete('delete from products where Productid = ?',[$productId]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/cafe/products">Click Here</a> to go back.';

    }
    ///////////////////////////////////
    function myproductsInCafe(){
      $item = DB::select('select * from productsincafe');
      return view('productincafe',['item'=>$item]);


    }
    function mypurchaseForm(){
      return view('purchase');
    }
    function mypurchase(Request $request){
      $studentId = $request->input('sid');
      $productId = $request->input('pid');
      $cafeId = $request->input('cid');
      $quantity = $request->input('q');
      $data=array("Sid"=>$studentId,"Productid"=>$productId,"Cafeid"=>$cafeId,"Quantity"=>$quantity);
      DB::table('purchase')->insert($data);
      echo "Order placed successfully.<br/>";
      echo '<a href = "/cafe/products">Click Here</a> to go back.';
    }

}
