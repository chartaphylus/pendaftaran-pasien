@extends('layouts.base-app')

@section('title', 'Daftar Pasien')

@section('content')
<!-- Tabel Daftar Pasien -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Data Pasien</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">No. Identitas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">TTL</th>
                        <th scope="col">Umur</th>
                        <th scope="col">No. HP</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Poli/Spesialis</th>
                        <th scope="col">Hari/Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasiens as $pasien)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pasien->nama }}</td>
                        <td>{{ $pasien->no_ktp }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>{{ $pasien->TTL }}</td>
                        <td>{{ $pasien->umur }}</td>
                        <td>{{ $pasien->no_hp }}</td>
                        <td>{{ $pasien->dokter->nama }}</td>
                        <td>{{ $pasien->spesialis }}</td>
                        <td>{{ $pasien->tanggal }}</td>
                        <td>
                            <a href="{{ route('pasiens.edit', $pasien->id) }}" class="btn btn-success btn-sm px-2">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm px-2" type="submit">
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
