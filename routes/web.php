<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Project pages
Route::view('/project/wbg-transfer', 'projects.wbg-transfer')->name('project.wbg-transfer');
Route::view('/project/egli-gress-hueppi', 'projects.egli-gress-hueppi')->name('project.egli-gress-hueppi');
Route::view('/project/email-styler', 'projects.email-styler')->name('project.email-styler');
Route::view('/project/miyu-cli', 'projects.miyu-cli')->name('project.miyu-cli');
Route::view('/project/kimiyu', 'projects.kimiyu')->name('project.kimiyu');
Route::view('/project/doodle-horde-2026', 'projects.doodle-horde')->name('project.doodle-horde');
Route::view('/project/aicms', 'projects.aicms')->name('project.aicms');
