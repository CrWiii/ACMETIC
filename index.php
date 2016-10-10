<?php 
    require 'DAO/Testing.php';
    ///var_dump($AccidentesPorUbigeo);
    //print_r($AU);

    //var CD = JSON.stringify(print_r($AU)); console.log(CD);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROTECTA | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="plugins/AdminLTE/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/AdminLTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/AdminLTE/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/AdminLTE/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/AdminLTE/plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/AdminLTE/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script src="plugins/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!--<script src="https://code.highcharts.com/maps/highmaps.js"></script>-->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <!--<script src="https://code.highcharts.com/mapdata/countries/pe/pe-all.js"></script>-->

    <script>
        $(function () {
    $('#BARCC').highcharts({
        chart: {
            type: "column", inverted: true,//'bar'
        },
        title: {
            text: 'RANGO DE FECHA: Desde:01/01/2016  Hasta:10/10/2016'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: <?=($CCMDresultCM)?>,
            tickInterval: 1,
            minorTickInterval: 1,
            title: {
                text: null
            },
            //maxPadding: 0.02,
            lineWidth: 1,
            tickWidth: 1,
            offset: 1
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidades de Casos',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Casos'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -80,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Centros Medicos',
            data: <?=($CCMDresultCC)?>
        }]
    });
});


    </script>
        
    <script>
        $(function () {
    $('#CCGPCM').highcharts({
        chart: {
            type: "column", //inverted: true, 'bar'
        },
        title: {
            text: 'RANGO DE FECHA: Desde:01/01/2016  Hasta:10/10/2016'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: <?=($CCGPCMresultCM)?>,
            tickInterval: 1,
            minorTickInterval: 1,
            title: {
                text: null
            },
            //maxPadding: 0.02,
            lineWidth: 1,
            tickWidth: 1,
            offset: 1
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidades de Casos',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>S/. {point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -80,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Total Cartas',
            data: <?=($CCGPCMresultCC)?>
        }]
    });
});

    </script>

    <script>
        $(function () {
    $('#CCPCMT').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'RANGO DE FECHA: Desde:01/01/2016  Hasta:10/10/2016'
        },
        xAxis: {
            categories: <?=($CCMDresultCM)?>
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        legend: {
            reversed: true
        },
        series: [{
            name: 'Centro Medicos',
            data: <?=($CCMDresultCC)?>
        }]
    });
});

    </script>

    <script>
        $(function () {
    $('#CIR').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Contents of Highsoft\'s weekly fruit delivery'
        },
        subtitle: {
            text: '3D donut in Highcharts'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Delivered amount',
            data: [
                ['Bananas', 8],
                ['Kiwi', 3],
                ['Mixed nuts', 1],
                ['Oranges', 6],
                ['Apples', 8],
                ['Pears', 4],
                ['Clementines', 4],
                ['Reddish (bag)', 1],
                ['Grapes (bunch)', 1]
            ]
        }]
    });
});


    </script>
    <script>
       //var DD = <?=($AU)?>;
       //var CD = JSON.stringify(DD);
       //console.log(CD);

       //var CCMDresult = JSON.stringify(<?=($CCMDresultCC)?>);
       //console.log(CCMDresultCC);
   </script>
    <script>
    /*
    $(function () {
    var data = [
        {"hc-key": "pe-ic","value": 0},
        {"hc-key": "pe-cs","value": 1},
        {"hc-key": "pe-uc","value": 2},
        {"hc-key": "pe-md","value": 3},
        {"hc-key": "pe-sm","value": 4},
        {"hc-key": "pe-am","value": 5},
        {"hc-key": "pe-lo","value": 6},
        {"hc-key": "pe-ay","value": 7},
        {"hc-key": "pe-145","value": 8},
        {"hc-key": "pe-hv","value": 9},
        {"hc-key": "pe-ju","value": 10},
        {"hc-key": "pe-lr","value": 11},
        {"hc-key": "pe-lb","value": 12},
        {"hc-key": "pe-tu","value": 13},
        {"hc-key": "pe-ap","value": 14},
        {"hc-key": "pe-ar","value": 15},
        {"hc-key": "pe-cl","value": 16},
        {"hc-key": "pe-mq","value": 17},
        {"hc-key": "pe-ta","value": 18},
        {"hc-key": "pe-an","value": 19},
        {"hc-key": "pe-cj","value": 20},
        {"hc-key": "pe-hc","value": 21},
        {"hc-key": "pe-3341","value": 22},
        {"hc-key": "pe-ll","value": 23},
        {"hc-key": "pe-pa","value": 24},
        {"hc-key": "pe-pi","value": 25}
    ];
    $('#CCPU').highcharts('Map', {
        title : {
            text : ''
        },
        subtitle : {
            text : 'Perú'
        },
        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },
        colorAxis: {
            min: 0
        },
        series : [{
            data : data,
            mapData: Highcharts.maps['countries/pe/pe-all'],
            joinBy: 'hc-key',
            name: 'Random data',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }]
    });
});*/
</script>
<script type="text/javascript">

    $(function () {
    $('#CCPCM').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Stacked bar chart'
        },
        xAxis: {
            categories: <?=($CCMDresultCM)?>
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total fruit consumption'
            }
        },
        legend: {
            reversed: true
        },
        series: [{
            name: 'Centro Medicos',
            data: <?=($CCMDresultCC)?>
        }]
    });
});

