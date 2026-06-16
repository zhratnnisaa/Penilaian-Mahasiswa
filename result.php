<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: app.php');
    exit;
}
$absen = ($_POST['absen'] ?? 0);
$tugas = ($_POST['tugas'] ?? 0);
$uts   = ($_POST['uts']   ?? 0);
$uas   = ($_POST['uas']   ?? 0);

$nilai_absen_w = $absen * 0.10;
$nilai_tugas_w = $tugas * 0.20;
$nilai_uts_w   = $uts   * 0.30;
$nilai_uas_w   = $uas   * 0.40;

$nilai_akhir = $nilai_absen_w + $nilai_tugas_w + $nilai_uts_w + $nilai_uas_w;
$nilai_akhir_round = round($nilai_akhir, 2);

if ($nilai_akhir >= 80){      
  $predikat = 'A'; $grade_class = 'grade-a'; 
}elseif ($nilai_akhir >= 70){  
  $predikat = 'B'; $grade_class = 'grade-b'; 
}elseif ($nilai_akhir >= 60){  
  $predikat = 'C'; $grade_class = 'grade-c'; 
}elseif ($nilai_akhir >= 50){  
  $predikat = 'D'; $grade_class = 'grade-d'; 
}else{                          
  $predikat = 'E'; $grade_class = 'grade-e'; 
}
if ($nilai_akhir >= 70){      
  $status = 'LULUS';       $status_class = 'status-lulus';
}elseif ($nilai_akhir >= 60){  
  $status = 'MENGULANG';   $status_class = 'status-mengulang';
}else{                     
  $status = 'TIDAK LULUS'; $status_class = 'status-tidak';
}
$score_pct = round($nilai_akhir) . '%';
function barWidth($val) { return min(100, max(0, $val)); }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hasil Nilai — Penilaian Mahasiswa</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wrapper">
  <?php include 'navbar.php'; ?>
  <main class="page-container">
    <div class="page-header">
      <h1>Hasil <span>Penilaian</span></h1>
      <p>Berikut ringkasan dan kalkulasi nilai akhirmu</p>
      <div class="divider"></div>
    </div>
    <div class="result-card">
      <!-- Hero Score -->
      <div class="result-hero">
        <div class="result-score-ring"
             style="--score-pct: <?= $score_pct ?>">
          <div class="result-score-inner">
            <div class="result-score-number"><?= $nilai_akhir_round ?></div>
            <div class="result-score-label">Nilai Akhir</div>
          </div>
        </div>
        <div class="result-grade <?= $grade_class ?>">
          <?= $predikat ?>
        </div>
        <div class="result-status <?= $status_class ?>">
          <?= $status ?>
        </div>
      </div>
      <!-- Breakdown -->
      <div class="result-body">
        <div class="result-breakdown">
          <div class="breakdown-row">
            <div class="breakdown-info">
              <div class="breakdown-name">Nilai Absen (10%)</div>
              <div class="breakdown-bar-wrap">
                <div class="breakdown-bar"
                  style="width: <?= barWidth($absen) ?>%"></div>
              </div>
            </div>
            <div>
              <div class="breakdown-val"><?= $absen ?></div>
              <div class="breakdown-weighted">+<?= round($nilai_absen_w,2) ?></div>
            </div>
          </div>
          <div class="breakdown-row">
            <div class="breakdown-info">
              <div class="breakdown-name">Nilai Tugas (20%)</div>
              <div class="breakdown-bar-wrap">
                <div class="breakdown-bar"
                  style="width: <?= barWidth($tugas) ?>%"></div>
              </div>
            </div>
            <div>
              <div class="breakdown-val"><?= $tugas ?></div>
              <div class="breakdown-weighted">+<?= round($nilai_tugas_w,2) ?></div>
            </div>
          </div>
          <div class="breakdown-row">
            <div class="breakdown-info">
              <div class="breakdown-name">Nilai UTS (30%)</div>
              <div class="breakdown-bar-wrap">
                <div class="breakdown-bar"
                  style="width: <?= barWidth($uts) ?>%"></div>
              </div>
            </div>
            <div>
              <div class="breakdown-val"><?= $uts ?></div>
              <div class="breakdown-weighted">+<?= round($nilai_uts_w,2) ?></div>
            </div>
          </div>
          <div class="breakdown-row">
            <div class="breakdown-info">
              <div class="breakdown-name">Nilai UAS (40%)</div>
              <div class="breakdown-bar-wrap">
                <div class="breakdown-bar"
                     style="width: <?= barWidth($uas) ?>%"></div>
              </div>
            </div>
            <div>
              <div class="breakdown-val"><?= $uas ?></div>
              <div class="breakdown-weighted">+<?= round($nilai_uas_w,2) ?></div>
            </div>
          </div>
        </div>
        <!-- Keterangan predikat + status -->
        <div class="weight-info" style="margin-bottom: 1.5rem;">
          <div class="weight-pill">Predikat <strong><?= $predikat ?></strong></div>
          <?php if($nilai_akhir >= 80): ?>
            <div class="weight-pill">Rentang <strong>80–100</strong></div>
          <?php elseif($nilai_akhir >= 70): ?>
            <div class="weight-pill">Rentang <strong>70–79</strong></div>
          <?php elseif($nilai_akhir >= 60): ?>
            <div class="weight-pill">Rentang <strong>60–69</strong></div>
          <?php elseif($nilai_akhir >= 50): ?>
            <div class="weight-pill">Rentang <strong>50–59</strong></div>
          <?php else: ?>
            <div class="weight-pill">Rentang <strong>&lt; 50</strong></div>
          <?php endif; ?>
        </div>
        <div class="result-actions">
          <a href="app.php" class="btn-back">← Hitung Ulang</a>
          <a href="index.php" class="btn-primary">Kembali ke Home</a>
        </div>
      </div>
    </div>
  </main>
  <?php include 'footer.php'; ?>
</div>
<script src="main.js"></script>
</body>
</html>