<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="sidebar-sticky pt-3">
      <?php if ($_SESSION['level']=='admin') {
        
        ?>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="?module=home">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=pembayaran">
              <span data-feather="file-plus"></span>
              Pembayaran
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=siswa">
              <span data-feather="users"></span>
              Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=jurusan">
              <span data-feather="git-pull-request"></span>
              Jurusan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=kelas">
              <span data-feather="layers"></span>
              Kelas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=spp">
              <span data-feather="bold"></span>
              Besaran SPP
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=petugas">
              <span data-feather="bold"></span>
              Petugas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=laporan">
              <span data-feather="printer"></span>
              Laporan
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Harian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Mingguan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Bulanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Tahunan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan per-Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan per-Periode
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Kustom
            </a>
          </li>
        </ul>

        <!-----------------------------------------------petugas------------------------>
      <?php } 
       elseif ($_SESSION['level']=='petugas') {

        ?>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="?module=home">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=pembayaran">
              <span data-feather="file-plus"></span>
              Pembayaran
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=siswa">
              <span data-feather="users"></span>
              Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=laporan">
              <span data-feather="printer"></span>
              Laporan
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Harian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Mingguan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Bulanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Tahunan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan per-Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan per-Periode
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Kustom
            </a>
          </li>
        </ul>
      <?php } 
      elseif ($_SESSION['level']== 'siswa') {
        
      ?>

<ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="?module=home">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?module=laporan">
              <span data-feather="printer"></span>
              Laporan
            </a>
          </li>
        </ul>


      <?php } ?>

      </div>
      </nav>