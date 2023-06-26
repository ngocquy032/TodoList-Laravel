<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

use Illuminate\Http\Request;

// Route::get('about',function(){
//     return 'About Conten';
// });

// //tham so

// Route::get('about/{theSubject}', function($theSubject){
//     return $theSubject . ' content go here';
// });

// Route::get('/demo',[DemoController::class, 'showDetails']);

// Route::get('/demo/{theSubject}',[DemoController::class, 'showSubject']);
// // view
// Route::get('chao/{user}', function ($user) {
//     return view('demo', ['user' => $user]);
// });

// //them du lieu db
// Route::get('/insert', function (){
//     DB::insert('insert into posts (title, body) values (?, ?)', ['PHP laravel', 'laravel is the best']);
//     return 'DONE';
// });

// //truy van db
// Route::get('/read', function(){
//     $result = DB:: select('select * from posts where id = ?', [1]);
//     return $result;

//     // lọc mảng
//     foreach($result as $posts){
//         return $posts->body;
//     }

// });

//bai tap1
Route::get('/', function () {
    $product = DB::table('products')->get();
    return view('/infomation', compact('product'));
});

//add
Route::get('/add', function(){
    return view('/addProducts');
});
// Route::get('/', [ProductsController::class, 'infomation']);

Route::post('/create', function (Request $request) {
    DB::table('products')->insert([
        'name' => $request->input('name'),
        'color' => $request->input('color'),
        'weight' => $request->input('weight'),
        'price' => $request->input('price'),
    ]);
    return redirect('/')->with('success');
});


//show
Route::get('/show', function(){
    return view('/showProducts');
});
Route::get('/show/{id}', [ProductsController::class, 'show']);

//update
Route::get('/update/{id}', function ($id) {
    $product = Products::findOrFail($id);
    return view('updateProducts', compact('product'));
});
Route::post('/update/{id}', [ProductsController::class, 'update'])->name('update');

//delete

Route::delete('/delete/{p}', function ($id) {
    $product = Products::findOrFail($id);
    $product->delete();
    return redirect('/');
});



