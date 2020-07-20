@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h2>{{$pajak->name}}</h2>
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
                        {{$item->question_text}}<br>
                        @if($item->question_image != null)
                        <img src="{{asset('storage/images/contoh_soal_image/'.$item->question_image)}}">
                        @else
                        @endif
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            {{$item->answer_text}}<br>
                            <img src="{{asset('storage/images/contoh_soal_image/'.$item->answer_image)}}">
                        </div>
                     </div>

                     <br>
                     @endforeach 
                     @if($pajak->exampleExercises->first() == null)
                        <h2 style="color:grey;">MOHON MAAF, KONTEN BELUM TERSEDIA</h2>
                        @endif
               </div>
            </div>
          </div>
        </div>
      </section>
@endsection