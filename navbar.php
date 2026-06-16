<nav class="navbar">
  <a href="index.php" class="nav-brand">
    <span class="nav-brand-text">Aplikasi Penilaian<span> Mahasiswa </span></span>
  </a>
  <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </button>
  <ul class="nav-links" id="navLinks">
    <li>
      <a href="index.php" class="<?= $current_page === 'home' ? 'active' : '' ?>">Home</a>
    </li>
    <li>
      <a href="profile.php" class="<?= $current_page === 'profile' ? 'active' : '' ?>">Profile</a>
    </li>
    <li>
      <a href="app.php" class="<?= $current_page === 'app' ? 'active' : '' ?>">App</a>
    </li>
  </ul>
</nav>