<?php $uri = strtolower($this->uri->segment(1).'/'.$this->uri->segment(2)); ?>
<div class="sidebar sidebar-style-2" data-background-color="white">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item <?php echo_if($uri == GENERAL_CONTROLLER . '/dashboard', 'active'); ?>">
							<a href="">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Bookings</h4>
                        </li>
						<li class="nav-item <?php echo_if($uri == BOOKINGS_CONTROLLER . '/', 'active'); ?>">
							<a href="">
								<i class="far fa-credit-card"></i>
								<p>Bookings</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Services</h4>
                        </li>
						<li class="nav-item <?php echo_if($uri == SERVICE_CONTROLLER . '/services' || $uri == SERVICE_CONTROLLER . '/addservice' || $uri == SERVICE_CONTROLLER . '/editservice', 'active'); ?>">
							<a href="<?php anchor_to(SERVICE_CONTROLLER) ?>">
								<i class="fas fa-shopping-basket"></i>
								<p>Services</p>
							</a>
						</li>
						<li class="nav-item <?php echo_if($uri == GALLERY_CONTROLLER . '/listgallery' || $uri == GALLERY_CONTROLLER . '/addimg' || $uri == GALLERY_CONTROLLER . '/editimg', 'active'); ?>">
							<a href="<?php anchor_to(GALLERY_CONTROLLER) ?>">
								<i class="fas fa-image"></i>
								<p>Products</p>
							</a>
						</li>
						<li class="nav-item <?php echo_if($uri == GALLERY_CONTROLLER . '/categories', 'active'); ?>">
							<a href="<?php anchor_to(GALLERY_CONTROLLER. '/categories') ?>">
								<i class="fas fa-image"></i>
								<p> Catogery</p>
							</a>
						</li>
						<li class="nav-item <?php echo_if($uri == ADMINBLOG_CONTROLLER, 'active'); ?>">
							<a href="<?php anchor_to(ADMINBLOG_CONTROLLER) ?>">
								<i class="fas fa-th-large"></i>
								<p>Offers</p>
							</a>
						</li>
					
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Employee</h4>
                        </li>
						<li class="nav-item <?php echo_if($uri == AGENTS_CONTROLLER . '/' || $uri == AGENTS_CONTROLLER . '/addagent' || $uri == AGENTS_CONTROLLER . '/editagent', 'active'); ?>">
							<a href="<?php anchor_to(AGENTS_CONTROLLER) ?>">
								<i class="fas fa-users"></i>
								<p>Employees</p>
							</a>
						</li>
						<!-- <li class="nav-item <?php echo_if($uri == AGENTS_CONTROLLER . '/' || $uri == AGENTS_CONTROLLER . '/addagent' || $uri == AGENTS_CONTROLLER . '/editagent', 'active'); ?>">
							<a href="">
								<i class="fas fa-users"></i>
								<p>Atandance</p>
							</a>
						</li> -->
						<li class="nav-item <?php echo_if($uri == PAYMENTS_CONTROLLER . '/', 'active'); ?>">
							<a href="">
								<i class="far fa-credit-card"></i>
								<p>All Payments</p>
							</a>
						</li>
						
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Others</h4>
                        </li>
						<li class="nav-item <?php echo_if($uri == CLIENTS_CONTROLLER . '/index', 'active'); ?>">
							<a href="">
								<i class="fas fa-comments"></i>
								<p>Feedback</p>
							</a>
						</li>
						<li class="nav-item <?php echo_if($uri == SURVEY_CONTROLLER . '/index', 'active'); ?>">
							<a href="">
								<i class="fas fa-chart-bar"></i>
								<p>Survey</p>
							</a>
						</li>
						<li class="nav-item <?php echo_if($uri == ADMINBLOG_CONTROLLER, 'active'); ?>">
							<a href="">
								<i class="fas fa-th-large"></i>
								<p>Survey Answers</p>
							</a>
						</li>
						<li class="nav-item <?php echo_if($uri == ADMINBLOG_CONTROLLER, 'active'); ?>">
							<a href="">
								<i class="fas fa-expand"></i>
								<p>Report</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Admin</h4>
                        </li>
						<li class="nav-item <?php echo_if($uri == ACCOUNT_CONTROLLER . '/me', 'active'); ?>">
							<a href="">
								<i class="fas fa-user"></i>
								<p>My Account</p>
							</a>
						</li>
						<!-- <li class="nav-item <?php echo_if($uri == CLIENTS_CONTROLLER . '/index', 'active'); ?>">
							<a href="<?php anchor_to(CLIENTS_CONTROLLER) ?>">
								<i class="fas fa-users"></i>
								<p>Clients</p>
							</a>
						</li> -->
                        
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->