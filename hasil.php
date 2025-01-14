<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(255, 255, 255);
        }
        .navbar-brand {
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            max-height: 40px;
            margin-right: 10px;
        }
        .navbar-nav {
            margin: auto;
        }
        .btn-primary {
            margin-left: 10px;
        }
        .result-container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .result-container img{
            display: block;
            margin: 0 auto 20px;
            max-width: 250px;
            height: auto;
        }
        .result-container h1 {
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
            color: #3b82f6;
        }
        .result-container p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
        }
        .chart-container {
            position: relative;
            height: 50px;
            background: linear-gradient(to right, #22c55e, #facc15, #ef4444);
            border-radius: 25px;
            margin: 30px 0;
        }
        .chart-pointer {
            position: absolute;
            top: -20px;
            left: 75%; /* Posisi diubah sesuai persentase */
            transform: translateX(-50%);
            text-align: center;
        }
        .chart-pointer i {
            font-size: 30px;
            color: #000;
        }
        .percentage-label {
            margin-top: -5px;
            font-size: 1rem;
            font-weight: bold;
            color: #000;
        }
        .chart-needle {
            position: absolute;
            top: -10px;
            width: 2px;
            height: 70px;
            background-color: #000;
            transform-origin: bottom center;
        }
        .percentage-label {
            position: absolute;
            top: -30px;
            font-size: 1rem;
            font-weight: bold;
            color: #000;
            text-align: center;
            width: 50px;
            margin-left: -25px;
        }
        .result-container .recommendation {
            margin-top: 30px;
            padding: 20px;
            background-color: #f0f9ff;
            border-left: 5px solid #3b82f6;
            border-radius: 8px;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .btn-secondary {
            background-color:#3b82f6;
            border-radius: 8px;
            border: none;
        }
    </style>
</head>
<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/logo.svg" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="#" class="btn btn-outline-primary">Masuk</a>
                    <a href="#" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="result-container">
        <h1><b>Hasil Tes Anda</b></h1>
        <img src="./assets/hasil-image.svg" alt="Biodata Illustration">

        <p>Berdasarkan jawaban yang Anda berikan, hasil tes menunjukkan:</p>

        <div class="chart-container">
            <div class="chart-needle" style="left: 75%;"></div>
            <div class="percentage-label" style="left: 75%;">75%</div>
        </div>

        <p>
            Dengan persentase ini, Anda termasuk dalam golongan <strong>demensia sedang</strong>. Ini berarti Anda mungkin mengalami gejala seperti:
        </p>
        <ul>
            <li>Kesulitan mengingat peristiwa terbaru</li>
            <li>Kehilangan orientasi waktu atau tempat</li>
            <li>Kesulitan menyelesaikan tugas sehari-hari</li>
        </ul>

        <div class="recommendation">
            <h4>Rekomendasi:</h4>
            <p>
                Kami menyarankan Anda untuk:
            </p>
            <ul>
                <li>Konsultasi dengan dokter spesialis saraf atau psikiater</li>
                <li>Menerapkan gaya hidup sehat seperti olahraga rutin dan pola makan seimbang</li>
                <li>Melakukan aktivitas yang merangsang otak, seperti membaca atau bermain teka-teki</li>
                <li>Meningkatkan interaksi sosial untuk menjaga kesehatan mental</li>
            </ul>
        </div>

        <p>
            Informasi ini ditujukan untuk membantu Anda memahami kondisi Anda. Jika Anda memiliki pertanyaan lebih lanjut, harap berkonsultasi dengan tenaga medis profesional.
        </p>
        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
