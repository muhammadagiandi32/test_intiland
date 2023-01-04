<?php

use App\Http\Controllers\PurchaseRequestController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     // return view('welcome');
//     // phpinfo();


//     // Test database connection
//     // try {
//     //     // DB::connection()->getPdo();
//     //     // DB::connection()->getPDO();
//     //     echo DB::connection()->getDatabaseName();
//     // } catch (\Exception $e) {
//     //     die("Could not connect to the database.  Please check your configuration. error:" . $e);
//     // }

//     // DB::table('users')
//     // $data =  DB::connection()->select(DB::raw("SELECT TOP (1000) *
//     // FROM [INT_TEST1].[dbo].[Trx_Prq_Detail]"));
//     // dd($data);
// });

Route::resource('/', PurchaseRequestController::class);
