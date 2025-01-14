<?php
// Atur header untuk mengizinkan CORS (jika diperlukan)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");

// Cek apakah data diterima melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data JSON dari body request
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);

    if ($data) {
        $filePath = './data/data.json';

        // Baca file JSON yang ada
        if (file_exists($filePath)) {
            $jsonData = json_decode(file_get_contents($filePath), true);
        } else {
            $jsonData = [];
        }

        // Tambahkan data baru
        $jsonData[] = $data;

        // Tulis kembali ke file
        if (file_put_contents($filePath, json_encode($jsonData, JSON_PRETTY_PRINT))) {
            echo json_encode(["message" => "Data berhasil disimpan"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Gagal menyimpan data"]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Data tidak valid"]);
    }
} else {
    http_response_code(405);
    echo json_encode(["message" => "Metode tidak diizinkan"]);
}
?>
