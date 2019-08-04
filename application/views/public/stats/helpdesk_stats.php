                      <div class="col-md-12">

						<!-- Basic layout-->
						<form action="#" class="form-horizontal">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title"></h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
								   <div id="container" style="width:100%; height:400px;"></div>
								</div>
							</div>
						</form>
						<!-- /basic layout -->

					</div>


                     <div class="col-md-6">
						<form action="#" class="form-horizontal">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title"></h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
								   <div id="pie" style="width:100%; height:400px;"></div>
								</div>
							</div>
						</form>
                    </div>



                    <div class="col-md-6">
						<!-- Basic layout-->
						<form action="#" class="form-horizontal">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title"></h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
								   <div id="grafik" style="width:100%; height:400px;"></div>
								</div>
							</div>
						</form>
                    </div>

<script type="text/javascript" src="<?= base_url('assets'); ?>/js/highcharts.min.js"></script>						
<script type="text/javascript">
 
    $(function () { 
	     var chart =  Highcharts.chart('container', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: 'SLA Incident 2017'
		    },
		   
		    xAxis: {
		        type: 'category',
		        labels: {
		            rotation: -45,
		            style: {
		                fontSize: '13px',
		                fontFamily: 'Verdana, sans-serif'
		            }
		        }
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'SLA'
		        }
		    },
		    legend: {
		        enabled: false
		    },
		    tooltip: {
		        pointFormat: 'SLA in 2017: <b>{point.y:.1f}</b>'
		    },
		    series: [{
		        /*name: 'Population',*/
		        data: [
		            ['Januari', 27],
		            ['Februari', 23],
		            ['Maret', 17],
		            ['April', 16],
		            ['Mei', 17],
		            ['Juni', 23],
		            ['Juli', 20],
		            ['Agustus', 23],
		            ['September', 17],
		            ['Oktober', 19],
		            ['November', 21],
		            ['Desember', 19],
		        ],
		        dataLabels: {
		            enabled: true,
		            rotation: -90,
		            color: '#FFFFFF',
		            align: 'right',
		            /*format: '{point.y:.1f}', // one decimal*/
		            y: 10, // 10 pixels down from the top
		            style: {
		                fontSize: '13px',
		                fontFamily: 'Verdana, sans-serif'
		            }
		        }
		    }]
		});
	});

     $(function () { 
		     
		    Highcharts.chart('pie', {
		        chart: {
		            type: 'bar'
		        },
		        title: {
		            text: 'Tickets Category by Month (Top 5)'
		        },
		        xAxis: {
		        	type: 'category',
		        	labels: {
		            	style: {
		                fontSize: '13px',
		                fontFamily: 'Verdana, sans-serif'
		            }
		        }
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: ''
		        },
		    },
		        series: [{
		        name: 'ticket',
		        data: [
		            ['Air tidak keluar', 27],
		            ['Air Keruh', 18],
		            ['Pengaduan rekening', 12],
		            ['Meter mati', 10],
		            ['Pipa Persil bocor', 8],
		        ],
		        dataLabels: {
		            enabled: true,
		            color: '#FFFFFF',
		            align: 'right',
		            style: {
		                fontSize: '13px',
		                fontFamily: 'Verdana, sans-serif'
		            }
		        } 
		    }]
		    }); 

		});

      $(function () { 
      	// Radialize the colors
			Highcharts.setOptions({
			    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
			        return {
			            radialGradient: {
			                cx: 0.5,
			                cy: 0.3,
			                r: 0.7
			            },
			            stops: [
			                [0, color],
			                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
			            ]
			        };
			    })
			});

			var chart = Highcharts.chart('grafik', {
			    chart: {
			        plotBackgroundColor: null,
			        plotBorderWidth: null,
			        plotShadow: false,
			        type: 'pie'
			    },
			    title: {
			        text: 'Received Ticket by Status, 2017'
			    },
			    tooltip: {
			        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			    },
			    plotOptions: {
			        pie: {
			            allowPointSelect: true,
			            cursor: 'pointer',
			            dataLabels: {
			                enabled: true,
			                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
			                style: {
			                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			                },
			                connectorColor: 'silver'
			            }
			        }
			    },
			    series: [{
			        name: 'received',
			        data: [
			            { name: 'Resolved', y: 12 },
			            { name: 'Pending ', y: 2 },
			            { name: 'Assigned', y: 79 },
			            { name: 'Closed', y: 7 }
			        ]
			    }]
			});
   });

</script>														