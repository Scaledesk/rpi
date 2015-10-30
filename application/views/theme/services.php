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
					
						<div class="row service-v1"> 
							

          							
         
								  <?php
$i=1;
								   foreach ($services as $row) {
								  	
								 ?>

								 

								 
						
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h2><span><?php echo $row['rpi_services_name']; ?></span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus</p>        

								</div>
								
							 
								</div>		
                                 
								 <?php

if($i%3 == 0) 
{
		?>
</div>
<div class="row service-v1">
		<?php
}
$i++;
								  }
                                        ?>
        </div>
									
								
							</div>
						</div>
						
						<hr>
						<br>
						
		 						
						
						
					</div>
									
				</div>
	</section>