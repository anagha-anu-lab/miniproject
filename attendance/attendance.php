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
                        <a href="<?php anchor_to(ATTENDANCE_CONTROLLER . '/attendances') ?>">
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
                            <div class="card-title float-left">Attendances</div>
                            <a href="<?php anchor_to(ATTENDANCE_CONTROLLER . '/addattendance') ?>" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i> Add Attendance</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!$agent_List_By_Attendance){?>
                                            <tr>
                                                <td colspan="6" class="text-center"><h4 class="text-muted">No Attendance Found</h4></td>
                                            </tr>
                                        <?php } else{?>
                                        <?php foreach ($agent_List_By_Attendance as $serv ){ ?>
                                        <tr>
											<td>
											<?php 
												$agents = '';
												foreach($serv['agentId'] as $agNm) {
												$agents .= $agNm['agentName'] . ', ';
												}
												$agents = trim($agents, ', ');
												echo esc($agents, true);
											?>
											</td>
                                            <td><?php echo esc($serv['status'], true) ?></td>
                                            <td><?php echo esc($serv['date'], true) ?></td>
                                            <td>
                                                <a href="<?php anchor_to(ATTENDANCE_CONTROLLER . '/editattendance/' . $serv['id']) ?>" data-toggle="tooltip" data-placement="top" title="Edit Attendance" class="btn btn-link btn-primary btn-lg">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-link btn-danger deleteAttendance" data-toggle="tooltip" data-placement="top" title="Delete" value="<?php echo esc($serv['id'], true) ?>"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        <?php } }?>
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