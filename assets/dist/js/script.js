//function ajax
$(function() {
	$(".tampilUbah").on("click", function() {
		// $("#modalLable").html("Edit User");
		// $(".modal-footer  button[type=submit]").html("Edit User");
		// $(".custom-modal-text form").attr('action', "user/update");

		const id = $(this).data("id");

		$.ajax({
			url: "pesanan/get_edit_pesanan",
			data: { id: id },
			method: "POST",
			dataType: "json",

			success: function(data) {
				$("#kode_order").val(data.kode_order);
				$("#id_costumer").val(data.id_costumer);
				$("#id_pegawai").val(data.id_pegawai);
				$("#id_produk").val(data.id_produk);
				$("#durasi_pemesanan").val(data.durasi_pemesanan);
				$("#jenis_kain").val(data.jenis_kain);
				$("#warna").val(data.warna);
				$("#xs_pendek").val(data.ukuran_xs_pendek);
				$("#xs_panjang").val(data.ukuran_xs_panjang);
				$("#s_pendek").val(data.ukuran_s_pendek);
				$("#s_panjang").val(data.ukuran_s_panjang);
				$("#l_pendek").val(data.ukuran_l_pendek);
				$("#l_panjang").val(data.ukuran_l_panjang);
				$("#xxxl_pendek").val(data.ukuran_xxxl_pendek);
				$("#xxxl_panjang").val(data.ukuran_xxxl_panjang);
				$("#xxl_pendek").val(data.ukuran_xxl_pendek);
				$("#xxl_panjang").val(data.ukuran_xxl_panjang);
				$("#xl_pendek").val(data.ukuran_xl_pendek);
				$("#xl_panjang").val(data.ukuran_xl_panjang);
				$("#m_pendek").val(data.ukuran_m_pendek);
				$("#m_panjang").val(data.ukuran_m_panjang);
				$("#jumbo_pendek").val(data.ukuran_jumbo_pendek);
				$("#jumbo_panjang").val(data.ukuran_jumbo_panjang);
				$("#status").val(data.status);
				$("#keterangan").val(data.keterangan);
				$("#id").val(data.id);
				console.log(data);
			}
		});
	});
});

$(function() {
	// if ($(this).html() == "") {
	// .find('option').each(function()
	$("#produk").change(function() {
		$(".selected")
			.hide(500)
			.prop("disabled", true);
		$(
			"#" +
				$(this)
					.find("option:selected")
					.attr("name")
		).show(1000);
	});
});

$(function() {
	$("#example1").DataTable();
	$("#example2").DataTable({
		paging: true,
		lengthChange: false,
		searching: false,
		ordering: true,
		info: true,
		autoWidth: false
	});
});
$(function() {
	//Initialize Select2 Elements
	$(".select2").select2();

	//Datemask dd/mm/yyyy
	$("#datemask").inputmask("dd/mm/yyyy", { placeholder: "dd/mm/yyyy" });
	//Datemask2 mm/dd/yyyy
	$("#datemask2").inputmask("mm/dd/yyyy", { placeholder: "mm/dd/yyyy" });
	//Money Euro
	$("[data-mask]").inputmask();

	//Date range picker
	$("#reservation").daterangepicker(function(start, end) {
		$("#reservation").html(
			start.format("MMMM D, YYYY") + " to " + end.format("MMMM D, YYYY")
		);
	});
	//Date range picker with time picker
	$("#reservationtime").daterangepicker({
		timePicker: true,
		timePickerIncrement: 30,
		locale: { format: "MM/DD/YYYY hh:mm A" }
	});
});
