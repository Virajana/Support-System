<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/ticket", [\App\Http\Controllers\SupportTicketController::class, "index"])->middleware("auth")->name("ticket.index");
Route::post("/ticket/save", [\App\Http\Controllers\SupportTicketController::class, "store"])->name("ticket.store");
Route::post("/ticket/search", [\App\Http\Controllers\SupportTicketController::class, "search"])->name("ticket.search");
Route::resource("ticketreply", \App\Http\Controllers\TicketReplyController::class);
Route::get("/ticket/{support_ticket}", [\App\Http\Controllers\SupportTicketController::class, "show"])->name("ticket.show");
