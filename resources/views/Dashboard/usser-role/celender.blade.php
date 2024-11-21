@extends('layouts.base-app')

@section('title', 'alat bantu')

@section('content')

{{-- map --}}
<div class="card w-50 p-3">
    <div class="card-body">
      <h5 class="card-title">Maps</h5>
    </div>
  <div class="ratio ratio-16x9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117996.95037632967!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e1!3m2!1spl!2spl!4v1672242444695!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

{{-- geolocation --}}
<div class="card w-50 p-3">
  <div class="card-body">
    <h5 class="card-title">geolocation</h5>
  </div>
<div class="geolocation-container">
  <button id="getLocationBtn">Get My Location</button>
  <p id="location"></p>
</div>
</div>


{{-- kalkulator --}}
<div class="card w-50 p-3">
  <div class="card-body">
    <h5 class="card-title">calculator</h5>
  </div>
<div class="calculator">
  <input type="text" id="display" readonly>
  <div class="buttons">
    <button onclick="appendNumber('9')">9</button>
    <button onclick="appendNumber('8')">8</button>
    <button onclick="appendNumber('7')">7</button>
    <button onclick="appendNumber('6')">6</button>
    <button onclick="appendNumber('5')">5</button>
    <button onclick="appendNumber('4')">4</button>
    <button onclick="appendNumber('3')">3</button>
    <button onclick="appendNumber('2')">2</button>
    <button onclick="appendNumber('1')">1</button>
    <button onclick="clearDisplay()">C</button>
    <button onclick="appendNumber('0')">0</button>
    <button onclick="appendOperator('-')">-</button>
    <button onclick="appendOperator('*')">*</button>
    <button onclick="appendOperator('+')">+</button>
    <button onclick="appendOperator('/')">/</button>
    <button onclick="calculateResult()">=</button> 
  </div>
</div>
</div>

{{-- stop wacth --}}
<div class="card w-50 p-3">
  <div class="card-body">
    <h5 class="card-title"></h5>Stopwatch
  </div>
<div class="timer-container">
  <p id="timer">00:00:00</p>
  <button id="startBtn">Start</button>
  <button id="stopBtn" disabled>Stop</button>
  <button id="resetBtn" disabled>Reset</button>
</div>
</div>

{{-- Countdown Timer --}}
<div class="card w-50 p-3">
  <div class="card-body">
    <h5 class="card-title">Countdown Timer</h5>
  </div>
  <div class="countdown-input">
    <label for="hours">Hours:</label>
    <input type="number" id="hours" value="0">
    <label for="minutes">Minutes:</label>
    <input type="number" id="minutes" value="5">
    <label for="seconds">Seconds:</label>
    <input type="number" id="seconds" value="0">
    <button id="startCountdown">Start Countdown</button>
  </div>
  <p id="countdownDisplay">00:00:00</p>      
</div>


{{-- random quote --}}
<div class="card w-50 p-3">
  <div class="card-body">
    <h5 class="card-title">Inspirational Quote</h5>
  </div>
<div class="quote-container">
  <p id="quote">"Click the button to get inspired!"</p>
  <button id="newQuoteBtn">Get New Quote</button>
</div>
</div>

@endsection