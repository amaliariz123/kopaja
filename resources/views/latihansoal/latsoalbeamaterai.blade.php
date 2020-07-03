@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h2>{{$name->tax->name}}</h2>
                                <p>Praktik Perhitungan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection
@section('content')
<section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <h1>Praktik Perhitungan</h1>
                     <br>
                     @foreach($example as $item)
                     <h4>{{$item->title}}</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        {{$item->question_text}}
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            {{$item->answer_text}}
                        </div>
                     </div>

                     <br>
                     @endforeach
                     <h4>Berapakah tarif Bea Materai?</h4>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            1.	Tarif Bea Meterai Rp. 6.000 untuk dokumen nomor urut 1, 2, 3 dan 6 Obyek Bea Meterai di atas.<br>
                            2.	Cek dan Bilyet giro dikenakan Bea Meterai dengan tarif sebesar Rp3.000 tanpa batas pengenaan besarnya harga nominal<br>
                            3.	Efek dengan nama dan dalam bentuk apapun yang mempunyai harga nominal sampai dengan Rp1.000.000 dikenakan Bea Meterai Rp6.000. <br>
                            4.	Sekumpulan efek dengan nama dan dalam bentuk apapun yang tercantum dalam surat kolektif yang mempunyai jumlah harga nominal sampai dengan Rp1.000.000 dikenakan Bea Meterai Rp3.000, sedangkan yang mempunyai harga nominal lebih dari Rp1.000.000 dikenakan Bea Meterai dengan tarif sebesar Rp6.000.<br>
                            5.	Untuk dokumen kuitansi yang menyebutkan besar uang dikenakan;<br>
                            a.	Nominal sampai Rp250.000 tidak dikenakan Bea Meterai<br>
                            b.	Nominal antara Rp250.000 sampai Rp1.000.000 dikenakan Bea Meterai Rp3.000<br>
                            c.	Nominal diatas Rp. 1.000.000 dikenakan Bea Meterai Rp6.000 <br>
                        </div>
                    </div>  
               </div>
            </div>
          </div>
        </div>
      </section>
@endsection