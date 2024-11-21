@extends('layouts.base-app')

@section('title', 'Data Dokter')

@section('content')

<!-- Form Tambah Dokter -->
<div class="main-content">
    <form action="{{ route('dokters.store') }}" method="POST" enctype="multipart/form-data" class="registration-form">
        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" required>
            @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Spesialis</label>
            <input type="text" name="spesialis" value="{{ old('spesialis') }}" class="form-control" required>
            @error('spesialis')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" value="{{ old('hari') }}" class="form-control" required>
            @error('hari')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Jam</label>
            <input type="time" name="jam" value="{{ old('jam') }}" class="form-control" required>
            @error('jam')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Pas Foto</label>
            <input type="file" name="pas_foto" class="form-control" required>
            @error('pas_foto')
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

<!-- Tabel Daftar Dokter -->
<section class="section mt-4">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Data Dokter</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Spesialis</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Sampai</th>
                        <th scope="col">Pas Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dokters as $dokter)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dokter->nama }}</td>
                        <td>{{ $dokter->spesialis }}</td>
                        <td>{{ $dokter->hari }}</td>
                        <td>{{ $dokter->jam }}</td>
                        <td>09:15pm</td>
                        <td>
                            @if($dokter->pas_foto)
                            <img src="{{ asset('storage/' . $dokter->pas_foto) }}" width="50" alt="Pas Foto">
                            @else
                            Tidak ada foto
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('dokters.edit', $dokter->id) }}" class="btn btn-success btn-sm px-2">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('dokters.destroy', $dokter->id) }}" method="POST" style="display:inline;">
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
