<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use DB;


class soalController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function soal(Request $request){
        $ppnbm = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/ppnbm/ppnbm'), true);
        $j=1;
        $hasil=1;
        foreach($ppnbm as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('soalppnbm' )->with('popup', $hasil);
    }

    public function cekSoalPphPasal21(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pphpasal21/pphpasal21'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('soalpphpasal21' )->with('popup', $hasil);
    }

    public function cekSoalPbb(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pbb/pbb'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('soalpbb' )->with('popup', $hasil);
    }

    public function cekSoalPpn(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/ppn/ppn'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('soalppn' )->with('popup', $hasil);
    }
    
    public function cekSoalpphpasal4ayat2(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pphpasal4ayat2/pasal4ayat2'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('soalpphpasal4ayat2' )->with('popup', $hasil);
    }    
    
    public function cekSoalpajakprovdankab(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pajakprovdankab/pajakprovdankab'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('pajakprovdankab' )->with('popup', $hasil);
    }
    
    public function cekSoalpphpasal25(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pphpasal25/pphpasal25'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('pphpasal25' )->with('popup', $hasil);
    }
    
    public function cekSoalpphpasal15(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pphpasal15/pphpasal15'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('pphpasal15' )->with('popup', $hasil);
    }    
    
    public function cekSoalpphpasal22(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pphpasal22/pphpasal22'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('pphpasal22' )->with('popup', $hasil);
    }    
    
    public function cekSoalpphpasal23(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pphpasal23/pphpasal23'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('pphpasal23' )->with('popup', $hasil);
    }    
    
    public function cekSoalpphpasal26(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pphpasal26/pphpasal26'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('pphpasal26' )->with('popup', $hasil);
    }    
    
    public function cekSoalbeamaterai(Request $request){
        $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/beamaterai/beamaterai'), true);
        $j=1;
        $hasil=1;
        foreach($soal as $jawaban){
            if($request->$j == $jawaban['kuncijawaban']){
                $hasil+=1;
            }
            $j++;
        }

        return redirect('soalbeamaterai' )->with('popup', $hasil);
    }
}




