<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use DB;


class DownloadController extends Controller {
    public function materiBeaMaterai( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi Bea Materai.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi Bea Materai.pdf', $headers);
    }    
    
    public function materiPajakKab( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi Pajak Kabupaten_Kota.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi Pajak Kabupaten_Kota.pdf', $headers);
    }    
    
    public function materiPajakProv( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi Pajak Propinsi.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi Pajak Propinsi.pdf', $headers);
    }
    
    public function materiPasal4( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PPh Pasal 4 Ayat.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PPh Pasal 4 Ayat.pdf', $headers);
    }
    
    public function materiPasal15( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PPh Pasal 15.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PPh Pasal 15.pdf', $headers);
    }
    
    public function materiPasal21( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PPh Pasal 21.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PPh Pasal 21 dan 26.pdf', $headers);
    }
    
    public function materiPasal22( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PPh Pasal 22.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PPh Pasal 22.pdf', $headers);
    }
    
    public function materiPasal23( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PPh Pasal 23.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PPh Pasal 23.pdf', $headers);
    }
    
    public function materiPasal25( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PPh Pasal 25.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PPh Pasal 25.pdf', $headers);
    }
    
    public function materiPbb( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PBB.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PBB.pdf', $headers);
    }
    
    public function materiPpn( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PPN.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PPN.pdf', $headers);
    }
    
    public function materiPpnbn( Request $request )
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/Materi PPnBM.pdf";
        // $file= public_path(). "/download/info.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'Materi PPnBM.pdf', $headers);
    }


    public function allSOal( Request $request )
    {   
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/SOAL PERPAJAKAN + Kunci Jawaban.pdf";
        // $file= public_path(). "/download/info.pdf";
        
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'SOAL PERPAJAKAN + Kunci Jawaban.pdf', $headers);
    }

    public function allMateri( Request $request )
    {   
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/materi.zip";
        // $file= public_path(). "/download/info.pdf";
        
        $headers = [
            'Content-Type' => 'application/zip',
        ];

        return response()->download($file, 'Semua Materi.zip', $headers);
    }
}




