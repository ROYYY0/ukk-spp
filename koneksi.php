<?php

$koneksi= mysqli_connect('localhost','root','','ukk_roy_spp');

if(!$koneksi){
    echo"Koneksi anda gagal";
}