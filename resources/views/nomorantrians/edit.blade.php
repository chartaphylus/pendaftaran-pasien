<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nomor Antrian</title>
    <style>
        body {
            background: white;
            font-family: Arial, sans-serif;
        }

        .main-content {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }

        .registration-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
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
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Edit Nomor Antrian</h1>

        <form action="{{ route('nomorantrians.update', $nomorAntrian->id) }}" method="POST" class="registration-form">
            @csrf
            @method('PUT')

            <div>
                <label for="pasien_id">Pasien</label>
                <select name="pasien_id" id="pasien_id" required>
                    <option value="">-Pilih-</option>
                    @foreach($pasiens as $pasien)
                        <option value="{{ $pasien->id }}" {{ $nomorAntrian->pasien_id == $pasien->id ? 'selected' : '' }}>
                            {{ $pasien->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="dokter_id">Dokter</label>
                <select name="dokter_id" id="dokter_id" required>
                    <option value="">-Pilih-</option>
                    @foreach($dokters as $dokter)
                        <option value="{{ $dokter->id }}" {{ $nomorAntrian->dokter_id == $dokter->id ? 'selected' : '' }}>
                            {{ $dokter->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="nomor_antrian">Nomor Antrian</label>
                <input type="number" name="nomor_antrian" id="nomor_antrian" value="{{ old('nomor_antrian', $nomorAntrian->nomor_antrian) }}" placeholder="Nomor antrian" required>
                @error('nomor_antrian')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Update</button>

            <div class="form-actions">
                <a href="{{ route('nomorantrians.NomorAntrian') }}"><i class="bi bi-arrow-left-square"></i> Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
