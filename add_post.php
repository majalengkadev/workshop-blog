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

    $query = mysqli_query($conn, 'INSERT INTO posts (judul, konten) VALUES ("'.$judul.'" , "'.$konten.'")');

    if($query){
        header('Location: index.php');
    }else{
            $error = "Error : " . mysqli_error($conn);
        }
    
}
?>


<?php include('header.php'); ?>

    <!-- Main Content -->
    <div class="container">
      <div class="row">

        <form action="add_post.php" method="post">
        <label >Judul Artikel</label>
        <input type="text" name="judul" class="form-control">
        <br>
        <label>Isi Artikel</label>
        <textarea name="konten" class="form-control"></textarea>
        <hr>
        <button type="submit" name="submit" value="submit">Submit Artikel</button>
        </form>
          
        </div>
    </div>

   <?php include('footer.php'); ?>