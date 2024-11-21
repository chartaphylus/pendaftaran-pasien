<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dokter</title>
    <style>
        body {
            background: white;
            font-family: Arial, sans-serif;
        }

        .main-content {
            padding: 20px;
        }

        .registration-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 800px;
            margin: auto;
        }

        .registration-form label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .registration-form input,
        .registration-form select {
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
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
            text-align: center;
        }

        button:hover {
            background-color: #1abc9c;
        }

        .error-message {
            color: red;
            font-size: 0.9em;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            grid-column: span 2;
        }

        .form-actions a {
            color: #16a085;
            text-decoration: none;
        }

        .form-actions a:hover {
            color: #1abc9c;
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

            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $dokter->nama) }}">
                @error('nama')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="spesialis">Spesialis:</label>
                <input type="text" name="spesialis" id="spesialis" value="{{ old('spesialis', $dokter->spesialis) }}">
                @error('spesialis')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="hari">Hari:</label>
                <input type="text" name="hari" id="hari" value="{{ old('hari', $dokter->hari) }}">
                @error('hari')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="jam">Jam:</label>
                <input type="time" name="jam" id="jam" value="{{ old('jam', $dokter->jam) }}">
                @error('jam')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="pas_foto">Pas Foto:</label>
                <input type="file" name="pas_foto" id="pas_foto">
                @error('pas_foto')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Update</button>

            <div class="form-actions">
                <a href="{{ route('admin.dokters') }}"><i class="bi bi-arrow-left-square"></i> Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
