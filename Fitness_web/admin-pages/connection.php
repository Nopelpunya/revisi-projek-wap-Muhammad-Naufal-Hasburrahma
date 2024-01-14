<?php

session_start();

$host           ="localhost";
$user           ="root";
$pass           ="";
$db             ="admin_page";
$port           = 3307;

$mysqli        = mysqli_connect($host,$user,$pass,$db, $port);
if(!$mysqli){
    die("gagal terkoneksi");
}
//echo"Berhasil";

//Menambah member baru
if(isset($_POST['tambahmember'])){
    $namamember= $_POST['namamember'];
    $umur= $_POST['umur'];
    $alamat= $_POST['alamat'];
    $memberplan= $_POST['memberplan'];
    $mulaimember= $_POST['mulaimember'];
    $memberexpired= $_POST['memberexpired'];


    //tambah ke database
    $addtodatabase= mysqli_query($mysqli, "INSERT INTO addmember ('idmember', 'namamember', 'umur', 'alamat', 'memberplan', 'mulaimember', 'memberexpired') VALUES (NULL, '$namamember', '$umur', '$alamat', '$memberplan', '$mulaimember', '$memberexpired')");
    if($addtodatabase){
        header('location:index.php');
    } else{
        echo "Gagal menambahkan data ke database.";
        header('location:index.php');
    }
}
?>