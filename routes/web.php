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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            'First Listing' => 1,
            'Second Listing' => 'Listing One',
            'Third Listing' => 'Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Aliquam ac dui neque.
            Curabitur consequat ante et turpis lacinia,
            quis sagittis nisi malesuada. Pellentesque rhoncus nibh ac nisi elementum suscipit.'
        ]
    ]);
});
