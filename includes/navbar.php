<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg">
			<div class="container-fluid">
				<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown hidden-caret">
						<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
							<div class="avatar-sm">
								<img src="<?php admin_assets('img/usericon.svg') ?>" class="avatar-img rounded-circle"></i>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-user animated fadeIn">
							<div class="dropdown-user-scroll scrollbar-outer">
								<li>
									<div class="user-box">
										<div class="u-text">
											<h4><?php echo esc(ucfirst($user['fullName'])); ?></h4>
                                            <p class="text-muted"><u><?php echo esc($user['email']); ?></u></p>
                                            <p><span class="badge badge-primary"><strong><?php echo_if($user['role'] == 0, 'Super Admin', 'Admin') ?></strong></span></p>
										</div>
									</div>
								</li>
								<li>
									<a class="dropdown-item" href="<?php anchor_to(AUTH_CONTROLLER . '/logout') ?>">Logout</a>
								</li>
							</div>
						</ul>
					</li>
				</ul>
			</div>
		</nav>