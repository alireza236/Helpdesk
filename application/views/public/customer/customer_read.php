<?php $data['jsArray'] = array('assets/js/plugins/datatable/util_datatable.js'); ?>
                <div class="panel panel-flat">
                        <a class="btn btn-primary bg-success-800" href="<?= base_url('public/customer/add_customer'); ?>"><span><i class="icon-plus-circle2"></i> Tambah Data</span></a>
                    <div class="panel-heading">
						<h5 class="panel-title"></h5>
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
						Daftar Pelanggan
					</div>
					<table class="table datatable-tools" id="table-footable">
						<thead>
							<tr>
                                <th></th>
				                <th>Customer</th>
				                <th>Alamat</th>
                                <th>Telepon</th>
				                <th>Email</th>
				                <th>Pic</th>
				                <th class="text-center">Actions</th>
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


    // Define default path for DataTables SWF file
    $.fn.dataTable.TableTools.defaults.sSwfPath = base_url+"/swf/datatables/copy_csv_xls_pdf.swf";

    // Tabletools defaults
    $.extend(true, $.fn.DataTable.TableTools.classes, {
        "container" : "btn-group DTTT_container", // buttons container
        "buttons" : {
            "normal" : "btn btn-primary", // default button classes
            "disabled" : "disabled" // disabled button classes
        },
        "collection" : {
            "container" : "dropdown-menu" // collection container to take dropdown menu styling
        },
        "select" : {
            "row" : "success" // selected row class
        }
    });

    // Collection dropdown defaults
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
                orderable: true,
                targets:   0
            },
            { 
                width: "100px",
                targets: [6]
            },
            { 
                width: "100px",
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
           'url' : '<?php echo base_url() ?>public/customer/getJson',
           'type' : 'POST',
         }
    });
    
    // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Search...');

    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: "-1"
    });
    
    // plugin for the datatable responsive
    $('#table-footable').footable();
});					
</script>
				 
				
				
					
				

				 

