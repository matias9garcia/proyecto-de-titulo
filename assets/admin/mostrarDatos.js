$("document").ready(function (ev) {

	$.ajax({
		url: "Login_controller/validarLogin",
		type: "post",
		data: $(this).serialize(),
		success: function (err) {
			var json = JSON.parse(err);
			//console.log(json);
			window.location.replace(json.url);
		},
		statusCode: {
			400: function (xhr) {
				var json = JSON.parse(xhr.responseText);

				$("#form_group_rut > input").removeClass("is-invalid");
				$("#form_group_contrasena > input").removeClass("is-invalid");

				console.log(json);
				if (json.login_rut.length != 0) {
					$("#form_group_rut > div").html(json.login_rut);
					$("#form_group_rut > input").addClass("is-invalid");
				}

				if (json.login_contrasena.length != 0) {
					$("#form_group_contrasena > div").html(json.login_contrasena);
					$("#form_group_contrasena > input").addClass("is-invalid");
				}
			},

			401: function (xhr) {
				var json = JSON.parse(xhr.responseText);

				console.log(json);

				$("#mensajeDeAlerta").html(
					'<div class="alert alert-warning">' +
						json.mensajeDeCredeciales +
						"</div>"
				);
			},
		},

		/*error: function (xhr) {
			
			if (xhr.status == 400) {
				var json = JSON.parse(xhr.responseText);

				$("#form_group_rut > input").removeClass("is-invalid");
				$("#form_group_contrasena > input").removeClass("is-invalid");

				console.log(json);
				if (json.login_rut.length != 0) {
					$("#form_group_rut > div").html(json.login_rut);
					$("#form_group_rut > input").addClass("is-invalid");
				}

				if (json.login_contrasena.length != 0) {
					$("#form_group_contrasena > div").html(json.login_contrasena);
					$("#form_group_contrasena > input").addClass("is-invalid");
				}
			}else if(xhr.status == 401){
				var json = JSON.parse(xhr.responseText);


				console.log(json);
			}
			//
		},*/
	});
	ev.preventDefault();
});
