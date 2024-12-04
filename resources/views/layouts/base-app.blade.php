<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="shortcut icon" href="{{ asset('images/pengaduan.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/iconly.css') }}">
    <link rel="stylesheet" href="{{ asset("mazer/assets/extensions/simple-datatables/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
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
      
        /* slider */
       .slideshow-container {
            position: relative;
            max-width: 800px;
            margin: 50px auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

.slide {
    display: none;
}

.slide img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 30px;
    height: 30px;
    margin-top: -15px;
    cursor: pointer;
    color: white;
    font-size: 18px;
    font-weight: bold;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    text-align: center;
    line-height: 30px;
    user-select: none;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

.dots-container {
    text-align: center;
    margin-top: 10px;
}

.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.3s;
}

.dot.active {
    background-color: #717171;
}

/* Animasi fade */
.fade {
    animation: fadeEffect 5s;
}

@keyframes fadeEffect {
    from { opacity: 0.4; }
    to { opacity: 1; }
}

/* kalkulator */
/* .calculator {
  width: 200px;
  margin: 20px auto;
  text-align: center;
}

#display {
  width: 100%;
  height: 40px;
  text-align: right;
  margin-bottom: 10px;
}

.buttons button {
  width: 45px;
  height: 45px;
  margin: 5px;
  font-size: 1.2rem;
  cursor: pointer;
} */

/* stop watch */
/* .timer-container {
  text-align: center;
  padding: 20px;
}

#timer {
  font-size: 2rem;
  margin: 20px 0;
}

button {
  padding: 10px 15px;
  margin: 5px;
  font-size: 1rem;
  cursor: pointer;
  border: none;
  border-radius: 5px;
  background-color: #007BFF;
  color: white;
}

button:disabled {
  background-color: #ccc;
  cursor: not-allowed;
} */

/* random quote */
/* .quote-container {
  text-align: center;
  padding: 20px;
  background: #f4f4f9;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  margin: 20px auto;
}

#quote {
  font-style: italic;
  font-size: 1.2rem;
  margin: 20px 0;
}

button {
  padding: 10px 20px;
  background-color: #28a745;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #218838;
} */
/* countdown timer */
/* .countdown-input {
  text-align: center;
  padding: 20px;
}

input {
  width: 50px;
  padding: 5px;
  text-align: center;
}

button {
  padding: 10px 20px;
  background-color: #28a745;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #218838;
} */

/* geolocation */
/* .geolocation-container {
  text-align: center;
  padding: 20px;
  background: #f4f4f9;
  border-radius: 10px;
  max-width: 400px;
  margin: 20px auto;
}

button {
  padding: 10px 20px;
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
} */

/* animation text */
/* @keyframes slideIn {
  from {
    transform: translateX(-100%);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 3;
  }
} */


    </style>
</head>

<body>
    <script src="{{ asset('mazer/assets/static/js/initTheme.js') }}"></script>
    @include('includes.sidebar')
    <div id="app">
        <div id="main" class="layout-navbar navbar-fixed">
            @include('includes.navbar')
            <div id="main-content">
                @yield('content')
            </div>
            @include('includes.footer')
        </div>
    </div>


    {{-- <script>
      //chek boxx
      
            $(document).ready(function () {
          // Select/deselect all checkboxes
          $('#select_all').click(function () {
              if ($(this).is(':checked')) {
                  $('.checkbox').prop('checked', true);
              } else {
                  $('.checkbox').prop('checked', false);
              }
          });
      
          // If all checkboxes are selected, select the top checkbox
          $('.checkbox').click(function () {
              if ($('.checkbox:checked').length === $('.checkbox').length) {
                  $('#select_all').prop('checked', true);
              } else {
                  $('#select_all').prop('checked', false);
              }
          });
      });
          
      //paginate
        
      let halamanSaatIni = 1;
      const barisPerHalaman = 5;
      
      function renderTabel(halaman) {
          const tbodyTabel = document.querySelector("#productTable tbody");
          tbodyTabel.innerHTML = ""; // Bersihkan baris yang ada
      
          const mulai = (halaman - 1) * barisPerHalaman;
          const akhir = mulai + barisPerHalaman;
          const produkPaginasi = produk.slice(mulai, akhir);
      
          produkPaginasi.forEach((item, index) => {
              const baris = document.createElement("tr");
              
              baris.innerHTML = `
                  <td>${mulai + index + 1}</td>
                  <td>${item.nama}</td>
                  <td>${item.spesialis}</td>
                  <td>
                      <button onclick="editProduk(${item.id})">✏️</button>
                      <button onclick="hapusProduk(${item.id})">🗑️</button>
                  </td>
              `;
              tbodyTabel.appendChild(baris);
          });
      
          document.getElementById("pageNumber").textContent = halaman;
      
          // Nonaktifkan tombol "Previous" jika berada di halaman pertama
          document.querySelector(".pagination button:first-child").disabled = halaman <= 1;
      
          // Nonaktifkan tombol "Next" jika berada di halaman terakhir
          document.querySelector(".pagination button:last-child").disabled = akhir >= produk.length;
      }
      
      function prevPage() {
          if (halamanSaatIni > 1) {
              halamanSaatIni--;
              renderTabel(halamanSaatIni);
          }
      }
      
      function nextPage() {
          if (halamanSaatIni * barisPerHalaman < produk.length) {
              halamanSaatIni++;
              renderTabel(halamanSaatIni);
          }
      }
      
      document.addEventListener("DOMContentLoaded", () => {
          renderTabel(halamanSaatIni);
      });
      
            
      </script> --}}
      <script>
        let slideIndex = 1;
