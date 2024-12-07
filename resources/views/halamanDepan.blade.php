<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCare</title>
    <style>
        /* Reset dasar */
body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: #333;
    background: #f9f9f9;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #007bff;
    color: white;
    padding: 20px 0;
}

.header .logo {
    font-size: 24px;
    font-weight: bold;
}

.header .highlight {
    color: #ff5722;
}

.nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.nav .btn {
    background: #ff5722;
    padding: 10px 20px;
    border-radius: 5px;
    text-transform: uppercase;
}

.hero {
    background: linear-gradient(135deg, #007bff, #00c6ff);
    color: white;
    text-align: center;
    padding: 100px 20px;
}

.hero h2 {
    font-size: 48px;
}

.hero p {
    margin: 20px 0;
    font-size: 18px;
}

.hero .btn-primary {
    background: #ff5722;
    color: white;
    padding: 12px 25px;
    border-radius: 5px;
    text-decoration: none;
}

.about, .services, .testimonials, .contact {
    padding: 50px 0;
}

.about-content, .service-grid, .testimonial-grid {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.about-img {
    width: 50%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.service-card, .testimonial-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    width: 300px;
}

.service-card img, .about-img {
    max-width: 100%;
    border-radius: 10px;
}

.section-title {
    text-align: center;
    font-size: 36px;
    margin-bottom: 30px;
}

.footer {
    text-align: center;
    padding: 20px;
    background: #333;
    color: white;
}

    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">RS <span class="highlight">HealthCare</span></h1>
            <nav class="nav">
                <ul>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="#contact" class="btn">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h2>Kesehatan Anda, Prioritas Kami</h2>
            <p>Solusi kesehatan terpercaya dengan layanan modern dan profesional.</p>
            <a href="{{ route('login') }}" class="btn-primary">Buat Janji Sekarang</a>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="text">
                    <h2>Tentang HealthCare</h2>
                    <p>Dengan pengalaman para profesional, HealthCare menghadirkan pelayanan kesehatan yang terjangkau dan berkualitas tinggi. Kami percaya bahwa kesehatan adalah hak semua orang.</p>
                    <a href="#services" class="btn-secondary">Lihat Layanan</a>
                </div>
                <img src="https://p.turbosquid.com/ts-thumb/QT/hb6js2/yH/01/jpg/1688206834/1920x1080/fit_q87/a5405f7ff1a23297c1d16f1417c9b43ca0e2db4d/01.jpg" alt="Rumah Sakit" class="about-img">
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Layanan Kami</h2>
            <div class="service-grid">
                <div class="service-card">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.jAMrgdptskeZxN-upAuh-AHaEK&pid=Api&P=0&w=300&h=300" alt="Poliklinik Umum">
                    <h3>Poliklinik Umum</h3>
                    <p>Pelayanan medis untuk semua kebutuhan kesehatan Anda.</p>
                </div>
                <div class="service-card">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.bCEXUVhMPBUTqLKm8AQEIAHaEK&pid=Api&P=0&h=180" alt="Apotek">
                    <h3>Apotek</h3>
                    <p>Obat-obatan lengkap dengan resep dokter dan pelayanan cepat.</p>
                </div>
                <div class="service-card">
                    <img src="https://infoka.id/wp-content/uploads/2020/12/Ruang-IGD-Rumah-Sakit-di-Tasikmalaya-Ditutup-Sejumlah-Dokter-dan-Tenaga-Kesehatan-Terpapar-Covid-19-1024x576.jpg" alt="Unit Gawat Darurat">
                    <h3>Unit Gawat Darurat</h3>
                    <p>Layanan 24 jam untuk kondisi darurat medis.</p>
                </div>
                <div class="service-card">
                    <img src="https://tse4.mm.bing.net/th?id=OIP.ZacGCC6IvYZq1rnOBUuJGQHaE9&pid=Api&P=0&h=180" alt="Kesehatan Ibu & Anak">
                    <h3>Kesehatan Ibu & Anak</h3>
                    <p>Perawatan khusus untuk ibu hamil dan anak.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title">Apa Kata Pasien Kami?</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p>"Pelayanannya sangat cepat dan ramah. Dokternya juga profesional. Saya merasa aman berobat di sini!"</p>
                    <h4>- Budi Santoso</h4>
                </div>
                <div class="testimonial-card">
                    <p>"UGD-nya sangat responsif. Terima kasih sudah membantu saya dalam keadaan darurat."</p>
                    <h4>- Lina Mardiana</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Fasilitasnya sangat modern dan nyaman. Saya pasti akan kembali ke sini jika membutuhkan layanan kesehatan."</p>
                    <h4>- Ahmad Fauzi</h4>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <p>Alamat: Jl. Sehat No. 123</p>
            <p>Telepon: +62 895 3416 75030</p>
            <p>Email: igneel_hazenlrick@gmail.com</p>
            <a href="{{ route('login') }}" class="btn-primary">Buat Janji</a>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 HealthCare. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
