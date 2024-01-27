
<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; //add ProductController
 
Route::get('/', function () {
   return to_route('p.index');
});
 
// Route::controller(ProductController::class)->group(function () {
//     Route::get('/products/create', 'create')->name('p.create');
//     Route::get('/products/{id}', 'show')->name('p.show');
//     Route::get('/products/{id}/edit', 'edit')->name('p.edit');
//     Route::post('/products', 'store');
//     Route::get('/', 'index');
//     Route::delete('/products/{id}', 'destroy')->name('p.destroy');
    
// });
Route::name('p.')->group(function(){

    Route::resource('/products', ProductController::class)->names([
        'create' => 'create',
        'index' => 'index',
        'show' => 'show',
        'edit' => 'edit',
        'store' => 'store',
        'update' => 'update',
        'destroy' => 'destroy',
    ]);

});




