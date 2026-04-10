<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Ideas;
use App\Models\Post;

Route::view('/', 'welcome', [
    'greeting' => 'Hello, World!',
    'name' => 'John Doe',
    'age' => 30,
    'tasks' => [
        'Learn Laravel',
        'Build a project',
        'Deploy to production',
    ],
]);

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/formtest', function(){
    $posts = Post::all();

    return view('formtest',[
        'posts' => $posts,
    ]);
});

Route::post('/formtest', function(){
    Post::create([
        'description' => request('description'),
    ]);

    return redirect('/formtest');
});

Route::delete('/formtest/{id}', function ($id) {
    Post::findOrFail($id)->delete();

    return redirect('/formtest');
});

Route::get('/delete', function(){
    Post::truncate();  

    return redirect('/formtest');
});

Route::get('/register', function () {
    return view('user_registration');
});
use App\Models\User;
use Illuminate\Http\Request;
Route::post('/users/store', function (Request $request) {
    User::create($request->all());
    return redirect('/users');
});
Route::get('/users', function () {
    $users = User::all();
    return view('users_table', compact('users'));
});
Route::post('/users/delete/{id}', function ($id) {
    User::findOrFail($id)->delete();
    return redirect('/users');
});
Route::get('/users/edit/{id}', function ($id) {
    $user = User::findOrFail($id);
    return view('edit_user', compact('user'));
});
Route::post('/users/update/{id}', function (Request $request, $id) {
    $user = User::findOrFail($id);
    $user->update($request->all());

    return redirect('/users');
});
