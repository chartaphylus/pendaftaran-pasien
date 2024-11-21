{{-- Form Pendaftaran --}}
<div class="main-content">
    <h1>Daftarkan Pasien</h1>
    <form class="registration-form">
        <div class="form-group">
            <label for="name">Nama Pasien</label>
            <input type="text" id="name" placeholder="Nama lengkap pasien.." required>
        </div>

        <div class="form-group">
            <label for="identity">No. Identitas</label>
            <input type="text" id="identity" placeholder="No. KTP.." required>
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" id="address" placeholder="Alamat.." required>
        </div>

        <div class="form-group">
            <label for="ttl">TTL</label>
            <input type="text" id="ttl" placeholder="CONTOH: Bandung, 2/2/1983" required>
        </div>

        <div class="form-group">
            <label for="age">Umur</label>
            <input type="number" id="age" placeholder="Umur pasien.." required>
        </div>

        <div class="form-group">
            <label for="phone">No. HP</label>
            <input type="tel" id="phone" placeholder="No. HP.." required>
        </div>

        <div class="form-group">
            <label for="doctor">Dokter</label>
            <select id="doctor" required>
                <option value="">-Pilih-</option>
                <!-- List of doctors will be dynamically added here -->
            </select>
        </div>

        <div class="form-group">
            <label for="specialist">Poli/Spesialis</label>
            <input type="text" id="specialist" placeholder="Spesialisasi.." required>
        </div>

        <div class="form-group">
            <label for="date">Hari/Tanggal</label>
            <input type="date" id="date" required>
        </div>

        <button>Simpan</button>
    </form>
</div>
