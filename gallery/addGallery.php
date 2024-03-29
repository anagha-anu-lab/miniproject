<?php $this->load->view('admin/includes/head'); ?>
<div class="wrapper fullheight-side">
<?php $this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar'); 
$this->load->view('admin/includes/navbar'); ?>

<!-- Page Content -->

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
                        <a href="<?php anchor_to(GALLERY_CONTROLLER) ?>">
                        <?php echo esc($page_title) ?>
                        </a>
                    </li>
                </ul>
            </div>
            <?php $this->load->view('admin/includes/alert'); ?>
            <div class="row">
                <div class="col-md-12">
                    <form enctype="multipart/form-data"  method="POST" action="<?php anchor_to(GALLERY_CONTROLLER . '/addImg') ?>">
                    <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image-title">Product Title <span class="text-danger">*</span></label>
                                    <?php echo form_error('image-title', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="text" id="image-title" name="image-title" placeholder="Choose Product Title" value="<?php echo esc(set_value('image-title'), true)?>">
                                </div>
                                <div class="form-group">
                                    <label for="image-content">Product Short Detail <span class="text-danger">*</span></label>
                                    <?php echo form_error('image-content', '<br><span class="text-danger">', '</span>'); ?>
                                    <textarea id="image-content" name="image-content" class="form-control" placeholder="Choose Product Short Description"><?php echo esc(set_value('image-content'), true)?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image-price">Product Price <span class="text-danger">*</span></label>
                                    <?php echo form_error('image-price', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="number" id="image-price" name="image-price" placeholder="Choose Product Price" value="<?php echo esc(set_value('image-price'), true)?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="categoryId">Product Category <span class="text-danger">*</span></label>
                                            <?php echo form_error('categoryId', '<br><span class="text-danger">', '</span>'); ?>
                                            <select name="categoryId" id="" class="form-control custom-select">
                                                <option value="">Choose Category</option>
                                                <?php foreach($categories as $gCat){ ?>
                                                    <option value="<?php echo esc($gCat['id'], true)?>"><?php echo esc($gCat['cName'], true)?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gImage">Select Product Image <span class="text-danger">*</span></label>
                                            <?php echo isset($logo_error) ? '<div class="alert alert-danger">' . $logo_error . '</div>' : '' ?>
                                            <div class="input-file input-file-image">
                                                <img class="img-upload-preview" src="<?php uploads('gallery/defaultImg.png') ?>" alt="preview" width="150">

                                                <input for="gImage" type="file" class="form-control form-control-file" id="gImage" name="gImage">
                                                <label for="gImage" class="label-input-file btn btn-black btn-round">
                                                    <span class="btn-label"><i class="fa fa-file-image"></i></span> Upload a Image
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group text-right">
                                    <input type="hidden" name="submit" value="Submit">
                                    <a href="<?php anchor_to(GALLERY_CONTROLLER); ?>" class="btn btn-danger text-white mr-4"><i class="fas fa-arrow-left mr-1"></i> Back</a>
                                    <button class="btn btn-success"><i class="fas fa-save mr-1"></i> Add Product</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Page Content -->

</div>
<?php $this->load->view('admin/includes/foot'); ?>
<script src="<?php admin_assets("js/includes/inputImageShow.js"); ?>"></script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript" src="<?php admin_assets('js/includes/editor.js') ?>"></script>
<?php $this->load->view('admin/includes/footEnd'); ?>