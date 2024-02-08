@extends('layouts.backend-dashboard.app')

@section('title', 'Mapel')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="/Createmapel"><button class="btn btn-secondary"><i class="fas fa-plus"></i>  Tambah Mapel</button></a>
                    <div class="card-tools">
                        <form action="/mapel" method="GET" class="form-inline">
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
                                <th>NAMA MATA PELAJARAN</th>
                                <th>TANGGAL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $index => $rows)
                            <tr>
                                <td>{{$index + $data -> firstItem()}}</td>
                                <td>{{$rows->nama_mapel}}</td>
                                <td>{{$rows->created_at}}</td>
                                <td>
                                    <a href="/editmapel/{{$rows->id}}" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i></a>
                                    <a href="/deleteMapel/{{$rows->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
