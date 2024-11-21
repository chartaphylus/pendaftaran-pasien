@extends('layouts.base-app')

@section('title', 'Pendaftaran')

@section('content')

<div class="main-content">
    <h1>Daftarkan Pasien</h1>
    <form class="registration-form" action="{{ route('pasiens.store') }}" method="POST">
        @csrf
        
        <!-- Nama Pasien -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Pasien</label>
            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama lengkap pasien.." class="form-control" required>
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- No. Identitas -->
        <div class="mb-3">
            <label for="identity" class="form-label">No. Identitas</label>
            <input type="text" name="no_ktp" value="{{ old('no_ktp') }}" placeholder="No. KTP.." class="form-control" required>
            @error('no_ktp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Alamat -->
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat.." class="form-control" required>
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tempat/Tanggal Lahir -->
        <div class="mb-3">
            <label for="ttl" class="form-label">TTL</label>
            <input type="text" name="TTL" value="{{ old('TTL') }}" placeholder="CONTOH: Bandung, 2/2/1983" class="form-control" required>
            @error('TTL')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Umur -->
        <div class="mb-3">
            <label for="age" class="form-label">Umur</label>
            <input type="number" name="umur" value="{{ old('umur') }}" placeholder="Umur pasien.." class="form-control" required>
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- No. HP -->
        <div class="mb-3">
            <label for="phone" class="form-label">No. HP</label>
            <input type="tel" name="no_hp" value="{{ old('no_hp') }}" placeholder="No. HP.." class="form-control" required>
            @error('no_hp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Dokter -->
        <div class="mb-3">
            <label for="doctor" class="form-label">Dokter</label>
            <select name="dokter_id" class="form-control" required>
                <option value="">-Pilih-</option>
                @foreach($dokters as $dokters)
                    <option value="{{ $dokters->id }}">{{ $dokters->nama }}</option>
                @endforeach
            </select>
            @error('dokter_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Poli/Spesialis -->
        <div class="mb-3">
            <label for="specialist" class="form-label">Poli/Spesialis</label>
            <input type="text" name="spesialis" value="{{ old('spesialis') }}" placeholder="Spesialisasi.." class="form-control" required>
            @error('spesialis')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Hari/Tanggal -->
        <div class="mb-3">
            <label for="date" class="form-label">Hari/Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="form-control" required>
            @error('tanggal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Simpan</button>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </form>
</div>

@endsection
