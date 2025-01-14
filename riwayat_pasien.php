<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Penyakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
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
        .form-container {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            text-align: center;
            color: #3b82f6;
        }
        .form-container img {
            display: block;
            margin: 0 auto 20px;
            max-width: 300px;
            height: auto;
        }
        .btn-primary {
            background-color: #3b82f6;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2563eb;
        }
        .form-label i {
            margin-right: 8px;
            color: #3b82f6;
        }
        input[type="radio"] {
            transform: scale(1.2);
            margin-right: 8px;
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

    <div class="form-container">
        <h1><b>Riwayat Penyakit</b></h1>
        <img src="./assets/riwayat-image.svg" alt="Biodata Illustration">
        <form id="riwayatForm">
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-heart"></i>Apakah kamu pernah memiliki riwayat gangguan pembuluh darah otak seperti stroke atau masalah aliran darah lain?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="stroke-yes" name="stroke" value="Pernah" required>
                    <label class="form-check-label" for="stroke-yes">Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="stroke-no" name="stroke" value="Tidak Pernah" required>
                    <label class="form-check-label" for="stroke-no">Tidak Pernah</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-brain"></i>Apakah kamu penderita Parkinson?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="parkinson-yes" name="parkinson" value="Pernah" required>
                    <label class="form-check-label" for="parkinson-yes">Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="parkinson-no" name="parkinson" value="Tidak Pernah" required>
                    <label class="form-check-label" for="parkinson-no">Tidak Pernah</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-dna"></i>Apakah kamu memiliki gangguan genetik seperti Huntington?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="huntington-yes" name="huntington" value="Pernah" required>
                    <label class="form-check-label" for="huntington-yes">Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="huntington-no" name="huntington" value="Tidak Pernah" required>
                    <label class="form-check-label" for="huntington-no">Tidak Pernah</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-head-side-virus"></i>Apakah kamu pernah mengalami cedera kepala atau cedera otak?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="cedera-yes" name="cedera" value="Pernah" required>
                    <label class="form-check-label" for="cedera-yes">Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="cedera-no" name="cedera" value="Tidak Pernah" required>
                    <label class="form-check-label" for="cedera-no">Tidak Pernah</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-heartbeat"></i>Apakah kamu memiliki penyakit jantung atau diabetes?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="jantung-yes" name="jantung" value="Pernah" required>
                    <label class="form-check-label" for="jantung-yes">Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="jantung-no" name="jantung" value="Tidak Pernah" required>
                    <label class="form-check-label" for="jantung-no">Tidak Pernah</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100" href=tes_pasien.php>Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('riwayatForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default

            // Ambil data riwayat penyakit (opsional, jika ingin menyimpan atau memproses data)
            const riwayatData = {
                stroke: document.querySelector('input[name="stroke"]:checked').value,
                parkinson: document.querySelector('input[name="parkinson"]:checked').value,
                huntington: document.querySelector('input[name="huntington"]:checked').value,
                cedera: document.querySelector('input[name="cedera"]:checked').value,
                jantung: document.querySelector('input[name="jantung"]:checked').value,
            };

            // Redireksi ke halaman tes_pasien.php setelah klik submit
            window.location.href = 'tes_pasien.php';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
