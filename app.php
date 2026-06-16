<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Input Nilai — Penilaian Mahasiswa</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wrapper">
  <?php include 'navbar.php'; ?>
  <main class="page-container">
    <div class="page-header">
      <h1>Input <span>Nilai</span></h1>
      <p>Masukkan komponen nilai untuk menghitung nilai akhir</p>
      <div class="divider"></div>
    </div>
    <div class="input-card">
      <form action="result.php" method="POST" id="nilaiForm" novalidate>
        <div class="form-group">
          <label class="form-label" for="nama">Nama </label>
          <input type="text" name="nama" class="form-input" placeholder="Masukkan nama ..." required />
        </div>
        <div class="form-group">
          <label class="form-label" for="npm">NPM </label>
          <input type="text" name="NPM" class="form-input" placeholder="Masukkan NPM ..." required />
        </div>
        <div class="form-group">
          <label class="form-label" for="absen">
            Nilai Absen
            <span class="pct-badge">10%</span>
          </label>
          <input type="number" id="absen" name="absen" class="form-input" placeholder="0 – 100" min="0" max="100" required/>
          <div class="form-hint error-msg" id="err-absen">Nilai harus antara 0 – 100</div>
        </div>
        <div class="form-group">
          <label class="form-label" for="tugas">
            Nilai Tugas
            <span class="pct-badge">20%</span>
          </label>
          <input type="number" id="tugas" name="tugas" class="form-input" placeholder="0 – 100" min="0" max="100" required/>
          <div class="form-hint error-msg" id="err-tugas">Nilai harus antara 0 – 100</div>
        </div>
        <div class="form-group">
          <label class="form-label" for="uts">
            Nilai UTS
            <span class="pct-badge">30%</span>
          </label>
          <input type="number" id="uts" name="uts" class="form-input" placeholder="0 – 100" min="0" max="100" required/>
          <div class="form-hint error-msg" id="err-uts">Nilai harus antara 0 – 100</div>
        </div>
        <div class="form-group">
          <label class="form-label" for="uas">
            Nilai UAS
            <span class="pct-badge">40%</span>
          </label>
          <input type="number" id="uas"name="uas"class="form-input"placeholder="0 – 100"min="0" max="100"required/>
          <div class="form-hint error-msg" id="err-uas">Nilai harus antara 0 – 100</div>
        </div>
        <button type="submit" class="btn-submit">
          <span>Hitung Nilai Akhir</span>
        </button>
      </form>
    </div>
  </main>
  <?php include 'footer.php'; ?>
</div>
<script src="main.js"></script>
</body>
</html>