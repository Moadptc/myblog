<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MyBlog</title>


	<link rel="stylesheet" href="public/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="public/css/style.css">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
	<div class="container">
		<a class="navbar-brand" href="#">MyBlog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
			<form method="post" class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-primary my-2 my-sm-0" name="btn-search" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
	</div>

</nav>

<?php

if (isset($_POST['btn-search'])):

    $search = $_POST['search'];

    header('location:index.php?page=search&keyword=' . $search);

endif;

?>
