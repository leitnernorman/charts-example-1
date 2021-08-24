<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Laravel 8 Highcharts Demo</title>
</head>

<body>
<!-- <div class="buttons">
  <button id="uncertified" class="active">
  Uncertified/Conventional
  </button>
  <button id="traceable">
  Fully/partially traceable
  </button>
  <button id="certified">
  Certified green
  </button>
</div>-->
<div id="container1" style="display:none;"></div>

<figure class="highcharts-figure">
  <div id="container"></div>
  <!-- <p class="highcharts-description">
    A variation of a 3D pie chart with an inner radius added.
    These charts are often referred to as donut charts.
  </p> -->
</figure>
<figure class="highcharts-figure">
  <div id="container3"></div>
</figure>
<figure class="highcharts-figure">
  <div id="container4"></div>
</figure>
<div id="container2"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
    var userData = <?php echo json_encode($userData)?>;
    Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Largest palm oil handling companies'
    },
    subtitle: {
        text: 'Source: data.js :)'
    },
    xAxis: {
        categories: [
        'Wilmar',
        'GAR',
        'Sime Darby Plantation',
        'IOI',
        'KLK',
        'Bunge',
        'Unilever',
        'Savola Group',
        'P&G',
        'Nestle',
        'Kao',
        'RB',
        'Yum! Brands',
        'Colgate',
        'Mondelez',
        'Nissin Foods',
        'Rest of buyers'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
        text: 'Pailm oil buy/produce (ton)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y:.1f} ton</b></td></tr>',
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
        name: 'Uncertified/Conventional',
        data: [23246764, 7615904, 1201485, 1387979, 836294, 893688, 326180, 538766, 281104, 219647, 323900, 159728, 10241, 42745, 5781, 91106, 353625]

    }, {
        name: 'Fully/partially traceable',
        data: [1053236, 431575, 2037439, 536104, 249596, 166312, 698641, 33019, 182191, 130617, 87500, 12700, 52583, 67490, 4409, 22903, 827093]

    }, {
        name: 'Certified green',
        data: [0, 0, 0, 20326, 114667, 0, 13356, 0, 0, 75250, 10000, 0, 94952, 28255, 280127, 0, 363497]

    }]
    });

    Highcharts.chart('container1', {
        title: {
            text: 'New User Growth, 2020'
        },
        subtitle: {
            text: 'Source: positronx.io'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

    Highcharts.chart('container', {
  chart: {
    type: 'pie',
    options3d: {
      enabled: true,
      alpha: 45
    }
  },
  title: {
    text: 'Uncertified/Conventional palm oil production/buy'
  },
  subtitle: {
    text: 'Source: data.js :)'
  },
  plotOptions: {
    pie: {
      innerSize: 100,
      depth: 45
    }
  },
  series: [{
    name: 'Palm oil handling in ton',
    data: [
      ['Wilmar', 23246764],
      ['GAR', 7615904],
      ['Sime Darby Plantation', 1201485],
      ['IOI', 1387979],
      ['KLK', 836294],
      ['Bunge', 893688],
      ['Unilever', 326180],
      ['Savola Group', 538766],
      ['P&G', 281104],
      ['Nestle', 219647],
      ['Kao', 323900],
      ['RB', 159728],
      ['Yum! Brands', 10241],
      ['Colgate', 42745],
      ['Mondelez', 5781],
      ['Nissin Foods', 91106],
      ['Rest of buyers', 353625]
    ]
  }]
});

Highcharts.chart('container3', {
  chart: {
    type: 'pie',
    options3d: {
      enabled: true,
      alpha: 45
    }
  },
  title: {
    text: 'Fully/partially traceable palm oil production/buy'
  },
  subtitle: {
    text: 'Source: data.js :)'
  },
  plotOptions: {
    pie: {
      innerSize: 100,
      depth: 45
    }
  },
  series: [{
    name: 'Palm oil handling in ton',
    data: [
      ['Wilmar', 1053236],
      ['GAR', 431575],
      ['Sime Darby Plantation', 2037439],
      ['IOI', 536104],
      ['KLK', 249596],
      ['Bunge', 166312],
      ['Unilever', 698641],
      ['Savola Group', 33019],
      ['P&G', 182191],
      ['Nestle', 130617],
      ['Kao', 87500],
      ['RB', 12700],
      ['Yum! Brands', 52583],
      ['Colgate', 67490],
      ['Mondelez', 4409],
      ['Nissin Foods', 22903],
      ['Rest of buyers', 827093]
    ]
  }]
});

Highcharts.chart('container4', {
  chart: {
    type: 'pie',
    options3d: {
      enabled: true,
      alpha: 45
    }
  },
  title: {
    text: 'Certified green palm oil production/buy'
  },
  subtitle: {
    text: 'Source: data.js :)'
  },
  plotOptions: {
    pie: {
      innerSize: 100,
      depth: 45
    }
  },
  series: [{
    name: 'Palm oil handling in ton',
    data: [
      ['Wilmar', 0],
      ['GAR', 0],
      ['Sime Darby Plantation', 0],
      ['IOI', 20326],
      ['KLK', 114667],
      ['Bunge', 0],
      ['Unilever', 13356],
      ['Savola Group', 0],
      ['P&G', 0],
      ['Nestle', 75250],
      ['Kao', 10000],
      ['RB', 0],
      ['Yum! Brands', 94952],
      ['Colgate', 28255],
      ['Mondelez', 280127],
      ['Nissin Foods', 0],
      ['Rest of buyers', 363497]
    ]
  }]
});
</script>

</html>