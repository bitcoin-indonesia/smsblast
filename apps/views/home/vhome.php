<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Valdo | SMS Blast </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="<?php echo base_url() ?>assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <?php echo $html['css']; ?>
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
        <script>
            setInterval(function ()
            {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url() ?>home",
                    datatype: "html",
                    success: function (data)
                    {
                        $("#activity").load(" #activity");
                    }
                });
            }, 5000);
        </script>
    </head>
    <body class="transition skin-blue " >
        <div class="wrapper">
            <?php echo $template['header']; ?>
            <aside class="main-sidebar ">
                <section class="sidebar">
                    <?php echo $template['sidebarmenu']; ?>
                </section>
            </aside>
           
            <div id="rightcolumn" class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-gray-active"><img width="100" src="<?php echo base_url() ?>assets/images/3.png"></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">THREE</span>
                                    <span class="info-box-number"><?php echo count($member); ?> Users</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-gray"><img width="100" src="<?php echo base_url() ?>assets/images/telkomsel.png"></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">TELKOMSEL</span>
                                    <span class="info-box-number"><?php echo count($member); ?> Users</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-gray-active"><img width="90" src="<?php echo base_url() ?>assets/images/m3.png"></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">INDOSAT</span>
                                    <span class="info-box-number"><?php echo count($member); ?> Users</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-gray-active"><img width="100" src="<?php echo base_url() ?>assets/images/xl.png"></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">XL</span>
                                    <span class="info-box-number"><?php echo count($member); ?> Users</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                    </div>

                    <section class="col-lg-7 connectedSortable">

                        <div class="row">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Latest SMS Blast Report</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-margin">
                                            <thead>
                                                <tr>
                                                    <th>No Hp</th>
                                                    <th>Pesan</th>
                                                    <th>Type</th>
                                                    <th>Sub Type</th>
                                                    <th>status</th>
                                                    <th>waktu</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $jum = count($report);
                                                for ($x = 0; $x < $jum; $x++) {
                                                    if ($report[$x]['status'] == 'success') {
                                                        $span = '<span class="label label-success">Success</span>';
                                                    } else {
                                                        $span = '<span class="label label-danger">Failed</span>';
                                                    }
                                                    ?>
                                                    <tr><td><a href="#"><?php echo $report[$x]['no_hp'] ?></a></td>
                                                        <td><?php echo $report[$x]['isi_pesan'] ?></td>
                                                        <td><?php echo $report[$x]['type'] ?></td>
                                                        <td><?php echo $report[$x]['sub_type'] ?></td>
                                                        <td><?php echo $span ?></td>
                                                        <td><?php echo $report[$x]['time'] ?></td>
                                                    </tr><?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--<div class="box-footer clearfix">
                                <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Activity</a>
                            </div>-->
                            </div>
                            <div class="box box-info"><div id="activity">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Latest Admin Activity</h3>

                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Keterangan</th>
                                                        <th>Waktu</th>
                                                        <th>IP</th>
                                                        <th>Browser</th>
                                                        <th>Platform</th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php $jum = count($activity);
                                                for ($i = 0; $i < $jum; $i++) {
                                                    ?>
                                                        <tr><td><a href="#"><?php echo $activity[$i]['nama_lengkap'] ?></a></td>
                                                            <td><?php echo $activity[$i]['keterangan'] ?></td>
                                                            <td><?php echo $activity[$i]['time'] ?></td>
                                                            <td><?php echo $activity[$i]['ip_address'] ?></td>
                                                            <td><?php echo $activity[$i]['browser'] ?></td>
                                                            <td><?php echo $activity[$i]['platform'] ?></td>
                                                        </tr><?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--<div class="box-footer clearfix">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Activity</a>
                                </div>-->
                                </div> </div>


                            <div hidden class="col-md-8">
                                <p class="text-center">
                                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                </p>
                                <div hidden class="chart">
                                    <!-- Sales Chart Canvas -->
                                    <canvas hidden id="salesChart" style="height: 180px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="col-lg-5 connectedSortable">
                        <div class="box box-default">

                            <div class="box-header with-border">
                                <h3 class="box-title">Provider Usage</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="chart-responsive">
                                            <canvas id="pieChart" height="200">
                                            </canvas>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="chart-legend">
                                            <li><i class="fa fa-circle-o text-red"></i> Telkomsel</li>
                                            <li><i class="fa fa-circle-o text-yellow"></i> Indosat Ooredoo</li>
                                            <li><i class="fa fa-circle-o text-light-blue"></i> XL</li>
                                            <li><i class="fa fa-circle-o text-gray"></i> Three</li>
                                            <li style="color:#006600 ;"><?php echo count($member); ?> TOTAL MEMBER</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">ALL SUCCESS MESSAGES</span>
                                <span class="info-box-number">2,050</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 20%"></div>
                                </div>
                  <!--                  <span class="progress-description">
                                      20% Increase in 30 Days
                                    </span>-->
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">ALL FAILED MESSAGES</span>
                                <span class="info-box-number">4,381</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>

                            </div>
                        </div>

                    </section> </section>

                <div class="clearfix"></div>
                
            </div><div class="control-sidebar-bg"></div>
     
        
        <?php echo $template['footer'] ?>
        </div>
        <?php echo $html['js']; ?>
        

        
        <script>$(function () {
                'use strict';
                var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
                var salesChart = new Chart(salesChartCanvas);
                var salesChartData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "Electronics",
                            fillColor: "rgb(210, 214, 222)",
                            strokeColor: "rgb(210, 214, 222)",
                            pointColor: "rgb(210, 214, 222)",
                            pointStrokeColor: "#c1c7d1",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgb(220,220,220)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "Digital Goods",
                            fillColor: "rgba(60,141,188,0.9)",
                            strokeColor: "rgba(60,141,188,0.8)",
                            pointColor: "#3b8bba",
                            pointStrokeColor: "rgba(60,141,188,1)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(60,141,188,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };

                var salesChartOptions = {
                    //Boolean - If we should show the scale at all
                    showScale: true,
                    //Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: false,
                    //String - Colour of the grid lines
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,
                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,
                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: true,
                    //Boolean - Whether the line is curved between points
                    bezierCurve: true,
                    //Number - Tension of the bezier curve between points
                    bezierCurveTension: 0.3,
                    //Boolean - Whether to show a dot for each point
                    pointDot: false,
                    //Number - Radius of each point dot in pixels
                    pointDotRadius: 4,
                    //Number - Pixel width of point dot stroke
                    pointDotStrokeWidth: 1,
                    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                    pointHitDetectionRadius: 20,
                    //Boolean - Whether to show a stroke for datasets
                    datasetStroke: true,
                    //Number - Pixel width of dataset stroke
                    datasetStrokeWidth: 2,
                    //Boolean - Whether to fill the dataset with a color
                    datasetFill: true,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
                    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                    maintainAspectRatio: true,
                    //Boolean - whether to make the chart responsive to window resizing
                    responsive: true
                };

                salesChart.Line(salesChartData, salesChartOptions);

                var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
                var pieChart = new Chart(pieChartCanvas);
                var PieData = [
                    {
                        value: <?php echo count($member); ?>,
                        color: "#f56954",
                        highlight: "#f56954",
                        label: "Telkomsel"
                    },
                    {
                        value: <?php echo count($member); ?>,
                        color: "#f39c12",
                        highlight: "#f39c12",
                        label: "Indosat Ooredoo"
                    },
                    {
                        value: <?php echo count($member); ?>,
                        color: "#3c8dbc",
                        highlight: "#3c8dbc",
                        label: "XL"
                    },
                    {
                        value: <?php echo count($member); ?>,
                        color: "#d2d6de",
                        highlight: "#d2d6de",
                        label: "Three"
                    }
                ];
                var pieOptions = {
                    //Boolean - Whether we should show a stroke on each segment
                    segmentShowStroke: true,
                    //String - The colour of each segment stroke
                    segmentStrokeColor: "#fff",
                    //Number - The width of each segment stroke
                    segmentStrokeWidth: 1,
                    //Number - The percentage of the chart that we cut out of the middle
                    percentageInnerCutout: 50, // This is 0 for Pie charts
                    //Number - Amount of animation steps
                    animationSteps: 100,
                    //String - Animation easing effect
                    animationEasing: "easeOutBounce",
                    //Boolean - Whether we animate the rotation of the Doughnut
                    animateRotate: true,
                    //Boolean - Whether we animate scaling the Doughnut from the centre
                    animateScale: false,
                    //Boolean - whether to make the chart responsive to window resizing
                    responsive: true,
                    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                    maintainAspectRatio: false,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
                    //String - A tooltip template
                    tooltipTemplate: "<%=value %> <%=label%> users"
                };
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
                pieChart.Doughnut(PieData, pieOptions);
                //-----------------
                //- END PIE CHART -
                //-----------------

                /* jVector Maps
                 * ------------
                 * Create a world map with markers
                 */
                $('#world-map-markers').vectorMap({
                    map: 'world_mill_en',
                    normalizeFunction: 'polynomial',
                    hoverOpacity: 0.7,
                    hoverColor: false,
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: 'rgba(210, 214, 222, 1)',
                            "fill-opacity": 1,
                            stroke: 'none',
                            "stroke-width": 0,
                            "stroke-opacity": 1
                        },
                        hover: {
                            "fill-opacity": 0.7,
                            cursor: 'pointer'
                        },
                        selected: {
                            fill: 'yellow'
                        },
                        selectedHover: {}
                    },
                    markerStyle: {
                        initial: {
                            fill: '#00a65a',
                            stroke: '#111'
                        }
                    },
                    markers: [
                        {latLng: [41.90, 12.45], name: 'Vatican City'},
                        {latLng: [43.73, 7.41], name: 'Monaco'},
                        {latLng: [-0.52, 166.93], name: 'Nauru'},
                        {latLng: [-8.51, 179.21], name: 'Tuvalu'},
                        {latLng: [43.93, 12.46], name: 'San Marino'},
                        {latLng: [47.14, 9.52], name: 'Liechtenstein'},
                        {latLng: [7.11, 171.06], name: 'Marshall Islands'},
                        {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
                        {latLng: [3.2, 73.22], name: 'Maldives'},
                        {latLng: [35.88, 14.5], name: 'Malta'},
                        {latLng: [12.05, -61.75], name: 'Grenada'},
                        {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
                        {latLng: [13.16, -59.55], name: 'Barbados'},
                        {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
                        {latLng: [-4.61, 55.45], name: 'Seychelles'},
                        {latLng: [7.35, 134.46], name: 'Palau'},
                        {latLng: [42.5, 1.51], name: 'Andorra'},
                        {latLng: [14.01, -60.98], name: 'Saint Lucia'},
                        {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
                        {latLng: [1.3, 103.8], name: 'Singapore'},
                        {latLng: [1.46, 173.03], name: 'Kiribati'},
                        {latLng: [-21.13, -175.2], name: 'Tonga'},
                        {latLng: [15.3, -61.38], name: 'Dominica'},
                        {latLng: [-20.2, 57.5], name: 'Mauritius'},
                        {latLng: [26.02, 50.55], name: 'Bahrain'},
                        {latLng: [0.33, 6.73], name: 'SÃ£o TomÃ© and PrÃ­ncipe'}
                    ]
                });

                /* SPARKLINE CHARTS
                 * ----------------
                 * Create a inline charts with spark line
                 */

                //-----------------
                //- SPARKLINE BAR -
                //-----------------
                $('.sparkbar').each(function () {
                    var $this = $(this);
                    $this.sparkline('html', {
                        type: 'bar',
                        height: $this.data('height') ? $this.data('height') : '30',
                        barColor: $this.data('color')
                    });
                });

                //-----------------
                //- SPARKLINE PIE -
                //-----------------
                $('.sparkpie').each(function () {
                    var $this = $(this);
                    $this.sparkline('html', {
                        type: 'pie',
                        height: $this.data('height') ? $this.data('height') : '90',
                        sliceColors: $this.data('color')
                    });
                });

                //------------------
                //- SPARKLINE LINE -
                //------------------
                $('.sparkline').each(function () {
                    var $this = $(this);
                    $this.sparkline('html', {
                        type: 'line',
                        height: $this.data('height') ? $this.data('height') : '90',
                        width: '100%',
                        lineColor: $this.data('linecolor'),
                        fillColor: $this.data('fillcolor'),
                        spotColor: $this.data('spotcolor')
                    });
                });
            });


        </script>
        
    </body>
</html>