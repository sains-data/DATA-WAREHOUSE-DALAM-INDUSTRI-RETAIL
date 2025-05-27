<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "superstore";

// 1. Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// 2. Buka file CSV
$filename = "samplesuperstore.csv";
if (($handle = fopen($filename, "r")) !== FALSE) {

    // 3. Lewati baris header
    fgetcsv($handle);

    // 4. Loop isi CSV dan insert ke database
    $success = 0;
    $fail = 0;
    $fail_msgs = [];
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // Pastikan jumlah kolom cukup
        if (count($data) < 13) {
            $fail++;
            $fail_msgs[] = "Baris dilewati karena kolom kurang: ".json_encode($data);
            continue;
        }
        $sales = str_replace(",", ".", $data[9]);
        $profit = str_replace(",", ".", $data[12]);

        $sql = "INSERT INTO samplesuperstore (
            Ship_Mode, Segment, Country, City, State, Postal_Code, Region, Category, Sub_Category, Sales, Quantity, Discount, Profit
        ) VALUES (
            '".$conn->real_escape_string($data[0])."',
            '".$conn->real_escape_string($data[1])."',
            '".$conn->real_escape_string($data[2])."',
            '".$conn->real_escape_string($data[3])."',
            '".$conn->real_escape_string($data[4])."',
            '".$conn->real_escape_string($data[5])."',
            '".$conn->real_escape_string($data[6])."',
            '".$conn->real_escape_string($data[7])."',
            '".$conn->real_escape_string($data[8])."',
            '".$sales."',
            '".intval($data[10])."',
            '".floatval($data[11])."',
            '".$profit."'
        )";
        if ($conn->query($sql)) {
            $success++;
        } else {
            $fail++;
            $fail_msgs[] = $conn->error;
        }
    }

    fclose($handle);
    echo "ETL Selesai! Berhasil: $success, Gagal: $fail\n";
    if ($fail > 0) {
        echo "Contoh error: ".implode(" | ", array_slice($fail_msgs, 0, 3))."\n";
    }
} else {
    echo "Gagal membuka file.";
}

$conn->close();
?>
