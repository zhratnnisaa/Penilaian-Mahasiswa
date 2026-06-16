<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil — Penilaian Mahasiswa</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wrapper">
  <?php include 'navbar.php'; ?>
  <main class="page-container">
    <div class="page-header">
      <h1>Profil <span>Pembuat</span></h1>
      <p>Informasi identitas pengembang aplikasi</p>
      <div class="divider"></div>
    </div>
    <div class="profile-card">
        <div class="profile-img-container">
            <img src="zara pic.jpeg" class="profile-img" alt="Foto Profil">
            <div class="profile-img-ring"></div>
        </div>
      <div class="profile-name">Zahratunnisa</div>
      <div class="profile-role">Mahasiswi Teknik Informatika</div>
      <div class="profile-info-grid">
        <div class="profile-info-row">
          <span class="profile-info-label">NPM</span>
          <span class="profile-info-value">2410010299</span>
        </div>
        <div class="profile-info-row">
          <span class="profile-info-label">Nama Lengkap</span>
          <span class="profile-info-value">Zahratunnisa</span>
        </div>
        <div class="profile-info-row">
          <span class="profile-info-label">Kelas</span>
          <span class="profile-info-value">4A TI Reguler Banjarbaru</span>
        </div>
        <div class="profile-info-row">
          <span class="profile-info-label">Mata Kuliah</span>
          <span class="profile-info-value">Pemrograman Web 2</span>
        </div>
        <div class="profile-info-row">
          <span class="profile-info-label">E-mail</span>
          <span class="profile-info-value">zhra.tnnisa16@gmail.com</span>
        </div>
      </div>
    </div>
  </main>
  <?php include 'footer.php'; ?>
</div>
<script src="main.js"></script>
</body>
</html>