<?php

use App\Http\Helpers\AuthHelper;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('backup/table/{table?}', 'BackupController@backupTable')->name('backup.table');
    Route::get('remove-seed', 'BackupController@removeSeed')->name('remove.seed');

    // get current user access token
    Route::get('access-token', function () {
        // clear old tokens
        //backpack_auth()->user()->tokens()->delete();
        $newTokenData = AuthHelper::getAccessToken(backpack_auth()->user());
        return response()->json($newTokenData);
    })->name('access-token.create');
    require __DIR__ . '/shell.php';
    Route::crud('route-list', 'RouteListCrudController');
    Route::crud('contact-us', 'ContactUsCrudController');
    Route::crud('social', 'SocialCrudController');
    Route::crud('footer-link-group', 'FooterLinkGroupCrudController');
    Route::crud('footer-link', 'FooterLinkCrudController');


}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
