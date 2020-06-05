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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', function () {
    return view('home');
})->middleware('verified')->name('home');

Route::group( [ 'middleware' => 'auth' ], function () {
    Route::get('/index', function () {
        return view('index');
        })->name('index');
    
    Route::get('/profile/edit/{id}', 'UserController@editProfile');
    Route::get('/account/edit/{id}','UserController@editAccount');
    Route::post('/update/profile/{id}', 'UserController@updateMemberProfile');
    Route::post('/update/account/{id}', 'UserController@updateAccount');

    Route::get('/pajakpusatpasal4',function(){
        return view('materi.pasal4');
    })->name('pasal4');

    Route::get('/latihansoalpasal4',function(){
        return view('latihansoal.latsoalpasal4');
    })->name('latsoalpasal4');

    Route::get('/downloadPasal4', 'DownloadController@materiPasal4')->name('downloadPasal4');


    Route::get('/soalpphpasal4ayat2',function(){
        return view('soal.soalpphpasal4ayat2');
    })->name('soalpphpasal4ayat2');


    Route::get('/cekSoalpphpasal4ayat2', 'soalController@cekSoalpphpasal4ayat2')->name('cekSoalpphpasal4ayat2');

    Route::get('/latihansoalpasal15',function(){
        return view('latihansoal.latsoalpasal15');
    })->name('latsoalpasal15');

    Route::get('/pajakpusatpasal15',function(){
        return view('materi.pasal15');
    })->name('pasal15');

    Route::get('/pphpasal15',function(){
        return view('soal.pphpasal15');
    })->name('pphpasal15');

    Route::get('/cekSoalpphpasal15', 'soalController@cekSoalpphpasal15')->name('cekSoalpphpasal15');

    Route::get('/downloadPasal15', 'DownloadController@materiPasal15')->name('downloadPasal15');


    Route::get('/pajakpusatpasal21',function(){
        return view('materi.pasal21');
    })->name('pasal21');

    Route::get('/latihansoalpasal21',function(){
        return view('latihansoal.latsoalpasal21');
    })->name('latsoalpasal21');

    Route::get('/soalpasal21',function(){
        return view('soal.soalpasal21');
    })->name('soalpasal21');

    Route::get('/soalpphpasal21',function(){
        return view('soal.soalpphpasal21');
    })->name('soalpphpasal21');

    Route::get('/cekSoalPphPasal21', 'soalController@cekSoalPphPasal21')->name('cekSoalPphPasal21');

    Route::get('/downloadPasal21', 'DownloadController@materiPasal21')->name('downloadPasal21');


    Route::get('/pphpasal26',function(){
        return view('soal.pphpasal26');
    })->name('pphpasal26');

    Route::get('/cekSoalpphpasal26', 'soalController@cekSoalpphpasal26')->name('cekSoalpphpasal26');


    Route::get('/pajakpusatpasal22',function(){
        return view('materi.pasal22');
    })->name('pasal22');

    Route::get('/latihansoalpasal22',function(){
        return view('latihansoal.latsoalpasal22');
    })->name('latsoalpasal22');

    Route::get('/pphpasal22',function(){
        return view('soal.pphpasal22');
    })->name('pphpasal22');

    Route::get('/cekSoalpphpasal22', 'soalController@cekSoalpphpasal22')->name('cekSoalpphpasal22');

    Route::get('/downloadPasal22', 'DownloadController@materiPasal22')->name('downloadPasal22');


    Route::get('/pajakpusatpasal23',function(){
        return view('materi.pasal23');
    })->name('pasal23');

    Route::get('/latihansoalpasal23',function(){
        return view('latihansoal.latsoalpasal23');
    })->name('latsoalpasal23');

    Route::get('/pphpasal23',function(){
        return view('soal.pphpasal23');
    })->name('pphpasal23');

    Route::get('/cekSoalpphpasal23', 'soalController@cekSoalpphpasal23')->name('cekSoalpphpasal23');

    Route::get('/downloadPasal23', 'DownloadController@materiPasal23')->name('downloadPasal23');


    Route::get('/pajakpusatpasal25',function(){
        return view('materi.pasal25');
    })->name('pasal25');

    Route::get('/latihansoalpasal25',function(){
        return view('latihansoal.latsoalpasal25');
    })->name('latsoalpasal25');

    Route::get('/pphpasal25',function(){
        return view('soal.pphpasal25');
    })->name('pphpasal25');

    Route::get('/cekSoalpphpasal25', 'soalController@cekSoalpphpasal25')->name('cekSoalpphpasal25');

    Route::get('/downloadPasal25', 'DownloadController@materiPasal25')->name('downloadPasal25');


    Route::get('/pajakpusatpasal26',function(){
        return view('materi.pasal26');
    })->name('pasal26');

    Route::get('/soalpphpasal26',function(){
        return view('soal.pphpasal26');
    })->name('soalpphpasal26');

    Route::get('/cekSoalpphpasal26', 'soalController@cekSoalpphpasal26')->name('cekSoalpphpasal26');

    Route::get('/downloadPasal26', 'DownloadController@materiPasal21')->name('downloadPasal26');



    Route::get('/pajakpusatppn',function(){
        return view('materi.ppn');
    })->name('ppn');

    Route::get('/latihansoalppn',function(){
        return view('latihansoal.latsoalppn');
    })->name('latsoalppn');

    Route::get('/soalppn',function(){
        return view('soal.soalppn');
    })->name('soalppn');

    Route::get('/cekSoalPpn', 'soalController@cekSoalPpn')->name('cekSoalPpn');

    Route::get('/downloadPpn', 'DownloadController@materiPpn')->name('downloadPpn');



    Route::get('/pajakpusatppnbm',function(){
        return view('materi.ppnbm');
    })->name('pnbm');


    Route::get('/soalppnbm',function(){
        return view('soal.soalppnbm');
    })->name('soalppnbm');

    Route::get('/cekSoalppnbm', 'soalController@soal')->name('cekSoalppnbm');

    Route::get('/downloadPpnbn', 'DownloadController@materiPpnbn')->name('downloadPpnbn');



    Route::get('/latihansoalppnbm',function(){
        return view('latihansoal.latsoalppnbm');
    })->name('latsoalppnbm');

    Route::get('/pajakpusatbeamterai',function(){
        return view('materi.beamaterai');
    })->name('beamaterai');

    Route::get('/latihansoalbeamaterai',function(){
        return view('latihansoal.latsoalbeamaterai');
    })->name('latsoalbeamaterai');

    Route::get('/soalbeamaterai',function(){
        return view('soal.soalbeamaterai');
    })->name('soalbeamaterai');

    Route::get('/cekSoalbeamaterai', 'soalController@cekSoalbeamaterai')->name('cekSoalbeamaterai');

    Route::get('/downloadBeaMaterai', 'DownloadController@materiBeaMaterai')->name('downloadBeaMaterai');


    Route::get('/pbb',function(){
        return view('materi.pbb');
    })->name('pbb');

    Route::get('/latihansoalpbb',function(){
        return view('latihansoal.latsoalpbb');
    })->name('latsoalpbb');

    Route::get('/soalpbb',function(){
        return view('soal.soalpbb');
    })->name('soalpbb');

    Route::get('/cekSoalPbb', 'soalController@cekSoalPbb')->name('cekSoalPbb');

    Route::get('/downloadPbb', 'DownloadController@materiPbb')->name('downloadPbb');



    Route::get('/pajakprovinsi',function(){
        return view('materi.pajakprov');
    })->name('pajakprovinsi');

    Route::get('/latihansoalpajakprov',function(){
        return view('latihansoal.latsoalpajakprov');
    })->name('latsoalpajakprov');

    Route::get('/downloadPajakProv', 'DownloadController@materiPajakProv')->name('downloadPajakProv');



    Route::get('/pajakkabupaten',function(){
        return view('materi.pajakkab');
    })->name('pajakkabupaten');

    Route::get('/latihansoalpajakkab',function(){
        return view('latihansoal.latsoalpajakkab');
    })->name('latsoalpajakkab');

    Route::get('/downloadPajakKab', 'DownloadController@materiPajakKab')->name('downloadPajakKab');



    Route::get('/pajakprovdankab',function(){
        return view('soal.pajakprovdankab');
    })->name('pajakprovdankab');

    Route::get('/cekSoalpajakprovdankab', 'soalController@cekSoalpajakprovdankab')->name('cekSoalpajakprovdankab');

    Route::get('/contact',function(){
        return view('tentang');
    });

    Route::post('/contact',function(Request $request){
        
        Mail::send(new ContactMail($request));

        return redirect('tentang');
    });


    Route::get('/downloadAllSoal', 'DownloadController@allSOal')->name('downloadAllSoal');

    Route::get('/downloadAllMateri', 'DownloadController@allMateri')->name('downloadAllMateri');

Route::get('/tentang',function(){
    return view('tentang');
})->name('tentang');


Route::get('/bantuan',function(){
    return view('bantuan');
})->name('bantuan');





Route::get('/getCity/{id}', 'Auth\RegisterController@getCity')->name('getCity');
Route::get('/getKecamatan/{id}', 'Auth\RegisterController@getKecamatan')->name('getKecamatan');


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
Route::get('/bantuan_aplikasi/show/{id}', 'BantuanController@show');
Route::get('/bantuan_aplikasi/{id}/edit', 'BantuanController@edit');
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
Route::post('/contoh_soal/store', 'SettingSoalController@storeContoh');
Route::get('/contoh_soal/show/{id}', 'SettingSoalController@showContoh');
Route::get('/contoh_soal/{id}/edit','SettingSoalController@editContoh');
Route::post('/contoh_soal/update/{id}', 'SettingSoalController@updateContoh');
Route::get('/contoh_soal/delete/{id}', 'SettingSoalController@deleteContoh');

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
Route::get('/latihan_soal/import/soal/{id}','SettingSoalController@import');
Route::post('/latihan_soal/import/soal/{id}','SettingSoalController@saveImport');
Route::get('/latihan_soal/import/download','SettingSoalController@downloadTemplate');



/* ROUTE FILE IN STORAGE */
Route::group(['prefix' => '/storage'], function () {
    Route::get('tim_pengembang/{id}', 'DevelopersController@getPicture');
    Route::get('pajak/{id}', 'DevelopersController@getPdf');
    Route::get('contoh_soal/question_image/{id}', 'SettingSoalController@getQuestionImage');
    Route::get('contoh_soal/answer_image/{id}', 'SettingSoalController@getAnswerImage');
});

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
