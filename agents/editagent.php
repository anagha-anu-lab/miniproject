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
                        <a href="<?php anchor_to(AGENTS_CONTROLLER) ?>">
                        <?php echo esc($page_title) ?>
                        </a>
                    </li>
                </ul>
            </div>
            <?php $this->load->view('admin/includes/alert'); ?>
            <div class="row">
                <div class="col-md-12">
                    <form enctype="multipart/form-data"  method="POST" action="<?php anchor_to(AGENTS_CONTROLLER . '/editagent/' . $agent['id']) ?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="agentName">Employee Name <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentName', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="text" id="agentName" name="agentName" placeholder="Employee Name" value="<?php echo esc(set_value('agentName', $agent['agentName']), true)?>">
                                </div>
                                <div class="form-group">
                                    <label for="agentEmail">Employee Email <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentEmail', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="text" id="agentEmail" name="agentEmail" placeholder="Employee Email" value="<?php echo esc(set_value('agentEmail', $agent['agentEmail']), true)?>">
                                </div>
                                <div class="form-group">
                                    <label for="agentNumber">Employee Number <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentNumber', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="text" id="agentNumber" name="agentNumber" placeholder="Employee Number" value="<?php echo esc(set_value('agentNumber', $agent['agentNumber']), true)?>">
                                </div>
                                <div class="form-group">
                                    <label for="agentDesignation">Employee Designation <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentDesignation', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control" type="text" id="agentDesignation" name="agentDesignation" placeholder="Employee Designation" value="<?php echo esc(set_value('agentDesignation', $agent['agentDesignation']), true)?>">
                                </div>
                                <div class="form-group">
                                    <label for="agentAddress">Employee Address <span class="text-danger">*</span></label>
                                    <?php echo form_error('agentDescription', '<br><span class="text-danger">', '</span>'); ?>
                                    <textarea id="agentAddress" name="agentAddress" class="form-control"><?php echo esc(set_value('agentAddress', $agent['agentAddress']), true)?></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group text-right">
                                    <input type="hidden" name="submit" value="Submit">
                                    <a href="<?php anchor_to(AGENTS_CONTROLLER); ?>" class="btn btn-danger text-white mr-4"><i class="fas fa-arrow-left mr-1"></i> Back</a>
                                    <button class="btn btn-success"><i class="fas fa-save mr-1"></i> Save Changes</button>
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