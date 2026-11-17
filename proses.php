<?php
$tinggi = $_POST['tinggi'] ?? '';

// Validasi apakah input adalah bilangan bulat antara 1 sampai 20
if (filter_var($tinggi, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 20]])) {
    
    // 1. SEGITIGA KE ATAS
    $hasil_atas = "";
    for ($i = 1; $i <= $tinggi; $i++) {
        $hasil_atas .= str_repeat(" ", $tinggi - $i) . str_repeat("*", 2 * $i - 1) . "\n";
    }
    echo "<h3>Segitiga ke Atas:</h3>";
    echo "<pre>" . htmlspecialchars($hasil_atas) . "</pre>";

    // 2. SEGITIGA KE BAWAH
    $hasil_bawah = "";
    for ($i = $tinggi; $i >= 1; $i--) {
        $hasil_bawah .= str_repeat(" ", $tinggi - $i) . str_repeat("*", 2 * $i - 1) . "\n";
    }
    echo "<h3>Segitiga ke Bawah:</h3>";
    echo "<pre>" . htmlspecialchars($hasil_bawah) . "</pre>";

    // 3. SEGITIGA KE SAMPING (Siku-siku Menghadap Kiri)
    $hasil_samping_1 = "";
    for ($i = 1; $i <= $tinggi; $i++) {
        $hasil_samping_1 .= str_repeat("*", $i) . "\n";
    }
    for ($i = $tinggi - 1; $i >= 1; $i--) {
        $hasil_samping_1 .= str_repeat("*", $i) . "\n";
    }
    echo "<h3>Segitiga ke Samping (Menghadap Kiri):</h3>";
    echo "<pre>" . htmlspecialchars($hasil_samping_1) . "</pre>";

    // 4. SEGITIGA KE SAMPING SATU LAGI (Siku-siku Menghadap Kanan)
    $hasil_samping_2 = "";
    // Bagian melebar (pakai spasi di depan)
    for ($i = 1; $i <= $tinggi; $i++) {
        $hasil_samping_2 .= str_repeat(" ", $tinggi - $i) . str_repeat("*", $i) . "\n";
    }
    // Bagian menyempit
    for ($i = $tinggi - 1; $i >= 1; $i--) {
        $hasil_samping_2 .= str_repeat(" ", $tinggi - $i) . str_repeat("*", $i) . "\n";
    }
    echo "<h3>Segitiga ke Samping (Menghadap Kanan):</h3>";
    echo "<pre>" . htmlspecialchars($hasil_samping_2) . "</pre>";

} else {
    echo "Error: Input harus berupa bilangan bulat antara 1 sampai 20!";
}

echo '<br><a href="index.php">Kembali</a>';
?>