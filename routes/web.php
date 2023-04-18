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
        Route::put('Admin/Users/{id}/updatePassword', 'Admin\UsersController@updatePassword')->name('Dashboard.Admin.Users.UpdatePassword');
        Route::put('Admin/Users/{id}/updateRoles', 'Admin\UsersController@updateRoles')->name('Dashboard.Admin.Users.UpdateRoles');
        Route::put('Admin/Users/{id}/updatePermissions', 'Admin\UsersController@updatePermissions')->name('Dashboard.Admin.Users.UpdatePermissions');

        //Personas
        Route::get('Panel/Persons', 'Admin\Persons\PanelController@Panel')->name('Dashboard.Admin.Persons.Panel');

        Route::get('Panel/Persons/ComTel/store', 'Admin\Persons\ComTelController@store')->name('Dashboard.Admin.Panel.Persons.ComTel.Store');
        Route::put('Panel/Persons/ComTel/update/{clvCompaniaTelefonica}', 'Admin\Persons\ComTelController@update')->name('Dashboard.Admin.Panel.Persons.ComTel.Update');
        Route::delete('Panel/Persons/ComTel/destroy/{clvCompaniaTelefonica}', 'Admin\Persons\ComTelController@destroy')->name('Dashboard.Admin.Panel.Persons.ComTel.Destroy');

        Route::get('Panel/Persons/Nationality/store', 'Admin\Persons\NationalityController@store')->name('Dashboard.Admin.Panel.Persons.Nacionalidad.Store');
        Route::put('Panel/Persons/Nationality/update/{clvNacionalidad}', 'Admin\Persons\NationalityController@update')->name('Dashboard.Admin.Panel.Persons.Nacionalidad.Update');
        Route::delete('Panel/Persons/Nationality/destroy/{clvNacionalidad}', 'Admin\Persons\NationalityController@destroy')->name('Dashboard.Admin.Panel.Persons.Nacionalidad.Destroy');

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
        Route::get('Panel/Equipments', 'Admin\Equipments\PanelController@Panel')->name('Dashboard.Admin.Equipments.Panel');

        Route::get('Panel/Equipments/Status/store', 'Admin\Equipments\StatusController@store')->name('Dashboard.Admin.Panel.Equipments.Status.Store');
        Route::put('Panel/Equipments/Status/update/{clvDisponibilidad}', 'Admin\Equipments\StatusController@update')->name('Dashboard.Admin.Panel.Equipments.Status.Update');
        Route::delete('Panel/Equipments/Status/destroy/{clvDisponibilidad}', 'Admin\Equipments\StatusController@destroy')->name('Dashboard.Admin.Panel.Equipments.Status.Destroy');

        Route::get('Panel/Equipments/TypeCategory/store', 'Admin\Equipments\TypeCategoriesController@store')->name('Dashboard.Admin.Panel.Equipments.TypeCategory.Store');
        Route::put('Panel/Equipments/TypeCategory/update/{clvTipoCategoria}', 'Admin\Equipments\TypeCategoriesController@update')->name('Dashboard.Admin.Panel.Equipments.TypeCategory.Update');
        Route::delete('Panel/Equipments/TypeCategory/destroy/{clvTipoCategoria}', 'Admin\Equipments\TypeCategoriesController@destroy')->name('Dashboard.Admin.Panel.Equipments.TypeCategory.Destroy');

        Route::get('Panel/Equipments/Category/store', 'Admin\Equipments\CategoriesController@store')->name('Dashboard.Admin.Panel.Equipments.Category.Store');
        Route::put('Panel/Equipments/Category/update/{clvCategoria}', 'Admin\Equipments\CategoriesController@update')->name('Dashboard.Admin.Panel.Equipments.Category.Update');
        Route::delete('Panel/Equipments/Category/destroy/{clvCategoria}', 'Admin\Equipments\CategoriesController@destroy')->name('Dashboard.Admin.Panel.Equipments.Category.Destroy');

        Route::get('Panel/Equipments/CupRent/store', 'Admin\Equipments\CupsRentsController@store')->name('Dashboard.Admin.Panel.Equipments.CupRent.Store');
        Route::put('Panel/Equipments/CupRent/update/{clvTazaRenta}', 'Admin\Equipments\CupsRentsController@update')->name('Dashboard.Admin.Panel.Equipments.CupRent.Update');
        Route::delete('Panel/Equipments/CupRent/destroy/{clvTazaRenta}', 'Admin\Equipments\CupsRentsController@destroy')->name('Dashboard.Admin.Panel.Equipments.CupRent.Destroy');

        Route::resource('Admin/Equipments', 'Admin\EquipmentsController')->names([
            'index' => 'Dashboard.Admin.Equipments.Index',
            'create' => 'Dashboard.Admin.Equipments.Create',
            'store' => 'Dashboard.Admin.Equipments.Store',
            'show' => 'Dashboard.Admin.Equipments.Show',
            'edit' => 'Dashboard.Admin.Equipments.Edit',
            'update' => 'Dashboard.Admin.Equipments.Update',
            'destroy' => 'Dashboard.Admin.Equipments.Destroy',
        ]);

        //Rentas
        Route::get('Panel/Rents', 'Admin\Rents\PanelController@Panel')->name('Dashboard.Admin.Rents.Panel');

        Route::get('Panel/Rents/StatusPaymentRent/store', 'Admin\Rents\StatusPaymentsRentsController@store')->name('Dashboard.Admin.Panel.Rents.StatusPaymentRent.Store');
        Route::put('Panel/Rents/StatusPaymentRent/update/{clvEstadoPagoRenta}', 'Admin\Rents\StatusPaymentsRentsController@update')->name('Dashboard.Admin.Panel.Rents.StatusPaymentRent.Update');
        Route::delete('Panel/Rents/StatusPaymentRent/destroy/{clvEstadoPagoRenta}', 'Admin\Rents\StatusPaymentsRentsController@destroy')->name('Dashboard.Admin.Panel.Rents.StatusPaymentRent.Destroy');

        Route::get('Panel/Rents/PaymentRent/store', 'Admin\Rents\PaymentsRentsController@store')->name('Dashboard.Admin.Panel.Rents.PaymentRent.Store');
        Route::put('Panel/Rents/PaymentRent/update/{clvPagoRenta}', 'Admin\Rents\PaymentsRentsController@update')->name('Dashboard.Admin.Panel.Rents.PaymentRent.Update');
        Route::delete('Panel/Rents/PaymentRent/destroy/{clvPagoRenta}', 'Admin\Rents\PaymentsRentsController@destroy')->name('Dashboard.Admin.Panel.Rents.PaymentRent.Destroy');

        Route::get('Panel/Rents/StatusRent/store', 'Admin\Rents\StatusRentsController@store')->name('Dashboard.Admin.Panel.Rents.StatusRent.Store');
        Route::put('Panel/Rents/StatusRent/update/{clvEstadoRenta}', 'Admin\Rents\StatusRentsController@update')->name('Dashboard.Admin.Panel.Rents.StatusRent.Update');
        Route::delete('Panel/Rents/StatusRent/destroy/{clvEstadoRenta}', 'Admin\Rents\StatusRentsController@destroy')->name('Dashboard.Admin.Panel.Rents.StatusRent.Destroy');

        Route::resource('Admin/Rents', 'Admin\RentsController')->names([
            'index' => 'Dashboard.Admin.Rents.Index',
            'create' => 'Dashboard.Admin.Rents.Create',
            'store' => 'Dashboard.Admin.Rents.Store',
            'show' => 'Dashboard.Admin.Rents.Show',
            'edit' => 'Dashboard.Admin.Rents.Edit',
            'update' => 'Dashboard.Admin.Rents.Update',
            'destroy' => 'Dashboard.Admin.Rents.Destroy',
        ]);
    }
);