<?php

$id = $_GET['id']; // 1

$stmt = $db->prepare('select * from articles ar JOIN admin ad
                                ON (ar.id_admin = ad.id) WHERE ar.id = :id');
$stmt->bindParam(':id',$id);
$stmt->execute();
$row = $stmt->fetch();

?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="bg-white p-3 articles shadow">

				<article class="single-article py-4">
					<div class="row">
						<div class="col-md-12">
							<img class="img-fluid"
							     src="public/img/<?php echo $row[2] ?>" alt="pic">
						</div>
						<div class="col-md-12 mt-5">

                            <h2 class="my-4 display-3">
                                <?php echo $row['title'] ?>
                            </h2>

							<?php echo $row['article'] ?>

                            <p class="mt-4">
                                Created By : <b><?php echo $row['fullname'] ?></b> <br>
                                On : <?php echo substr($row[6],0,10);   ?>
                            </p>

							<div class="share-icon mt-5">

								<a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank"><img alt="Share on Facebook" src="public/img/social_flat_rounded_rects_svg/Facebook.svg" class="share-article" /></a>
								<a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet"><img alt="Tweet" src="public/img/social_flat_rounded_rects_svg/Twitter.svg" class="share-article" /></a>
								<a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+"><img alt="Share on Google+" src="public/img/social_flat_rounded_rects_svg/Google+.svg" class="share-article" /></a>
								<a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn"><img alt="Share on LinkedIn" src="public/img/social_flat_rounded_rects_svg/LinkedIn.svg" class="share-article" /></a>

							</div>
						</div>
					</div>
				</article>

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