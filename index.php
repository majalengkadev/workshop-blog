<?php 

include_once('config.php');

$data = mysqli_query($conn,'SELECT * FROM posts');

$posts = mysqli_fetch_all($data, MYSQLI_ASSOC);

$judul = "Clean Blog";
$subjudul = "A Blog Theme by Start Bootstrap";
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
            <p class="post-meta">Posted by
              <a href="#">Mahfudin</a>
              on September 24, 2018</p>
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