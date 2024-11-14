@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Edit Data Pasien</h2>

        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" value="{{ $patient->name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Usia</label>
                <input type="number" name="age" value="{{ $patient->age }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control">{{ $patient->address }}</textarea>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Update</button>
        </form>
    </div>
@endsection
