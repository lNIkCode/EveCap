$.post(baseurl + "cregpersonas/getEventos", {
		esteve: 1
	},
	function(data) {
		var c = JSON.parse(data);
		$.each(c, function(i, item) {
			$('#cboevento').append('<option value="' + item.codeve + '">' + item.nomeve + '</option>');
		});
	});


$('#cboevento').change(function() {
	$('#cboevento option:selected').each(function() {
		var id = $('#cboevento').val();
		$('#cbosubevento').html(
			'<select id="cbosubevento" class="form-control">' +
			'<option value="">Eliga Sub Evento</option>' +
			'</select>')
		$.post(baseurl + "cregpersonas/getSubEventos", {
				codeve: id
			},
			function(data) {
				var s = JSON.parse(data);
				$.each(s, function(i, item) {
					$('#cbosubevento').append('<option value="' + item.codsubeve + '">' + item.nomsubeve + '</option>');
				});
			});
	});
});

$('#tblAsistencia').DataTable({
	"lengthMenu": [[5, 10, 15, 20,], [5, 10, 15, 20]],
'paging': true,
	'info': true,
	'filter': true,
	'stateSave': true,
	'ajax': {
        "url":baseurl+"cregpersonas/getAsistencias/",
        "type":"POST",
				 dataSrc: ''
			},
			'columns': [
				{data: "rownum",'sClass':'dt-body-center'},
			  {data: "dniper"},
			  {data: "nomper"},
			  {data: "appper"},
			  {data: "apmper"},
			  {data: "nomsubeve"},
			  {data: "horasis"}
		],
				"order": [[ 0, "asc" ]]
});

/*
$('#tblAsistencia').DataTable({
  "lengthMenu": [[5, 10, 15, 20,], [5, 10, 15, 20]],
	'paging': true,
	'info': true,
	'filter': true,
	'stateSave': true,

 'processing': true,
 'serverSide': true,
 'ajax': {
        "url":baseurl+"cregpersonas/getAsistencias/",
        "type":"POST",
},
'colums': [
	{"data": "rownum",'sClass':'dt-body-center'},
  {"data": "dniper"},
  {"data": "nomper"},
  {"data": "appper"},
  {"data": "apmper"},
  {"data": "nomsubeve"},
  {"data": "horasis"}
],
"order": [[0, "asc"]]
});
*/
