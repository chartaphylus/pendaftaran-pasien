@extends('layouts.base-app')

@section('content')

{{-- Slider --}}
<div class="card mb-3">
    <div class="slideshow-container">
        <!-- Slide 1 -->
        <div class="slide fade">
            <img src="https://wallpaperaccess.com/full/271954.jpg" alt="Slide 1">
        </div>
        <!-- Slide 2 -->
        <div class="slide fade">
            <img src="https://wallpaperaccess.com/full/324155.jpg" alt="Slide 2">
        </div>
        <!-- Slide 3 -->
        <div class="slide fade">
            <img src="https://wallpaperaccess.com/full/24559.jpg" alt="Slide 3">
        </div>
        <!-- Tombol Navigasi -->
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>

    <!-- Poin Indikator -->
    <div class="dots-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div class="card-body">
        <h5 class="card-title">HealthCare</h5>
        <p class="card-text">
            "Selamat datang di HealthCare, platform pendaftaran pasien yang cepat, mudah, dan aman untuk Anda dan keluarga. 
            Dengan teknologi modern, kami hadir untuk mempermudah akses layanan kesehatan, memastikan data Anda terlindungi, 
            dan mendukung langkah Anda menuju kesehatan yang lebih baik."
        </p>
    </div>
</div>

{{-- Grafik --}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Profile Visit</h4>
            </div>
            <div class="card-body">
                <div id="chart-profile-visit"></div>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Line Area Chart</h4>
                </div>
                <div class="card-body">
                    <div id="area"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>Radial Gradient Chart</h4>
                </div>
                <div class="card-body">
                    <div id="radialGradient"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Line Chart</h4>
                </div>
                <div class="card-body">
                    <div id="line"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Bar Chart</h4>
                </div>
                <div class="card-body">
                    <div id="bar"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Candlestick Chart</h4>
                </div>
                <div class="card-body">
                    <div id="candle"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Footer --}}
<div class="container my-5">
    <footer class="text-white text-center text-lg-start bg-primary">
        <!-- Grid Container -->
        <div class="container p-4">
            <div class="row mt-4">
                <!-- Tentang Perusahaan -->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">About Company</h5>
                    <p>
                        This application enhances the healthcare experience with an easy-to-access system that accelerates registration workflows while ensuring accuracy and organization in patient data management.
                    </p>
                    <div class="mt-4">
                        <a href="https://www.facebook.com/profile.php?id=100080376296725&mibextid=JRoKGi" class="btn btn-floating btn-primary btn-lg">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/rain.kyalka_33/?next=%2F" class="btn btn-floating btn-primary btn-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/khafid-bahtiar-908b26303?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="btn btn-floating btn-primary btn-lg">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://s.id/mkhafidbahtiar33" class="btn btn-floating btn-primary btn-lg">
                            <i class="bi bi-google"></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom Pencarian -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 pb-1">Search Something</h5>
                    <div class="form-outline form-white mb-4">
                        <input type="text" id="formControlLg" placeholder="@HealthCare" class="form-control form-control-lg" />
                        <label class="form-label" for="formControlLg">Health is in your hands</label>
                    </div>
                    <ul class="fa-ul" style="margin-left: 1.65em;">
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">igneel_hazenlrick@gmail.com</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+62 895 3416 75030</span>
                        </li>
                    </ul>
                </div>

                <!-- Jam Operasional -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Opening Hours</h5>
                    <table class="table text-center text-white">
                        <tbody class="font-weight-normal">
                            <tr>
                                <td>Mon - Thu:</td>
                                <td>8am - 9pm</td>
                            </tr>
                            <tr>
                                <td>Fri - Sat:</td>
                                <td>8am - 9pm</td>
                            </tr>
                            <tr>
                                <td>Sunday:</td>
                                <td>9am - 9pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Hak Cipta -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-white" href="#">HealthCare</a>
        </div>
    </footer>
</div>

@endsection
