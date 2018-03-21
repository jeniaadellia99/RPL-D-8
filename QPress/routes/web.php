<?php


Auth::routes();
Route::get('/tugas', 'tugasController@index');
Route::get('/home', 'HomeController@index');
Route::get('/','HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');



Route::get('dashboard', function(){
    return view('admin.page.dashboard');
})->name('dashboard');

Route::get('data-kelas', function(){
    return view('admin.page.data_kelas');
})->name('data-kelas'); 

Route::get('data-mahasiswa', function(){
    return view('admin.page.data_mhs');
})->name('data-mhs');

Route::get('jadwal', function(){
    return view('admin.page.jadwal');
})->name('jadwal');

Route::get('data-dosen', function(){
    return view('admin.page.data_dosen');
})->name('data-dosen');

Route::get('mata-kuliah', function(){
    return view('admin.page.mata_kuliah');
})->name('mata-kuliah');

Route::get('ruangan', function(){
    return view('admin.page.ruangan');
})->name('ruangan');

// Route::get('edit-data-dosen', function(){
//     return view('admin.page.edit_data_dosen');
// })->name('edit-data-dosen');






// Auth::routes();

// 
