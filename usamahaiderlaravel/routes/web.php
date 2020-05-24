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

Auth::routes();
Route::get('myhome','portalUser@home');
///////////////////////////////////////

Route::get('/cafe','cafe@mycafe');
Route::get('/cafe/products','cafe@mycafeProducts');
///////////////////////////////////////////////
Route::get('/cafe/products/insert','cafe@mycafeProductInsertForm');
Route::post('/cafe/products/done','cafe@mycafeProductsAdd');
Route::get('/cafe/products/view','cafe@mycafeProductsView');
Route::get('/cafe/products/update/insert','cafe@mycafeProductsUpdateForm');
Route::post('/cafe/products/update/done','cafe@mycafeProductsUpdate');
Route::get('/cafe/products/delete/insert','cafe@mycafeProductsDeleteForm');
Route::post('/cafe/products/delete/done','cafe@mycafeProductsDelete');
//////////////////////////////////////////////
Route::get('/cafe/productincafe','cafe@myproductsInCafe');
Route::get('/cafe/purchase/insert','cafe@mypurchaseForm');
Route::post('/cafe/purchase/done','cafe@mypurchase');
////////////////////////////////////////////////


Route::get('/teacherissue','portalUser@myteacherIssue');
//////////////////////////////////////////////////////


Route::get('/teacher','portalUser@myteachers');
Route::get('/teacher/insert','portalUser@myteachersInsertForm');
Route::post('/teacher/done','portalUser@myteachersAdd');
Route::get('/teacher/view','portalUser@myteachersView');
Route::get('/teacher/update','portalUser@myteachersUpdate');
Route::get('/teacher/delete/insert','portalUser@myteachersDeleteForm');
Route::post('/teacher/delete/done','portalUser@myteachersDelete');
//////////////////////////////////////////////////////////



Route::get('/student','portalUser@mystudents');
Route::get('/student/insert','portalUser@mystudentsInsertForm');
Route::post('/student/done','portalUser@mystudentsAdd');
Route::get('/student/view','portalUser@mystudentsView');
Route::get('/student/update','portalUser@mystudentsUpdate');
Route::get('/student/delete/insert','portalUser@mystudentsDeleteForm');
Route::post('/student/delete/done','portalUser@mystudentsDelete');
////////////////////////////////////////////////////////////



Route::get('/societies','portalUser@mysocieties');
Route::get('/societies/insert','portalUser@mysocietiesInsertForm');
Route::post('/societies/done','portalUser@mysocietyAdd');
Route::get('/societies/view','portalUser@mysocietyView');
Route::get('/societies/update','portalUser@mysocietyUpdate');
Route::get('/societies/delete/insert','portalUser@mysocietyDeleteForm');
Route::post('/societies/delete/done','portalUser@mysocietyDelete');
/////////////////////////////////////////////////////////////



Route::get('/book','book@mybook');
Route::get('/book/insert','book@mybookInsertForm');
Route::post('/book/done','book@mybookAdd');
Route::get('/book/view','book@mybookView');
Route::get('/book/update','book@mybookUpdate');
Route::get('/book/delete/insert','book@mybookDeleteForm');
Route::post('/book/delete/done','book@mybookDelete');
///////////////////////////////////////////////




Route::get('/sessions','portalUser@mysessions');
Route::get('/sessions/insert','portalUser@mysessionsInsertForm');
Route::post('/sessions/done','portalUser@mysessionsAdd');
Route::get('/sessions/view','portalUser@mysessionsView');
Route::get('/sessions/update','portalUser@mysessionsUpdate');
Route::get('/sessions/delete/insert','portalUser@mysessionsDeleteForm');
Route::post('/sessions/delete/done','portalUser@mysessionsDelete');
//////////////////////////////////////////////////////////////




Route::get('/registercourse','book@registercourse');
Route::get('/registercourse/insert','book@registercourseForm');
Route::post('/registercourse/done','book@registercourseAdd');
Route::get('/registercourse/drop/insert','book@registercourseDropForm');
Route::post('/registercourse/drop/done','book@registercourseDrop');
/////////////////////////////////////////////////////////////




Route::get('/user','portalUser@myuser');
Route::get('/user/insert','portalUser@myuserInsertForm');
Route::post('/user/done','portalUser@myuserAdd');
Route::get('/user/view','portalUser@myuserView');
Route::get('/user/update','portalUser@myuserUpdate');
Route::get('/user/delete/insert','portalUser@myuserDeleteForm');
Route::post('/user/delete/done','portalUser@myuserDelete');
////////////////////////////////////////////////////




Route::get('/', 'HomeController@index');
