<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Ruang Budaya - Cerita Rakyat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', sans-serif;
        }

        .main-container {
            background-color: #713d27;
            color: white;
            padding: 60px 100px;
            min-height: 100vh;
        }

        .menu-toggle {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 28px;
            color: white;
            cursor: pointer;
            z-index: 1001;
        }

        .search-box {
            background-color: white;
            border-radius: 30px;
            padding: 10px 20px;
            margin-top: 10px;
        }

        .search-box input {
            border: none;
            outline: none;
            width: 100%;
        }

        .card-story {
            background-color: #eeeeee;
            border-radius: 15px;
            padding: 15px 20px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #000;
        }

        .card-story .title {
            font-weight: bold;
            color: #d88c00;
        }

        .card-story .region {
            font-size: 14px;
            color: #555;
        }

        .side-menu {
            position: fixed;
            top: 0;
            right: -300px;
            height: 100%;
            width: 260px;
            background-color: #43261e;
            padding: 40px 20px;
            box-shadow: -4px 0 8px rgba(0, 0, 0, 0.2);
            transition: right 0.3s ease;
            z-index: 1000;
            border-radius: 20px 0 0 20px;
        }

        .side-menu.active {
            right: 0;
        }

        .side-menu h5 {
            color: white;
            font-family: cursive;
            margin-bottom: 30px;
        }

        .side-menu a {
            display: block;
            color: white;
            font-size: 16px;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid white;
            text-decoration: none;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.3);
            display: none;
            z-index: 999;
        }

        .overlay.active {
            display: block;
        }
    </style>
</head>

<body>

    <!-- Toggle Menu -->
    <div class="menu-toggle">
        <i class="bi bi-list"></i>
    </div>

    <!-- Side Menu -->
    <div class="side-menu" id="sideMenu">
        <h5>Ruang Budaya</h5>
        <a href="#">Home</a>
        <a href="#">Akun</a>
        <a href="#">Logout</a>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Main Content -->
    <div class="main-container">
        <h3 class="fw-bold">Ruang Budaya</h3>
        <h1 class="fw-bold mt-3">Cerita Rakyat</h1>
        <p>Apa yang ingin kamu eksplor hari ini?</p>

        <div class="search-box mb-4 mt-3">
            <div class="d-flex align-items-center">
                <span class="me-2">🔍</span>
                <input type="text" placeholder="Cari cerita...">
            </div>
        </div>

        <h5 class="fw-bold mt-4">Rekomendasi</h5>
        <div class="card-story">
            <div>
                <div class="title">Roro Jonggrang</div>
                <div class="region">Jawa Tengah</div>
            </div>
            <i class="bi bi-arrow-right-circle"></i>
        </div>
        <div class="card-story">
            <div>
                <div class="title">Timun Mas</div>
                <div class="region">Jawa Tengah</div>
            </div>
            <i class="bi bi-arrow-right-circle"></i>
        </div>

        <h5 class="fw-bold mt-4">Cerita lainnya</h5>
        <div class="card-story">
            <div>
                <div class="title">Legenda Dewi Sari</div>
                <div class="region">Jawa Tengah</div>
            </div>
            <i class="bi bi-arrow-right-circle"></i>
        </div>
        <div class="card-story">
            <div>
                <div class="title">Jaka Tarub dan 7 Bidadari</div>
                <div class="region">Jawa Tengah</div>
            </div>
            <i class="bi bi-arrow-right-circle"></i>
        </div>
        <div class="card-story">
            <div>
                <div class="title">Ajisaka</div>
                <div class="region">Jawa Tengah</div>
            </div>
            <i class="bi bi-arrow-right-circle"></i>
        </div>
        <div class="card-story">
            <div>
                <div class="title">Ande-Ande Lumut</div>
                <div class="region">Jawa Tengah</div>
            </div>
            <i class="bi bi-arrow-right-circle"></i>
        </div>
    </div>

    <!-- Script for toggle menu -->
    <script>
        const toggle = document.querySelector('.menu-toggle');
        const sideMenu = document.getElementById('sideMenu');
        const overlay = document.getElementById('overlay');

        toggle.addEventListener('click', () => {
            sideMenu.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', () => {
            sideMenu.classList.remove('active');
            overlay.classList.remove('active');
        });
    </script>

</body>

</html>