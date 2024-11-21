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
<h1>Edit Data Pasien</h1>

<form class="registration-form" action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $pasien->nama) }}" required>
    </div>

    <div class="mb-3">
        <label for="no_ktp" class="form-label">No KTP</label>
        <input type="text" name="no_ktp" id="no_ktp" class="form-control" value="{{ old('no_ktp', $pasien->no_ktp) }}" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat', $pasien->alamat) }}" required>
    </div>

    <div class="mb-3">
        <label for="TTL" class="form-label">Tempat Tanggal Lahir</label>
        <input type="text" name="TTL" id="TTL" class="form-control" value="{{ old('TTL', $pasien->TTL) }}" required>
    </div>

    <div class="mb-3">
        <label for="umur" class="form-label">Umur</label>
        <input type="number" name="umur" id="umur" class="form-control" value="{{ old('umur', $pasien->umur) }}" required>
    </div>

    <div class="mb-3">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ old('no_hp', $pasien->no_hp) }}" required>
    </div>

    <div class="mb-3">
        <label for="dokter_id" class="form-label">Dokter</label>
        <select name="dokter_id" id="dokter_id" class="form-control" required>
            @foreach($dokters as $dokter)
                <option value="{{ $dokter->id }}" {{ $pasien->dokter_id == $dokter->id ? 'selected' : '' }}>
                    {{ $dokter->nama }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="spesialis" class="form-label">Spesialis</label>
        <input type="text" name="spesialis" id="spesialis" class="form-control" value="{{ old('spesialis', $pasien->spesialis) }}" required>
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal Kunjungan</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $pasien->tanggal) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="{{ route('pasiens.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i></a>
</form>
</body>
</html>
