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
                        <a href="<?php anchor_to(ATTENDANCE_CONTROLLER . '/index') ?>">
                        <?php echo esc($page_title) ?>
                        </a>
                    </li>
                </ul>
            </div>
            <?php $this->load->view('admin/includes/alert'); ?>
            <div class="row">
                <div class="col-md-12">
                    <form enctype="multipart/form-data"  method="POST" action="<?php anchor_to(ATTENDANCE_CONTROLLER . '/editattendance/' . $attendance['id']) ?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="agent">Select Employee <span class="text-danger">*</span></label>
                                    <?php echo form_error('attendance-name', '<br><span class="text-danger">', '</span>'); ?>
                                    <select id="multiple" name="attendance-name" class="form-control">
                                        <optgroup label="Select Employee">
                                            <?php foreach($agents as $agent){ ?>
                                                <option <?php if(in_array($agent['id'], $attendance['agentId'])) { ?>selected<?php } ?> value="<?php echo esc($agent['id'], true)?>"><?php echo esc($agent['agentName'], true)?></option>
                                            <?php } ?>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="agent">Status <span class="text-danger">*</span></label>
                                    <?php echo form_error('attendance-status', '<br><span class="text-danger">', '</span>'); ?>
                                    <select id="multiple" name="attendance-status" class="form-control">
                                        <optgroup label="Select Status">
                                            <option value=<?php echo esc($attendance['status'], true)?>><?php echo esc($attendance['status'], true)?></option>
                                            <option value="PRESENT">PRESENT</option>
                                            <option value="ABSENT">ABSENT</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="attendance-starts">Date <span class="text-danger">*</span></label>
                                    <?php echo form_error('attendance-starts', '<br><span class="text-danger">', '</span>'); ?>
                                    <input class="form-control dateTimePickerInput" id="datepicker" type="text" name="attendance-starts" placeholder="Type: when your attendance starts" value="<?php echo set_value('attendance-starts', $attendance['date'])?>">
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group text-right">
                                    <input type="hidden" name="submit" value="Submit">
                                    <a href="<?php anchor_to(ATTENDANCE_CONTROLLER); ?>" class="btn btn-danger text-white mr-4"><i class="fas fa-arrow-left mr-1"></i> Back</a>
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
    <script src="<?php admin_assets("js/includes/attendance.js"); ?>"></script>
    <script src="<?php admin_assets("js/includes/inputImageShow.js"); ?>"></script>
    <script src="<?php admin_assets("js/plugin/select2/select2.full.min.js"); ?>"></script>
    <script type="text/javascript" src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript" src="<?php admin_assets('js/includes/editor.js') ?>"></script>
<?php $this->load->view('admin/includes/footEnd'); ?>