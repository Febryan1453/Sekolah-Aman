@extends('front.app')

@section('content')
<section class="container d-flex justify-content-center" style="margin-top: 180px; margin-bottom: 100px;">
    <div class="card" style="width: 24rem; height:fit-content; border-radius:8px;">
        <div class="card-body text-center">
            @forelse($result as $data)

            <?php
            $name = $data->nama;
            $arrayName = explode(" ", $name);
            for ($i = 0; $i < count($arrayName); $i++) {
                $arrayName[$i] = Illuminate\Support\Str::mask($arrayName[$i], '*', 3);
            }
            $name = implode(" ", $arrayName);
            ?>

            <h6 class="card-title mt-4"><i class="fa-solid fa-circle-check" style="font-size: 28px; color:#198754;"></i></h6>
            <h5 class="card-subtitle mb-5 text-muted" style="color: black !important;">Data ditemukan !</h5>

            <p class="card-text text-muted" style="font-size: 14px;">NIK</p>
            <p class="card-text" style="font-size: 19px; font-weight:bold; margin-top:-20px;">{{Illuminate\Support\Str::mask($data->nik, '*', -12, 11)}}</p>

            <p class="card-text text-muted" style="font-size: 14px;">Nama lengkap</p>
            <p class="card-text" style="font-size: 19px; font-weight:bold; margin-top:-20px;">{{$name}}</p>

            <p class="card-text text-muted" style="font-size: 14px;">Tempat tanggal lahir</p>
            <p class="card-text" style="font-size: 19px; font-weight:bold; margin-top:-20px;">{{$data->tempat_lahir}}, {{date('d F Y', strtotime($data->tlg_lahir))}}</p>

            <p class="card-text text-muted" style="font-size: 14px;">Keterangan</p>
            <p class="card-text mb-5" style="font-size: 19px; font-weight:bold; margin-top:-20px;">{{$data->keterangan}}</p>

            <a href="{{route('front')}}" class="btn btn-success mb-3" style="text-decoration: none;"><i class="fa-solid fa-magnifying-glass"></i> Cari data lain</a>

            @empty

            <h6 class="card-title mt-4"><i class="fa-solid fa-circle-xmark" style="font-size: 28px; color:#dc3545;"></i></h6>
            <h5 class="card-subtitle mb-4 text-muted" style="color: black !important; margin-top:10px;">Data tidak ditemukan / belum terdaftar !</h5>

            <!-- <p class="card-text text-muted" style="font-size: 14px;">NIK</p>
            <p class="card-text mb-5" style="font-size: 19px; font-weight:bold; margin-top:-20px;">{{$hasil}}</p> -->

            <!-- <a href="{{route('front')}}" style="text-decoration: none;"><i class="fa-solid fa-magnifying-glass"></i> Cari Data Lain</a> -->
            <a href="{{route('front')}}" class="btn btn-success mb-3" style="text-decoration: none;"><i class="fa-solid fa-magnifying-glass"></i> Cari data lain</a>

            @endforelse
        </div>
    </div>
</section>


@stop