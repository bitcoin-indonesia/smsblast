<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Valdo | SMS Blast </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="<?php echo base_url() ?>assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
            <?php echo $html['css']; ?>
          
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
        <script>
          function countChar(val) {
            var len = val.value.length;
            if (len >= 500) {
              val.value = val.value.substring(0, 500);
            } else {
              $('#charNum').text(len);
            }
          };
        </script>
        <style>
            .status-available{color:#2FC332;}
            .status-not-available{color:#D60202;}
        </style>
    </head>
    <body class="hold-transition skin-green">
        <div class="wrapper">
            <?php echo $template['header']; ?>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <?php echo $template['sidebarmenu']; ?>
                </section>
            </aside>
            <div id="rightcolumn" class="content-wrapper" >
<!--                <section  class="content-header">
                    <h1>Pesan
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">SMS Blast</li>
                    </ol>
                </section>  
             <?php  $admin['datatable'] ?>-->
            </div>
            <div class="control-sidebar-bg"></div>
            <?php echo $template['footer'] ?>
        </div>
        <?php echo $html['js']; ?>
    </body>
</html>
