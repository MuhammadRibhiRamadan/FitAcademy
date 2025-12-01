@extends('layout')

@section('content')

<section class="tools-hero">
    <div class="tools-left">
        <h1 class="title-big">CALCULATE <br> YOUR BMI</h1>

        <p>
            Body Mass Index (BMI) membantu kamu memahami apakah berat badanmu ideal,
            kurang, atau berlebih berdasarkan tinggi dan berat badan.
        </p>

        <div class="form-section">
            <label>Tinggi Badan</label>
            <div class="input-box">
                <input type="number" id="height" placeholder="170" />
                <span>cm</span>
            </div>

            <label>Berat Badan</label>
            <div class="input-box">
                <input type="number" id="weight" placeholder="65" />
                <span>kg</span>
            </div>

            <button class="btn-primary" onclick="calculateBMI()">Calculate Now →</button>
        </div>

        <p id="bmiResult" class="result-text"></p>
    </div>

    <div class="tools-right">
        <img src="/images/fit-bmi.png" class="tools-img" />
    </div>
</section>

@endsection
