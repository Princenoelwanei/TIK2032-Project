<?php
$servername = "localhost";
$username = "id22285095_websiteberitaterkinipemrogramanweb";
$password = "9G_JrKWWz";
$dbname = "id22285095_news_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

