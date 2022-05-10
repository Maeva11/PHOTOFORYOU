<!doctype html>
<html lang="en">
  <head>
  	<title>PhotoForYou</title>
	  <?php include_once("include/header.inc.php")?>
  </head>
  <body>
		
		<section class="ftco-section" id="caroussel">
			<div class="container">
				<div class="row">
					<div class="col-md-auto">
						<div class="slider-hero">
							<div class="featured-carousel owl-carousel">
								<div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/portrait.png);">
										<div class="text text-center">
												<h2>Photos Portrait</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/paysage.png);">
											<div class="text text-center">
												<h2>Photos Paysage</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/artistique.png);">
											<div class="text text-center">
												<h2>Photos Artistique</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/nature.png);">
											<div class="text text-center">
												<h2>Photos Nature</h2>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="my-5 text-center">
			          <ul class="thumbnail">
			            <li class="active img"><a href="#"><img src="images/portrait2.png" alt="Image" class="img-fluid"></a></li>
			            <li><a href="#"><img src="images/paysage2.png" alt="Image" class="img-fluid"></a></li>
			            <li><a href="#"><img src="images/artistique2.png" alt="Image" class="img-fluid"></a></li>
						<li><a href="#"><img src="images/nature2.png" alt="Image" class="img-fluid"></a></li>
			          </ul>
			        </div>
						</div>
					</div>
				</div>
			</div>
			<P><HR NOSHADE></P>
		</section>
		

		<?php include_once("include/script.inc.php"); ?>
  </body>
</html>