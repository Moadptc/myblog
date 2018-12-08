<?php
    include 'includes/config.php' ;
    include 'functions/main.php' ;
?>
<?php ob_start(); ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin Cpanel</title>
</head>



<link rel="stylesheet" href="public/css/bootstrap.css">
<link rel="stylesheet" href="public/css/fontawesome-all.min.css">
<link rel="stylesheet" href="public/css/style.css">

<body>


<section class="cp-login-section mt-5">

	<div class="container pt-5">
		<div class="row h-100 d-flex pt-5 align-items-center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-login col-lg-12">
					<h2 class="text-center mb-4">
						<img src="public/img/logo.png" style="width: 200px" class="img-fluid" alt="logo">
						<i class="fas fa-user-cog fa-2x mb-2"></i> <br>
						Authentication Admin
					</h2>
					<form method="post">
						<div class="form-group">
							<input type="text" name="email"
							       placeholder="Votre Email"
							       class="form-control radius-0">
						</div>
						<div class="form-group">
							<input type="password" name="password"
							       placeholder="Votre mot de Passe" class="form-control radius-0">
						</div>
						<div class="form-group">
							<button name="login" class="btn btn-primary form-control radius-0" type="submit">
								Login
							</button>
						</div>

					</form>
                    <?php
                        if (isset($_POST['login'])):

	                        $email = $_POST['email'];
	                        $password = $_POST['password'];

	                        $stmt = $db->prepare('select * from admin WHERE 
				          email=:email AND password=:password');

	                        $stmt->bindparam(':email',$email);
	                        $stmt->bindparam(':password',$password);

	                        $stmt->execute();

	                        $results = $stmt->rowCount();

	                        if ($results == 0):

		                        echo '<div class="alert alert-danger">
                                        email or password incorrect
                                      </div>';

	                        else:


		                        $row = $stmt->fetch();

		                        $_SESSION['id'] = $row['id'];
		                        $_SESSION['fullname'] = $row['fullname'];
		                        $_SESSION['email'] = $row['email'];
		                        $_SESSION['password'] = $row['password'];
		                        $_SESSION['img'] = $row['img'];
		                        $_SESSION['role'] = $row['role'];

		                        redirect('index.php?page=home');

	                        endif;
                        endif;
                    ?>
				</div>

			</div>
			<div class="col-md-4"></div>
		</div>

	</div>

</section>

<?php include 'includes/footer.php' ?>


