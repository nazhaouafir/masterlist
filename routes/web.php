<?php

use App\Http\Livewire\Accessories\AddAccessory;
use App\Http\Livewire\Accessories\ProvidersList as AccessoriesProvidersList;
use App\Http\Livewire\Labelings\AddLabelings;
use App\Http\Livewire\Labelings\ProvidersList as LabelingsProvidersList;
use App\Http\Livewire\Packaging\AddPackaging;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Packaging;
use App\Http\Livewire\Packaging\PackagingsList;
use App\Http\Livewire\Packaging\ProvidersList as PackagingProvidersList;
use App\Http\Livewire\Provider\ProvidersList;
use App\Http\Livewire\Saurcing\Packagings;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/add-packaging', AddPackaging::class);

Route::get('/packagingsList', PackagingsList::class);
Route::get('/providers-list', ProvidersList::class);
Route::get('/packagings_providers', PackagingProvidersList::class);
Route::get('/accessories_providers', AccessoriesProvidersList::class);
Route::get('/labelings_providers', LabelingsProvidersList::class);
Route::get('/saurcing_packagings', Packagings::class);