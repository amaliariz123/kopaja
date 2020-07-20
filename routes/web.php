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
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MemberController@index')->name('index');
Route::get('/bantuan', 'BantuanController@showHelp')->name('bantuan');
Route::get('/tentang', 'DevelopersController@showDev')->name('tentang');

Route::get('/load',function(){
    return view('load');
    })->name('load');

// Route::get('/home', function () {
//     return view('home');
// })->middleware('verified')->name('home');

Route::group( [ 'middleware' => ['auth']], function () {
Route::get('/index', 'MemberController@index');
    
// FOR MEMBERS //

    // halaman profil
    Route::get('/getCity/{id}', 'UserController@getCity')->name('getCity');
    Route::get('/upgrade', 'MemberController@upgrade')->name('upgrade');
    Route::get('/upgrade/show', 'MemberController@showUpgrade')->name('upgrade.show');

    Route::get('/profile/edit/{id}', 'UserController@editProfile')->name('profile.show');
    Route::get('/account/edit/{id}','UserController@editAccount');
    Route::get('/testimoni/create/{id}','TestiController@createTesti');
    Route::post('/update/testimoni/{id}','TestiController@updateTesti');
    Route::post('/update/profile/{id}', 'UserController@updateMemberProfile')->name('member.update');
    Route::post('/update/account/{id}', 'UserController@updateAccount');

    // halaman materi, contoh soal
    Route::get('/materi/show/{id}','MemberController@show')->name('materi.show');
    Route::get('/contoh_soal/show/{id}','MemberController@showContohSoal')->name('contoh_soal.show');
    Route::get('/latihan_soal/show/{id}','MemberController@showLatihanSoal')->name('latihan_soal.show');
    Route::post('/latihan_cek/result/{id}', 'MemberController@cekLatihan')->name('cekLatihan');

    // halaman latihan pajak, pembahasan
    Route::get('/pembahasan_soal/show/{id}','MemberController@pembahasan')->name('pembahasan.show');

    // halaman kuis pajak
    Route::get('/riwayat_kuispajak','MemberController@getQuizHistory')->name('riwayat_kuispajak');
    Route::get('/riwayat_kuispajak/detail/{id_history}','MemberController@detailQuizHistory')->name('detail_riwayat.show');
    Route::get('/kuis_pajak/{id}','MemberController@showKuis')->name('kuis_pajak.show');
    Route::get('/soal_id/{id}','MemberController@showSoal')->name('soal_detail');
    Route::get('/optionChecked/{page}/{jawaban}','MemberController@optionChecked')->name('optionChecked');
    Route::get('/quizResult/{id_quiz}','MemberController@quizResult')->name('quizResult');
    Route::get('/riwayat_kuispajak/delete/{id_history}','MemberController@destroyHistory')->name('history.delete');
   
    Route::get('/downloadPasal4', 'DownloadController@materiPasal4')->name('downloadPasal4');

    Route::get('/downloadPasal15', 'DownloadController@materiPasal15')->name('downloadPasal15');

    Route::get('/downloadPasal21', 'DownloadController@materiPasal21')->name('downloadPasal21');

    Route::get('/downloadPasal22', 'DownloadController@materiPasal22')->name('downloadPasal22');

    Route::get('/downloadPasal23', 'DownloadController@materiPasal23')->name('downloadPasal23');

    Route::get('/downloadPasal25', 'DownloadController@materiPasal25')->name('downloadPasal25');

    Route::get('/downloadPasal26', 'DownloadController@materiPasal21')->name('downloadPasal26');

    Route::get('/downloadPpn', 'DownloadController@materiPpn')->name('downloadPpn');

    Route::get('/downloadPpnbn', 'DownloadController@materiPpnbn')->name('downloadPpnbn');

    Route::get('/downloadBeaMaterai', 'DownloadController@materiBeaMaterai')->name('downloadBeaMaterai');

    Route::get('/downloadPbb', 'DownloadController@materiPbb')->name('downloadPbb');

    Route::get('/downloadPajakProv', 'DownloadController@materiPajakProv')->name('downloadPajakProv');

    Route::get('/downloadPajakKab', 'DownloadController@materiPajakKab')->name('downloadPajakKab');

    Route::get('/contact',function(){
        return view('tentang');
    });

    Route::post('/contact',function(Request $request){
        
        Mail::send(new ContactMail($request));

        return redirect('tentang');
    });

    Route::get('/downloadAllSoal', 'DownloadController@allSOal')->name('downloadAllSoal');

    Route::get('/downloadAllMateri', 'DownloadController@allMateri')->name('downloadAllMateri');

/** 
===========================
 ** Route for panel admin **
============================
**/

//dashboard
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/{year}/{month}', 'DashboardController@index');
Route::get('/dashboard/{month}', 'DashboardController@index');
Route::post('/dashboard', 'DashboardController@filter');

//profil admin
Route::get('/admin/edit/profil/{id}', 'UserController@edit');
Route::post('/admin/update/profil/{id}', 'UserController@update');

//users
Route::get('/users/index', 'UserController@index');
Route::get('/users/get_data', 'UserController@getDataUsers');
Route::get('/user/role/{id}/edit','UserController@editRole');
Route::post('/user/role/update/{id}','UserController@changeUserRole');
Route::get('/members','UserController@indexMember');
Route::get('/members/get_data','UserController@getDataMember');
Route::get('/user/delete/picture/{id}','UserController@deletePicture');

//testi
Route::get('/testimoni', 'TestiController@indexTesti');
Route::get('/testimoni/get_data', 'TestiController@getData');

//pajak
Route::get('/pajak', 'PajakController@indexPajak');
Route::get('/pajak/get_data', 'PajakController@getData');
Route::post('/pajak/store','PajakController@store');
Route::get('/pajak/show/{id}','PajakController@show');
Route::get('/pajak/{id}/edit','PajakController@edit');
Route::post('/pajak/update/{id}', 'PajakController@update');
Route::get('/pajak/delete/{id}','PajakController@delete');

//bantuan
Route::get('/bantuan_aplikasi','BantuanController@indexBantuan');
Route::get('/bantuan_aplikasi/get_data','BantuanController@getData');
Route::post('/bantuan_aplikasi/store', 'BantuanController@store');
Route::get('/bantuan_aplikasi/delete/{id}', 'BantuanController@delete');
// Route::get('/bantuan_aplikasi/{id}/edit', 'BantuanController@edit');
Route::get('/bantuan_aplikasi/import/download','BantuanController@templateImport');
Route::post('/bantuan_aplikasi/import','BantuanController@saveImportBantu');
Route::get('/bantuan_aplikasi/export','BantuanController@exportBantuan');
Route::post('/bantuan_aplikasi/update/{id}', 'BantuanController@update');

//generate kode
Route::get('/generate_kode','KodeController@indexKode');
Route::get('/kode_premium/get_data', 'KodeController@getData');
Route::post('/generate_kode_premium', 'KodeController@generateCode');


//tim pengembang
Route::get('/tim_pengembang','DevelopersController@indexDev');
Route::get('/tim_pengembang/get_data', 'DevelopersController@getData');
Route::post('/tim_pengembang/store', 'DevelopersController@store');
Route::get('/tim_pengembang/delete/{id}', 'DevelopersController@delete');
Route::get('/tim_pengembang/{id}/edit', 'DevelopersController@edit');
Route::get('/tim_pengembang/show/{id}', 'DevelopersController@show');
Route::put('/tim_pengembang/update/{id}','DevelopersController@update');

//contoh soal
Route::get('/contoh_soal', 'SettingSoalController@indexContohSoal');
Route::get('/contoh_soal/get_data', 'SettingSoalController@getDataContoh');
Route::get('/contoh_soal/create/soal/{id}/{nama_pajak}','SettingSoalController@createContoh');
Route::post('/contoh_soal/store', 'SettingSoalController@storeContoh');
Route::get('/contoh_soal/show/{id}/{nama_pajak}', 'SettingSoalController@showContoh')->name('detail.contoh_soal');
Route::get('/contoh_soal/search/soal/{id}', 'SettingSoalController@searchSoal');
Route::get('/contoh_soal/edit/soal/{id}/{nama_pajak}','SettingSoalController@editContoh');
Route::post('/contoh_soal/update/{id}', 'SettingSoalController@updateContoh');
Route::get('/contoh_soal/delete/{id}', 'SettingSoalController@deleteContoh');
Route::post('/contoh_soal/import/soal/{id}','SettingSoalController@saveImportSoal');
Route::get('/contoh_soal/import/download','SettingSoalController@downloadTemplateContoh');
Route::get('/contoh_soal/export/soal/{id}','SettingSoalController@exportContohSoal');

//latihan soal
Route::get('/latihan_soal', 'SettingSoalController@indexLatihanSoal');
Route::get('/latihan_soal/get_data','SettingSoalController@getDataLatihan');
Route::get('/latihan_soal/show/{id}/{nama_pajak}', 'SettingSoalController@showLatihan')->name('detail.soal');
Route::get('/latihan_soal/search/soal/{id}', 'SettingSoalController@search');
Route::get('/latihan_soal/create/soal/{id}/{nama_pajak}', 'SettingSoalController@createSoal');
Route::post('/latihan_soal/store/soal', 'SettingSoalController@storeSoal');
Route::get('/latihan_soal/edit/soal/{id_soal}/{nama_pajak}', 'SettingSoalController@editSoal');
Route::post('/latihan_soal/update/soal/{id}','SettingSoalController@updateSoal');
Route::get('/latihan_soal/delete/soal/{id}', 'SettingSoalController@deleteSoal');
Route::post('/latihan_soal/import/soal/{id}','SettingSoalController@saveImport');
Route::get('/latihan_soal/import/download','SettingSoalController@downloadTemplate');
Route::get('/latihan_soal/export/soal/{id}','SettingSoalController@exportSoal');
Route::get('/latihan_soal/hasil/{id}','SettingSoalController@showResult');
Route::get('/latihan_soal/result/{id}','SettingSoalController@resultLatihan');
Route::get('/latihan_soal/{id}/member/{member_id}','SettingSoalController@showAnswer');

//kuis
Route::get('/kuis','KuisController@index');
Route::get('/kuis/get_data','KuisController@getData');
Route::post('/kuis/create/store','KuisController@store');
Route::get('/kuis/{id}/edit','KuisController@edit');
Route::post('/kuis/edit/update/{id}','KuisController@update');
Route::get('/kuis/delete/{id}','KuisController@delete');
Route::get('/kuis/show/{id}','KuisController@show')->name('detail.kuis.soal');
Route::get('/kuis/create/{id}/soal','KuisController@createSoal');
Route::post('/kuis/create/{id}/soal/store','KuisController@storeSoal');
Route::get('/kuis/edit/{quiz_id}/soal/{id}','KuisController@editSoal');
Route::post('/kuis/edit/{quiz_id}/soal/{id}/update','KuisController@updateSoal');
Route::get('/kuis/delete/{quiz_id}/soal/{id}','KuisController@deleteSoal');
Route::get('/kuis/{quiz_id}/search/soal','KuisController@search');
Route::post('/kuis/import/save/{quiz_id}','KuisController@saveImport');
Route::get('/kuis/export/soal/{quiz_id}','KuisController@exportSoal');
Route::get('/kuis/hasil/{id}','KuisController@showResult');
Route::get('/kuis/result/{id}','KuisController@resultKuis');
Route::get('/kuis/{quiz_id}/member/{member_id}','KuisController@showAnswer');

//pembahasan soal
Route::get('pembahasan_soal','PembahasanController@index')->name('pembahasan.soal');
Route::get('pembahasan_soal/get_data','PembahasanController@getData');
Route::post('pembahasan_soal/get_soal','PembahasanController@getSoal');
Route::get('pembahasan_soal/create/{id_soal}','PembahasanController@create');
Route::post('pembahasan_soal/create/store/{id_soal}','PembahasanController@store');
Route::get('pembahasan_soal/edit/{id_soal}','PembahasanController@edit');
Route::post('pembahasan_soal/edit/update/{id_soal}','PembahasanController@update');
Route::get('pembahasan_soal/delete/{id_soal}','PembahasanController@delete');

/* ROUTE FILE IN STORAGE */
Route::group(['prefix' => '/storage'], function () {
    Route::get('tim_pengembang/{id}', 'DevelopersController@getPicture');
    Route::get('pajak/{id}', 'PajakController@openPdf');
    Route::get('kuis/{id}','KuisController@getImageUrl');
    Route::get('pembahasan/{id}','PembahasanController@getImageUrl');

});

});