showSlides(slideIndex);

// Fungsi untuk mengganti slide
function changeSlide(n) {
    showSlides(slideIndex += n);
}

// Fungsi untuk slide spesifik
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Menampilkan slide
function showSlides(n) {
    let i;
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName("dot");

    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

// Menjalankan slide otomatis (opsional)
setInterval(() => {
    changeSlide(1);
}, 5000); // Slide berganti setiap 5 detik


// calculator
// let expression = "";

// function appendNumber(number) {
//   expression += number;
//   document.getElementById("display").value = expression;
// }

// function appendOperator(operator) {
//   expression += ` ${operator} `;
//   document.getElementById("display").value = expression;
// }

// function clearDisplay() {
//   expression = "";
//   document.getElementById("display").value = "";
// }

// function calculateResult() {
//   try {
//     const result = eval(expression);
//     document.getElementById("display").value = result;
//     expression = result.toString();
//   } catch {
//     document.getElementById("display").value = "Error";
//     expression = "";
//   }
// }

// stop watch
// let timerInterval;
// let seconds = 0;

// const timerDisplay = document.getElementById("timer");
// const startBtn = document.getElementById("startBtn");
// const stopBtn = document.getElementById("stopBtn");
// const resetBtn = document.getElementById("resetBtn");

// function updateTimer() {
//   const hrs = String(Math.floor(seconds / 3600)).padStart(2, '0');
//   const mins = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
//   const secs = String(seconds % 60).padStart(2, '0');
//   timerDisplay.textContent = `${hrs}:${mins}:${secs}`;
// }

// startBtn.addEventListener("click", () => {
//   timerInterval = setInterval(() => {
//     seconds++;
//     updateTimer();
//   }, 1000);
//   startBtn.disabled = true;
//   stopBtn.disabled = false;
//   resetBtn.disabled = false;
// });

// stopBtn.addEventListener("click", () => {
//   clearInterval(timerInterval);
//   startBtn.disabled = false;
//   stopBtn.disabled = true;
// });

// resetBtn.addEventListener("click", () => {
//   clearInterval(timerInterval);
//   seconds = 0;
//   updateTimer();
//   startBtn.disabled = false;
//   stopBtn.disabled = true;
//   resetBtn.disabled = true;
// });

// countdown timer
// document.getElementById("startCountdown").addEventListener("click", function() {
//   let hours = parseInt(document.getElementById("hours").value);
//   let minutes = parseInt(document.getElementById("minutes").value);
//   let seconds = parseInt(document.getElementById("seconds").value);

//   let totalSeconds = hours * 3600 + minutes * 60 + seconds;

//   const countdownInterval = setInterval(function() {
//     if (totalSeconds <= 0) {
//       clearInterval(countdownInterval);
//       document.getElementById("countdownDisplay").textContent = "Time's up!";
//     } else {
//       totalSeconds--;
//       const hrs = Math.floor(totalSeconds / 3600);
//       const mins = Math.floor((totalSeconds % 3600) / 60);
//       const secs = totalSeconds % 60;
//       document.getElementById("countdownDisplay").textContent = `${String(hrs).padStart(2, '0')}:${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
//     }
//   }, 1000);
// });



// random quote
// const quotes = [
//   "The best way to predict the future is to invent it. - Alan Kay",
//   "Life is 10% what happens to us and 90% how we react to it. - Charles R. Swindoll",
//   "Your time is limited, don't waste it living someone else's life. - Steve Jobs",
//   "The only way to do great work is to love what you do. - Steve Jobs",
//   "Success is not the key to happiness. Happiness is the key to success. - Albert Schweitzer"
// ];

// document.getElementById("newQuoteBtn").addEventListener("click", () => {
//   const randomIndex = Math.floor(Math.random() * quotes.length);
//   document.getElementById("quote").textContent = quotes[randomIndex];
// });

// geolocation
// document.getElementById("getLocationBtn").addEventListener("click", function() {
//   if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(function(position) {
//       const lat = position.coords.latitude;
//       const lon = position.coords.longitude;
//       document.getElementById("location").textContent = `Latitude: ${lat}, Longitude: ${lon}`;
//     }, function() {
//       document.getElementById("location").textContent = "Unable to retrieve location.";
//     });
//   } else {
//     document.getElementById("location").textContent = "Geolocation is not supported by this browser.";
//   }
// });

      </script>
      
      
      
    <script src="{{ asset('mazer/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/compiled/js/app.js') }}"></script>
    <script src="{{ asset('mazer/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/simple-datatables.js')}}"></script>
    <script src="{{ asset('mazer/assets/extensions/dayjs/dayjs.min.js')}}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/ui-apexchart.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>       
</body>
</html>
