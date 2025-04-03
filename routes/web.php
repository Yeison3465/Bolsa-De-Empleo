<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [JobOfferController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/jobs/create', [JobOfferController::class, 'create'])->name('job_offers.create');
    Route::post('/jobs', [JobOfferController::class, 'store'])->name('job_offers.store');
    Route::get('/alljobs', [JobOfferController::class, 'alloffers'])->name('job_offers.all');
    Route::get('/jobs/{jobOffer}', [JobOfferController::class, 'show'])->name('job_offers.show');
    Route::get('/myjobs', [JobOfferController::class, 'myOffers'])->name('job_offers.myOffers')->middleware('auth');
    Route::get('/jobs/{jobOffer}/edit', [JobOfferController::class, 'edit'])->name('job_offers.edit');
    Route::put('/jobs/{jobOffer}', [JobOfferController::class, 'update'])->name('job_offers.update');
    Route::delete('/jobs/{jobOffer}', [JobOfferController::class, 'destroy'])->name('job_offers.destroy');
    Route::get('/jobs/{jobOffer}/apply', [JobOfferController::class, 'apply'])->name('job_offers.apply')->middleware('auth');

    Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store')->middleware('auth');
    Route::get('/jobs/{jobOffer}/applicants', [ApplicationController::class, 'showApplicants'])->name('job_offers.applicants')->middleware('auth');

});

require __DIR__.'/auth.php';
