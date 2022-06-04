@extends('layouts.base')

@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4" style="margin-bottom: 350px;">
    <div class="row g-4">

        <div class="col-sm-6 col-xl-3">
            <a href="{{url('/home')}}">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-house-user fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="color: #757575;">Dashboard</p>
                        <h6 class="mb-0">***</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-xl-3">
            <a href="{{route('userSistem')}}">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-user fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="color: #757575;">Jumlah User Akses</p>
                        <h6 class="mb-0">{{$user}}</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-xl-3">
            <a href="{{route('dataNik')}}">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-id-card-clip fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="color: #757575;">Jumlah Data NIK</p>
                        <h6 class="mb-0">{{$nik}}</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-xl-3">
            <a href="{{route('inputDataNik')}}">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-database fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="color: #757575;">Input Data NIK</p>
                        <h6 class="mb-0">***</h6>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
<!-- Sale & Revenue End -->
@stop