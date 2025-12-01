<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitAcademy</title>

    {{-- Load CSS & JS from Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="app-body">

    <!-- NAVBAR -->
    <nav class="navbar">
        <h1 class="logo">FitAcademy</h1>

        <ul class="nav-links">

            <li><a href="#">Home</a></li>
            <li><a href="#">Science</a></li>

            <!-- DROPDOWN: GUIDE -->
            <li class="dropdown">
                <button class="dropdown-btn">
                    Guide ▼
                </button>

                <div class="dropdown-menu">
                    <a href="#">Exercise Library</a>
                    <a href="#">Nutrisi & Suplemen</a>
                    <a href="#">Program</a>
                </div>
            </li>

            <li><a href="#">Tools</a></li>
        </ul>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-left">
            <h2>SDG 4: Quality Education</h2>

            <p>
                FitAcademy menyediakan informasi berbasis sains tentang gym, kesehatan, dan kebugaran.
                Tujuannya adalah memberikan edukasi berkualitas kepada masyarakat agar memahami pentingnya
                aktivitas fisik dan pola hidup sehat.
            </p>

            <a href="#" class="btn-primary">Start Your Journey</a>
        </div>

        <div class="hero-right">
            <div class="logo-box">LOGO</div>
        </div>
    </section>

</body>
</html>
