<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Service Desk</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!--Load Jquery js -->
	<!-- <script type="text/javascript" src="<?= base_url('assets'); ?>/js/core/libraries/jquery.min.js"></script> -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/core/libraries/jquery-2.2.3.min.js"></script>
	<!--/Load Jquery js -->
	
	<!--/ Modernizr js for detect html5 to all browser -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/modernizr.min.js"></script>
	<!--/ Modernizr js -->

</head>

<body class="bg-slate-800" onload="document.userform.username.focus();">
    <div class="navbar navbar-default bg-blue">
		<div class="navbar-header">
			<!-- <a class="navbar-brand" href="#"><img src="<?= base_url('assets')?>/images/logo_pdam.png" alt=""></a> -->
		</div>
	</div>

	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">


				<!--==== Advanced login ====-->
				<form action="<?= base_url('welcome'); ?>" method="post" name="userform"  onsubmit="return login();">
					<div class="panel panel-body login-form">

						<div class="text-center">
							<div class="icon-object border-warning-400 text-warning-400"><i class="icon-users4"></i></div>
							<h5 class="content-group-lg">Login</h5>
							<div class="content-divider text-muted form-group"><span><small class="display-block">Mohon lengkapi</small></span></div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" name="username" class="form-control border-primary border-lg text-teal text-semibold" placeholder="Username">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="password" name="password" class="form-control border-primary border-lg" placeholder="Password">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group login-options">
							
						</div>

						<div class="form-group">
							<input type="submit" value="LOGIN" class="btn bg-blue btn-block">
						</div>

						<div class="content-divider text-muted form-group"><span>Copyright 2016</span></div>

					</div>
				</form>
				<script type="text/javascript">
				 function login(){
		         	if (userform.username.value == ""){
		         		$.jGrowl('Username tidak boleh kosong', {
					        position: 'top-center',
				            theme: 'bg-danger',
                            header: 'Perhatian!'
		         		});
					    userform.username.focus();
					    return false;
				    }
				    
		            if (userform.password.value == ""){
		            	$.jGrowl('Password tidak boleh kosong', {
		            		position: 'top-center',
				            theme: 'bg-danger',
                            header: 'Perhatian!'
		            	});
					    userform.password.focus();
					    return false;
				   	} 
        		 }
					
				</script>
				<!--==== /advanced login ==== -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->


		<!-- Footer -->
		<div class="footer text-white">
		
		</div>
		<!-- /footer -->

	</div>
	<!-- /page container -->
   <script type="text/javascript">
   	$(function() {
   		function init(){
    	 $('.form-control').uniform({
    		wrapperClass: 'bg-warning',
		    fileButtonHtml: '<i class="icon-plus2"></i>'
    	 });
         
         $(window).load(function(){
        	setTimeout(function(){
               new PNotify({
                title: 'Info',
                text: "<?= $this->session->flashdata('message_text'); ?>",
                addclass: 'alert-styled-left alert-styled-custom alert-arrow-left alpha-teal text-teal-800',
                type: 'info'
               })
            },300)
        })        
   	}

	<?php  if ($this->session->flashdata('message_text') != NULL): ?>
      init()
    <?php endif; ?>
   });
   </script>
    
   <!-- Theme JS files -->
    <script type="text/javascript" src="<?= base_url('assets')?>/js/plugins/notifications/pnotify.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets')?>/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets')?>/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets')?>/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets')?>/js/plugins/ui/drilldown.js"></script>
	<script type="text/javascript" src="<?= base_url('assets')?>/js/plugins/ui/nicescroll.min.js"></script>
	<!-- /theme JS files -->
   
    <!-- Core JS files -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/core/app.js"></script>
    <!-- /Core JS files -->
</body>
</html>
