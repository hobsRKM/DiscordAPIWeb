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
    /**
     * Views
     */
    Route::get('/getChannelDetails', [Channel::class, 'getChannelDetails']);
    Route::get('/getChannelMessages', [Channel::class, 'getChannelMessages']);
    Route::get('/getUpdateChannelDetails', [Channel::class, 'getUpdateChannelDetails']);
    Route::get('/getChannelPermissions', [Channel::class, 'getChannelPermissions']);


    /**
     * API POST
     */
    Route::post('/postChannelDetails', [Channel::class, 'postChannelDetails'])
        ->middleware('valid.token');
    Route::post('/postChannelMessages', [Channel::class, 'postChannelMessages'])
        ->middleware('valid.token');
    Route::post('/postUpdateChannelDetails', [Channel::class, 'postUpdateChannelDetails'])
        ->middleware('valid.token');
    Route::post('/postUpdateChannelPermissions', [Channel::class, 'postUpdateChannelPermissions'])
        ->middleware('valid.token');
});


