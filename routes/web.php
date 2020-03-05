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

Route::resource('register', 'Auth\RegisterController');

Route::group( [ 'middleware' => 'auth' ], function () {
    Route::get('profile','Auth\RegisterController@profileMember')->name('profile');
    Route::post('profile/update/{id}','Auth\RegisterController@update')->name('profile');

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
});
Route::get('/tentang',function(){
    return view('tentang');
})->name('tentang');


Route::get('/bantuan',function(){
    return view('bantuan');
})->name('bantuan');



Route::get('/home', function () {
    return view('index');
})->middleware('verified')->name('home');

Route::get('/getCity/{id}', 'Auth\RegisterController@getCity')->name('getCity');
Route::get('/getKecamatan/{id}', 'Auth\RegisterController@getKecamatan')->name('getKecamatan');


/* ROUTE PANEL ADMIN */

Route::get('/dashboard', 'DashboardController@index');

Route::get('/admin/edit/profil/{id}', 'AdminController@edit');
Route::post('/admin/store/profil/{id}', 'AdminController@update');

Route::get('/members', 'MemberController@indexMember');
Route::get('/testimoni', 'MemberController@indexTesti');

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


Route::get('/tentang_aplikasi','TentangController@indexTentang');

Route::get('/contact_media','ContactController@indexContact');

//tim pengembang
Route::get('/tim_pengembang','DevelopersController@indexDev');
Route::get('/tim_pengembang/get_data', 'DevelopersController@getData');
Route::post('/tim_pengembang/store', 'DevelopersController@store');
Route::get('/tim_pengembang/delete/{id}', 'DevelopersController@delete');
Route::get('/tim_pengembang/{id}/edit', 'DevelopersController@edit');
Route::put('/tim_pengembang/update/{id}','DevelopersController@update');

//contoh soal
Route::get('/contoh_soal', 'SettingSoalController@indexContohSoal');
Route::get('/contoh_soal/get_data', 'SettingSoalController@getDataContoh');
Route::get('/contoh_soal/create', 'SettingSoalController@create');
Route::post('/contoh_soal/store', 'SettingSoalController@store');
Route::get('/contoh_soal/show/{id}', 'SettingSoalController@show');
Route::get('/contoh_soal/{id}/edit','SettingSoalController@edit');
Route::post('/contoh_soal/update/{id}', 'SettingSoalController@update');
Route::get('/contoh_soal/delete/{id}', 'SettingSoalController@delete');


Route::get('/latihan_soal', 'SettingSoalController@indexLatihanSoal');

/* ROUTE FILE IN STORAGE */
Route::group(['prefix' => '/storage'], function () {
    Route::get('tim_pengembang/{id}', 'DevelopersController@getPicture');
    Route::get('pajak/{id}', 'DevelopersController@getPdf');
});