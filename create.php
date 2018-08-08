<?php 
session_start();

if(! isset($_SESSION['loggedin']))
exit('akses dilarang, silahkan login dulu');

include_once('config.php');

$judul = "Tambah Post";
$subjudul = "";
$url_banner = "assets/img/home-bg.jpg"; 

if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    $query = mysqli_query($mysqli, 'INSERT INTO posts (judul, konten) VALUES ("'.$judul.'" , "'.$konten.'")');

    if($query){
        header('Location: index.php');
    }else{
            $error = "Error : " . mysqli_error($mysqli);
        }
    
}
?>


<?php include('header.php'); ?>

    <!-- Main Content -->
    <div class="container">

        <form action="create.php" method="post">
        <label >Judul Artikel</label>
        <input type="text" name="judul" class="form-control">
        <br>
        <label>Isi Artikel</label>
        <textarea name="konten" class="form-control"></textarea>
        <hr>
        <button type="submit" name="submit" value="submit">Submit Artikel</button>
        </form>
          
    </div>

   <?php include('footer.php'); ?>