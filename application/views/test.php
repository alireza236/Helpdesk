<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets'); ?>/css/extras/animate.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!--Load Jquery js -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/core/libraries/jquery.min.js"></script>
	<!--/Load Jquery js -->
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
		<?php $this->load->view('templates/admin/sidebar'); ?>
		<!-- /Main Sidebar -->

			<!-- Main content -->
			<div class="content-wrapper">
              				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Sidebars overview</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li>
		  							<a data-action="collapse" data-popup="tooltip" title="sembunyikan" data-placement="top" data-container="body"></a>
		                		</li>
		                		<li>
									<a data-action="reload" data-popup="tooltip" title="refresh" data-placement="top" data-container="body"></a>
								</li>
		                		<li>
		                			<a data-action="close" data-popup="tooltip" title="hilangkan" data-placement="top" data-container="body"></a>
		                		</li>
		                	</ul>
	                	</div>
					</div>
					<div class="panel-body">
						
					</div>

					<table class="table datatable-tools-basic">
						<thead>
							<tr>
				                <th>Name</th>
				                <th>Position</th>
				                <th>Age</th>
				                <th>Start date</th>
				                <th>Salary</th>
				                <th class="text-center">Actions</th>
				            </tr>
						</thead>
						<tbody>
							<tr>
				                <td>Tiger Nixon</td>
				                <td>System Architect</td>
				                <td>61</td>
				                <td><a href="#">2011/04/25</a></td>
				                <td><span class="label label-info">$320,800</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Garrett Winters</td>
				                <td>Accountant</td>
				                <td>63</td>
				                <td><a href="#">2011/07/25</a></td>
				                <td><span class="label label-danger">$170,750</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Ashton Cox</td>
				                <td>Junior Technical Author</td>
				                <td>66</td>
				                <td><a href="#">2009/01/12</a></td>
				                <td><span class="label label-default">$86,000</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Cedric Kelly</td>
				                <td>Senior Javascript Developer</td>
				                <td>22</td>
				                <td><a href="#">2012/03/29</a></td>
				                <td><span class="label label-success">$433,060</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Airi Satou</td>
				                <td>Accountant</td>
				                <td>33</td>
				                <td><a href="#">2008/11/28</a></td>
				                <td><span class="label label-danger">$162,700</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Brielle Williamson</td>
				                <td>Integration Specialist</td>
				                <td>61</td>
				                <td><a href="#">2012/12/02</a></td>
				                <td><span class="label label-info">$372,000</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Herrod Chandler</td>
				                <td>Sales Assistant</td>
				                <td>59</td>
				                <td><a href="#">2012/08/06</a></td>
				                <td><span class="label label-danger">$137,500</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Rhona Davidson</td>
				                <td>Integration Specialist</td>
				                <td>55</td>
				                <td><a href="#">2010/10/14</a></td>
				                <td><span class="label label-default">$97,900</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Colleen Hurst</td>
				                <td>Javascript Developer</td>
				                <td>39</td>
				                <td><a href="#">2009/09/15</a></td>
				                <td><span class="label label-success">$405,500</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Sonya Frost</td>
				                <td>Software Engineer</td>
				                <td>23</td>
				                <td><a href="#">2008/12/13</a></td>
				                <td><span class="label label-danger">$103,600</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Jena Gaines</td>
				                <td>Office Manager</td>
				                <td>30</td>
				                <td><a href="#">2008/12/19</a></td>
				                <td><span class="label label-default">$90,560</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Quinn Flynn</td>
				                <td>Support Lead</td>
				                <td>22</td>
				                <td><a href="#">2013/03/03</a></td>
				                <td><span class="label label-info">$342,000</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Charde Marshall</td>
				                <td>Regional Director</td>
				                <td>36</td>
				                <td><a href="#">2008/10/16</a></td>
				                <td><span class="label label-success">$470,600</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Haley Kennedy</td>
				                <td>Senior Marketing Designer</td>
				                <td>43</td>
				                <td><a href="#">2012/12/18</a></td>
				                <td><span class="label label-danger">$113,500</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
				            <tr>
				                <td>Tatyana Fitzpatrick</td>
				                <td>Regional Director</td>
				                <td>19</td>
				                <td><a href="#">2010/03/17</a></td>
				                <td><span class="label label-info">$385,750</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
				            </tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->


		<!-- Footer -->
		<div class="footer text-muted">
			
		</div>
		<!-- /footer -->

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
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/ui/prism.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/footable.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/datatables.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/tools.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/datatable/responsive.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/forms/selects/select2.min.js"></script>
	<!-- /Plugin JS files -->

	<!-- /Extra Plugin JS files -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/pages/datatables_basic.js"></script>
	<script> var base_url = "<?php echo base_url('assets'); ?>"; </script>	
	<!-- /Extra Plugin JS files -->
	
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/navbar_fixed_secondary.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/layout_sticky_sidebar.js"></script>
	<!-- /Theme JS files -->

	<script type="text/javascript">
		 $(document).ready(function() {
			function init(){
			  loadScript();
			  startTime();
			  checkTime();
             }
			
           init();
		 });
    </script>
	
	<script>
        var loadScript = function (url, callback) {
              var script = document.createElement("script");
                  script.type = "text/javascript";
              if (script.readyState){  //IE
                  script.onreadystatechange = function(){
              		if (script.readyState == "loaded" || script.readyState == "complete"){
                        script.onreadystatechange = null;
                        callback();
                      }
                  }
               } else {  //Others
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

	</script>
 </body>
</html>
