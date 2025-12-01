@extends('layout')

@section('content')

<section class="tools-hero">
    <div class="tools-left">
        <h1 class="title-big">CALCULATE <br> YOUR TDEE</h1>

        <p>
            TDEE (Total Daily Energy Expenditure) membantu kamu mengetahui
            berapa kalori yang kamu bakar setiap hari berdasarkan usia, berat,
            tinggi badan, dan level aktivitas.
        </p>

        <!-- FORM -->
        <div class="tdee-form">

        <!-- Gender -->
        <label>Jenis Kelamin</label>
        <div class="input-box">
            <select id="gender">
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
            </select>
        </div>

        <!-- Age -->
        <label>Usia</label>
        <div class="input-box">
            <input type="number" id="age" placeholder="20">
        </div>

        <!-- Height -->
        <label>Tinggi Badan (cm)</label>
        <div class="input-box">
            <input type="number" id="height" placeholder="170">
            <span class="unit">cm</span>
        </div>

        <!-- Weight -->
        <label>Berat Badan (kg)</label>
        <div class="input-box">
            <input type="number" id="weight" placeholder="65">
            <span class="unit">kg</span>
        </div>

        <!-- Activity -->
        <label>Aktivitas</label>
        <div class="input-box">
            <select id="activity">
                <option value="1.2">Sedentary (minim olahraga)</option>
                <option value="1.375">Ringan (1–3x latihan)</option>
                <option value="1.55">Sedang (3–5x latihan)</option>
                <option value="1.725">Berat (6–7x latihan)</option>
                <option value="1.9">Atlet / Sangat berat</option>
            </select>
        </div>

        <button class="btn-primary" onclick="calculateTDEE()">Calculate Now →</button>

    </div>

        <p id="tdeeResult" class="result-text"></p>

    </div>

    <div class="tools-right">
        <img src="/images/fit-tdee.png" class="tools-img">
    </div>

</section>

@endsection
