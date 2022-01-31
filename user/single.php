<?php $theme_view('includes/head'); ?>
<?php $theme_view('includes/headEnd'); ?>
<?php $theme_view('includes/header'); ?>
	
	<div class="mainSection loginPages" id="home">
		<div class="container">
            <div class="selectionBoxMain">
                <div class="singlePost">
                    <div class="singlePostImageMain"><div class="singlePostImage" style="background-image:url(<?php uploads('img/blog/'.$post['image']); ?>);"></div></div>
                    <h3><a href="#pablo"><?php echo esc($post['title'], true) ?></a></h3>
                    <div class="singlePostDate"><i class="icon-calendar"></i> <?php if($post['datetime_updated'] != $post['datetime_added']){echo esc('Updated on: '.$post['datetime_updated'], true);}else{echo esc($post['datetime_added'], true);} ?></div>
                    <div class="singlePostDesc"><?php echo esc($post['description'], true) ?></div>
					<div class="singlePostDesc">₹ <?php echo esc($post['price'], true) ?></div>
                    <hr />
                </div><!-- .singlePost -->
                
            </div><!-- .selectionBoxMain -->
        </div>
	</div>
	<!-- /mainSection -->
	
<?php $theme_view('includes/foot'); ?>
<?php $theme_view('includes/footEnd'); ?>