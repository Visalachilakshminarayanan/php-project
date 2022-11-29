<?php

use App\Http\Controllers\checkupdateController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\productBindController;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\PDFController;
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
    return view('login_page');
});
//Auth::routes();
Route::post('login_page', [loginController::class,'insertData'])->name('insertData');
// Route::post('page', [loginController::class,'verifySignin'])->name('verifySignin');

//Route::get('view', [LoginController::class, 'viewData'])->name('viewData');
Route::get('/order details', [productBindController::class,'getItems']);
Route::get('/check_update',[checkupdateController::class,'getDatafromtbl']);
//Route::get('order details', [orderController::class,'getState']);
Route::post('order details', [orderController::class, 'insertOrder'])->name('insertOrder');
Route::get('/sales_details',[salesController::class,'gotosales']);
//Route::get('/sales_details',[salesController::class,'displayinsales']);
Route::get('/sales_details',[salesController::class,'filterdate']);
Route::get('/invoice_generation',[invoiceController::class,'gotoinvoice']);
Route::get('/myPDF',[invoiceController::class,'invoiceprint']);

// Route::get('/invoice_generation',[PDFController::class,'gotoPDF']);
Route::get('login_page',[invoiceController::class,'logout']);
Route::get('login_page',[salesController::class,'logout']);
Route::get('login_page',[orderController::class,'logout']);
Route::get('login_page',[checkupdateController::class,'logout']);

Route::get('login_page',[LoginController::class,'validateLogin']);

Route::get('generate-invoice-pdf', array('as'=> 'generate.invoice.pdf', 'uses' => 'PDFController@generateInvoicePDF'));