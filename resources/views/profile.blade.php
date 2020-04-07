@extends ('layouts.land')

@section('content')

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                        <div class="main-profile">
                            <h5>Belajar Pajak Lebih Menyenangkan!</h5>
                            <h1>Belajar Pajak Menjadi Seru</h1>
                            <p>Solusi belajar perpajakan untuk siswa SMA/SMK dan Perguruan Tinggi
                                dilengkapi dengan akses latihan soal, pembahasan dan rangkuman.
                                Dilengkapi dengan materi perpajakan.
                            </p>
                            <a href="#" class="btn_1">View Course </a>
                            @guest
                                <a href="{{ route('register.index') }}" class="btn_2">Sign Up </a>                          
                            @else
                            
                            @endguest
                        </div>
                </div>
            </div>
        </div>

@endsection