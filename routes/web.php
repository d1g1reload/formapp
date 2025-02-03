<?php

use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('rm064', [FormController::class, 'formRm064'])->name('form.trial');
Route::get('rm071', [FormController::class, 'formRm071'])->name('form.071');
Route::get('rm072', [FormController::class, 'formRm072'])->name('form.072');
Route::get('rm073', [FormController::class, 'formRm073'])->name('form.073');
Route::get('rm074', [FormController::class, 'formRm074'])->name('form.074');
Route::get('rm045a', [FormController::class, 'formRm045A'])->name('form.045a');
Route::get('rm049', [FormController::class, 'formRm049'])->name('form.049');
Route::get('rm049a', [FormController::class, 'formRm049a'])->name('form.049a');
Route::get('rm049b', [FormController::class, 'formRm049b'])->name('form.049b');
Route::get('formTwoPage', [FormController::class, 'formTwoPage'])->name('form.2');
