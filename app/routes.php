<?php
use Application\Route\Route;
use App\Controllers\PainelController;

Route::controller('/home', PainelController::class);
Route::controller('/painel', PainelController::class);