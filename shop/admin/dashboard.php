<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$pageTitle = "Dashboard";
$css = "./../assets/css/index.css";
require_once $_SERVER['DOCUMENT_ROOT'] . "/shop/include/header.php";
?>

<div class="container">
<h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
<a href="<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/index.php">Go to home</a>
</div>