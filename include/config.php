<?php
//Database connection
$dbhost = "localhost";
$dbname = "bioskop";
$dbuser = "pausi";
$dbpass = "pausi";
$db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
date_default_timezone_set("Asia/Jakarta");

$title = "BIOSKOP XXI";
$app_name = $title;

$total_kursi = 80; //total kursi dalam bioskop
$film_image_path = '/static/image_films/'; //lokasi directory image film
$film_image = $_SERVER['DOCUMENT_ROOT'].$film_image_path; //lokasi directory gambar film
if($_REQUEST['logout'] ?? NULL){
    session_destroy();
    header('Location: /login');
    exit;
}