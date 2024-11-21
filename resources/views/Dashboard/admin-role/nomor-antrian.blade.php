@extends('layouts.base-app')

@section('title', 'Nomor Antrian')

@section('content')

{{-- Form Tambah Nomor Antrian --}}
<div class="container mt-4">
    <h1 class="mb-4">Tambah Nomor Antrian</h1>
    <form action="{{ route('nomorantrians.store') }}" method="POST" class="registration-form">
        @csrf
        <div class="mb-3">
            <label for="pasien_id" class="form-label">Pasien</label>
            <select name="pasien_id" id="pasien_id" class="form-control" required>
                <option value="">-Pilih-</option>
                @foreach($pasiens as $pasien)
                <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="dokter_id" class="form-label">Dokter</label>
            <select name="dokter_id" id="dokter_id" class="form-control" required>
                <option value="">-Pilih-</option>
                @foreach($dokters as $dokter)
                <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nomor_antrian" class="form-label">Nomor Antrian</label>
            <input type="number" name="nomor_antrian" id="nomor_antrian" value="{{ old('nomor_antrian') }}" placeholder="Masukkan nomor antrian" class="form-control" required>
            @error('nomor_antrian')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
        @endif
    </form>
</div>

<!-- Tabel Data Nomor Antrian -->
<section class="section mt-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Data Nomor Antrian</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Nomor Antrian</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($antrians as $antrian)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $antrian->pasien->nama }}</td>
                        <td>{{ $antrian->dokter->nama }}</td>
                        <td>{{ $antrian->nomor_antrian }}</td>
                        <td>
                            <a href="{{ route('nomorantrians.edit', $antrian->id) }}" class="btn btn-success btn-sm px-2">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('nomorantrians.destroy', $antrian->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm px-2" onclick="return confirm('Yakin ingin menghapus?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
