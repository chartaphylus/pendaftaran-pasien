@extends('layouts.base-app')

@section('title', 'daftar pasien')

@section('content')
<!-- Tabel Daftar Dokter -->
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
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">No. Identitas</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">TTL</th>
                                        <th scope="col">umur</th>
                                        <th scope="col">No. HP</th>
                                        <th scope="col">Dokter</th>
                                        <th scope="col">Poli/Spesialis</th>
                                        <th scope="col">Hari/Tanggal</th>
                                        <th scope="col">aksi</th>
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
                                            <button type="button" class="btn btn-success btn-sm px-2">
                                                <a href="{{ route('pasiens.edit', $pasien->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                </button>
                                               <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST" style="display:inline;">
                                                  @csrf
                                                    @method('DELETE')
                                                  <button class="btn btn-danger btn-sm px-2" type="submit"><i class="fa-solid fa-trash"></i> </button>
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