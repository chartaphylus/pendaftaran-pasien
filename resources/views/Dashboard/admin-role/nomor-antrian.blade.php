@extends('layouts.base-app')

@section('title', 'nomor antrian')

@section('content')
{{-- tambah nomor antrian --}}
<div>
    <h1>Tambah Nomor Antrian</h1>
<div class="main-content">
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
                <option value="{{ $dokters->id }}">{{ $dokters->nama }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="mb-3">
        <label for="nomor_antrian" class="form-label">Nomor Antrian</label>
        <input type="number" name="nomor_antrian" id="nomor_antrian" value="{{ old('nomor_antrian') }}" placeholder="antrian" class="form-control" required>
        @error('nomor_antrian')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
<!-- Tabel nomor antrian -->
<section class="table_outer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 ">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="select_all" />
                                            </div>
                                        </th>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Dokter</th>
                                        <th scope="col">Nomor antrian</th>
                                        <th scope="col">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($antrians as $antrian)
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox" type="checkbox" value=""
                                                    id="flexCheckDefault1" checked />
                                            </div>
                                        </th>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $antrian->pasien->nama }}</td>
                                        <td>{{ $antrian->dokter->nama }}</td>
                                        <td>{{ $antrian->nomor_antrian }}</td>
                                        <td>
                                           <a href="{{ route('nomorantrians.edit', $antrian->id) }}" class="btn btn-success btn-sm px-2"><i class="fa-solid fa-pen-to-square"></a>
                                            <form action="{{ route('nomorantrians.destroy', $antrian->id) }}" method="POST" style="display:inline;">
                                             @csrf
                                             @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm px-2" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                       </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection