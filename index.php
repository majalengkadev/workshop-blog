<?php 

include_once('config.php');

$data = mysqli_query($mysqli,'SELECT * FROM posts ORDER BY id DESC');

$posts = mysqli_fetch_all($data, MYSQLI_ASSOC);

$judul = "Welcome To My Blog";
$subjudul = "A Simple Blog With Native PHP";
$url_banner = "assets/img/home-bg.jpg"; ?>

<?php include('header.php'); ?>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php foreach($posts as $post): ?>
          <div class="post-preview">
            <a href="post.php?id=<?php echo $post['id']; ?>">
              <h2 class="post-title">
                <?php echo $post['judul']; ?>
              </h2>
            </a>
            <p class="post-meta">Diposting Oleh
              <a href="#">Mahfudin</a></p>
              <h3><?php echo substr($post['konten'],0, 30) . ' . . .';  ?> </h3>
          </div>
          <hr>
          <?php endforeach;?>
          
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

   <?php include('footer.php'); ?>