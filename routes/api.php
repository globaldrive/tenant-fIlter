<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tenant;
use Gd\TenantFilter\TenantFilter;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/


Route::prefix('tenants')->group(function () {
    Route::get('/', [TenantFilter::class, 'getTenants']);
    Route::get('/globalTenantFilter', [TenantFilter::class, 'getGlobalTenantFilter']);
    Route::post('/globalTenantFilter', [TenantFilter::class, 'setGlobalTenantFilter']);
})->middleware('auth');
