<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="bg-white p-3 articles shadow">

				<?php

				$stmt = $db->prepare('select * from articles');
				$stmt->execute();
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
							<h2>
                                <?php echo $row['title'] ?>
                            </h2>

							<p>
								<?php echo substr($row['article'],0,150)  ?>
							</p>
							<a href="index.php?page=single&id=<?php echo $row['id'] ?>"
							   class="btn btn-primary">
								Read More...
							</a>

                            <a href="index.php?page=category&cat=<?php echo $row['category']?>" class="float-right">
                                <span class="badge badge-secondary pt-1 pb-1">
                                    <?php echo $row['category'] ?>
                                </span>
                            </a>
						</div>
					</div>
				</article>

				<?php

				endforeach;

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