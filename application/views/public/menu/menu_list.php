            <div class="panel panel-flat">
                <a class="btn btn-primary bg-success-800" href="<?= base_url('public/menu/addmenu'); ?>"><span><i class="icon-plus-circle2"></i> Tambah Data</span></a>
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
						MENU MODUL
					</div>
					<table class="table datatable-tools" id="table-footable">
						<thead>
                        <tr>
                            <th>No</th>
                            <th>POSISI</th>
                            <th>NAMA MENU</th>
                            <th>ICON</th>
                            <th>LINK</th>
                            <th>PARENT</th>
                            <th>RULES</th>
                            <th>AKTIF</th>
                            <th>ACTION</th>
                        </tr>
                       </thead>
						<tbody></tbody>
					</table>
				</div>
             

                


<script type="text/javascript" charset="utf-8">
  $(function() {


    // Table setup
    // ------------------------------

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 5 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
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
        order: [1, 'asc'],
        processing: true,
        ajax :{
           'url' : '<?php echo base_url() ?>public/Menu/getJson',
           'type' : 'POST',
         }
    });



    
    $('.dataTables_filter input[type=search]').attr('placeholder','Cari...');

    $('#table-footable').footable();
     
    $('.dataTables_length select').select2({
        minimumResultsForSearch: "-1"
    });
    
});

</script>
				 
				
				
					
				

				 

