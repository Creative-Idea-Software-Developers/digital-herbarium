<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Plantas;
use App\Http\Controllers\main;

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

Route::get('/', [main::class,'index']);

Route::get('/resources/{filename}', function($filename){
    $path = storage_path() . '/app/photos/' . $filename;

    if(!File::exists($path)) {
        return response()->json(['message' => 'Image not found.'.$path], 404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/plantas', Plantas::class)->name('plantas');
});