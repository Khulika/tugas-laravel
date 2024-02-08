@extends('layouts.backend-dashboard.app')

@section('title', 'Tambah Kelas')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">Edit Nama Kelas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Updatekelas/{{$data -> id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kelas">Edit Nama Kelas</label>
                            <input type="text" name="kelas" value="{{ $data->kelas}}" class="form-control" required>
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
