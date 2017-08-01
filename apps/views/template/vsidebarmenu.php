<div class="user-panel">
    <div class="pull-left image">
        <img src="<?php echo base_url() ?>assets/dist/img/admin-button-icon-md.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p><?php echo $this->session->userdata('fullname') ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<ul class="sidebar-menu" id="leftcolumn" >
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-comments"></i>
            <span>NBUW</span><span class="label label-primary pull-right"></span></a>
        <ul class="treeview-menu collapsed">
            <li><a href="javascript:void(0)"  onclick="link_spaj()"><i class="fa fa-user"></i>SPAJ</a></li>
            <li><a href="javascript:void(0)"  onclick="link_polis()"><i class="fa fa-user"></i>POLIS</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-comments"></i>
            <span>Ucapan</span>
            <span class="label label-primary pull-right"></span>
        </a>
        <ul class="treeview-menu">
            <li><a href="javascript:void(0)"  onclick="link_hari_raya()"><i class="fa fa-user"></i>Hari Raya</a></li>
            <li><a href="javascript:void(0)"  onclick="link_ultah()"><i class="fa fa-user"></i>Ultah</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-comments"></i>
            <span>POS</span>
            <span class="label label-primary pull-right"></span>
        </a>
        <ul class="treeview-menu">
            <li><a href="javascript:void(0)"  onclick="alamat()"><i class="fa fa-user"></i>Alamat</a></li>
            <li><a href="javascript:void(0)"  onclick="aro()"><i class="fa fa-user"></i>Aro</a></li>
            <li><a href="javascript:void(0)"  onclick="mature()"><i class="fa fa-user"></i>Mature</a></li>
            <li><a href="javascript:void(0)"  onclick="ahli_waris()()"><i class="fa fa-user"></i>Ahli Waris</a></li>
            <li><a href="javascript:void(0)"  onclick="no_rek()"><i class="fa fa-user"></i>No Rek</a></li>
            <li><a href="javascript:void(0)"  onclick="link_surender()"><i class="fa fa-user"></i>Surender</a></li>
            <li><a href="javascript:void(0)"  onclick="link_marketing()"><i class="fa fa-user"></i>Marketing</a></li>
   
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-comments"></i>
            <span>Claim</span>
            <span class="label label-primary pull-right"></span>
        </a>
        <ul class="treeview-menu">
            <li><a href="javascript:void(0)"  onclick="link_claim_pay()"><i class="fa fa-user"></i>Payment</a></li>
             <li><a href="javascript:void(0)"  onclick="link_claim_pending()"><i class="fa fa-user"></i>Pending</a></li>
           
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-comments"></i>
            <span>Billing</span>
            <span class="label label-primary pull-right"></span>
        </a>
        <ul class="treeview-menu">
            <li><a href="javascript:void(0)"  onclick="link_bill_pay()"><i class="fa fa-user"></i>Payment</a></li>
            </ul>
    </li>
    <li class="treeview">
        <a href="<?php echo base_url() ?>logout">
            <i class="fa fa-user-times"></i>
            <span class="text-light-blue">Logout</span>
            <span class="label label-primary pull-right"></span>
        </a>
    </li>
</ul>
<script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
    });
