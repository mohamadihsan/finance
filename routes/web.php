<?php
use App\Member;
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
// php artisan make:controller TestController --resource
// php artisan route:list
Route::resource('test', 'TestController');
Route::resource('member', 'Member\MemberController');

Route::get('/insert', function () {
    // DB::insert('INSERT INTO members (nama, email) values (?,?)', ['mohamad ihsan', 'mohamad_ihsan100@yahoo.co.id']);
    $data = array(
        'nama'  => 'Mohamad Ihsan', 
        'email' => 'mohamad_ihsan100@yahoo.co.id'
    );
    DB::table('members')->insert($data);
    echo 'Data berhasil ditambah';
    // if (DB::connection()->getDatabaseName())
    // {
    // return 'Connected to the DB: ' . DB::connection()->getDatabaseName();
    // }
});

Route::get('/read', function () {
    $query = DB::table('members')->get();
    // $query = DB::table('members')->where('id', 1)->first();
    var_dump($query);
});

Route::get('/update', function () {
    $data = array(
        'nama' => 'Mohamad Saeful Ihsan' 
    );
    return DB::table('members')->where('id', 2)->update($data);
    
});

Route::get('/delete', function () {
    return DB::table('members')->where('id', 2)->delete();
});

Route::get('/all', function () {
    $member = Member::all();
    return $member;
});

Route::get('/find', function () {
    return Member::find(4);
});

Route::get('/tambah', function () {
    $member = new Member();
    $member->nama = "Irfan Rangga";
    $member->email = "rangga@gmail.com";

    $member->save();
});

Route::get('/mass', function () {
    $member = Member::create([
        'nama'  => 'Julio Febryanto',
        'email' => 'julio@gmail.com'
    ]);
    return $member;
});

Route::get('/updatemass', function () {
    $member = Member::find(1);
    $member->update([
        'nama'  => 'Master Laravel'
    ]);
    return $member;
});

Route::get('/deletemass', function () {
    $member = Member::find(1);
    $member->delete();
    return $member;
});

Route::get('/softdelete', function () {
    return Member::destroy(3);
});

Route::get('/trash', function () {
    // return Member::withTrashed()->get(); //semua data termasuk yg di soft delete
    return Member::onlyTrashed()->get(); // hanya yang di soft delete saja
});

Route::get('/restore', function () {
    $member = Member::onlyTrashed()->restore();
    return $member;
});

Route::get('/forcedelete', function () {
    Member::find(3)->forceDelete();
});