<?php
    $koneksi =mysqli_connect("localhost","root","","form");

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pelabuhan_asal = $_POST['pelabuhan_asal'];
    $tanggal_berangkat = $_POST['tanggal_berangkat'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $nama_kapal = $_POST['nama_kapal'];
    $ukuran_kapal = $_POST['ukuran_kapal'];
    $hasil_tangkapan = implode(' ,',$_POST['hasil_tangkapan']);
    $volume_tangkapan_ikan = $_POST['volume_tangkapan_ikan'];
    $total_tangkapan_ikan = $_POST['total_tangkapan_ikan'];
    $alat_tangkap = $_POST['alat_tangkap'];
    $daerah_penangkapan_ikan = $_POST['daerah_penangkapan_ikan'];
    $catatan = $_POST['catatan'];
    $submit =$_POST['submit'];

    $query =" INSERT INTO register VALUES('$firstname', '$lastname','$email','$password', '$pelabuhan_asal','$tanggal_berangkat','$tanggal_kembali','$nama_kapal','$ukuran_kapal','$hasil_tangkapan','$volume_tangkapan_ikan','$total_tangkapan_ikan','$alat_tangkap','$daerah_penangkapan_ikan','$catatan','$submit','')";

    mysqli_query($koneksi,$query);
    
    if (isset($_POST["submit"])){
        header('Location: read.php');
        exit;
    }

?>