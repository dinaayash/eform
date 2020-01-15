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
// Route dengan cekrole Admin -> jadi semua route untuk admin nanti dimasukkan
// disini
Route::middleware(['cekrole:Admin'])->group(function(){
	Route::get('/admin', 'AdminController@dashboardAdmin')->name('admin-ku');
	Route::get('/admin-org', 'AdminController@indexOrg')->name('admin-org');
	Route::get('/admin-non', 'AdminController@indexNon')->name('admin-non');
	Route::get('/admin-perb', 'AdminController@indexPerb')->name('admin-perb');
	Route::get('/admin-org/hapus/{id}','AdminController@deleteAdminOrg');
	Route::get('/admin-org/approve/{id}', 'AdminController@AppvOrg')->name('admin-org-appv');
	Route::get('/admin-org/decline/{id}', 'AdminController@DecOrg')->name('admin-org-dec');
	Route::get('/admin-non/hapus/{id}','AdminController@deleteAdminNon');
	Route::get('/admin-non/approve/{id}', 'AdminController@AppvNon')->name('admin-non-appv');
	Route::get('/admin-non/decline/{id}', 'AdminController@DecNon')->name('admin-non-dec');
	Route::post('/admin-non', 'AdminController@createNon')->name('admin-non-cr');
	Route::get('/admin-profil','AdminController@profilAdmin')->name('admin-profil');
	Route::get('/admin-detail', 'AdminController@detailAdmin')->name('admin-detail');
	Route::post('/admin-profil/update','AdminController@updateAdmin')->name('admin-update');
});

// Route dengan cekrole:User jadi nanti semua route untuk selain admin (user dsbnya masukknya sini)
Route::middleware(['cekrole:User'])->group(function(){
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard-ku');
	Route::get('/profil', 'ProfilController@index');
	Route::get('/profil-detail', 'ProfilController@indexdet');
	// HAK AKSES ORGANIK
	Route::get('/organik', 'HAOrganikController@dataMahasiswa')->name('data-mahasiswa-baru');
	Route::post('/organik', 'HAOrganikController@createOrganik');
	Route::get('/organik/edit/{id}','HAOrganikController@editOrganik');
	Route::post('/organik/update','HAOrganikController@updateOrganik');
	Route::get('/pesan-org', 'HAOrganikController@pesanorganik')->name('pesan-organik');
	
});

	// Route::get('/dashboard', 'DashboardController@index')->name('dashboard-ku');
	
	Route::get('/non-organik', 'HANonorganikController@dataNonorganik')->name('data-non-organik');
	Route::post('/non-organik', 'HANonorganikController@createNonOrganik');
	Route::get('/pesan-non', 'HANonorganikController@pesanNon')->name('data-pesan-lama');
	Route::get('/c-non', 'MahasiswaController@createNonOrganik')->name('create-non-organik');
	Route::get('/non-organik/edit/{id}','HANonorganikController@editNonOrganik');
	Route::post('/non-organik/update','HANonorganikController@updateNonOrganik');
	Route::get('/pegawai/hapus/{id}','HANonorganikController@deleteNonOrganik');

	Route::get('/perubahan', 'PerubahanController@dataPerubahan')->name('data-perubahan');
	Route::post('/perubahan', 'PerubahanController@createPerubahan');
	Route::get('/create-perb', 'MahasiswaController@createperubahan')->name('create-perubahan');
	Route::get('/perubahan/edit/{id}','PerubahanController@editPerubahan');
	Route::post('/perubahan/update','PerubahanController@updatePerubahan');

	Route::get('/preventive', 'PreventiveController@dataPreventive')->name('create-prev');
	Route::post('/preventive', 'PreventiveController@createPreventive');

	Route::get('/user-akses', 'MahasiswaController@dataUser')->name('data-akses-user');
	Route::get('/create-user', 'MahasiswaController@createUser')->name('create-u');

	Route::get('/PIC', 'MahasiswaController@dataPIC')->name('data-pic');
	Route::get('/c-PIC', 'MahasiswaController@createPIC')->name('create-pic');

	Route::get('/Aplikasi', 'AplikasiController@dataAplikasi')->name('data-apk');
	Route::get('/c-Apk', 'AplikasiController@createAplikasi')->name('create-apk');

	Route::get('/PAA', 'PAAController@dataPAA')->name('data-paa');
	Route::get('/c-paa', 'PAAController@createPAA')->name('create-paa');

	Route::get('/NotebookPC', 'NotPcController@dataNotpc')->name('data-notpc');
	Route::get('/c-NotPc', 'NotPcController@createNotpc')->name('create-notpc');

	Route::get('/tipe-perubahan', 'TipePerubahanController@dataTiper')->name('data-tp');
	Route::get('/c-tipe-perubahan', 'TipePerubahanController@createTiper')->name('create-tp');

	Route::get('/rep-organik', 'ReportOrganikController@repOrganik')->name('rep-org');
	Route::get('/rep-non-org', 'ReportNonController@repNonOrganik')->name('rep-non');
	Route::get('/rep-perubahan', 'ReportPerubahanController@repPerubahan')->name('rep-perubahan');

Route::get('/login', 'AuthController@login')->name('login-ku');
// Route::get('/loginq', 'AuthController@loginq')->name('login-qu');
Route::post('/postlogin', 'AuthController@masuk')->name('postlogin-ku');
// Route::post('/postloginq', 'AuthController@masukq')->name('postlogin-qu');
Route::get('/postlogout', 'AuthController@keluar')->name('postlogout-ku');






Route::get('/form-email','FormMailController@index');
// Route::get('/mahasiswa', 'MahasiswaController@index')->name('data-mahasiswa');

Route::get('/hash-code', 'HashController@index');



Route::post('/mahasiswa-baru/create', 'MahasiswaController@create')->name('create-data');
Route::get('/create', 'MahasiswaController@createku')->name('create-data');

Route::get('/mahasiswa-baru/{id}', 'MahasiswaController@edit')->name('edit-data');
Route::post('/edit-mahasiswa-baru', 'MahasiswaController@update');
Route::get('/delete-mahasiswa-baru/{id}', 'MahasiswaController@delete')->name('delete-data');



//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
