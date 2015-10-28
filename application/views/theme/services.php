<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Our Services</h2>
			</div>
		</div>
	</div>
	</section>



<?php /*echo "<pre/>"; print_r($services);*/?>


<section id="content">
	<div class="container">
					
					<div class="about">
					
						<div class="row"> 
							
								  <?php foreach ($services as $row) {
								  	
								 ?>

								 

								 
						
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span><?php echo $row['rpi_services_name']; ?></span></h3>
								</div>
								
							 
								</div>		
                                 
								 <?php }
                                        ?>
									
								</div>
								
							</div>
						</div>
						
						<hr>
						<br>
						
		 						
						
						
					</div>
									
				</div>
	</section>