<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Dashboard\GeneralBoardController;
use App\Http\Controllers\Documentation\Api;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Settings\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\Settings\PermissionController;
use App\Http\Controllers\Settings\LanguagesController;
use App\Http\Controllers\TestController;

Route::redirect('/', '/' . app()->getLocale() );

//ADDING THE LANGUAGES PREFIX AFETER EACH ROUTE
Route::group(['prefix' => '{language}'], function () {

	Route::get('/', [LoginController::class,'index'])->name("login")->middleware("RedirectIfAuthenticated");

	//Settings ====================================================
	Route::get('/settings/languages', [LanguagesController::class, 'languages'])->name('settings.languages');
	Route::get('/selectLanguage', [LanguagesController::class, 'selectLanguage'])->name('selectLanguage');

	Route::get('/passwordforgot', [ForgotPasswordController::class, 'index'])->name('passwordforgot');

	Route::group(['middleware' => 'auth'], function(){
		
		Route::get('/logout', [LoginController::class,'logout'])->name("logout");
		Route::get('/dashboard/general', [GeneralBoardController::class, 'index'])->name('dashboard.general');

		//only those have manage_permission permission will get access
		Route::group(['middleware' => 'can:manage_permission|manage_user'], function(){
			Route::get('/permissions', [PermissionController::class,'index'])->name("settings.permissions");
			Route::get('/permission/get-list', [PermissionController::class,'getPermissionList']);
			Route::post('/permission/create', [PermissionController::class,'create']);
			Route::get('/permission/update', [PermissionController::class,'update']);
			Route::get('/permission/delete/{id}', [PermissionController::class,'delete']);
		});

		//only those have manage_user permission will get access
		Route::group(['middleware' => 'can:manage_user'], function(){
			Route::get('/users', [UserController::class,'index'])->name("settings.users");
			Route::get('/user/get-list', [UserController::class,'getUserList']);
			Route::get('/user/create', [UserController::class,'create']);
			Route::post('/user/create', [UserController::class,'store'])->name('create-user');
			Route::get('/user/{id}', [UserController::class,'edit']);
			Route::post('/user/update', [UserController::class,'update']);
			Route::get('/user/delete/{id}', [UserController::class,'delete']);
		});

		//only those have manage_role permission will get access
		Route::group(['middleware' => 'can:manage_role|manage_user'], function(){
			Route::get('/roles', [RolesController::class,'index'])->name("settings.roles");
			Route::get('/role/get-list', [RolesController::class,'getRoleList']);
			Route::post('/role/create', [RolesController::class,'create']);
			Route::get('/role/edit/{id}', [RolesController::class,'edit']);
			Route::post('/role/update', [RolesController::class,'update']);
			Route::get('/role/delete/{id}', [RolesController::class,'delete']);
		});

		// get permissions
		Route::get('get-role-permissions-badge', [PermissionController::class,'getPermissionBadgeByRole']);

		//Documentation ===========================================
		Route::get('/doc/api', [Api::class, 'index'])->name("doc.api");
	});

});

Route::post('login', [LoginController::class,'login']);

//Route::get('/', function () { return view('home'); });
//Route::get('login', [LoginController::class,'showLoginForm'])->name('login');

Route::post('register', [RegisterController::class,'register']);

Route::get('password/forget',  function () { return view('pages.forgot-password'); })->name('password.forget');
Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');
//Route::get('/apierror', function(){ return response()->json(['Error' => 1]);})->name("apierror");

Route::group(['middleware' => 'auth'], function(){
	// logout route
	
	Route::get('/clear-cache', [HomeController::class,'clearCache']);

	// dashboard route
	/*Route::get('/dashboard', function () {
		return view('pages.dashboard');
	})->name('dashboard');*/

	

	


	

	


	// permission examples
    Route::get('/permission-example', function () {
    	return view('permission-example');
    });
    
    // Editable Datatable
	Route::get('/table-datatable-edit', function () {
		return view('pages.datatable-editable');
	});

    // Themekit demo pages
	Route::get('/calendar', function () { return view('pages.calendar'); });
	Route::get('/charts-amcharts', function () { return view('pages.charts-amcharts'); });
	Route::get('/charts-chartist', function () { return view('pages.charts-chartist'); });
	Route::get('/charts-flot', function () { return view('pages.charts-flot'); });
	Route::get('/charts-knob', function () { return view('pages.charts-knob'); });
	Route::get('/forgot-password', function () { return view('pages.forgot-password'); });
	Route::get('/form-addon', function () { return view('pages.form-addon'); });
	Route::get('/form-advance', function () { return view('pages.form-advance'); });
	Route::get('/form-components', function () { return view('pages.form-components'); });
	Route::get('/form-picker', function () { return view('pages.form-picker'); });
	Route::get('/invoice', function () { return view('pages.invoice'); });
	Route::get('/layout-edit-item', function () { return view('pages.layout-edit-item'); });
	Route::get('/layouts', function () { return view('pages.layouts'); });

	Route::get('/navbar', function () { return view('pages.navbar'); });
	Route::get('/profile', function () { return view('pages.profile'); });
	Route::get('/project', function () { return view('pages.project'); });
	Route::get('/view', function () { return view('pages.view'); });

	Route::get('/table-bootstrap', function () { return view('pages.table-bootstrap'); });
	Route::get('/table-datatable', function () { return view('pages.table-datatable'); });
	Route::get('/taskboard', function () { return view('pages.taskboard'); });
	Route::get('/widget-chart', function () { return view('pages.widget-chart'); });
	Route::get('/widget-data', function () { return view('pages.widget-data'); });
	Route::get('/widget-statistic', function () { return view('pages.widget-statistic'); });
	Route::get('/widgets', function () { return view('pages.widgets'); });

	// themekit ui pages
	Route::get('/alerts', function () { return view('pages.ui.alerts'); });
	Route::get('/badges', function () { return view('pages.ui.badges'); });
	Route::get('/buttons', function () { return view('pages.ui.buttons'); });
	Route::get('/cards', function () { return view('pages.ui.cards'); });
	Route::get('/carousel', function () { return view('pages.ui.carousel'); });
	Route::get('/icons', function () { return view('pages.ui.icons'); });
	Route::get('/modals', function () { return view('pages.ui.modals'); });
	Route::get('/navigation', function () { return view('pages.ui.navigation'); });
	Route::get('/notifications', function () { return view('pages.ui.notifications'); });
	Route::get('/range-slider', function () { return view('pages.ui.range-slider'); });
	Route::get('/rating', function () { return view('pages.ui.rating'); });
	Route::get('/session-timeout', function () { return view('pages.ui.session-timeout'); });
	Route::get('/pricing', function () { return view('pages.pricing'); });
});

/*
Route::get('/register', function () { return view('pages.register'); });
Route::get('/login-1', function () { return view('pages.login'); });
*/
