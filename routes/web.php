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

Route::get('/', function () {
    return view('welcome');
    // return redirect('/users');
});

Route::get('about', function () {
    return 'About Page';
});

// Route::get('users', function () {
//     $users = [
//         ['id'=>'1', 'username'=>'ihsan', 'password'=>'12345'],
//         ['id'=>'2', 'username'=>'admin', 'password'=>'admin'],
//         ['id'=>'3', 'username'=>'client', 'password'=>'client']
//     ];

//     echo '<ul>';
//     foreach ($users as $user) {
//         echo '<li> <a href="' . route('detail.user', $user['id']) . '">' . $user['username'] . '</a></li>';
//     }
//     echo '</ul>';
// });

// Route::get('users', 'UserController@index');
// Route::get('users/create', 'UserController@create');
// Route::post('users/save', 'UserController@save');

// Route::get('users/{id}', ['as' => 'detail.user', function ($id) {
//     echo 'Data dengan id ' . $id . ' telah diterima';
// }]);

Route::resource('user', 'User\UserController');
