@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
    <div class="container">
        <h2 class="mb-4">Data Pasien</h2>
        <a href="{{ route('patients.create') }}" class="mb-3 btn btn-primary">Tambah Pasien</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>
                            <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
