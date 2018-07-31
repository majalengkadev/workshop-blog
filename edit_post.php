<?php 

//set session
session_start();

if(! isset($_SESSION['loggedin']))
exit('akses dilarang, silahkan login dulu');

include_once('config.php');

$judul = "Edit Post";
$subjudul = "";
$url_banner = "assets/img/home-bg.jpg"; 

$id = $_GET['id'];

$query = mysqli_query($conn, 'SELECT * FROM posts WHERE id =' . $id);
$post = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    mysqli_query($conn, 'UPDATE posts SET judul = "'.$judul.'" , konten = "'.$konten.'" WHERE id ='. $id);

    if($query){
        header('Location: index.php');
    }else{
            $error = "Error : " . mysqly_error($conn);
        }
    
}
?>

<?php include('header.php'); ?>

    <!-- Main Content -->
    <div class="container">
      <div class="row">

        <form action="edit_post.php?id=<?php echo $id; ?>" method="post">
        <label >Judul Artikel</label>
        <input type="text" name="judul" class="form-control" value="<?php echo $post['judul'] ?>">
        <br>
        <label>Isi Artikel</label>
        <textarea name="konten" class="form-control"><?php echo $post['konten'] ?></textarea>
        <hr>
        <button type="submit" name="submit" value="submit">Submit Artikel</button>
        </form>
          
        </div>
    </div>

   <?php include('footer.php'); ?>