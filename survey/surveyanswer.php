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
                        <a href="<?php anchor_to(SURVEY_CONTROLLER . '/surveyanswer') ?>">
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
                            <div class="card-title float-left">Survey Answer</div>
                            <!-- <a href="<?php anchor_to(SURVEY_CONTROLLER . '/qstnAdd') ?>" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i> Add Survey Question</a> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Survey Question</th>
                                            <th scope="col">Survey Answer</th>
                                            <th scope="col">User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($answer)){?>
                                        <?php $i = 1; foreach ($answer as $gCat ){ ?>
                                        <tr>
                                            <td><?php echo esc($gCat['question'], true) ?></td>
                                            <td><?php echo esc($gCat['answer'], true) ?></td>
                                            <td><?php echo esc($gCat['fullName'], true) ?></td>
                        
                                        </tr>
                                        <?php $i++; }
                                        } else{
                                        ?>
                                        <tr>
                                            <td class="text-center" colspan="3"><h4 class="text-muted">No Category Found</h4></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Page Content -->

</div>
<?php $this->load->view('admin/includes/foot'); ?>
<script type="text/javascript" src="<?php admin_assets('js/plugin/sweetalert/sweetalert.min.js') ?>"></script>
<script type="text/javascript" src="<?php admin_assets('js/includes/alert.js') ?>"></script>
<?php $this->load->view('admin/includes/footEnd'); ?>