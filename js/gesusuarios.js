$.post(baseurl + "cgesusuarios/getPerfiles", {

		estperf: 1,

	},
	function(data) {
		var c = JSON.parse(data);
		$.each(c, function(i, item) {
			$('#cboperfil').append('<option value="' + item.codperf + '">' + item.desperf + '</option>');
		});
	});
