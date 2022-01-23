<?php $this->load->view('admin/includes/head'); ?>
<div class="wrapper fullheight-side">
<?php $this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar'); 
$this->load->view('admin/includes/navbar'); ?>

<div class="main-panel">
   <div class="container">
      <div class="page-inner">
         <div class="page-header">
            <h4 class="page-title"><?php echo esc($page_title) ?></h4>
            <ul class="breadcrumbs">
               <li class="nav-home">
                  <a href="">
                  <i class="flaticon-home"></i>
                  </a>
               </li>
               <li class="separator">
                  <i class="flaticon-right-arrow"></i>
               </li>
               <li class="nav-home">
                  <a href="<?php anchor_to(ADMINBLOG_CONTROLLER . '/edit_post') ?>">
                  <?php echo esc($page_title) ?>
                  </a>
               </li>
            </ul>
         </div>
         <?php $this->load->view('admin/includes/alert'); ?>
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title">Edit Offers</div>
                  </div>
				  <form action="<?php anchor_to(ADMINBLOG_CONTROLLER . '/edit_post/'.$postData['id']); ?>" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="title">Title <span class="text-danger">*</span></label>
									<?php echo form_error('title', '<br><span class="text-danger">', '</span>'); ?>
									<input class="form-control" type="text" id="title" name="title" placeholder="Choose Offer Title" value="<?php echo esc(set_value('title', $postData['title']), true)?>">
								</div>
								<div class="form-group">
									<label for="description">Description <span class="text-danger">*</span></label>
									<?php echo form_error('description', '<br><span class="text-danger">', '</span>'); ?>
									<textarea id="description" name="description" class="form-control" placeholder="Choose Offer Short Description"><?php echo esc(set_value('description', $postData['description']), true)?></textarea>
								</div>
								<div class="form-group">
									<label for="price">Price <span class="text-danger">*</span></label>
									<?php echo form_error('price', '<br><span class="text-danger">', '</span>'); ?>
									<input class="form-control" type="number" id="price" name="price" placeholder="Enter Price" value="<?php echo esc(set_value('price', $postData['price']), true)?>">
								</div>
								<div class="form-group">	
									<label for="image">Select Image <span class="text-danger">*</span></label>
									<?php echo isset($imageError) ? '<div class="alert alert-danger">' . $imageError . '</div>' : '' ?>
									<div class="input-file input-file-image">
										<img class="img-upload-preview" src="<?php uploads('img/blog/'. $postData['image']) ?>" alt="preview" width="600">

										<input for="image" type="file" class="form-control form-control-file" id="image" name="image">
										<label for="image" class="label-input-file btn btn-black btn-round">
											<span class="btn-label"><i class="fa fa-file-image"></i></span> Upload a Image
										</label>
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
					<div class="card-action">
						<input type="hidden" name="submit" value="Submit">
						<button type="submit" class="btn btn-success"><i class="fas fa-check mr-1"></i> Update Offer</button>
					</div>
				  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page Content -->
</div>
<?php $this->load->view('admin/includes/foot'); ?>
<script type="text/javascript" src="<?php admin_assets('js/includes/blog.js') ?>"></script>
<script type="text/javascript" src="<?php admin_assets("js/includes/inputImageShow.js"); ?>"></script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript" src="<?php admin_assets('js/includes/editor.js') ?>"></script>
<?php $this->load->view('admin/includes/footEnd'); ?>