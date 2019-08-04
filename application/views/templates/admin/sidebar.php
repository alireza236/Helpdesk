<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-dark">
			  <div class="sidebar-fixed">
		
		<!--  sidebar Content -->
				<div class="sidebar-content">

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-title h6">
							<i class="icon-circle"></i><span><i class="icon-home"></i> MENU</span>
							<ul class="icons-list">
								<li><a href="javascript:;" data-action="collapse"></a></li>
							</ul>
						</div>
						<div class="category-content no-padding">
						
						<!-- Layout -->
							<ul class="navigation navigation-main navigation-accordion">
							<li>
								<a href="javascript:;"><i class="icon-bookmark"></i><span>Tickets</span></a>
							     <ul>
									
									<?php if ($this->session->userdata('user_level') == 'admin') : ?>

									  <li><a href="<?= base_url('public/tickets/ticket_by_request') ?>">Request</a></li> 
									<?php endif ?>	

									<li><a href="<?= base_url('public/tickets/get_tickets_by_assignee') ?>">Assignment</a></li>
									<li><a href="<?= base_url('public/tickets/ticket_resolution') ?>">Resolution</a></li>
									<li><a href="<?= base_url('public/tickets/ticket_waitforclosed') ?>">Waiting Close</a></li>
									<!-- <li><a href="<?= base_url('public/tickets/ticket_allopen') ?>"">View All Opened Tickets</a></li> -->
							     </ul>
							</li>
							
							

							<?php if ($this->session->userdata('user_level') == 'admin') : ?>
							<li>
								<a href="javascript:;"><i class="icon-server"></i> <span>Data Master</span></a>
								<ul>
								   <li><a href="<?= base_url('public/users') ?>">User</a></li>
								   <li><a href="<?= base_url('public/customer') ?>">Customers</a></li>
								 <!--   <li><a href="<?= base_url('public/project') ?>">Support Info</a></li> -->
								</ul>
							</li>
							
							<li>
								<a href="<?= base_url('public/tickets') ?>"><i class="icon-briefcase3"></i> <span>List All Tickets</span></a>
								<!-- <ul>
								   <li><a href="<?= base_url('public/tickets') ?>">List all tickets</a></li>
								   <li><a href="<?= base_url('public/sla') ?>">SLA Setting</a></li>
								   <li><a href="<?= base_url('public/headline_news') ?>">Helpdesk News</a></li>
								</ul> -->
							</li>
							
							<!-- <li>
								<a href="javascript:;"><i class="icon-menu3"></i> <span>System Log</span></a>
								<ul>
								   <li><a href="#">User Log</a></li>
								   <li><a href="#">Email Log</a></li>
								   <li><a href="#">Email Queue</a></li>
								</ul>
							</li> -->
							
							<li><a href="<?= base_url('public/servicerequest') ?>"><i class="icon-printer4"></i> <span>Service Request</span></a></li>
							<li><a href="<?= base_url('public/sla') ?>"><i class="icon-hammer-wrench"></i> <span>SLA Settings</span></a></li> 
							<li><a href="<?= base_url('public/headline_news') ?>"><i class="icon-stats-decline"></i> <span>Helpdesk News</span></a></li> 
							
							<?php endif ?>
                        <li>
						<a href="<?= base_url('public/knowledgebase') ?>"><i class="icon-book3"></i> <span>Knowledge Base</span></a>
								<!-- <ul>
									<li><a href="#">Search Tickets</a></li>
									<li><a href="#">Popular Solution</a></li>
								</ul> -->
					     </li>

						</ul>
					<!-- /layout -->
						
					   </div>
					</div>
					<!-- /main navigation -->

				  </div>
				<!--  Sidebar Content -->
				</div>
			</div>
			<!-- /main sidebar -->