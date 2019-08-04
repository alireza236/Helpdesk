<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="javascript:;">
			 <!--  <img src="<?= base_url('assets'); ?>/images/logo_pdam.png" alt="Image" class="img-responsive"> -->
			</a>
			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>
<script> var log_url = "<?= base_url(); ?>"</script>
		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li>
					<a class="sidebar-control sidebar-main-toggle hidden-xs" data-popup="tooltip" title="sembunyikan menu" data-placement="bottom" data-container="body">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>				
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span>Sign as :&nbsp;<?php echo $this->session->userdata('user_fullname') ?></span>
						<i class="icon-user-plus"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-cog5"></i> Ganti Password</a></li>
						<li><a href="#" id="nav-logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	
	<!-- Second navbar -->
	<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo site_url('public/dashboard') ?>"><i class="icon-display4 position-left"></i>Home</a></li>
				
			<?php if ($this->session->userdata('user_level') == 'admin') : ?> 
				<li><a href="<?php echo site_url('public/tickets/add_ticket') ?>"><i class="icon-enter">&nbsp;</i>New Ticket</a></li>
		    <?php elseif($this->session->userdata('user_level') !== 'admin') : ?>
                <li><a href="<?php echo site_url('public/servicerequest') ?>"><i class="icon-paperplane position-left"></i>Service Request</a></li>
				<li><a href="<?php echo site_url('public/servicerequest/createrequest') ?>"><i class="icon-enter position-left"></i>Create Request</a></li>
            <?php endif ?>



			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-alarm"></i>
						<!-- 
						<span id="clocktime"></span>
						-->
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /second navbar -->


	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
			<!-- 
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Service Desk</span></h4>
				
				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="#">Home</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Basic inputs</li>
				</ul>
			-->

			</div>
		</div>
	</div>
	<!-- /page header -->

	<script>
  $(function() {
      $("#nav-logout").click(function(e) {
         e.preventDefault()
         
        swal({
			  title: "Are you sure?",
			  //text: "Once deleted, you will not be able to recover this imaginary file!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
                 window.location= log_url+"welcome/logout";
                 console.log(isConfirm + "Press Yes");
			  }
			  
			  return false;
			});
    });
  });
</script>