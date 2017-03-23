<?php
    //include('koneksi.php) berfungsi untuk mengkoneksikan kodingan dengan localhost
    include('koneksi.php');

    //menginisiasi variabel-variabel yang dikirimkan dari form-->input name
    //fix problem : undefined index...
    if( isset($_POST['nama'])  &&
        isset($_POST['nisn'])
      )
    {
        //mendapatkan data dari masuk.php dan memasukkannya ke variabel
        $nama   = $_POST['nama'];
        $nisn      = $_POST['nisn'];

    }else{

        //otomatis mengalihkan ke halaman masuk.php jika terjadi undefined index
        header("location:login.php");

    }

    if  (
        empty($nama) || //jika nama_pengguna kosong
        empty($nisn)       //jika kata_sandi kosong
        )
    {

        //pernyataan yang keluar jika salah satu atau beberapa kemungkinan di atas terjadi
        echo "ada kesalahan saat menginput <a href='login.php'>Silahkan kembali ke halaman login sistem</a>";

    }else{

        //mengambil informasi dari nama tabel "login" pada kolom "namaPengguna"
        $ambilDataSql     = mysql_query("SELECT * FROM siswaskanja WHERE nama='$nama'");

        //mengambil informasi dari seluruh kolom namaPengguna
        $cek_nama = mysql_num_rows($ambilDataSql);
        
        //mengecek ketersediaan identitas
        if($cek_nama == 1){//jika nama pengguna sudah terdaftar
            
            //mengecek kecocokan kata sandi
            $ambil_data = mysql_fetch_assoc($ambilDataSql);//mengambil data berupa array
            $cek_nisn   = $ambil_data["nisn"];//mengambil data array pada item "pass"
            
            if($nisn == $cek_nisn){//jika kata sandi cocok dengan username database
               
                //memulai session
                session_start();

                //membuat variabel sesi "pengguna" dengan value $namapengguna
                $_SESSION['nama'] = $nama;
				
				if($ambil_data["nisn"]==1)
				{
                //pindahkan user ke halaman index.php
					header("location:baca.php");
				}
				else
				{
					header("location:baca2.php");
				}
            }else{
                
                //jika kata sandi tidak cocok
                echo "kata sandi anda salah <a href='login.php'>Masuk</a>";
            }
        }else{

            //memberitahukan bahwa nama pengguna belum terdaftar
            echo "Nama anda tidak dikenali, silahkan mendaftar terlebih dahulu<a href='daftar.php'>Daftar</a>";

        }
    }
?>