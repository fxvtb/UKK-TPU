<?php 

////////////////////////////////////////////////////koneksi///////////////////////////////////////////////////////
include "../config/koneksi.php"; 

/////////////////////////////////////////////validasi login///////////////////////////////////////////////////////
if(isset($_POST['login'])){
    $username= $_POST['username'];
    $pass = $_POST['password'];



if (preg_match("/^[0-9]*$/", $username)) {

    $cekLogin = mysqli_query($koneksi, "SELECT nisn, nis, nama_siswa, id_kelas FROM siswa WHERE nisn='$username'");
     
    if(mysqli_num_rows($cekLogin) > 0 ){
            $dataLogin = mysqli_fetch_array($cekLogin);
            if($dataLogin['nisn'] == $pass ){
                //SCRIPT UNTUK SUKSES LOGIN
                session_start();
                $_SESSION['username'] = $dataLogin['nisn'];
                $_SESSION['nama_user'] = $dataLogin['nama_siswa'];
                $_SESSION['id_kelas'] = $dataLogin['id_kelas'];
                $_SESSION['level'] = 'siswa';

                header('location:media.php?module=home');
           
            }

            else{
                //SCRIPT UNTUK GAGAL LOGIN
                include "gagal-login.php";}
            }

    
    }else {
        $cekLogin = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username'");
        
        if(mysqli_num_rows($cekLogin) > 0 ){
                $dataLogin = mysqli_fetch_array($cekLogin);
                if($dataLogin['password'] == $pass ){
                    //SCRIPT UNTUK SUKSES LOGIN
                    session_start();
                    $_SESSION['username'] = $dataLogin['username'];
                    $_SESSION['nama_user'] = $dataLogin['nama_petugas'];
                    $_SESSION['level'] = $dataLogin['level'];

                    header('location:media.php?module=home');
                }
                else{
                    //SCRIPT UNTUK GAGAL LOGIN
                    include "gagal-login.php";}
                }

    }

}




?>
