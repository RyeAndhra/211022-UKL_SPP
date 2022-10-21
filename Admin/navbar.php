<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="/SPP/Assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">UKL - Sekolah</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>

    <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="/SPP/Assets/img/profile-img-rei.jpeg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?=$_SESSION['nama_petugas']?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?=$_SESSION['nama_petugas']?></h6>
            <span><?=$_SESSION['level']?></span>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="dashboard.php">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="/SPP/logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul>
      </li>
    </ul>
    </nav>

  </header>

  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#siswa-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="siswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tam_siswa.php">
              <i class="bi bi-circle"></i><span>Data Siswa</span>
            </a>
          </li>
          
          <li>
            <a href="t_siswa.php">
              <i class="bi bi-circle"></i><span>Tambah Siswa</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#petugas-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-fill"></i></i><span>Petugas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="petugas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tam_petugas.php">
              <i class="bi bi-circle"></i><span>Data Petugas</span>
            </a>
          </li>
          
          <li>
            <a href="t_petugas.php">
              <i class="bi bi-circle"></i><span>Tambah Petugas</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kelas-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-school"></i><span>Kelas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kelas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tam_kelas.php">
              <i class="bi bi-circle"></i><span>Data Kelas</span>
            </a>
          </li>

          <li>
            <a href="t_kelas.php">
              <i class="bi bi-circle"></i><span>Tambah Kelas</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#spp-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-text"></i><span>SPP</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="spp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tam_spp.php">
              <i class="bi bi-circle"></i><span>Data SPP</span>
            </a>
          </li>
          <li>
            <a href="t_spp.php">
              <i class="bi bi-circle"></i><span>Tambah SPP</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-heading">Transaksi</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pembayaran.php">
          <i class="bi bi-cash-stack"></i>
          <span>Pembayaran</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="histori_pembayaran.php">
          <i class="bi bi-receipt"></i>
          <span>Histori</span>
        </a>
      </li>
    </ul>
  </aside>