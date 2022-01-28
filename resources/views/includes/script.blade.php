

<script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-library.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/themefunction.js')}}"></script>

<script src="{{asset('assets/js/highcharts.js')}}"></script>
<script src="{{asset('assets/js/themefunction.js')}}"></script>
<script type="text/javascript">
    Highcharts.chart('at-balancechart', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: ''
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 150,
            y: 100,
            floating: true,
            borderWidth: 0,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FE910E'
        },
        xAxis: {
            categories: [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'Sunday'
            ],
            plotBands: [{ // visualize the weekend
                from: 4.5,
                to: 6.5,
                color: '#FE910E'
            }]
        },
        yAxis: {
            title: {
                text: ''
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: ' units'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 1
            }
        },
        series: [{
            name: '',
            data: [1, 3, 4, 3, 3, 5, 4]
        }]
    });
</script>
