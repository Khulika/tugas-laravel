@extends('layouts.backend-dashboard.app')

@section('title', 'Edit Data Siswa')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">Edit Data siswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Updatesiswa/{{$data -> id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nis">edit nis</label>
                            <input type="text" name="nis" value="{{ $data->nis}}" class="form-control" required>

                            <label for="nama">edit nama</label>
                            <input type="text" name="nama" value="{{ $data->nama}}" class="form-control" required>
                            
                            <label for="nama">edit kelas</label>
                            <input type="text" name="kelas" value="{{ $data->kelas}}" class="form-control" required>

                            <label for="jenis kelamin">edit jenis kelamin</label>
                            <input type="text" name="jenis kelamin" value="{{ $data->jenis_kelamin}}" class="form-control" required>
                            
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
