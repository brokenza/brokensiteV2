/*
Template Name: ADMETRO - Responsive Admin Template Built with Bootstrap 4
Version: 1.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/admetro-v1.0/
*/

var lineChart, map, chartData, mapData;

var hanldePageViewChart = function() {
	Chart.defaults.global.defaultFontFamily = '"Open Sans",sans-serif';
	Chart.defaults.global.defaultFontColor = '#333';
	Chart.defaults.global.tooltips.xPadding = 8;
	Chart.defaults.global.tooltips.yPadding = 8;
	Chart.defaults.global.tooltips.multiKeyBackground = 'transparent';
	var ctx = document.getElementById('page-view-chart');
	var chartLabels = [
		'-30 min', '', '-29 min', '', '-28 min', '', '-27 min', '', '-26 min', '', 
		'-25 min', '', '-24 min', '', '-23 min', '', '-22 min', '', '-21 min', '', 
		'-20 min', '', '-19 min', '', '-18 min', '', '-17 min', '', '-16 min', '', 
		'-15 min', '', '-14 min', '', '-13 min', '', '-12 min', '', '-11 min', '',
		'-10 min', '', '-9 min', '', '-28 min', '', '-7 min', '', '-6 min', '', 
		'-5 min', '', '-4 min', '', '-3 min', '', '-2 min', '', '-1 min'
	];
	chartData = [
		2,10,4,2,4,5,6,2,5,8,
		5,3,9,10,9,6,4,0,2,5,
		1,2,5,6,8,9,1,10,17,3,
		2,10,4,2,4,5,6,2,5,8,
		5,3,9,10,9,6,4,0,2,5,
		1,2,5,6,8,9,1,10,17
	];
	var chartOptions = {
		maintainAspectRatio: false,
		elements: {
			line: {
				tension: 0
			}
		},
		legend: {
			display: false
		},
		scales: {
			xAxes: [{
				ticks: {
					maxTicksLimit: 8,
					maxRotation: 0
				},
				gridLines: {
					display: true
				}
			}],
			yAxes: [{
				ticks: {
					beginAtZero:false,
					maxTicksLimit: 4
				}
			}]
		}
	};
	
	lineChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: chartLabels,
			datasets: [{
				color: PRIMARY_COLOR,
				backgroundColor: PRIMARY_TRANSPARENT_8_COLOR,
				borderWidth: 0,
				label: 'Total Page Views',
				data: chartData
			}]
		},
		options: chartOptions
	});
};

var handleRandomMapData = function() {
	var markersData = [
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
		{latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
	];
	var mapData = [];
			mapData.mapData = [];
			mapData.mapMarkers = [];
	var mapDataCount = Math.floor((Math.random() * 31));
	for (var i = 0; i <= mapDataCount; i++) {
		mapData.mapData[i] = Math.floor((Math.random() * 100) + 1);
		mapData.mapMarkers[i] = markersData[i];
	}
	return mapData;
};

var handleLocationMap = function() {
	data = handleRandomMapData();
	mapData = data.mapData;
	mapMarkers = data.mapMarkers;
	
	$('#world-map').empty();
	$('.jvectormap-tip').remove();
	map = $('#world-map').vectorMap({
		map: 'world_mill_en',
		normalizeFunction: 'polynomial',
		hoverOpacity: 0.75,
		hoverColor: false,
		panOnDrag: false,
		zoomOnScroll: false,
		backgroundColor: WHITE_COLOR,
		markerStyle: {
			initial: {
				fill: PINK_COLOR,
				stroke: 'transparent'
			}
		},
		focusOn: {
			x: 0.5,
			y: 0.5,
			scale: 1
		},
		regionStyle: {
			initial: {
				fill: MUTED_TRANSPARENT_8_COLOR,
				"fill-opacity": 1,
				stroke: 'none',
				"stroke-width": 0,
				"stroke-opacity": 0
			},
			hover: {
				"fill-opacity": 0.5
			}
		},
		series: {
			markers: [{
				attribute: 'r',
				scale: [5, 15],
				values: mapData
			}]
		},
		markers: mapMarkers,
		onMarkerTipShow: function(event, label, index){
			label.html(
			  '<div style="margin-bottom: -2px;"><b>'+ $(label).text() +'</b></div>'+
			  '<div class="f-s-11">Active Users: '+ mapData[index] +'</div>'
			);
		}
	});
};

var handleUpdatePageData = function() {
	setInterval(function() {
		// update page active user
		var targetNo = Math.round((Math.random() * 10) + 5);
		var targetDesktopUser = Math.round((Math.random() * 10) + 50);
		var targetMobileUser = Math.round((Math.random() * 10) + 20);
		var targetTabletUser = 100 - targetDesktopUser - targetMobileUser;
		$('[data-id="active-user"]').html(targetNo);
		$('[data-id="desktop-user"]').html(targetDesktopUser +'%').css('width', targetDesktopUser +'%');
		$('[data-id="mobile-user"]').html(targetMobileUser +'%').css('width', targetMobileUser +'%');
		$('[data-id="tablet-user"]').html(targetTabletUser +'%').css('width', targetTabletUser +'%');
		
		// update line chart
		var newChartData = Math.round((Math.random() * 10) + 5);
		chartData.splice(0,1);
		chartData.push(newChartData);
		lineChart.update();
		
		// update table value
		$('.table tbody').each(function() {
			var targetTable = $(this).closest('.table');
			var targetNo =  Math.round((Math.random() * $(this).find('tr').length)) - 1;
			var targetRow = $(this).find('tr').eq(targetNo);
			var newValue = Math.round((Math.random() * 20));
			var currentValue = parseInt($(targetRow).find('[data-col="value"]').html());
			var targetClass = 'table-warning';
			var tableClass = 'table-td-bg-animate';
			
			if (newValue > currentValue) {
				targetClass = 'table-success';
			}
			
			$(targetTable).addClass(tableClass);
			$(targetRow).addClass(targetClass);
			$(targetRow).find('[data-col="value"]').html(newValue);
			setTimeout(function() {
				$(targetRow).removeClass(targetClass);
				$(targetTable).removeClass(tableClass);
			}, 800);
		});
		
		// render map
		handleLocationMap();
	}, 3000);
};

/* Controller
------------------------------------------------ */
$(document).ready(function() {
	hanldePageViewChart();
	handleLocationMap();
	handleUpdatePageData();
});