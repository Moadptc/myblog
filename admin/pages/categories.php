<?php // if (!isset($_SESSION['adminstrator'])) ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
        <a href="home.php" class="navbar-brand">Mouad Dashboard</a>
        <button class="navbar-toggler" data-toggle="collapse"
                data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="home.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a href="posts.html" class="nav-link">Posts</a>
                </li>
                <li class="nav-item px-2">
                    <a href="categories.php" class="nav-link active">Categories</a>
                </li>
                <li class="nav-item px-2">
                    <a href="users.html" class="nav-link">Users</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3 dropdown">
                    <a href="#" class="nav-link dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="fa fa-user"></i> Welcome Mouad
                    </a>
                    <div class="dropdown-menu">
                        <a href="profile.html" class="dropdown-item">
                            <i class="fa fa-user-circle"></i> Profile
                        </a>
                        <a href="settings.html" class="dropdown-item">
                            <i class="fa fa-gear"></i> Settings
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link">
                        <i class="fa fa-user-times"></i> Logout
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1> <i class="fa fa-folder"></i> Cateories</h1>
            </div>
        </div>
    </div>
</header>

<!-- ACTION -->

<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto">
                <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-success">Search</button>
                    </span>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- POSTS -->

<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Lastest Categories</h4>
                    </div>
                    <table class="table table-striped table-responsive">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date Posted</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Web Development</td>
                            <td>July 12 , 2018</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Tech Gadget</td>
                            <td>July 13 , 2018</td>

                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Business</td>
                            <td>July 14 , 2018</td>
                        </tr>

                        <tr>
                            <td scope="row">4</td>
                            <td>Health & Wellness</td>
                            <td>July 15 , 2018</td>
                        </tr>
                        </tbody>
                    </table>

                    <nav class="ml-4">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a href="#" class="page-link">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

        </div>
    </div>
</section>

<footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center">
                    Copyright &copy; Mouad
                </p>
            </div>
        </div>
    </div>
</footer>




<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navbar-fixed.js"></script>
</body>
</html>