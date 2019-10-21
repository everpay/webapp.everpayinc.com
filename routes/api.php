<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Product Categories
    Route::post('product-categories/media', 'ProductCategoryApiController@storeMedia')->name('product-categories.storeMedia');
    Route::apiResource('product-categories', 'ProductCategoryApiController');

    // Product Tags
    Route::apiResource('product-tags', 'ProductTagApiController');

    // Products
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');

    // Coupon Creates
    Route::apiResource('coupon-creates', 'CouponCreateApiController');

    // Subcriptions Creates
    Route::apiResource('subcriptions-creates', 'SubcriptionsCreateApiController');

    // Create Payments
    Route::apiResource('create-payments', 'CreatePaymentApiController');

    // Customers Creates
    Route::apiResource('customers-creates', 'CustomersCreateApiController');

    // Invoices
    Route::post('invoices/media', 'InvoicesApiController@storeMedia')->name('invoices.storeMedia');
    Route::apiResource('invoices', 'InvoicesApiController');
});
