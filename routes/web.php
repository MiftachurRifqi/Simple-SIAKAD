<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/login', function () {
    return view('login');
})->name('login'); //akses dari middleware/authenticate
                    //supaya mengembalikan ke page login dan diharuskan login dulu / tdk bisa mengakses lewat url


// ---------------LOGIN AUTHENTICATION-----------------
route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

route::get('/logout', 'LoginController@logout')->name('logout');


// ------------PAGES ROUTE AUTHORISATION---------------------
// Penggunaan middleware untuk mengatur hak akses

// ====== Routes Admin, Dosen, Mahasiswa dapat mengakses =======
route::group(['middleware' => ['auth', 'ceklevel:admin,dosen,mahasiswa']], function (){

    route::get('/beranda', 'BerandaController@index')->name('beranda');
    route::get('/contactme', 'BerandaController@index2')->name('contactme');

    route::get('/cetak_matakuliah', 'MatakuliahController@cetak_matakuliah')->name('cetak_matakuliah');
    route::get('/cetak_nilai', 'NilaiController@cetak_nilai')->name('cetak_nilai');
    route::get('/cetak_jadwal', 'JadwalController@cetak_jadwal')->name('cetak_jadwal');

});

// ======== Routes hanya Admin yang dapat mengakses ==========
route::group(['middleware' => ['auth', 'ceklevel:admin']], function (){

    route::get('/data_user', 'UserController@index')->name('data_user');
    route::get('/create_user', 'UserController@create')->name('create_user');
    route::post('/save_user', 'UserController@store')->name('save_user');
    route::get('/edit_user/{id}', 'UserController@edit')->name('edit_user');
    route::post('/update_user/{id}', 'UserController@update')->name('update_user');
    route::get('/delete_user/{id}', 'UserController@destroy')->name('delete_user');

    route::get('/data_dosen', 'DosenController@index')->name('data_dosen');
    route::get('/create_dosen', 'DosenController@create')->name('create_dosen');
    route::post('/save_dosen', 'DosenController@store')->name('save_dosen');
    route::get('/edit_dosen/{id}', 'DosenController@edit')->name('edit_dosen');
    route::post('/update_dosen/{id}', 'DosenController@update')->name('update_dosen');
    route::get('/delete_dosen/{id}', 'DosenController@destroy')->name('delete_dosen');
    route::get('/cetak_dosen', 'DosenController@cetak_dosen')->name('cetak_dosen');

    route::get('/data_mahasiswa', 'MahasiswaController@index')->name('data_mahasiswa');
    route::get('/create_mahasiswa', 'MahasiswaController@create')->name('create_mahasiswa');
    route::post('/save_mahasiswa', 'MahasiswaController@store')->name('save_mahasiswa');
    route::get('/edit_mahasiswa/{id}', 'MahasiswaController@edit')->name('edit_mahasiswa');
    route::post('/update_mahasiswa/{id}', 'MahasiswaController@update')->name('update_mahasiswa');
    route::get('/delete_mahasiswa/{id}', 'MahasiswaController@destroy')->name('delete_mahasiswa');
    route::get('/cetak_mahasiswa', 'MahasiswaController@cetak_mahasiswa')->name('cetak_mahasiswa');

});

// ============ Routes Admin, Dosen dapat mengakses =============
route::group(['middleware' => ['auth', 'ceklevel:admin,dosen']], function (){

    route::get('/matakuliah', 'MatakuliahController@index')->name('matakuliah');
    route::get('/create_matakuliah', 'MatakuliahController@create')->name('create_matakuliah');
    route::post('/save_matakuliah', 'MatakuliahController@store')->name('save_matakuliah');
    route::get('/edit_matakuliah/{id}', 'MatakuliahController@edit')->name('edit_matakuliah');
    route::post('/update_matakuliah/{id}', 'MatakuliahController@update')->name('update_matakuliah');
    route::get('/delete_matakuliah/{id}', 'MatakuliahController@destroy')->name('delete_matakuliah');
    
    route::get('/nilai', 'NilaiController@index')->name('nilai');
    route::get('/create_nilai', 'NilaiController@create')->name('create_nilai');
    route::post('/save_nilai', 'NilaiController@store')->name('save_nilai');
    route::get('/edit_nilai/{id}', 'NilaiController@edit')->name('edit_nilai');
    route::post('/update_nilai/{id}', 'NilaiController@update')->name('update_nilai');
    route::get('/delete_nilai/{id}', 'NilaiController@destroy')->name('delete_nilai');

    route::get('/jadwal', 'JadwalController@index')->name('jadwal');
    route::get('/create_jadwal', 'JadwalController@create')->name('create_jadwal');
    route::post('/save_jadwal', 'JadwalController@store')->name('save_jadwal');
    route::get('/edit_jadwal/{id}', 'JadwalController@edit')->name('edit_jadwal');
    route::post('/update_jadwal/{id}', 'JadwalController@update')->name('update_jadwal');
    route::get('/delete_jadwal/{id}', 'JadwalController@destroy')->name('delete_jadwal');
    
});

// ====== Routes Hanya Mahasiswa yang dapat mengakses ======
route::group(['middleware' => ['auth', 'ceklevel:mahasiswa']], function (){

    route::get('/matakuliah_m', 'MatakuliahController@index2')->name('matakuliah_m');
    route::get('/create_matakuliah_m', 'MatakuliahController@create2')->name('create_matakuliah_m');
    route::post('/save_matakuliah_m', 'MatakuliahController@store2')->name('save_matakuliah_m');
    route::get('/delete_matakuliah_m/{id}', 'MatakuliahController@destroy2')->name('delete_matakuliah_m');

    route::get('/nilai_m', 'NilaiController@index2')->name('nilai_m');
    route::get('/cetak_nilai_m', 'NilaiController@cetak_nilai')->name('cetak_nilai_m');

    route::get('/jadwal_m', 'JadwalController@index2')->name('jadwal_m');
    route::get('/create_jadwal_m', 'JadwalController@create2')->name('create_jadwal_m');
    route::post('/save_jadwal_m', 'JadwalController@store2')->name('save_jadwal_m');
    route::get('/delete_jadwal_m/{id}', 'JadwalController@destroy2')->name('delete_jadwal_m');

});








// -------------------- TRASH -------------------------
// route::get('/user', 'UserController@index')->name('user');

// route::get('/data_mahasiswa', 'MahasiswaController@index')->name('data_mahasiswa');

// route::get('/data_dosen', 'DosenController@index')->name('data_dosen');

// route::get('/jadwal', 'JadwalController@index')->name('jadwal');

// route::get('/nilai', 'NilaiController@index')->name('nilai');

// route::get('/matakuliah', 'MatakuliahController@index')->name('matakuliah');