@extends('layouts.backend-dashboard.app')

@section('title', 'Tambah Data Mapel')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">Edit Data Mapel</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Updatemapel/{{$data -> id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_mapel">Edit Mata Pelajaran</label>
                            <input type="text" name="nama_mapel" value="{{ $data->nama_mapel}}" class="form-control" required>
                        </div>

                        <!-- Add other form fields as needed -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
