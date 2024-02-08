@extends('layouts.backend-dashboard.app')

@section('title', 'Siswa')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="/Createsiswa" class="btn btn-secondary"><i class="fas fa-plus"></i> Tambah Siswa</a>
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-file-excel"></i> import
                    </button>   

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Import Excel</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/importExcel" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                    <div class="modal-body">    
                        <div class="form-group">
                            <input type="file" name="file" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </div>
                    </form>
                </div>
                </div>
                    <div class="card-tools">
                        <form action="/siswa" method="GET" class="form-inline">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap mx-auto">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIS</th>
                                <th>NAMA</th>
                                <th>KELAS</th>
                                <th>JENIS KELAMIN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $index => $rows)
                                <tr>
                                    <td>{{ $index + $data -> firstItem() }}</td>
                                    <td>{{ $rows->nis }}</td>
                                    <td>{{ $rows->nama }}</td>
                                    <td>{{ $rows->kelas }}</td>
                                    <td>{{ $rows->jenis_kelamin }}</td>
                                    <td>
                                        <a href="/editsiswa/{{ $rows->id }}" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i></a>
                                        <a href="/deleteSiswa/{{ $rows->id }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{  $data -> links()   }}

                </div>
            </div>
        </div>
    </div>
@endsection
