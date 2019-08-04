
<style type="text/css">
    .formtable {text-align:left; font-size:12px;color:#000000; background-color:#f0f0f0;padding:2px;}
    .control-label {font-style: initial; font-size: 12.5px;}
    .field_set {background-color:#f0f0f0; text-align:left; padding:2px;}
</style>
<div class="row">
    <div class="col-md-9">
        <form class="form-horizontal" action="#">
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
                                    <fieldset>
                                        <legend class="text-semibold">
                                            <i class="icon-file-text2 position-left"></i>
                                            No. Ticket&nbsp;:
                                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                            <div class="collapse in" id="demo1">
                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Nama pelanggan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">Summarecon Tbk</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Kategori Pelanggan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">Perusahaan Properti</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Masa Berlangganan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">2 tahun</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Tanggal Terdaftar&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">12-mei-2014</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Tanggal dilaporkan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">12-mei-2014</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Nama Pelapor&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">Abdul Khodir</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Urgensi(SLA)&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">Medium</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Permasalahan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">Stavol meledug</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Detail Permasalahan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">Stavol di ruang cnc Meledug proses supplay air ke pipa 37A di stop sementara</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Nomor telepon&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">021-8843249843</div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Email&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"></div>
                                    </div>
                                </div>
                        </div>
                    </fieldset>
                </form>
            <fieldset>
                    <legend class="text-semibold">
                            <i class="icon-reading position-left"></i>
                            Ticket Audit Trail
                    </legend>
            </fieldset>
            <div class="table-responsive">
                          <table class="table table-togglable table-hover">
                            <thead  class="field_set">
                                <tr class="formtable">
                                    <th>Tanggal Update</th>
                                    <th>Di Update Oleh</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-dashed">
                                    <td>Eugene</td>
                                    <td>Kopyov</td>
                                    <td>@Kopyov</td>
                                </tr>
                                <tr class="border-dashed">
                                    <td>Victoria</td>
                                    <td>Baker</td>
                                    <td>@Vicky</td>
                                </tr>
                                <tr class="border-dashed">
                                    <td>James</td>
                                    <td>Alexander</td>
                                    <td>@Alex</td>
                                </tr>
                                <tr class="border-dashed">
                                    <td>Franklin</td>
                                    <td>Morrison</td>
                                    <td>@Frank</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>   

                                          
                </div>
                </div>
                
                <script type="text/javascript">
                $(function() {
                     $('.pickadate-strings').pickadate({
                        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        showMonthsShort: true,
                        formatSubmit: 'dd/mm/yyyy',
                    });  

                     $('.table-togglable').footable();
               });
                </script>

