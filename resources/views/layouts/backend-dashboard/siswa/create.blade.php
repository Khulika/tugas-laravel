@extends('layouts.backend-dashboard.app')

@section('title', 'Tambah Data siswa')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">Tambah Data siswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/insertsiswa" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nis">Nis</label>
                            <input type="text" name="nis" class="form-control" required>

                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" required>

                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" required>

                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" required>
                            
                        </div>

                        <!-- Add other form fields as needed -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
