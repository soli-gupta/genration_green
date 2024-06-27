<?php
//URL::forceScheme('https');
//Route::get('/', 'HomepageCtrl@cbss',array());



Route::get('/', 'HomepageCtrl@homepage', array());
Route::get('/gallery', 'GalleryCtrl@index', array());

// Registration  Route
Route::get('/registration', 'RegistrationCtrl@index', array());
Route::post('/save-registration-form', 'RegistrationCtrl@saveRegistrationForm', array());

Route::get('/e-waste', 'EWasteCtrl@index', array());

// Pledge  Route
Route::get('/pledge', 'PledgeCtrl@index', array());
Route::get('/get-city-by-state', 'PledgeCtrl@getCityByState', array());
Route::post('/save-pledge-form', 'PledgeCtrl@savePledgeForm', array());
Route::get('/certificate-download', 'PledgeCtrl@certificate', array());

Route::get('/blogs', 'BlogsCtrl@index', array());
Route::get('/sustainable-living-tips-nurturing-the-planet-for-future-generations', 'BlogsCtrl@sustainableLiving', array());
Route::get('/embracing-the-zero-waste-lifestyle-a-path-to-sustainable-living', 'BlogsCtrl@embracing', array());
Route::get('/innovative-renewable-energy-solutions-to-combat-climate-change', 'BlogsCtrl@innovativeRenewable', array());

Route::get('testpage', 'TestpageCtrl@testpage', array());

Route::group(array('namespace' => 'Admin'), function () {

  Auth::routes();
  Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'DashboardControl@index', array());
    Route::get('/profile', 'DashboardControl@profile', array());
    Route::post('/profile/save', 'DashboardControl@save', array());
    Route::post('summernotefilesave', 'DashboardControl@summernotefilesave');

    // section cmspage module
    Route::get('cms-page', 'CmspageCtrlAdmin@index', array());
    Route::get('cms-page/create', 'CmspageCtrlAdmin@create');
    Route::post('cms-page/save', 'CmspageCtrlAdmin@save');
    Route::get('cms-page/edit/{id}', 'CmspageCtrlAdmin@edit', array());
    Route::get('cms-page/export', 'CmspageCtrlAdmin@export');


    // section setting module
    Route::get('setting', 'SettingCtrlAdmin@index', array());
    Route::get('setting/view/{id}', 'SettingCtrlAdmin@view', array());
    Route::get('setting/new', 'SettingCtrlAdmin@add');
    Route::post('setting/save', 'SettingCtrlAdmin@save');
    //Route::get('setting/export', 'CmsBlockCtrlAdmin@export'); 


    // admin User routes
    Route::get('/admin-user', 'AdminUserCtrlAdmin@index', array());
    Route::get('/admin-user/view/{id}', 'AdminUserCtrlAdmin@view', array());
    Route::post('admin-user/save', 'AdminUserCtrlAdmin@save');
    Route::get('admin-user/export', 'AdminUserCtrlAdmin@export');
    Route::get('/admin-user/new/', 'AdminUserCtrlAdmin@add', array());

    // admin User routes
    Route::get('/pledge', 'PledgeCtrlAdmin@index', array());
    Route::get('/pledge/view/{id}', 'PledgeCtrlAdmin@view', array());
    Route::post('pledge/save', 'PledgeCtrlAdmin@save');
    Route::get('pledge/export', 'PledgeCtrlAdmin@export');
    Route::get('/pledge/new/', 'PledgeCtrlAdmin@add', array());

    // admin User routes
    Route::get('/registration-form', 'RegistrationCtrlAdmin@index', array());
    Route::get('/registration-form/view/{id}', 'RegistrationCtrlAdmin@view', array());
    Route::post('registration-form/save', 'RegistrationCtrlAdmin@save');
    Route::get('registration-form/export', 'RegistrationCtrlAdmin@export');
    Route::get('/registration-form/new/', 'RegistrationCtrlAdmin@add', array());


    // section cms block module
    Route::get('/redirect-url', 'RedirectUrlCtrlAdmin@index', array());
    Route::get('/redirect-url/view/{id}', 'RedirectUrlCtrlAdmin@view', array());
    Route::get('redirect-url/new', 'RedirectUrlCtrlAdmin@add');
    Route::post('redirect-url/save', 'RedirectUrlCtrlAdmin@save');
    Route::get('redirect-url/export', 'RedirectUrlCtrlAdmin@export');
    Route::post('redirect-url/dataupload', 'RedirectUrlCtrlAdmin@dataupload');
    Route::get('/', 'LoginController@index', array());
  });
});


Route::get('/{parent_slug}', 'CmspageCtrl@pages', array());
//Route::get('/{parent_slug}/{child_slug}', 'CmspageCtrl@pages',array());
Route::fallback('CmspageCtrl@pageNotFound');
