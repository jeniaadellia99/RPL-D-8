

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

	<div class="panel">
		<div class="panel panel-footer">
			<p align="center" style="font-family: arial; font-size: 12px">copyright &copy 2018 - Teknik Informatika - Politeknik Negeri Indramayu</p>
		</div>
	</div>
</div>

<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/chart.min.js') }} "></script>
<script src="{{ asset('assets/js/chart-data.js') }}"></script>
<script src="{{ asset('assets/js/easypiechart.js') }}"></script>
<script src="{{ asset('assets/js/easypiechart-data.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
		});
	};
</script>

@yield('js')
</body>
</html>
