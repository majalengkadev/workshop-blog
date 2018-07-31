<?php 
session_start();

if(! isset($_SESSION['loggedin']))
exit('akses dilarang, silahkan login dulu');

include_once('config.php');

$id = $_GET['id'];

$query = mysqli_query($conn, 'DELETE FROM posts WHERE id ='. $id);

    if($query){
        header('Location: index.php');
    }else{
            exit('Deleting Failed : '. mysqli_error($conn));
        }

?>