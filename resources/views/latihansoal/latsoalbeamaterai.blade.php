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
               </div>
            </div>
          </div>
        </div>
      </section>
@endsection