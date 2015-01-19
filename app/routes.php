<?php
$tld = ( getenv('APP_ENV') == 'local' ) ? 'dev' : 'com';
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group([
    'domain' => "admin.multi-domain.{$tld}",
    'namespace' => 'Acme\Controllers\Admin'
], function()
{

    Route::any('/', [
        'as' => 'home',
        'uses' => 'PagesController@home'
    ]);

});

Route::group([
    'domain' => "multi-domain.{$tld}",
    'namespace' => 'Acme\Controllers\Client'
], function()
{

    Route::any('/', [
        'as' => 'home',
        'uses' => 'PagesController@home'
    ]);

});