</script>
<script type="text/javascript">
$(function () {
    // Set up the chart
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'CAPCM',
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: <?=($CCPUresultCM)?>
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        series: [{
            data: <?=$CCPUresultCC?>
        }]
    });

    function showValues() {
        $('#alpha-value').html(chart.options.chart.options3d.alpha);
        $('#beta-value').html(chart.options.chart.options3d.beta);
        $('#depth-value').html(chart.options.chart.options3d.depth);
    }

    // Activate the sliders
    $('#sliders input').on('input change', function () {
        chart.options.chart.options3d[this.id] = this.value;
        showValues();
        chart.redraw(false);
    });

    showValues();
});
    </script>
<script type="text/javascript">
$(function () {
    $('#ACCT').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Importes Totales Carta Garantia '
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>S/. {point.y:.1f}0 </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'CLINICA INTERNACIONAL',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'CLINICA SAN BERNARDO',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'HOSPITAL DE VENTANILLA',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'CLINICA LA MERCED ',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }, {
            name: 'CLINICA JESUS DEL NORTE',
            data: [75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1,42.4, 33.2, 34.5, 39.7, 52.6]

        }, {
            name: 'CLINICA MACSALUD - CUSCO',
            data: [47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2,48.9, 38.8, 39.3, 41.4]

        },{
            name: 'HOSPITAL GOYENECHE - AREQUIPA',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'CLINICA JUAN PABLO II ',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'HOSPITAL SANTA ROSA',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'CLINICA MACSALUD - CUSCO',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }, {
            name: 'HOSPITAL MARIA AUXILIADORA',
            data: [75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1,42.4, 33.2, 34.5, 39.7, 52.6]

        }, {
            name: 'HOSPITAL GOYENECHE - AREQUIPA',
            data: [47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2,48.9, 38.8, 39.3, 41.4]

        },{
            name: 'CLINICA AREQUIPA - AREQUIPA',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'CLINICA VALLESUR',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'HOSPITAL DE PICHANAQUI - CHANCHAMAYO',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'HOSPITAL DE APOYO CAMANA - AREQUIPA',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }, {
            name: 'CLINICA MIRAFLORES - PIURA',
            data: [75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1,42.4, 33.2, 34.5, 39.7, 52.6]

        }, {
            name: 'CLINICA MIRAFLORES - PIURA',
            data: [47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2,48.9, 38.8, 39.3, 41.4]

        }]
    });
});1
    </script>


  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
            .divid {
                height: 880px;
                min-width: 310px;
                max-width: 800px;
                margin: 0 auto;
            }
            .divid2 {
              height: 400px;
              min-width: 310px;
              max-width: 800px;
              margin: 0 auto;
            }
            .divid3 {
              height: auto;
              margin: 0 auto;
              width: auto;
              min-height: 800px;
            }
            .loading {
                margin-top: 10em;
                text-align: center;
                color: gray;
            }
        </style>
</head>
<body class="skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>TIC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ACME</b>TIC</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="plugins/AdminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="plugins/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="plugins/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PROTECTA
        <small>Dashboard</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">CANTIDAD DE CASOS POR CENTRO MEDICO</h3>
            </div>
            <div class="box-body">
              <div id="" style="height: 100%; width: 100%;">
                    <div id="BARCC" class="divid3"></div>
              </div>
            </div>
          </div>
        </section>

          <section class="col-lg-12 connectedSortable">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">CANTIDAD DE CASOS POR CENTRO MEDICO</h3>
            </div>
            <div class="box-body">
              <div id="" style="height: 100%; width: 100%;">
                    <div id="CCPCMT" class="divid3"></div>
              </div>
            </div>
          </div>
        </section>

        <section class="col-lg-12 connectedSortable">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">CANTIDAD DE CARTAS GENERADAS EN S/. POR CENTRO MEDICO</h3>
            </div>
            <div class="box-body">
              <div id="" style="height: 100%; width: 100%;">
                    <div id="CCGPCM" class="divid3"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="col-lg-6 connectedSortable">
             <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">CANTIDAD DE CASOS POR CENTRO MEDICO</h3>
            </div>
            <div class="box-body">
              <div id="" style="height: 100%; width: 100%;">
                    <div id="CCPCM" class="divid2"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="col-lg-6 connectedSortable">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">CANTIDAD DE CASOS POR UBIGEO</h3>
            </div>
            <div class="box-body">
              <div id="" style="height: 100%; width: 100%;">
                    <div id="CAPCM" class="divid2"></div>
              </div>
            </div>
          </div>
       

        </section>

        <section class="col-lg-12 connectedSortable">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">IMPIRTES TOTALES CARTAS GARANTIA POR CENTRO MEDICO</h3>
            </div>
            <div class="box-body">
              <div id="" style="height: 100%; width: 100%;">
                    <div id="ACCT" class="divid3"></div>
              </div>
            </div>
          </div>
        </section>

        <section class="col-lg-12 connectedSortable">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">IMPIRTES TOTALES CARTAS GARANTIA POR CENTRO MEDICO</h3>
            </div>
            <div class="box-body">
              <div id="" style="height: 100%; width: 100%;">
                    <div id="PEFD" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
              </div>
            </div>
          </div>
        </section>
      </div>
      </section>

  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://www.acmetic.com.pe">ACMETIC</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>

<script>$.widget.bridge('uibutton', $.ui.button);</script>
<script src="plugins/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/AdminLTE/plugins/morris/morris.min.js"></script>
<script src="plugins/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="plugins/AdminLTE/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="plugins/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/AdminLTE/plugins/fastclick/fastclick.js"></script>
<script src="plugins/AdminLTE/dist/js/app.min.js"></script>
<script src="plugins/AdminLTE/dist/js/pages/dashboard.js"></script>
<script src="plugins/AdminLTE/dist/js/demo.js"></script>

</body>
</html>
