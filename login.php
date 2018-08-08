<?php 
session_start();

include_once('config.php');

$judul = "Login";
$subjudul = "";
$url_banner = "assets/img/home-bg.jpg"; 

if(isset($_POST['submit'])){
    $username = "admin";
    $password = "admin";

    if($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
    }else{
            exit('login gagal');
        }
    
}
?>

<?php include('header.php'); ?>

    <!-- Main Content -->
    <div class="container">
      

        <form action="login.php" method="post">

        <label >Username</label>
        <input type="text" name="username" class="form-control">
        
        <br>
        <label>Password</label>
        <input type="password" name="password" class="form-control">
        <hr>
        <button type="submit" name="submit" value="submit">Login</button>
        </form>
          
        
    </div>

   <?php include('footer.php'); ?>