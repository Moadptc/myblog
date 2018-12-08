<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="bg-white p-3 articles shadow">

				<?php

				$keyword = $_GET['keyword'];

				$stmt = $db->prepare
				("select * from articles WHERE title LIKE '%$keyword%'
					OR article LIKE '%$keyword%'");
				$stmt->execute();
				$results = $stmt->rowCount();

				if ($results == 0):
					echo '<div class="alert alert-danger p-3 my-3">
							Sorry , No Posts
						  </div>';
				else:

				$rows = $stmt->fetchAll();

				foreach ($rows as $row):

					?>

					<article class="one-article py-4 border-bottom">
						<div class="row">
							<div class="col-md-4">
								<img class="img-fluid"
								     src="public/img/<?php echo $row['img'] ?>" alt="pic">
							</div>
							<div class="col-md-8">
								<h2><?php echo $row['title'] ?></h2>
								<p>
									<?php echo substr($row['article'],0,150)  ?>
								</p>
								<a href="index.php?page=single&id=<?php echo $row['id'] ?>"
								   class="btn btn-primary">
									Read More...
								</a>
							</div>
						</div>
					</article>

					<?php

				endforeach;

				endif;

				?>


			</div>
		</div>
		<div class="col-md-3">
			<div class="sidebar">
				<div class="bg-white p-3 shadow widget mb-3">
					widget 1
				</div>
				<div class="bg-white p-3 shadow widget mb-3">
					widget 2
				</div>
				<div class="bg-white p-3 shadow widget mb-3">
					widget 3
				</div>
			</div>
		</div>
	</div>
</div>
