<?php $theme_view('includes/head'); ?>
<link rel="stylesheet" href="<?php $assets('css/lightbox.css'); ?>">
<?php $theme_view('includes/headEnd'); ?>
<?php $theme_view('includes/header'); ?>
	
	<div class="mainSection" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h1>Hair & <br>Beauty</h1>
					<?php if($added = $this->session->flashdata('added')){
						$added_class = $this->session->flashdata('added_class');
					?>
						<div class="alert <?php echo esc($added_class, true);?>"><?php echo esc($added, true);?></div>
					<?php
					}
					?>
					<!-- /selectionBoxMain -->
				</div>
			</div>
		</div>
	</div>
	<!-- /mainSection -->

	<div class="ourServicesSection" id="ourServices">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h2>Our Services</h2>
				</div>
			</div>
			<!-- /row -->
			<div class="row">
				<?php foreach ($serviceList as $servList ){ ?>
					
					<div class="col-lg-4 col-md-6 mx-auto text-center">
						<div class="servicesBox">
							<div class="servicesThumb" style="background-image: url(<?php uploads("img/".$servList['image']);?>)">
							</div><!-- /.servicesThumb -->
							<h4><?php echo esc($servList['title'], true)?></h4>
							<div class="serviceInfoMain">
								<div class="media mb-3">
									<i class="icon-clock serviceInfoicon"></i>
									<div class="media-body">
										<p class="serviceInfoHeading">Duration:</p>
										<p class="serviceInfoValue"><?php echo esc($servList['servDuration'], true)?></p>
									</div>
								</div>
								<div class="media mb-3">
									<i class="icon-coin-dollar serviceInfoicon"></i>
									<div class="media-body">
										<p class="serviceInfoHeading">Price/person:</p>
										<p class="serviceInfoValue">₹<?php echo esc($servList['price'], true)?></p>
									</div>
								</div>
								<a href="#home" class="booknowBtn btn btn-dark" data-value="<?php echo esc($servList['id'], true)?>">Book Now</a>
							</div>
							
						</div><!-- /.servicesBox -->
					</div><!-- /.col-lg-4 -->
					
				<?php }?>
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ourServicesSection -->
	<?php if(!empty($gcategories) && !empty($galleryImages)){ ?>
	<div class="gallerySection" id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 text-center mx-auto text-center">
					<div class="galleryTitlesSection">
						<h2>Products</h2>
					</div><!-- /.rt-section-title-wrapper- -->
				</div><!-- /.col-lg-12 -->
			</div>

			<div class="row">
				<div class="col-12">
					<ul class="filterList">
						<li data-filter="*" class="active">All</li>
						<?php foreach ($gcategories as $gcat ){ if($gcat['count'] != 0){?>
							<li data-filter=".cg<?php echo esc($gcat['id'], true) ?>"><?php echo esc($gcat['cName'], true) ?></li>
						<?php }} ?>
					</ul>
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
			<div class="row grid galleryLists">
				<?php foreach ($galleryImages as $gImage ){ ?>
				<div class="col-lg-3 col-md-6 grid-item cg<?php echo esc($gImage['catId'], true) ?>">
					<a class="d-block portfolioBox wow fade-in-bottom" href="<?php uploads('gallery/'.$gImage['imgPath']);?>" style="background-image: url(<?php uploads('gallery/'.$gImage['imgPath']);?>)">
						<div class="portfolioBoxOverlay"></div><!-- /.portfolioBoxOverlay -->
						<div class="portfolioBoxInnerContent">
							<h6><?php echo esc($gImage['imgName'], true) ?></h6>
							<p>
								<span><?php echo esc($gImage['imgDetails'], true); ?></span>
							</p>
						</div><!-- /.portfolioBoxInnerContent -->
					</a><!-- /.portfolioBox -->
				</div><!-- /.col-md-4 -->
				<?php } ?>
				
			</div><!-- /.row -->
			
		</div>
		<!-- /container -->
	</div>
	<!-- /gallerySection -->
	<?php } ?>




<?php $theme_view('includes/foot'); ?>
<script src="<?php $assets("plugins/moment/moment.min.js"); ?>"></script>
<script src="<?php $assets("plugins/datepicker/bootstrap-datetimepicker.min.js"); ?>"></script>
<script src="<?php $assets("js/magnific.popup.min.js"); ?>"></script>
<script src="<?php $assets("js/default.js"); ?>"></script>
<?php $theme_view('includes/footEnd'); ?>