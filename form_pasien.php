<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
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
            margin-bottom: 0px;
            text-align: center;
            color: #3b82f6;
        }
        .form-container img {
            display: block;
            margin: 0 auto 20px;
            max-width: 250px;
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
        <h1><b>Form Biodata</b></h1>
        <img src="./assets/biodata-image.svg" alt="Biodata Illustration">
        <form id="biodataForm">
            <div class="mb-3">
                <label for="nama" class="form-label"><i class="fas fa-user"></i>Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label"><i class="fas fa-calendar-alt"></i>Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>
            <div class="mb-3">
                <label for="tanggal-lahir" class="form-label"><i class="fas fa-birthday-cake"></i>Tanggal Lahir</label>
                <div class="d-flex gap-2">
                    <select class="form-select" id="tanggal" name="tanggal" required>
                        <option value="" selected disabled>Tanggal</option>
                        <!-- Options for dates -->
                        <script>
                            for (let i = 1; i <= 31; i++) {
                                document.write(`<option value="${i}">${i}</option>`);
                            }
                        </script>
                    </select>
                    <select class="form-select" id="bulan" name="bulan" required>
                        <option value="" selected disabled>Bulan</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    <select class="form-select" id="tahun" name="tahun" required>
                        <option value="" selected disabled>Tahun</option>
                        <!-- Options for years -->
                        <script>
                            const currentYear = new Date().getFullYear();
                            for (let i = currentYear; i >= 1900; i--) {
                                document.write(`<option value="${i}">${i}</option>`);
                            }
                        </script>
                    </select>
                </div>
            </div>  
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-venus-mars"></i>Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required>
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script>
    document.getElementById('biodataForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = {
            id: Date.now(), // ID unik menggunakan timestamp
            nama: document.getElementById('nama').value,
            usia: document.getElementById('usia').value,
            tanggal: document.getElementById('tanggal').value,
            bulan: document.getElementById('bulan').value,
            tahun: document.getElementById('tahun').value,
            jenis_kelamin: document.querySelector('input[name="jenis_kelamin"]:checked').value
        };

        fetch('./save_data.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.message === "Data berhasil disimpan") {
                alert(data.message);
                window.location.href = 'riwayat_pasien.php'; // Ganti dengan halaman tujuan
            } else {
                alert('Terjadi kesalahan saat menyimpan data.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat menyimpan data.');
        });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
