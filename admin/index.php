<?php
session_start();
include 'functions/main.php';

if (!isset($_SESSION['id'])) redirect('cp-login.php');


include 'includes/config.php';

$pages = scandir('pages');
$page = $_GET['page'];

if(!empty($page) AND in_array($page . '.php' ,$pages))
{
	$content = 'pages/' . $page . '.php';
}else header('location:index.php?page=home');


include "includes/header.php";

include $content;

include "includes/footer.php";


?>