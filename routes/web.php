<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Product Categories
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tags
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Products
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::resource('products', 'ProductController');

    // Coupon Creates
    Route::delete('coupon-creates/destroy', 'CouponCreateController@massDestroy')->name('coupon-creates.massDestroy');
    Route::resource('coupon-creates', 'CouponCreateController');

    // Subcriptions Creates
    Route::delete('subcriptions-creates/destroy', 'SubcriptionsCreateController@massDestroy')->name('subcriptions-creates.massDestroy');
    Route::resource('subcriptions-creates', 'SubcriptionsCreateController');

    // Create Payments
    Route::delete('create-payments/destroy', 'CreatePaymentController@massDestroy')->name('create-payments.massDestroy');
    Route::resource('create-payments', 'CreatePaymentController');

    // Reports
    Route::resource('reports', 'ReportsController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Customers Creates
    Route::delete('customers-creates/destroy', 'CustomersCreateController@massDestroy')->name('customers-creates.massDestroy');
    Route::resource('customers-creates', 'CustomersCreateController');

    // Invoices
    Route::delete('invoices/destroy', 'InvoicesController@massDestroy')->name('invoices.massDestroy');
    Route::post('invoices/media', 'InvoicesController@storeMedia')->name('invoices.storeMedia');
    Route::resource('invoices', 'InvoicesController');

    // Integrations
    Route::resource('integrations', 'IntegrationsController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);
});
