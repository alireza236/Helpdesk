<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Servicedesk</title>
     <?php  $ts = time(); ?>
	<!-- Global stylesheets -->
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
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/core/libraries/jquery.min.js"></script>
	<!--/Load Jquery js -->
	
	
	<!--/ Modernizr js for detect html5 to all browser -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/modernizr.min.js"></script>
	<!--/ Modernizr js -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/navbar_fixed_secondary.js"></script>
	<!-- <script type="text/javascript" src="<?= base_url('assets'); ?>/js/layout_sticky_sidebar.js"></script>-->
	<!-- /Theme JS files -->
</head>
	
<body onload="return startTime()">

	<!-- Main navbar -->
	<?php $this->load->view('templates/admin/header'); ?>
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

		<!-- Main Sidebar -->
		<?php
        		 
 
		  $this->load->view('templates/admin/sidebar'); 

		  //$this->load->view('templates/admin/sidebar_user');   
		?>
		
		<!-- /Main Sidebar -->

			<!-- Main content -->
			<div class="content-wrapper">
              <?php echo $main_content; ?>
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->


		<!-- Footer -->
		<div class="footer text-muted">
			
		</div>
		<!-- /footer -->
		<script type="text/javascript">
		     $(function() {
                   var notifikasi = function(){
         			 $(window).load(function(){
                		setTimeout(function(){
                           new PNotify({
                    		title: 'INFO',
                    		text: "<?= $this->session->flashdata('message_text'); ?>",
                    		addclass: 'alert-styled-left alert-styled-custom alert-arrow-left alpha-teal text-teal-800',
                    		icon: '',
                    		type: 'info'
                          })},300)
                		})
                    }

           		<?php  if ($this->session->flashdata('message_text') != NULL): ?>
              		notifikasi();
           		<?php endif; ?>
              });
                    
	</script>

	</div>
	<!-- /page container -->

    <!-- Core JS files -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/core/app.js"></script>
    <!-- /Core JS files -->
 
    <!-- Plugin JS files -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/ui/drilldown.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/loaders/progressbar.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/ui/prism.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/forms/selects/select2.min.js"></script>
	


	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/footable.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/datatables.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/col_vis.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/tools.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/jqdtplugin.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/responsive.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/natural_sort.js"></script>
	<!-- <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/forms/selects/bootstrap_multiselect.js"></script> -->
    <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/notifications/jgrowl.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/notifications/pnotify.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/notifications/sweet_alert.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/notifications/bootbox.min.js"></script>
	<!-- <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/ui/moment/moment.min.js"></script> -->
	<!-- <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/pickers/anytime.min.js"></script> -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/pickers/pickadate/legacy.js"></script>
	<!-- <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/forms/inputs/touchspin.min.js"></script> -->
	<!-- <script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/forms/styling/switch.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/forms/styling/switchery.min.js"></script> -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/highcharts.min.js"></script>	
	<!-- /Plugin JS files -->

	

	
	<!-- /Extra Plugin JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/datatable/util_datatable.js'); ?>?ts=<?php echo $ts; ?>">
	 </script>
	 
	<?php 
         if (isset($jsArray) && is_array($jsArray)) {
                foreach ($jsArray as $value) {
                    echo '<script type="text/javascript" src="'.base_url().$value.'?ts='.$ts.'"></script>' . PHP_EOL;
                }
            }
	 ?>
	 <script> var base_url = "<?php echo base_url('assets'); ?>"; </script>
	<!-- /Extra Plugin JS files -->
	

	<script type="text/javascript">
	$(function() {

		 function init() {
			 loadScript();
			 startTime();
			 checkTime();
		}
		
        var loadScript = function (url, callback) {
              var script = document.createElement("script");
                  script.type = "text/javascript";
              if (script.readyState){  
                  script.onreadystatechange = function(){
              		if (script.readyState == "loaded" || script.readyState == "complete"){
                        script.onreadystatechange = null;
                        callback();
                      }
                  }
               } else {  
                  script.onload = function() {callback();}
               }
                  script.src = url;
                  document.getElementsByTagName("head")[0].appendChild(script);
            }

		var startTime = function (){   
			    var today     = new Date();
			    var weekday   = new Array(7);
			    var weekday   = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
			    var monthname = new Array(12);
			    var monthname = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
			    var dayname   = weekday[today.getDay()];
			    var day       = today.getDate();
			    var month     = monthname[today.getMonth()]; 
			    var year      = today.getFullYear();
			    var h         = today.getHours();
			    var m         = today.getMinutes();
			    var s         = today.getSeconds();
			    h             = checkTime(h);
			    m             = checkTime(m);
			    s             = checkTime(s);
			    document.getElementById('clocktime').innerHTML = dayname+", "+day+"-"+month+"-"+year+", "+h+":"+m+":"+s;
			    t = setTimeout(function(){
			        startTime()
			    },500);
			}
			// function checkTime to add a zero in front of numbers&lt;10
		var checkTime = function (i){
			    if(i<10){i="0"+i;}
			    return i;
			}

          init();//start app here mas broo...

	});
	</script>
	
 </body>
</html>
