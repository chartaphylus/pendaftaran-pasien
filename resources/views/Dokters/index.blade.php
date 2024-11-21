<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dokter</title>
    <style>
         .registration-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .registration-form label {
            font-weight: bold;
        }
        .registration-form input, .registration-form select {
            padding: 10px;
            margin-bottom: 20px;
            width: 90%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            background-color: #16a085;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            grid-column: span 2;
        }
        button:hover {
            background-color: #1abc9c;
        }
        body {
            background: white;
        }

        .table_outer {
            padding: 20px 0;
        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .card {
            border-radius: .5rem;
        }
    </style>
</head>
<body>
    <div class="main-content">
    <h1>Edit Dokter</h1>

    <form action="{{ route('dokters.update', $dokter->id) }}" method="POST" enctype="multipart/form-data" class="registration-form">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ old('nama', $dokter->nama) }}">
        @error('nama')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label>Spesialis:</label>
        <input type="text" name="spesialis" value="{{ old('spesialis', $dokter->spesialis) }}">
        @error('spesialis')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label>Hari:</label>
        <input type="text" name="hari" value="{{ old('hari', $dokter->hari) }}">
        @error('hari')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label>Jam:</label>
        <input type="time" name="jam" value="{{ old('jam', $dokter->jam) }}">
        @error('jam')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label>Pas Foto:</label>
        <input type="file" name="pas_foto">
        @error('pas_foto')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('admin.dokters') }}"><i class="bi bi-arrow-left-square"></i></a>
</div>
</body>

</html>
