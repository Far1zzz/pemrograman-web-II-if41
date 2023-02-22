<?php 
    //variable local = hanya bisa di akses di file ini 

    //membuat variable dinamis

    $nama_depan = "Fariz";
    $nama_belakang = "ahmad";
    echo "Nama Depan = $nama_depan <br/>";
    echo "Nama Belakang = $nama_belakang <br/>";
    // echo $nama_depan ," ", $nama_belakang;
    // echo $nama_depan ." ". $nama_belakang;
    // echo "$nama_depan $nama_belakang <br/>";

    $namaLengkap = $nama_depan ." ". $nama_belakang;
    echo "Nama Lengkap = $namaLengkap <br/>";
    //var_dump($umur); //cek tipe data dari sebuah variable
    $umur = 19; //int
    echo "umur = $umur" . "<br/>";

    $ipk = 3.51; //float double
    $isActive = true; //boolean
    $gajiBulanIni = null; //null
    $hobby = ["Game", "Ngoding", "Ngopi"]; //array 1 dimensi
    $hobby2 = array("Mancing", "Membaca", "Tidur"); // array 1 dimensi
    //fungsi array 
    // echo count($hobby)
    $hobby3 = array_merge($hobby, $hobby2); //menggabung array
    // print_r($hobby3);

    //variable statis / constant
    define("TEMPATLAHIR", "Palembang");
    echo TEMPATLAHIR . "<br/>";
   
    //menghapus variable
    unset($ipk);
    //echo $ipk;
   

    //variable Global  = bisa di akses file mana saja 
    /*
    1. Post -> $_POST['npm'];
    2. Get -> $_GET['npm'];
    3. Session -> $_SESSION['username];
    4. Cookies -> $_COOKIE['email];
    5. Server -> $_SERVER[]
    */

    // 1. ubah value dari var nama_depan menjadi huruf kapital
    // echo strtoupper($nama_depan);
    $nama_depan = strtoupper($nama_depan); //ucfirst, ucWord, strtolower
    echo $nama_depan . "<br/>";

    //  2. buatlah sebuah var bernama npm, isi dengan npm masing-masing
    //     ambillah kode prodi
    $npm = 2125250100;
    $sub_npm = substr($npm, 4,2);
    echo $sub_npm;

?>