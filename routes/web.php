<?php

use App\Http\Controllers\GroupController;
use App\Models\Group;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $groups = Group::where('is_active', true)
        ->withCount('players')
        ->orderBy('birth_year')
        ->get();

    return view('welcome', compact('groups'));
})->name('home');

Route::post('/groups', [GroupController::class, 'store'])
    ->name('groups.store');
