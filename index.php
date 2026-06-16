<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistem Penilaian Mahasiswa - Web 2</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wrapper">
  <?php include 'navbar.php'; ?>
  <main class="hero">
    <div class="hero-badge">Pemrograman Web 2 — UTS Project</div>
    <h1 class="hero-title">
      Aplikasi Penilaian
      <span class="accent">Akhir Mahasiswa</span>
    </h1>
    <p class="hero-sub">
      Perhitungan nilai akhir mata kuliah dengan tepat dan cepat.
      Masukkan komponen nilaimu dan dapatkan hasilnya secara otomatis.
    </p>
    <div class="menu-grid">
      <a href="index.php" class="menu-card">
        <div class="menu-card-title">Home</div>
        <div class="menu-card-desc">Halaman utama navigasi aplikasi kalkulator nilai akhir.</div>
        <div class="menu-card-arrow">→</div>
      </a>
      <a href="profile.php" class="menu-card">
        <div class="menu-card-title">Profile</div>
        <div class="menu-card-desc">Informasi identitas pembuat aplikasi — NPM, nama, dan kelas.</div>
        <div class="menu-card-arrow">→</div>
      </a>
      <a href="app.php" class="menu-card">
        <div class="menu-card-title">Hitung Nilai</div>
        <div class="menu-card-desc">Input nilai absen, tugas, UTS, dan UAS untuk kalkulasi nilai akhir.</div>
        <div class="menu-card-arrow">→</div>
      </a>
    </div>
  </main>
  <?php include 'footer.php'; ?>
</div>
<script src="main.js"></script>
</body>
</html>