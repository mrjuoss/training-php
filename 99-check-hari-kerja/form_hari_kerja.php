<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Input Hari kerja</title>
    <link rel="stylesheet" href="css/style.css">
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    -->
  </head>
  <body>
    <div class="#content">
     Mujaki
    </div>

    <div id="wrapper">
      <nav>
        <ul id="side-menu">
            <li>
                <a href="?p=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="?p=naik_pangkat"><i class="fa fa-table fa-fw"></i> Data Pangkat</a>
            </li>
            <li>
                <a href="?p=libur_kalender"><i class="fa fa-table fa-fw"></i> Libur Kalender</a>
            </li>
            <li>
                <a href="?p=next_hari_kerja"><i class="fa fa-table fa-fw"></i> Hari Kerja Berikutnya</a>
            </li>
        </ul>
      </nav>

        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">Libur Kalender</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>

          <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Hari Libur
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form id="finsert" role="form" class="form-horizontal" method="POST" action="proses/crud_liburan.php">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tahun</label>
                                <div class="col-sm-10">
                                    <input type="text" id="tahun" class="form-control angka" required name="tahun" placeholder="Tahun">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tgl Libur</label>
                                <div class="col-sm-10">
                                    <textarea id="multidate" class="form-control" data-datepick="firstDay: 1" required placeholder="Klik di sini" name="tgl_libur" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input id="idlibur" type="hidden" class="form=control" name="idlibur" value="">
                                    <input type="hidden" id="mode" class="form=control" name="mode" value="simpan">
                                    <input type="submit" id="button-submit" class="btn btn-danger" value="SIMPAN">
                                    <button type="button" id="button-cancel" class="btn btn-default">BATAL</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Hari Libur
                    </div>
                    <!-- /.panel-heading -->
                    <div id="tabel_libur" class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Tahun</th>
                                  <th>Tgl Libur</th>
                                  <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr class="odd gradeX">
                                  <td>1</td>
                                  <td>2017</td>
                                  <td>2017-08-19,2017-08-20,2017-08-26,2017-08-27,2017-09-01,2017-09-02,2017-09-03,2017-09-09,2017-09-10,2017-09-16,2017-09-17,2017-09-21,2017-09-23,2017-09-24,2017-09-30,2017-10-01,2017-10-08,2017-10-07,2017-10-14,2017-10-15,2017-10-21,2017-10-22,2017-10-28,2017-10-29,2017-11-01,2017-11-04,2017-11-05,2017-11-11,2017-11-12,2017-11-18,2017-11-19,2017-11-25,2017-11-26,2017-12-01,2017-12-02,2017-12-03,2017-12-09,2017-12-10,2017-12-16,2017-12-17,2017-12-23,2017-12-24,2017-12-25,2017-12-30,2017-12-31,2017-09-22,2017-10-0</td>
                                  <td><a href="#" data-id=3 data-tahun=2017 data-libur=2017-08-19,2017-08-20,2017-08-26,2017-08-27,2017-09-01,2017-09-02,2017-09-03,2017-09-09,2017-09-10,2017-09-16,2017-09-17,2017-09-21,2017-09-23,2017-09-24,2017-09-30,2017-10-01,2017-10-08,2017-10-07,2017-10-14,2017-10-15,2017-10-21,2017-10-22,2017-10-28,2017-10-29,2017-11-01,2017-11-04,2017-11-05,2017-11-11,2017-11-12,2017-11-18,2017-11-19,2017-11-25,2017-11-26,2017-12-01,2017-12-02,2017-12-03,2017-12-09,2017-12-10,2017-12-16,2017-12-17,2017-12-23,2017-12-24,2017-12-25,2017-12-30,2017-12-31,2017-09-22,2017-10-0 class="btn btn-primary edit-libur">Edit</a></td>
                              </tr>
                              <tr class="odd gradeX">
                                  <td>2</td>
                                  <td>2018</td>
                                  <td>2018-01-01,2018-01-06,2018-01-07,2018-01-13,2018-01-14,2018-01-20,2018-01-21,2018-01-27,2018-01-28,2018-01-02</td>
                                  <td><a href="#" data-id=9 data-tahun=2018 data-libur=2018-01-01,2018-01-06,2018-01-07,2018-01-13,2018-01-14,2018-01-20,2018-01-21,2018-01-27,2018-01-28,2018-01-02 class="btn btn-primary edit-libur">Edit</a></td>
                              </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <div id="gagal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h5 class="modal-title" id="myModalLabel">Error!</h5>
          </div>
          <div class="modal-body">
            Data tidak boleh kosong/ sudah pernah direkam!
          </div>
        </div>
      </div>
    </div>

    <div id="gagal1" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel">Error!</h5>
                </div>
                <div class="modal-body">
                    Mohon maaf, karena keterbatasan sumber daya server, kami membatasi jumlah insert data.
                </div>
            </div>
        </div>
    </div>

    <div id="sukses" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title" id="myModalLabel">Sukses!</h5>
          </div>
          <div class="modal-body">
              Data berhasil disimpan!
          </div>
        </div>
      </div>
    </div>
    <!-- /#wrapper -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $("#button-cancel").hide();
        $('#multidate').datepick({
            multiSelect: 200,
            dateFormat: 'yyyy-mm-dd',
            showTrigger: '#calImg'
        });
        $("#tabel_libur").on("click", ".edit-libur", function(e) {
            e.preventDefault();
            $('#idlibur').val($(this).data('id'));
            $('#tahun').val($(this).data('tahun'));
            $('#multidate').val($(this).data('libur'));
            $('input#mode').val('update');
            $('input#button-submit').val('UPDATE');
            $("#button-cancel").show();
        });

        $('#button-cancel').click(function(e){
            e.preventDefault();
            $(this).closest('form').find("input[type=text], select, textarea").val("");
            $('input#mode').val('simpan');
            $('input#button-submit').val('SIMPAN');
            $("#button-cancel").hide();
        });

        $('#finsert').submit(function(e) {
            var formObj = $(this);
            var formURL = formObj.attr('action');
            var formData = new FormData(this);
            $.blockUI({ css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            } });
            $.ajax({
                url: formURL,
                type: 'POST',
                data: formData,
                mimeType:"multipart/form-data",
                contentType: false,
                cache : false,
                processData: false,
                success: function(data) {
                    if(data == 1){
                        $('#gagal').modal('show');
                        $.unblockUI();
                    }
                    if(data == 3){
                        $('#gagal1').modal('show');
                        $.unblockUI();
                    }
                    if(data == 2){
                        $('#sukses').modal('show');
                        window.setTimeout(function() {
                            location.href = "?p=libur_kalender";
                        }, 2000);
                        $.unblockUI();
                    }
                }
            });
        return false;
        });
    });
</script>
</body>
</html>
