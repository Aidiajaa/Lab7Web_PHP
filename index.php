<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Praktikum PHP</title> 
</head> 
<body> 
  <h1>Belajar PHP</h1> 
  <?php 
    echo "<p>PHP berhasil dijalankan.</p>"; 
    echo "<p>Waktu server: " . date("d-m-Y H:i:s") . "</p>"; 
  ?>
  
  <?php
  $nama = "Aidi";
  $tugas = 85;
  $uts = 90;
  $uas = 95;
  $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
  if ($nilaiAkhir >= 85) {
  $predikat = "A";
  } elseif ($nilaiAkhir >= 75) {
  $predikat = "B";
  } elseif ($nilaiAkhir >= 60) {
  $predikat = "C";
  } else {
  $predikat = "D";
  }
  echo "Nama: " . htmlspecialchars($nama) . "<br>";
  echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
  echo "Predikat: " . $predikat;
  ?>

  <?php
  $mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Aidi", "Almond", "Veyr"];
  echo "<h3>Daftar Mahasiswa</h3><ol>";
  foreach ($mahasiswa as $nama) {
  echo "<li>" . htmlspecialchars($nama) . "</li>";
  }
  echo "</ol>";
  ?>

  <?php
  function hitungDiskon($harga, $persen) {
  $potongan = $harga * ($persen / 100);
  return $harga - $potongan;
  }
  $hargaAkhir = hitungDiskon(150000, 10);
  echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".") . "<br>";
  function PersegiPanjang($panjang, $lebar) {
  $luas = $panjang * $lebar;
  return $luas;
  }
  $luasPersegiPanjang = PersegiPanjang(10, 5);
  echo "Luas Persegi Panjang: " . $luasPersegiPanjang;
  ?>

<!-- cari.php -->
  <form method="GET" action="">
    <label for="kata">Kata kunci:</label>
    <input id="kata" name="kata" type="text">
    <button type="submit">Cari</button>
  </form>
  <?php
  if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);
    echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8");
  }
  ?>

<!-- index.php -->
  <form method="POST" action="">
    <label for="nama">Nama:</label>
    <input id="nama" name="nama" type="text" required>
    <label for="prodi">Program Studi:</label>
    <input id="prodi" name="prodi" type="text" required>
    <button type="submit" name="kirim">Kirim Data</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");

    if ($nama === "" || $prodi === "") {
      echo "<p>Semua kolom wajib diisi.</p>";
    } else {
      echo "<h3>Data diterima</h3>";
      echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
      echo "Program Studi: " . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
  }
  }
  ?>

  <?php
  $hasil = null;
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $barang = trim($_POST["barang"] ?? "");
      $hargaInput = $_POST["harga"] ?? "";
      $jumlahInput = $_POST["jumlah"] ?? "";

      if ($barang === "" || !is_numeric($hargaInput) ||
        !ctype_digit((string)$jumlahInput) ||
        (float)$hargaInput < 0 || (int)$jumlahInput < 1) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
      } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
      }
  }
  ?>
  <form method="POST">
    <label>Nama barang <input name="barang" required></label>
    <label>Harga <input name="harga" type="number" min="0" step="0.01" required></label>
    <label>Jumlah <input name="jumlah" type="number" min="1" step="1" required></label>
    <button type="submit">Hitung</button>
  </form>
  <?php
  if (isset($error)) {
    echo "<p>" . htmlspecialchars($error) . "</p>";
  } elseif (isset($subtotal)) {
    echo "<p>Barang: " . htmlspecialchars($barang) . "</p>";
    echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p>";
  }
  ?>
 
<!-- mini project -->
  <?php

  $data = null;
  $error = [];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $nama = trim($_POST["nama"] ?? "");
      $nim = trim($_POST["nim"] ?? "");
      $prodi = trim($_POST["prodi"] ?? "");
      $semesterInput = $_POST["semester"] ?? "";
      $email = trim($_POST["email"] ?? "");

      if ($nama === "") {
          $error[] = "Nama wajib diisi.";
      }
      if ($nim === "") {
          $error[] = "NIM wajib diisi.";
      }
      if ($prodi === "") {
          $error[] = "Program studi wajib diisi.";
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $error[] = "Format email tidak valid.";
      }

      if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
          $error[] = "Semester harus berupa angka 1-14.";
      }

      if (!$error) {
          $data = compact("nama", "nim", "prodi", "email");
          $data["semester"] = (int)$semesterInput;
      }
  }
  ?>

  <h2>Formulir Data Mahasiswa</h2>

      <form method="POST" action="">
          <p>
              <label for="nama">Nama Lengkap:</label><br>
              <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($_POST["nama"] ?? "", ENT_QUOTES, "UTF-8"); ?>" required>
          </p>
          <p>
              <label for="nim">NIM:</label><br>
              <input type="text" id="nim" name="nim" value="<?php echo htmlspecialchars($_POST["nim"] ?? "", ENT_QUOTES, "UTF-8"); ?>" required>
          </p>
          <p>
              <label for="prodi">Program Studi:</label><br>
              <input type="text" id="prodi" name="prodi" value="<?php echo htmlspecialchars($_POST["prodi"] ?? "", ENT_QUOTES, "UTF-8"); ?>" required>
          </p>
          <p>
              <label for="semester">Semester (1-14):</label><br>
              <input type="number" id="semester" name="semester" min="1" max="14" value="<?php echo htmlspecialchars($_POST["semester"] ?? "", ENT_QUOTES, "UTF-8"); ?>" required>
          </p>
          <p>
              <label for="email">Email:</label><br>
              <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST["email"] ?? "", ENT_QUOTES, "UTF-8"); ?>" required>
          </p>
          <button type="submit">Kirim Data</button>
      </form>

      <hr>

      <?php if (!empty($error)): ?>
          <div style="color: red;">
              <h3>Terjadi Kesalahan:</h3>
              <ul>
                  <?php foreach ($error as $pesanError): ?>
                      <li><?php echo htmlspecialchars($pesanError, ENT_QUOTES, "UTF-8"); ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
      <?php elseif ($data !== null): ?>
          <div>
              <h3>Ringkasan Data Mahasiswa</h3>
              <p><strong>Nama:</strong> <?php echo htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8"); ?></p>
              <p><strong>NIM:</strong> <?php echo htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8"); ?></p>
              <p><strong>Program Studi:</strong> <?php echo htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8"); ?></p>
              <p><strong>Semester:</strong> <?php echo htmlspecialchars((string)$data["semester"], ENT_QUOTES, "UTF-8"); ?></p>
              <p><strong>Email:</strong> <?php echo htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8"); ?></p>
          </div>
      <?php endif; ?>
</body> 
</html>