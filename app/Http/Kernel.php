'role' => \App\Http\Middleware\RoleMiddleware::class,

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // other admin-only routes
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
    // user To-Do CRUD
});