</script>
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

    function link_spaj()
    {
        javascript:ajaxpage('<?php echo base_url() ?>spaj', 'rightcolumn');
    }
    function link_polis()
    {
        javascript:ajaxpage('<?php echo base_url() ?>poliss', 'rightcolumn');
    }
    function link_hari_raya()
    {
        javascript:ajaxpage('<?php echo base_url() ?>hari-raya', 'rightcolumn');
    }
    function link_ultah()
    {
        javascript:ajaxpage('<?php echo base_url() ?>ultah', 'rightcolumn');
    }

    function link_claim_pay()
    {
        javascript:ajaxpage('<?php echo base_url() ?>pay-claim', 'rightcolumn');
    }
    function link_claim_pending()
    {
        javascript:ajaxpage('<?php echo base_url() ?>pending', 'rightcolumn');
    }
    function link_bill_pay()
    {
        javascript:ajaxpage('<?php echo base_url() ?>pay-bill', 'rightcolumn');
    }
    
     function mature()
    {
        javascript:ajaxpage('<?php echo base_url() ?>mature', 'rightcolumn');
    }
     function aro()
    {
        javascript:ajaxpage('<?php echo base_url() ?>aro', 'rightcolumn');
    }
     function alamat()
    {
        javascript:ajaxpage('<?php echo base_url() ?>alamat', 'rightcolumn');
    }
     function ahli_waris()
    {
        javascript:ajaxpage('<?php echo base_url() ?>ahli-waris', 'rightcolumn');
    }
     function no_rek()
    {
        javascript:ajaxpage('<?php echo base_url() ?>no-rek', 'rightcolumn');
    }
     function link_surender()
    {
        javascript:ajaxpage('<?php echo base_url() ?>surender', 'rightcolumn');
    }
     function link_marketing()
    {
        javascript:ajaxpage('<?php echo base_url() ?>marketing', 'rightcolumn');
    }
    


    function add_polis()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Polis');
    }


    function edit_pesan_polis(id_pesan)
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


    function save_polis()
    {
        $('#btnSave').text('saving polis...');
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
                    javascript:ajaxpage('<?php echo base_url() ?>poliss', 'rightcolumn');

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

    function add_spaj()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('SPAJ');
    }


    function edit_pesan_spaj(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('nbuw/spaj/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit SPAJ');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }



    function save_spaj()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('nbuw/spaj/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('nbuw/spaj/ajax_update') ?>";
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
                    //$("#spaj").load(" #spaj");
                    javascript:ajaxpage('<?php echo base_url() ?>spaj', 'rightcolumn');
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

    function add_ultah()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('ULTAH');
    }


    function edit_pesan_ultah(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('ucapan/ultah/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
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

    function save_ultah()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('ucapan/ultah/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('ucapan/ultah/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>ultah', 'rightcolumn');
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

    function add_bill_pay()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Payment');
    }


    function edit_pesan_bill_pay(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('billing/payment/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Payment');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save_bill_pay()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('billing/payment/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('billing/payment/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>pay-bill', 'rightcolumn');
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

    function add_claim_pending()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Pending');
    }


    function edit_pesan_pending(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('claim/pending/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Pending');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }


    function save_claim_pending()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('claim/pending/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('claim/pending/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>pending', 'rightcolumn');
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

    function add_claim_pay()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Payment');
    }


    function edit_pesan_claim_pay(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('claim/payment/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Payment');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }



    function save_claim_pay()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('claim/payment/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('claim/payment/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>pay-claim', 'rightcolumn');
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

    function add_ahli_waris()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Ahli Waris');
    }


    function edit_pesan_ahli_waris(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('pos/ahli_waris/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit ahli waris');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
    function save_ahli_waris()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('pos/ahli_waris/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('pos/ahli_waris/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>ahli-waris', 'rightcolumn');
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
    function add_alamat()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Alamat');
    }


    function edit_pesan_alamat(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('pos/alamat/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Alamat');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }


    function save_alamat()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('pos/alamat/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('pos/alamat/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>alamat', 'rightcolumn');
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
    function add_aro()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Aro');
    }


    function edit_pesan_aro(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('pos/aro/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Aro');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }


    function save_aro()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('pos/aro/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('pos/aro/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>aro', 'rightcolumn');
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
    function add_marketing()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Marketing');
    }


    function edit_pesan_marketing(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('pos/marketing/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Marketing');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save_marketing()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('pos/marketing/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('pos/marketing/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>marketing', 'rightcolumn');
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
    function add_mature()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Mature');
    }


    function edit_pesan_mature(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('pos/mature/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Mature');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save_mature()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('pos/mature/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('pos/mature/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>mature', 'rightcolumn');
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

    function add_person_no_rek()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('No Rek');
    }


    function edit_pesan_no_rek(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('pos/no_rek/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit No Rek');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save_no_rek()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('pos/no_rek/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('pos/no_rek/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>no-rek', 'rightcolumn');
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
    function add_surender()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Polis');
    }


    function edit_pesan_surender(id_pesan)
    {
        save_method = 'update';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $.ajax({
            url: "<?php echo site_url('pos/surender/ajax_edit/') ?>/" + id_pesan,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id_pesan"]').val(data.id_pesan);
                $('[name="isi_pesan"]').val(data.isi_pesan);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Surender');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save_surender()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('pos/surender/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('pos/surender/ajax_update') ?>";
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
                    javascript:ajaxpage('<?php echo base_url() ?>surender', 'rightcolumn');
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
    function add_hari_raya()
    {
        save_method = 'add';
        $('#form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Hari Raya');
        $(".docs-date").datepicker();
    }


    function edit_pesan_hari_raya(id_pesan_hari_raya)
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
                $('[name="jenis_hari_raya"]').val(data.jenis_hari_raya);
                $('[name="tanggal_hari_raya"]').val(data.tanggal_hari_raya);
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Hari Raya');
                $(".docs-date").datepicker();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }


    function save_hari_raya()
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
                    javascript:ajaxpage('<?php echo base_url() ?>hari-raya', 'rightcolumn');
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
    function delete_pesan_hari_raya(id_pesan_hari_raya)
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
                    javascript:ajaxpage('<?php echo base_url() ?>hari-raya', 'rightcolumn');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }
    var loadedobjects = ""
    var rootdomain = window.location.hostname

    function ajaxpage(url, containerid) {
        var page_request = false
        if (window.XMLHttpRequest)
            page_request = new XMLHttpRequest()
        else if (window.ActiveXObject) {
            try {
                page_request = new ActiveXObject("Msxml2.XMLHTTP")
            } catch (e) {
                try {
                    page_request = new ActiveXObject("Microsoft.XMLHTTP")
                } catch (e) {
                }
            }
        } else
            return false
        page_request.onreadystatechange = function () {
            loadpage(page_request, containerid)
        }
        page_request.open('GET', url, true)
        page_request.send(null)
    }

    function loadpage(page_request, containerid) {
        if (page_request.readyState == 4 && (page_request.status == 200 || window.location.href.indexOf("http") == -1))
            document.getElementById(containerid).innerHTML = page_request.responseText
    }

    function loadobjs() {
        if (!document.getElementById)
            return
        for (i = 0; i < arguments.length; i++) {
            var file = arguments[i]
            var fileref = ""
            if (loadedobjects.indexOf(file) == -1) { //Check to see if this object has not already been added to page before proceeding
                if (file.indexOf(".js") != -1) { //If object is a js file
                    fileref = document.createElement('script')
                    fileref.setAttribute("type", "text/javascript");
                    fileref.setAttribute("src", file);
                } else if (file.indexOf(".css") != -1) { //If object is a css file
                    fileref = document.createElement("link")
                    fileref.setAttribute("rel", "stylesheet");
                    fileref.setAttribute("type", "text/css");
                    fileref.setAttribute("href", file);
                }
            }
            if (fileref != "") {
                document.getElementsByTagName("head").item(0).appendChild(fileref)
                loadedobjects += file + " "
            }
        }
    }
</script>