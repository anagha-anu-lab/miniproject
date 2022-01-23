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
                        <a href="<?php anchor_to(AGENTS_CONTROLLER) ?>">Employees</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-home">
                        <?php echo esc($page_title) ?>
                    </li>
                </ul>
            </div>
            <?php $this->load->view('admin/includes/alert'); ?>
            <div class="row">
                <div class="col-md-12">
                    <form enctype="multipart/form-data"  method="POST" action="<?php anchor_to(AGENTS_CONTROLLER . '/addagent') ?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="agentName">Employee Name <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentName', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="text" id="agentName" name="agentName" placeholder="Employee Name" value="<?php echo set_value('agentName')?>">
                                </div>
                                <div class="form-group">
                                    <label for="agentEmail">Employee Email Id <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentEmail', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="email" id="agentEmail" name="agentEmail" placeholder="Employee Email id" value="<?php echo set_value('agentEmail')?>">
                                </div>
                                <div class="form-group">
                                    <label for="agentNumber">Employee Phone Number <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentNumber', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="text" id="agentNumber" name="agentNumber" placeholder="Employee Phone Number" value="<?php echo set_value('agentNumber')?>">
                                </div>
                                <div class="form-group">
                                    <label for="agentDesignation">Employee Designation <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentDesignation', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="text" id="agentDesignation" name="agentDesignation" placeholder="Employee Designation" value="<?php echo set_value('agentDesignation')?>">
                                </div>
                                <div class="form-group">
                                    <label for="agentAddress">Employee Address <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentAddress', '<br><span class="text-danger">', '</span>'); ?>
                                    <textarea name="agentAddress" placeholder="Employee Address" class="form-control"><?php echo set_value('agentAddress')?></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group text-right">
                                    <input type="hidden" name="submit" value="Submit">
                                    <a href="<?php anchor_to(AGENTS_CONTROLLER); ?>" class="btn btn-danger text-white mr-4"><i class="fas fa-arrow-left mr-1"></i> Back</a>
                                    <button class="btn btn-success"><i class="fas fa-plus mr-1"></i> Create Employee</button>
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
    <script src="<?php admin_assets("js/bootstrap-input-spinner.js"); ?>"></script>
    <script src="<?php admin_assets("js/plugin/moment/moment.min.js"); ?>"></script>
    <script src="<?php admin_assets("js/plugin/datepicker/bootstrap-datetimepicker.min.js"); ?>"></script>
    <script src="<?php admin_assets("js/includes/services.js"); ?>"></script>
    <script src="<?php admin_assets("js/includes/inputImageShow.js"); ?>"></script>
    <script type="text/javascript" src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript" src="<?php admin_assets('js/includes/editor.js') ?>"></script>
<?php $this->load->view('admin/includes/footEnd'); ?>