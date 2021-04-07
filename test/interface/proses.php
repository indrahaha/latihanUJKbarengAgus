<?php 
    $dataBuah = ['Anggur', 'apel', 'Semangka', 'jambu'];
    
    // proses cek debugging ada 2 
    // print_r($_POST);
    // var_dump($_POST);


    if(isset($_POST["data"])){
        $namabuah = $_POST['namaBuah'];
        $hargabuah = $_POST['hargaBuah'];
        $alamatpembeli = $_POST['alamat'];
        $diskon = $_POST['jenis'];
        $jenisBuah = $_POST['jenisBuah'];
        // echo "$namabuah dengan harga $hargabuah, dikirim ke alamat $alamatpembeli, dengan status $statusDiskon, jenis buah $jenisBuah";
    }
    function dataInput($nama = '', $harga = '',$alamat ='', $diskon = '', $jnsBuah = '' )
    {
        $if($diskon == 'Diskon'){
            
        }
    }


?>