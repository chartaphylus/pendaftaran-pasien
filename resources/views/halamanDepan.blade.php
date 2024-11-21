<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="{{ asset('images/pengaduan.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/iconly.css') }}">
    

    <style>
        /* logo  */
          .logo-pengaduan{
              width: 100px;
              height: auto !important;
          }
          @keyframes spin {
              0% { transform: rotate(0deg); }
              100% { transform: rotate(360deg); }
          }
          /* form */
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
          }
          button:hover {
              background-color: #1abc9c;
          }
          body {
              background: #ededed;
          }
  
         
      </style>
</head>
<body>
    <script src="{{ asset('mazer/assets/static/js/initTheme.js') }}"></script>
    @include('halamanSidebar')
    <div id="app">
        <div id="main" class="layout-navbar navbar-fixed">
            @include('halamanNavbar')
            <div id="main-content">
                @yield('content')
            </div>
            @include('halamanPendaftaran')
        </div>
    </div>

    <script src="{{ asset('mazer/assets/static/js/initTheme.js') }}"></script>
    <script src="{{ asset('mazer/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/compiled/js/app.js') }}"></script>
    <script src="{{ asset('mazer/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/dashboard.js') }}"></script>
</body>
</html>