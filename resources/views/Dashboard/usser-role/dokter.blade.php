@extends('layouts.base-app')

@section('title', 'Daftar Dokter')

@section('content')
<!-- Tabel Daftar Dokter -->
<section class="section">
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
