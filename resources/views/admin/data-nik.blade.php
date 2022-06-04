@extends('layouts.base')

@section('content')

<!-- <div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-12 col-xl-8">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Data List</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">TTL</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">3</th>
                            <td>1234567890123456</td>
                            <td>Febryan</td>
                            <td>Maros 03 Desember 1998</td>
                            <td>Perbuatan baik</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-sm-12 col-xl-4">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Data Baru</h6>

                <form method="POST" action="{{route('addUser')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan">
                    </div>
                </form>

            </div>
        </div>

    </div>
</div> -->

<div class="container-fluid pt-4 px-4" style="padding-bottom: 220px;">
    <div class="row g-4">

        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Daftar Data NIK</h6>
                    <h6><a href="{{route('inputDataNik')}}">+ Data Baru</a></h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">TTL</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @forelse($dataNik as $row)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$row->nik}}</td>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->tempat_lahir}}, {{date('d F Y', strtotime($row->tlg_lahir))}}</td>
                                <td>{{$row->keterangan}}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{route('editDataNik',$row->id)}}"><i class="fa-solid fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#del{{$row->id}}"><i class="fa-solid fa-trash"></i></a>
                                    @include('admin.modal.del-data-nik')
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Belum ada</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@stop