<section class="content-header">
    <h1>Pesan
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SMS Blast</li>
    </ol>
</section>
<div class="box">

    <?php if (count($polis) == 0) { ?>
        <div class="box-header">
            <h3 class="box-title"></h3>
            <button class="btn btn-success" onclick="add_polis()"><i class="glyphicon glyphicon-plus"></i> Polis</button>
        </div><?php } else { ?>
        <div id="polis" class="box box-default">
            <div  class="box-header with-border">
                <h3 class="box-title">NBUW</h3>
                <div class="box-tools pull-right">
                    <?php echo '<a href="javascript:void(0)" class="btn btn-box-tool" title="Edit" onclick="edit_pesan_polis(' . "'" . $polis[0]['id_pesan'] . "'" . ')"><i class="glyphicon glyphicon-pencil"></i></a>'; ?>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div id="parent">
                <div id="wide" class="box-body">
                    <strong>Jenis Pesan</strong> : Polis<br>
                    <strong>Isi pesan</strong> : <?php echo $polis[0]['isi_pesan']; ?><br>
                    <span class="label label-success"><strong>Preview Pesan</strong> : <?php echo str_replace("[2]", $member[0]['no_polis'], str_replace("[1]", $member[0]['nama'], $polis[0]['isi_pesan'])); ?></span><br>
                    <strong>Text Counter</strong> : <?php echo strlen(str_replace("[2]", $member[0]['no_polis'], str_replace("[1]", $member[0]['nama'], $polis[0]['isi_pesan']))); ?> Character<br>
                </div>
            </div> 
            <hr>
        </div>
    <?php } ?>

</div>
<!--
<script type="text/javascript">
            var save_method;
            var table;
            $(document).ready(function () {
                table = $('#table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "order": [],
                    "ajax": {
                        "url": "<?php echo site_url('nbuw/polis/ajax_list') ?>",
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
                $('.modal-title').text('Polis');
            }


            function edit_pesan(id_pesan)
            {
                save_method = 'update';
                $('#form')[0].reset();
                $('.form-group').removeClass('has-error');
                $('.help-block').empty();
                $.ajax({
                    url: "<?php echo site_url('nbuw/polis/ajax_edit/') ?>/" + id_pesan,
                    type: "GET",
                    dataType: "JSON",
                    success: function (data)
                    {
                        $('[name="id_pesan"]').val(data.id_pesan);
                        $('[name="isi_pesan"]').val(data.isi_pesan);
                        $('#modal_form').modal('show');
                        $('.modal-title').text('Edit Polis');
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
                    url = "<?php echo site_url('nbuw/polis/ajax_add') ?>";
                } else {
                    url = "<?php echo site_url('nbuw/polis/ajax_update') ?>";
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
                            $("#polis").load(" #polis");
                        } else
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

            function delete_person(id_admin)
            {
                if (confirm('Are you sure delete this data?'))
                {
                    // ajax delete data to database
                    $.ajax({
                        url: "<?php echo site_url('nbuw/polis/ajax_delete') ?>/" + id_admin,
                        type: "POST",
                        dataType: "JSON",
                        success: function (data)
                        {
                            $('#modal_form').modal('hide');
                            $("#polis").load(" #polis");
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error deleting data');
                        }
                    });
                }
            }

</script>-->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Polis message template</h3>
            </div>

            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input value="" type="hidden" name="id_pesan"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Isi Pesan</label>
                            <div class="col-md-9">
                                <textarea name="isi_pesan" rows="10"  id="field" onkeyup="countChar(this)" placeholder="pesan" class="form-control" type="text"></textarea>
                                <span id="charNum">-</span> Character
                            </div>
                        </div>
                    </div>
                </form><p style="color:red;">[1] = Nama Member<br>
                    [2] = No Polis</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_polis()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
