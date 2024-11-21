@extends('layouts.base-app')

@section('title', 'daftar dokter')

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
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="select_all" />
                                            </div>
                                        </th>
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
                                        {{-- <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox" type="checkbox" value=""
                                                    id="flexCheckDefault1" checked />
                                            </div>
                                        </th> --}}
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection