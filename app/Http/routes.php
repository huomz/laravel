<?php
/**
 * Created by PhpStorm.
 * User: hmzhmz
 * Date: 2016/11/22
 * Time: 22:31
 */

use App\Task;
use Illuminate\Http\Request;

/**
 * Display All Tasks
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * Add A New Task
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    //
});