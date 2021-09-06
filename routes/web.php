<?php

use App\Http\Controllers\Channel;
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
CONST LAYOUT = 'layout/layout';
Route::get('/', function () {
    return view(LAYOUT,["page"=>"pages/dashboard/home","data"=>array()]);
});

Route::get('/channels', function () {
    return view(LAYOUT,["page"=>"pages/channels/channel","data"=>array()]);
});

Route::get('/messages', function () {
    return view(LAYOUT,["page"=>"pages/dashboard/home","data"=>array()]);
});

Route::prefix('channels')->group(function () {
    Route::get('/getChannelDetails', [Channel::class, 'index']);
    Route::post('/getChannelDetails', [Channel::class, 'getChannelDetails'])
        ->middleware('valid.token');
});


