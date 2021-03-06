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
                        <a href="home.php" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="posts.html" class="nav-link">Posts</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="categories.php" class="nav-link">Categories</a>
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

    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1> <i class="fa fa-gear"></i> Dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTION -->

    <section id="action" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <a href="#" class="btn btn-primary btn-block"
                       data-toggle="modal" data-target="#addPostModal">
                        <i class="fa fa-plus"></i> Add Post
                    </a>
                </div>
                <div class="col-md-3 mt-2">
                    <a href="#" class="btn btn-success btn-block"
                       data-toggle="modal" data-target="#addCategoryModal">
                        <i class="fa fa-plus"></i> Add Category
                    </a>
                </div>
                <div class="col-md-3 mt-2">
                    <a href="#" class="btn btn-warning btn-block"
                       data-toggle="modal" data-target="#addUserModal">
                        <i class="fa fa-plus"></i> Add User
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS -->

    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Lastest Posts</h4>
                        </div>
                        <table class="table table-striped table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date Posted</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Post One</td>
                                    <td>Web Development</td>
                                    <td>July 12 , 2018</td>
                                    <td>
                                        <a href="details.html" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Post Tow</td>
                                    <td>Tech Gadget</td>
                                    <td>July 13 , 2018</td>
                                    <td>
                                        <a href="details.html" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>Post Three</td>
                                    <td>Web Development</td>
                                    <td>July 14 , 2018</td>
                                    <td>
                                        <a href="details.html" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>Post Four</td>
                                    <td>Business</td>
                                    <td>July 14 , 2018</td>
                                    <td>
                                        <a href="details.html" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>Post Five</td>
                                    <td>Web Development</td>
                                    <td>July 15 , 2018</td>
                                    <td>
                                        <a href="details.html" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">6</td>
                                    <td>Post Six</td>
                                    <td>Health & Wellness</td>
                                    <td>July 15 , 2018</td>
                                    <td>
                                        <a href="details.html" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-white mb-3">
                        <div class="card-body">
                            <h3>Posts</h3>
                            <h2 class="display-4">
                                <i class="fa fa-pencil"></i> 6
                            </h2>
                            <a href="posts.html" class="mt-2 btn btn-outline-light btn-sm">
                                View
                            </a>
                        </div>
                    </div>

                    <div class="card text-center bg-success text-white mb-3">
                        <div class="card-body">
                            <h3>Categories</h3>
                            <h2 class="display-4">
                                <i class="fa fa-folder-open-o"></i> 4
                            </h2>
                            <a href="categories.php" class="mt-2 btn btn-outline-light btn-sm">
                                View
                            </a>
                        </div>
                    </div>

                    <div class="card text-center bg-warning text-white mb-3">
                        <div class="card-body">
                            <h3>Users</h3>
                            <h2 class="display-4">
                                <i class="fa fa-users"></i> 2
                            </h2>
                            <a href="users.html" class="mt-2 btn btn-outline-light btn-sm">
                                View
                            </a>
                        </div>
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




    <!-- POST MODAL -->
    <div id="addPostModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Post</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select type="text" id="category" class="form-control">
                                <option value="dev">Web Development</option>
                                <option value="tech">Tech Gadget</option>
                                <option value="business">Business</option>
                                <option value="health">Health and Wellness</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fileImg">File</label>
                            <input type="file" id="fileImg" class="form-control-file">
                            <small class="form-text text-muted">Max Size 3mb</small>
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea id="body" name="editor1" class="form-control" rows="6"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </div>
            </div>
        </div>
    </div>



    <!-- CATEGORY MODAL -->
    <div id="addCategoryModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Add Category</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="categorytitle">Category</label>
                            <input type="text" id="categorytitle" class="form-control">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Save Changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- USER MODAL -->
    <div id="addUserModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Add User</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="role">Role</label>
                            <select id="role" class="form-control">
                                <option value="admin">Administrator</option>
                                <option value="moderator">Moderator</option>
                                <option value="author">Author</option>
                                <option value="subscriber">Subscriber</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" id="cpassword" class="form-control">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-warning" type="submit">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>

</body>
</html>