@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Tambah Data Pasien</h2>

        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Usia</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control"></textarea>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
