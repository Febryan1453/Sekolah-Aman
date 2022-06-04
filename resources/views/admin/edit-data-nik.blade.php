@extends('layouts.base')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-4">Edit Data NIK</h6>
                    <h6><a href="{{route('dataNik')}}"><i class="fa-solid fa-angle-left"></i> Kembali</a></h6>
                </div>
                <div class="table-responsive">
                    <form method="POST" action="{{route('updateDataNik',$dataNik->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" value="{{$dataNik->nik}}" readonly name="nik" class="form-control" style="cursor: no-drop;" id="nik">
                            <!-- <div id="nik" class="form-text" style="color: red;">{{ $errors->first('nik') }}</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" value="{{$dataNik->nama}}" name="nama" class="form-control" id="NamaLengkap">
                            <div id="NamaLengkap" class="form-text" style="color: red;">{{ $errors->first('nama') }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                            <input type="text" value="{{$dataNik->tempat_lahir}}" name="tempat_lahir" class="form-control" id="tempatLahir">
                            <div id="tempatLahir" class="form-text" style="color: red;">{{ $errors->first('tempat_lahir') }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" value="{{$dataNik->tlg_lahir}}" name="tlg_lahir" class="form-control" id="tglLahir">
                            <div id="tglLahir" class="form-text" style="color: red;">{{ $errors->first('tlg_lahir') }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea rows="8" name="keterangan" id="keterangan" class="form-control">{{$dataNik->keterangan}}</textarea>
                            <div id="keterangan" class="form-text" style="color: red;">{{ $errors->first('keterangan') }}</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection