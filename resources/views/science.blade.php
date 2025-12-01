@extends('layout')

@section('content')

<section class="science-hero">
    <h1 class="science-title">FITNESS SCIENCE 101</h1>
    <p class="science-sub">
        Belajar dasar hipertrofi, nutrisi, suplemen, dan prinsip latihan berbasis sains.
    </p>
</section>

<section class="science-container">

    <!-- CARD TEMPLATE -->
    <div class="science-card" onclick="toggleScience(this)">
        <h2 class="card-title">1. Prinsip Utama Hipertrofi Otot</h2>
        <div class="card-content">
            <p><strong>Tension</strong> adalah kunci utama pertumbuhan otot. Stretch + kontrol eccentric 2–4 detik adalah yang paling efektif.</p>
            <p><strong>Teknik yang benar</strong> lebih penting daripada beban berat. Hindari momentum.</p>
            <p><strong>RPE 7–9</strong> ideal untuk hipertrofi bagi pemula.</p>
            <p><strong>Progressive Overload</strong> dapat dilakukan dengan meningkatkan repetisi, beban, atau kualitas teknik.</p>
        </div>
    </div>

    <div class="science-card" onclick="toggleScience(this)">
        <h2 class="card-title">2. Volume & Frekuensi Latihan</h2>
        <div class="card-content">
            <p>Latih setiap otot <strong>2 kali per minggu</strong>.</p>
            <p>Volume efektif: <strong>10–20 set per otot per minggu</strong>.</p>
            <p>Gunakan blok: Foundation → Ramping.</p>
        </div>
    </div>

    <div class="science-card" onclick="toggleScience(this)">
        <h2 class="card-title">3. Latihan Mesin & Stabilitas</h2>
        <div class="card-content">
            <p>Mesin memberikan tension lebih konstan dan aman mendekati failure.</p>
            <p>Cable machine sangat ideal untuk latihan stretch.</p>
        </div>
    </div>

    <div class="science-card" onclick="toggleScience(this)">
        <h2 class="card-title">4. Anatomi Otot & Fungsi</h2>
        <div class="card-content">
            <p>Dada = push • Punggung = pull • Bahu = deltoid 3 head • Kaki = quad/hamstring/glutes.</p>
        </div>
    </div>

    <div class="science-card" onclick="toggleScience(this)">
        <h2 class="card-title">5. Nutrisi untuk Bodybuilding</h2>
        <div class="card-content">
            <p>Surplus 5–15% → bulk | Defisit 5–15% → cut | Maintenance → recomposition.</p>
            <p>Protein 1.6–2.2g/kg (cutting bisa 2.7g/kg).</p>
        </div>
    </div>

    <div class="science-card" onclick="toggleScience(this)">
        <h2 class="card-title">6. Tracking Progress Ilmiah</h2>
        <div class="card-content">
            <p>Gunakan strength log, foto tiap 1–3 bulan, dan pantau rata-rata berat mingguan.</p>
        </div>
    </div>

    <div class="science-card" onclick="toggleScience(this)">
        <h2 class="card-title">7. Suplemen yang Terbukti</h2>
        <div class="card-content">
            <p>Creatine 5g/hari, caffeine 150–250mg, whey protein sebagai pelengkap kebutuhan protein.</p>
        </div>
    </div>

</section>

@endsection
