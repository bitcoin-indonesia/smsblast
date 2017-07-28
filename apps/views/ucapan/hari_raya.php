<div class="box">
    
    <div class="box-header">
        <h3 class="box-title"></h3>
        <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Ucapan</button>
    </div>
<div class="box-body">
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Isi pesan</th>
                <th>Agama</th>
                <th>Hari Raya</th>
                <th>Tanggal Hari Raya</th>
                <th style="width:130px;">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</div>
<script src="<?php echo base_url('assets/bootstrap/js/jquery-2.1.4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/dataTables.bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap-datepicker.min.js') ?>"></script>
<script type="text/javascript">
var save_method;
var table;
$(document).ready(function () {
    table = $('#table').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('ucapan/hari_raya/ajax_list') ?>",
            "type": "POST"
        },
        "columnDefs": [
            {
                "targets": [-1],
                "orderable": false,
            },
        ],
    });
    $('.datepicker').datepicker({
        autoclose: true,
        format: "dd-mm-yyyy",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,
    });
    $("input").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

});

function add_person()
{
    save_method = 'add';
    $('#form')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $('#modal_form').modal('show');
    $('.modal-title').text('Hari Raya');
}


function edit_pesan(id_pesan_hari_raya)
{
    save_method = 'update';
    $('#form')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $.ajax({
        url: "<?php echo site_url('ucapan/hari_raya/ajax_edit/') ?>/" + id_pesan_hari_raya,
        type: "GET",
        dataType: "JSON",
        success: function (data)
        {
            $('[name="id_pesan_hari_raya"]').val(data.id_pesan_hari_raya);
            $('[name="isi_pesan"]').val(data.isi_pesan);
            $('#modal_form').modal('show');
            $('.modal-title').text('Edit Ultah');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null, false);
}

function save()
{
    $('#btnSave').text('saving...');
    $('#btnSave').attr('disabled', true);
    var url;
    if (save_method == 'add') {
        url = "<?php echo site_url('ucapan/hari_raya/ajax_add') ?>";
    } else {
        url = "<?php echo site_url('ucapan/hari_raya/ajax_update') ?>";
    }
    $.ajax({
        url: url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function (data)
        {
            if (data.status)
            {
                $('#modal_form').modal('hide');
                location.reload();
            } 
            else
            {
                for (var i = 0; i < data.inputerror.length; i++)
                {
                    $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error');
                    $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]);
                }
            }
            $('#btnSave').text('save');
            $('#btnSave').attr('disabled', false);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save');
            $('#btnSave').attr('disabled', false);
        }
    });
}

function delete_person(id_pesan_hari_raya)
{
    if (confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url: "<?php echo site_url('ucapan/hari_raya/ajax_delete') ?>/" + id_pesan_hari_raya,
            type: "POST",
            dataType: "JSON",
            success: function (data)
            {
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
    }
}

</script>
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">SPAJ FORM</h3>
            </div>
            
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input value="" type="hidden" name="id_pesan_hari_raya"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Isi Pesan</label>
                            <div class="col-md-9">
                             <textarea name="isi_pesan" rows="10"  id="field" onkeyup="countChar(this)" placeholder="pesan" class="form-control" type="text"></textarea>
                                <span id="charNum">-</span> Character</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal</label>
                            <div class="col-md-9">
                                <input class="datepicker form-control" placeholder="Pilih Tanggal"  name="tanggal_hari_raya">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Agama</label>
                            <div class="col-md-9">
                                <select name="agama" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="islam">Islam</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                </select>  
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Hari Raya</label>
                            <div class="col-md-9">
                                <select name="jenis_hari_raya" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="nyepi">Hari Raya Nyepi</option>
                                    <option value="paskah">Hari Paskah</option>
                                    <option value="waisak">Hari Waisak </option>
                                    <option value="ken_isa">Kenaikan Isa Almasih </option>
                                    <option value="idul_fitri">Hari Raya Idul Fitri</option>
                                    <option value="idul_adha">Idul Adha</option>
                                    <option value="maulid">Maulid Nabi Muhammad SAW</option>
                                    <option value="natal">Hari Natal</option>
                                </select>  
                            </div>
                        </div>
                        
                    </div>
                </form><p style="color:red;">[1] = Nama Member<br>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>