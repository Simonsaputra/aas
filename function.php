<?php
// session_start();

// if(!isset($_SESSION["login"])){

// 	header("location: index.php");
// 	exit;


// }

require'functions.php';

$server = mysqli_connect("localhost", "root", "", "aas");

   if ($server) {
       echo "berhasil";
   } else {
       echo "Koneksi gagal";
   }   

    $conn = mysqli_connect("localhost", "root","", "aas" );
    
    
    
    if (isset($_POST["submit"])){

        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $nohp = $_POST["nohp"];

        $query = "INSERT INTO `kontak`(`nama`, `email`, `nohp`) VALUES ('$_POST[nama]','$_POST[email]','$_POST[nohp]')";
        $result=  mysqli_query($conn, $query);

        if($result){
            header("location: index.html");
        }


}

?>
 <?php
        include "koneksidatabase.php";
        $no = 1;
        $sambil = mysqli_query($server, "SELECT * FROM kontak");
        while ($data = mysqli_fetch_array($sambil)) {
        }?>