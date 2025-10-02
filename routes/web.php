<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\ReportController;

Route::get('/', function(){ return view('welcome'); });

Route::resource('students', StudentController::class);
Route::get('scan', [ScanController::class, 'index'])->name('scan.index');
Route::post('scan', [ScanController::class, 'scan'])->name('scan.scan');
Route::get('reports', [ReportController::class, 'index'])->name('reports.index');
