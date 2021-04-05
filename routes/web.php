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


Route::group(['middleware' => 'auth:petugas'], function () {
	
	Route::group(['middleware' => 'checkLevel:Admin'], function () {
    // Admin 
        Route::get('/dashboard', 'PetugasController@home');
        Route::get('/admin-profile', 'PetugasController@profile_admin');
        Route::patch('/admin-update', 'PetugasController@update_profile');
        Route::get('/daftar-petugas', 'PetugasController@table_petugas');
        Route::get('/tambah-petugas', 'PetugasController@form_petugas');
        Route::get('/edit-petugas/{id}', 'PetugasController@edit_petugas');
        Route::post('/store-petugas', 'PetugasController@store_petugas');
        Route::patch('/update-petugas/{id}', 'PetugasController@update_petugas');
        Route::get('/admin/daftar-masyarakat', 'PetugasController@view_masyarakat');
        Route::get('/nonaktif/{id_petugas}', 'PetugasController@nonaktif_petugas');
        Route::get('/daftar-nonaktif', 'PetugasController@daftar_nonaktif');
        Route::get('/aktif-all', 'PetugasController@aktif_all');
        Route::get('/nonaktif-all', 'PetugasController@nonaktif_all');
        Route::get('/aktif-petugas/{id}', 'PetugasController@aktif_petugas');
        Route::get('/permanent-petugas/{id}', 'PetugasController@hapus_permanent');
        Route::get('/admin/pengaduan', 'PetugasController@admin_pengaduan_masyarakat');
        Route::get('/admin/detai/pengaduan/{id}', 'PetugasController@admin_detail_pengaduan');
        Route::post('/admin/tanggapi', 'PetugasController@admin_tanggapi');
        Route::post('/admin/proses/tanggapi', 'PetugasController@admin_proses_tanggapi');
        //Admin(Cetak Laporan)
        Route::get('/admin/cetak', 'CetakController@view_cetak');
        Route::get('/admin/cetak-laporan', 'CetakController@cetakAll');
        Route::get('/admin/cetak-tabel', 'CetakController@cetak_tabel');
        Route::get('/admin/cetak-tanggal/{tglAwal}/{tglAkhir}', 'CetakController@cetak_tanggal');
        Route::get('/admin/excel', 'CetakController@export');
        Route::get('/admin/cetak-pdf', 'CetakController@cetak_pdf');
    });


    Route::group(['middleware' => 'checkLevel:Petugas'], function () {
    //Petugas
        Route::get('/petugas', 'PetugasController@dashboard');
        Route::get('/petugas-profile', 'PetugasController@view_profile');
        Route::patch('/petugas-update', 'PetugasController@petugas_profile');
    //Petugas(Daftar masyarakat)
        Route::get('/petugas/daftar-masyarakat', 'PetugasController@petugas_daftar_masyarakat');
        Route::get('/petugas/pengaduan', 'PetugasController@petugas_pengaduan');
        Route::get('/petugas/detail/pengaduan/{id}', 'PetugasController@petugas_detail_pengaduan');
        Route::post('/petugas/tanggapan', 'PetugasController@store_tanggapan');
        Route::post('/petugas/tanggapi', 'PetugasController@store_tanggapi');
    });

});

Route::group(['middleware' => 'auth:warga'], function () {
    //masyarakat
    Route::get('/', 'MasyarakatController@view_user');    
    Route::get('/form-pengaduan', 'MasyarakatController@form_user');
    Route::get('/update-user', 'MasyarakatController@form_update');
    Route::get('/data-user', 'MasyarakatController@ubah_diri');
    Route::patch('/update-user', 'MasyarakatController@update_user');
    Route::post('/masyarakat/ajukan', 'MasyarakatController@store');
    Route::get('/masyarakat/tabel-pengaduan/{nik}', 'MasyarakatController@status_tabel');
    Route::get('/masyarakat/detail-pengaduan/{id}', 'MasyarakatController@detail_pengaduan');
});

    //logout
    Route::group(['middleware' => 'auth:petugas,warga'], function() {
        Route::get('/logout', 'AuthController@logout');
    });

    //Login
    Route::get('/login', 'AuthController@view_login')->name('login');
    Route::post('/login', 'AuthController@login_handler');
    Route::get('/create-account', 'MasyarakatController@view_regis');
    Route::post('/register', 'MasyarakatController@register');

