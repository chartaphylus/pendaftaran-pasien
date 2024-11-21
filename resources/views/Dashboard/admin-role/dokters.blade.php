@extends('layouts.base-app')

@section('title', 'data dokter')

@section('content')
 <!-- resources/views/dokters/create.blade.php -->
 <div class="main-content">
<form action="{{ route('dokters.store') }}" method="POST" enctype="multipart/form-data" class="registration-form">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ old('nama') }}">
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label>Spesialis</label>
    <input type="text" name="spesialis" value="{{ old('spesialis') }}">
    @error('spesialis')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label>Hari</label>
    <input type="text" name="hari" value="{{ old('hari') }}">
    @error('hari')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label>Jam</label>
    <input type="time" name="jam" value="{{ old('jam') }}">
    @error('jam')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label>Pas Foto</label>
    <input type="file" name="pas_foto">
    @error('pas_foto')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Simpan</button>@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</form>
</div>

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
                                            {{-- <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="select_all" />
                                                </div>
                                            </th> --}}
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Spesialis</th>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Jam</th>
                                            <th scope="col">Sampai</th>
                                            <th scope="col">Pas foto</th>
                                            <th scope="col">aksi</th>
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
                                            <td>
                                                 @if($dokter->pas_foto)
                                                     <img src="{{ asset('storage/' . $dokter->pas_foto) }}" width="50" alt="Pas Foto">
                                                 @else
                                                      Tidak ada foto
                                                 @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm px-2">
                                                <a href="{{ route('dokters.edit', $dokter->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                </button> |
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
                                    <div class="pagination">
                                    <button onclick="prevPage()">Previous</button>
                                    <span id="pageNumber">1</span>
                                    <button onclick="nextPage()">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection