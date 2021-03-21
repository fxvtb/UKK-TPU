<?php
if ($_GET['module']=='home'){ ?>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <div class="text-center mb-4">
    <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Selamat Datang <?php echo $_SESSION['nama_user']; ?> </h1>
    <p>Aplikasi sitem <code>informasi spp</code> SMK MUDA <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, Firefox, and IE 10/11 (prefixed).</a></p>
  </div>
 <?php   }

 elseif ($_GET['module']=='jurusan'){ 
  include "module/jurusan/jurusan.php";
  }

  elseif ($_GET['module']=='siswa'){ 
   include "module/siswa/siswa.php";
   } 
  
  elseif ($_GET['module']=='spp'){ 
   include "module/spp/spp.php";
   } 
  
  elseif ($_GET['module']=='kelas'){
  include "module/kelas/kelas.php";
  }


  elseif ($_GET['module']=='pembayaran'){
  include "module/pembayaran/pembayaran.php";
  }
  elseif ($_GET['module']=='petugas'){
    include "module/petugas/petugas.php";
    }
  elseif ($_GET['module']=='laporan'){
    include "module/laporan/laporan.php";
    }

?>