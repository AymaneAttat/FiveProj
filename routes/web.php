<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
Route::resource('articles', 'ArticlesController');
Route::resource('commandes', 'CommandesController');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/test', function(){
    return view('layouts.admin');
});

Route::get('/create_role_permission',function(){
    $role = Role::create(['name' => 'Administer']);
    $permission = Permission::create(['name' => 'Administer roles & permissions']);
    Auth()->user()->assignRole('Administer');
    Auth()->user()->givePermissionTo('Administer roles & permissions');
});