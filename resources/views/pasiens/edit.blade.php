<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
    <style>
        body {
            background: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .main-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .registration-form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .registration-form label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .registration-form input,
        .registration-form select {
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #16a085;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #1abc9c;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-actions a {
            color: #16a085;
            text-decoration: none;
        }

        .form-actions a:hover {
            color: #1abc9c;
        }

        .error-message {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Edit Data Pasien</h1>

        <form class="registration-form" action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $pasien->nama) }}" required>
                @error('nama')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="no_ktp">No KTP</label>
                <input type="text" name="no_ktp" id="no_ktp" class="form-control" value="{{ old('no_ktp', $pasien->no_ktp) }}" required>
                @error('no_ktp')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat', $pasien->alamat) }}" required>
                @error('alamat')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="TTL">Tempat Tanggal Lahir</label>
                <input type="text" name="TTL" id="TTL" class="form-control" value="{{ old('TTL', $pasien->TTL) }}" required>
                @error('TTL')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="umur">Umur</label>
                <input type="number" name="umur" id="umur" class="form-control" value="{{ old('umur', $pasien->umur) }}" required>
                @error('umur')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ old('no_hp', $pasien->no_hp) }}" required>
                @error('no_hp')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="dokter_id">Dokter</label>
                <select name="dokter_id" id="dokter_id" class="form-control" required>
                    @foreach($dokters as $dokter)
                        <option value="{{ $dokter->id }}" {{ $pasien->dokter_id == $dokter->id ? 'selected' : '' }}>
                            {{ $dokter->nama }}
                        </option>
                    @endforeach
                </select>
                @error('dokter_id')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="spesialis">Spesialis</label>
                <input type="text" name="spesialis" id="spesialis" class="form-control" value="{{ old('spesialis', $pasien->spesialis) }}" required>
                @error('spesialis')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="tanggal">Tanggal Kunjungan</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $pasien->tanggal) }}" required>
                @error('tanggal')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Simpan Perubahan</button>

            <div class="form-actions">
                <a href="{{ route('pasiens.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
