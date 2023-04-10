<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(
    [
        // 'middleware' => '',
        'name' => 'front',
        'namespace' => 'App\Http\Controllers\Front',
        'prefix' => ''
    ],
    function () {
        Route::get('/', 'HomeController@index')->name('Front.Home');
        // Route::get('/403', 'HomeController@403')->name('front.403');
        // Route::get('/404', 'HomeController@404')->name('front.404');
    }
);

Auth::routes();

Route::group(
    [
        'middleware' => 'auth',
        'name' => 'Dashboard',
        'namespace' => 'App\Http\Controllers\Dashboard',
        'prefix' => 'Dashboard'
    ],
    function () {
        //Menu
        Route::get('Menu', 'DashboardController@index')->name('Dashboard.Menu.Index');
        Route::get('Register/Continue', 'DashboardController@registerContinue')->name('Dashboard.Next.RegisterContinue');

        //Permisos
        Route::resource('Admin/Permissions', 'Admin\PermissionsController')->names([
            'index' => 'Dashboard.Admin.Permissions.Index',
            'create' => 'Dashboard.Admin.Permissions.Create',
            'store' => 'Dashboard.Admin.Permissions.Store',
            'show' => 'Dashboard.Admin.Permissions.Show',
            'edit' => 'Dashboard.Admin.Permissions.Edit',
            'update' => 'Dashboard.Admin.Permissions.Update',
            'destroy' => 'Dashboard.Admin.Permissions.Destroy',
        ]);

        //Roles
        Route::resource('Admin/Roles', 'Admin\RolesController')->names([
            'index' => 'Dashboard.Admin.Roles.Index',
            'create' => 'Dashboard.Admin.Roles.Create',
            'store' => 'Dashboard.Admin.Roles.Store',
            'show' => 'Dashboard.Admin.Roles.Show',
            'edit' => 'Dashboard.Admin.Roles.Edit',
            'update' => 'Dashboard.Admin.Roles.Update',
            'destroy' => 'Dashboard.Admin.Roles.Destroy',
        ]);
        Route::put('Admin/Roles/{id}/updatePermissions', 'Admin\RolesController@updatePermissions')->name('Dashboard.Admin.Roles.UpdatePermissions');

        //Usuarios
        Route::resource('Admin/Users', 'Admin\UsersController')->names([
            'index' => 'Dashboard.Admin.Users.Index',
            'create' => 'Dashboard.Admin.Users.Create',
            'store' => 'Dashboard.Admin.Users.Store',
            'show' => 'Dashboard.Admin.Users.Show',
            'edit' => 'Dashboard.Admin.Users.Edit',
            'update' => 'Dashboard.Admin.Users.Update',
            'destroy' => 'Dashboard.Admin.Users.Destroy',
        ]);
        Route::put('Admin/Users/{id}/updateRoles', 'Admin\UsersController@updateRoles')->name('Dashboard.Admin.Users.UpdateRoles');
        Route::put('Admin/Users/{id}/updatePermissions', 'Admin\UsersController@updatePermissions')->name('Dashboard.Admin.Users.UpdatePermissions');

        //Personas
        Route::resource('Admin/Persons', 'Admin\PersonsController')->names([
            'index' => 'Dashboard.Admin.Persons.Index',
            'create' => 'Dashboard.Admin.Persons.Create',
            'store' => 'Dashboard.Admin.Persons.Store',
            'show' => 'Dashboard.Admin.Persons.Show',
            'edit' => 'Dashboard.Admin.Persons.Edit',
            'update' => 'Dashboard.Admin.Persons.Update',
            'destroy' => 'Dashboard.Admin.Persons.Destroy',
        ]);

        //Equipos
        // Route::resource('Admin/Equipments', 'Admin\EquipmentsController')->names([
        //     'index' => 'Dashboard.Admin.Equipments.Index',
        //     'create' => 'Dashboard.Admin.Equipments.Create',
        //     'store' => 'Dashboard.Admin.Equipments.Store',
        //     'show' => 'Dashboard.Admin.Equipments.Show',
        //     'edit' => 'Dashboard.Admin.Equipments.Edit',
        //     'update' => 'Dashboard.Admin.Equipments.Update',
        //     'destroy' => 'Dashboard.Admin.Equipments.Destroy',
        // ]);

        //Rentas
        // Route::resource('Admin/Rents', 'Admin\RentsController')->names([
        //     'index' => 'Dashboard.Admin.Rents.Index',
        //     'create' => 'Dashboard.Admin.Rents.Create',
        //     'store' => 'Dashboard.Admin.Rents.Store',
        //     'show' => 'Dashboard.Admin.Rents.Show',
        //     'edit' => 'Dashboard.Admin.Rents.Edit',
        //     'update' => 'Dashboard.Admin.Rents.Update',
        //     'destroy' => 'Dashboard.Admin.Rents.Destroy',
        // ]);
    }
);

// Route::get('/table', function () {
//     return view('Examples/table');
// });
// Route::get('/table_two', function () {
//     return view('Examples/table_two');
// });
// Route::get('/table_three', function () {
//     return view('Examples/table_three');
// });
// Route::get('/daterange', function () {
//     return view('Examples/daterange');
// });
// Route::get('/UpdateProfile', function () {
//     return view('Examples/UpdateProfile');
// });