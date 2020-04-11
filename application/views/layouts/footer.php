<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/') ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/') ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url('assets/') ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url('assets/') ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/') ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url('assets/') ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assets/') ?>bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url('assets/') ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url('assets/') ?>plugins/iCheck/icheck.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
<script src="<?= base_url('assets/') ?>dist/js/script.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="<?php echo base_url('assets/plugins/chart/Chart.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/chart/raphael-min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/chart/morris.min.js')?>"></script>

<script>

Morris.Bar({
  element: 'graph',
  data: <?php echo $chart;?>,
  xkey: 'tanggal_pesan',
  ykeys: ['jml'],
  labels: ['Jumlah Pesanan']
});
</script>
<!--Tambah Date Picker!-->
<script>
	//Date picker
	$('#datepicker').datepicker({
		startDate: new Date()
	});
</script>
</body>

</html>
