<?php

// server name - username - password - database name
$mysqli = mysqli_connect('localhost','root','','myblog');

//Cek Error atau tidak
if(mysqli_connect_errno()){
    exit('Kesalahan Koneksi Database : ' . mysqli_connect_errno());
}