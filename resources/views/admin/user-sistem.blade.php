@extends('layouts.base')

@section('content')
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4" style="padding-bottom: 200px;">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data User Sistem</h6>
            <h6><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">+ User Baru</a></h6>

        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> 
                        <th scope="col">Date</th>-->
                        <th scope="col">#</th>
                        <th scope="col">Email User</th>
                        <th scope="col">Nama User</th>
                        <!-- <th scope="col">Role User</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($userSistem as $row)
                    <tr>
                        <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                        <th scope="row">{{$i++}}</th>
                        <td>{{$row->email}}</td>
                        <td>{{$row->name}}</td>
                        <!-- <td>{{$row->role}}</td> -->
                        <!-- <td><a class="btn btn-sm btn-primary" href=""><i class="fa-solid fa-user-pen"></i></a></td> -->
                        <td class="text-center">
                            @if($row->id == 1)
                            <a class="btn btn-sm btn-success" href="#" data-bs-toggle="modal" data-bs-target="#tidakBoleh"><i class="fa-solid fa-xmark"></i></a>
                            @else
                            <a class="btn btn-sm btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#del{{$row->id}}"><i class="fa-solid fa-trash"></i></a>
                            @endif
                            @include('admin.modal.del-user')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->
@include('admin.modal.add-user')
@include('admin.modal.tidak-boleh')
@stop