@extends('layouts.base-app')

@section('content')

{{-- grafik --}}
<div class="container">
  <div class="row my-3">
      <div class="col">
          <h4>Pantauan grafik</h4>
      </div>
  </div>
  <div class="row my-2">
      <div class="col-md-6 py-1">
          <div class="card">
              <div class="card-body">
                  <canvas id="chLine"></canvas>
              </div>
          </div>
      </div>
      <div class="col-md-6 py-1">
          <div class="card">
              <div class="card-body">
                  <canvas id="chBar"></canvas>
              </div>
          </div>
      </div>
  </div>
  <div class="row py-2">
      <div class="col-md-4 py-1">
          <div class="card">
              <div class="card-body">
                  <canvas id="chDonut1"></canvas>
              </div>
          </div>
      </div>
      <div class="col-md-4 py-1">
          <div class="card">
              <div class="card-body">
                  <canvas id="chDonut2"></canvas>
              </div>
          </div>
      </div>
      <div class="col-md-4 py-1">
          <div class="card">
              <div class="card-body">
                  <canvas id="chDonut3"></canvas>
              </div>
          </div>
      </div>
  </div>
</div>
{{-- map --}}
<div class="card w-50 p-3">
    <div class="card-body">
      <h5 class="card-title">Maps</h5>
    </div>
  <div class="ratio ratio-16x9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117996.95037632967!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e1!3m2!1spl!2spl!4v1672242444695!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<!-- footer -->
<div class="container my-5">

    <footer class="text-white text-center text-lg-start bg-primary">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About company</h5>
  
          <p>
            This application enhances the healthcare experience with an easy-to-access system that accelerates registration workflows while ensuring accuracy and organization in patient data management.
          </p>
  
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-instagram"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="bi bi-google"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">Search something</h5>
  
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
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>
  
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
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="#">HealthCare</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>
<!-- End of .container -->

 @endsection