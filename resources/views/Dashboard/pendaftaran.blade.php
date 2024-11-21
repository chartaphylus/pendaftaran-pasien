@extends('layouts.base-app')

@section('title', 'pendaftaran')

@section('content')

@if(session('success'))
<div style="color: green;">
    {{ session('success') }}
</div>
@endif

<div class="main-content">
    <h1>Daftarkan Pasien</h1>
    <form class="registration-form" action="{{ route('pasiens.store') }}" method="POST">
     @csrf
        <label for="name">Nama Pasien</label>
        <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Name lengkap pasien..">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="identity">No. Identitas</label>
        <input type="text" name="no_ktp" value="{{ old('no_ktp') }}" placeholder="No. KTP..">
        @error('no_ktp')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="address">Alamat</label>
        <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat..">
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="ttl">TTL</label>
        <input type="text" name="TTL" value="{{ old('TTL') }}" placeholder="CONTOH: Bandung, 2/2/1983">
        @error('TTL')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="age">Umur</label>
        <input type="number" name="umur" value="{{ old('umur') }}" placeholder="Umur pasien..">
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="phone">No. HP</label>
        <input type="tel" name="no_hp" value="{{ old('no_hp') }}" placeholder="No. HP..">
        @error('no_hp')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="doctor">Dokter</label>
        <select name="dokter_id">
            <option value="">-Pilih-</option>
            @foreach($dokters as $dokters)
            <option value="{{ $dokters->id }}">{{ $dokters->nama }}</option>
            @endforeach
        </select>
        @error('dokter_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="specialist">Poli/Spesialis</label>
        <input type="text" name="spesialis" value="{{ old('spesialis') }}" placeholder="Spesialisasi..">
        @error('spesialis')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="date">Hari/Tanggal</label>
        <input type="date" name="tanggal" value="{{ old('tanggal') }}">
        @error('tanggal')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection