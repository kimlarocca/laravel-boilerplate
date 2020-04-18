<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// style guide
Route::get('/', function () {
    return view('style-guide');
});

// test vue component
// the component can be found here: resources -> js -> components -> ExampleComponent.vue
Route::get('test', function () {
    return view('test');
});
