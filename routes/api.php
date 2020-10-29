<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->middleware(['auth:api'])->group(function () {
    Route::get('posts/search/{title}', [PostsController::class, 'search']);
    Route::apiResource('posts', PostsController::class);
});

Route::get('/name', function () {
    return [
        'name' => 'Jiraporn Kowootthitam',
        'id' => '6110401587'
    ];
});

//Route::get('/posts', function () {
//    return \App\Models\Post::all();
//});

//Route::post('/posts', function (Request $request) {
//    $post = new \App\Models\Post;
//    $post->title = $request->input('title');
//    $post->content = $request->input('content');
//    $post->user_id = 1;
//    $post->save();
//    return $post;
//});
//
//Route::put('/posts', function () {
//    return [
//        'title' => 'You requested by put method'
//    ];
//});
