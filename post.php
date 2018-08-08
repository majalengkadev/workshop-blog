<?php 

include_once('config.php');
$id = $_GET['id'];
$data = mysqli_query($mysqli,'SELECT * FROM posts WHERE id = '. $id);
$post = mysqli_fetch_assoc($data);

$judul = $post['judul'];
$subjudul = "";
$url_banner = "assets/img/post-bg.jpg"; ?>

<?php include('header.php'); ?>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php echo $post['konten']; ?>
          </div>
        </div>
      </div>
    </article>

    <hr>

<?php include('footer.php'); ?>
