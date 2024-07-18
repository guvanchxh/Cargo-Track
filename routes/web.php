<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransportVehicleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\TransportMethodController;
use App\Http\Controllers\DeliveryStatusController;

Route::get('/cargos', [CargoController::class, 'index']);
Route::get('/cargos/{id}', [CargoController::class, 'show']);
Route::post('/cargos', [CargoController::class, 'store']);
Route::put('/cargos/{id}', [CargoController::class, 'update']);
Route::delete('/cargos/{id}', [CargoController::class, 'destroy']);

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::post('/orders', [OrderController::class, 'store']);
Route::put('/orders/{id}', [OrderController::class, 'update']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);

Route::get('/transport-vehicles', [TransportVehicleController::class, 'index']);
Route::get('/transport-vehicles/{id}', [TransportVehicleController::class, 'show']);
Route::post('/transport-vehicles', [TransportVehicleController::class, 'store']);
Route::put('/transport-vehicles/{id}', [TransportVehicleController::class, 'update']);
Route::delete('/transport-vehicles/{id}', [TransportVehicleController::class, 'destroy']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::get('/shipments', [ShipmentController::class, 'index']);
Route::get('/shipments/{id}', [ShipmentController::class, 'show']);
Route::post('/shipments', [ShipmentController::class, 'store']);
Route::put('/shipments/{id}', [ShipmentController::class, 'update']);
Route::delete('/shipments/{id}', [ShipmentController::class, 'destroy']);

Route::get('/transport-methods', [TransportMethodController::class, 'index']);
Route::get('/transport-methods/{id}', [TransportMethodController::class, 'show']);
Route::post('/transport-methods', [TransportMethodController::class, 'store']);
Route::put('/transport-methods/{id}', [TransportMethodController::class, 'update']);
Route::delete('/transport-methods/{id}', [TransportMethodController::class, 'destroy']);

Route::get('/delivery-statuses', [DeliveryStatusController::class, 'index']);
Route::get('/delivery-statuses/{id}', [DeliveryStatusController::class, 'show']);
Route::post('/delivery-statuses', [DeliveryStatusController::class, 'store']);
Route::put('/delivery-statuses/{id}', [DeliveryStatusController::class, 'update']);
Route::delete('/delivery-statuses/{id}', [DeliveryStatusController::class, 'destroy']);
