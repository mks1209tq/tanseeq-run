<?php
// routes/web.php
use App\Http\Controllers\RunRegistrationController;

// Root route - redirect to registration
Route::get('/', function () {
    return redirect('/tanseeq-run');
});

// Registration routes
Route::get('/tanseeq-run', [RunRegistrationController::class, 'create']);
Route::post('/tanseeq-run', [RunRegistrationController::class, 'store']);
Route::get('/api/employee', [RunRegistrationController::class, 'getEmployee']);
Route::get('/tanseeq-run/list', [RunRegistrationController::class, 'index']);
Route::get('/tanseeq-run/export', [RunRegistrationController::class, 'export']);

