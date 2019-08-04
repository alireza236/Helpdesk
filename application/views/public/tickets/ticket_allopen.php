            <div class="panel panel-flat">
                    <div class="panel-heading">
						<h5 class="panel-title"> 

                        </h5>
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
                        List All tickets
                    </div>
                    <div class="panel-body">
                        <span class="label label-danger">Urgensi Merah</span>&nbsp; = SLA missed of Resolution Goal Time&nbsp;
                       <br>
                        <span class="label label-primary">Urgensi Biru</span>&nbsp; = SLA has reached 75% of Resolution Goal Time&nbsp;
                       <br>
                        <span class="label label-success">Urgensi Hijau</span>&nbsp; = under SLA Resolution Goal Time&nbsp;
                    </div>
					<table class="table datatable-tools" id="table-footable">
						<thead>
							<tr> 
                                <th></th>
				                <th>No Ticket</th>
                                <th>Urgensi</th>
				                <th>SLA Goal Time</th>
                                <th>Nama Pelanggan</th>
				                <th>Tgl Laporan</th>
                                <th>Tgl Dokumentasi</th>  
                                <th>Topik Masalah</th>
                                <th>Status</th>
				                <th>Assigned</th>
				            </tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
             

                


<script type="text/javascript" charset="utf-8">
  $(function() {

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{ 
            orderable: false,
            type:'natural',
            width: '100px',
            targets: [0]
        }],
        dom: '<"datatable-header"fTl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });


    $.fn.dataTable.TableTools.defaults.sSwfPath = base_url+"/swf/datatables/copy_csv_xls_pdf.swf";
   
    $.extend(true, $.fn.DataTable.TableTools.classes, {
        "container" : "btn-group DTTT_container",  
        "buttons" : {
            "normal" : "btn btn-primary",  
            "disabled" : "disabled"  
        },
        "collection" : {
            "container" : "dropdown-menu" 
        },
        "select" : {
            "row" : "success"  
        }
    });

    $.extend(true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
        collection: {
            container: "ul",
            button: "li",
            liner: "a"
        }
    });

    // Table setup
    $('.datatable-tools').DataTable({
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        columnDefs: [
            {
                className: 'control',
                orderable: false,
                targets:   0
            },
            { 
                width: "100px",
                targets: [6]
            },
            { 
                orderable: false,
                targets: [6]
            }
        ],
        order: [0, 'asc'],
        tableTools: {
            sRowSelect: "",
            aButtons: ["xls", "pdf","print"]
        },
        processing: true,
        ajax :{
           'url' : '<?php echo base_url() ?>public/tickets/ticket_allopen_json',
           'type' : 'POST',
         }
    });
    
    $('.dataTables_filter input[type=search]').attr('placeholder','Search...');

    $('.dataTables_length select').select2({
        minimumResultsForSearch: "-1"
    });
    
    $('#table-footable').footable();
});					
</script>
				 
				
				
					
				

				 

