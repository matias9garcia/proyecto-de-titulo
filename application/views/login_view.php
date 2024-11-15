
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <?php $this->load->view("componentes/Bootstrap_view");?>

        <?php $this->load->view("componentes/jQuery_view");?>

    <title>Encuesta de Estrategias Motivacionales y de Aprendizaje</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			
			<div class="col-md-4">
				<div class="card" style="margin-top: 30px">
					<div class="card-header text-center">
						Encuesta de Psicoanálisis Educativo
					</div>
					  
            		<div class="card-body">
						<form id="formulario_login" method="post" autocomplete="off" action="<?=base_url('login')?>">
						
						<div	class="mb-3 form-group" 
								id="form_group_rut" >

						    <label	for="login_rut" 
									class="form-label">RUT</label>

						    <input	type="text"  
									class="form-control" 
									placeholder="Ingresar RUT" 
									name="login_rut"
									id="login_rut">

                			<div class="invalid-feedback"></div>
						</div>
						
						<div	class="mb-3 form-group"
								id="form_group_contrasena">

						    <label	for="login_contrasena"
									class="form-label">Contraseña</label>

						    <input	type="password"
									id="login_contrasena"
									class="form-control"
									placeholder="Ingresar contraseña"
									name="login_contrasena">
							
							<div class="invalid-feedback"></div>
						</div>

						<div class="text-center form-group">
						    <button	type="botonSubmitLogin"
									class="btn btn-primary">Ingresar</button>
  						</div>

						</form>

						<div	class="form-group"
								id="mensajeDeAlerta">

						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-4"></div>

		</div>
	</div>
	

	
	<script>

		$("#formulario_login").submit(function (ev) {


	$("#mensajeDeAlerta").html("");
	
	$.ajax({
		url: "login",
		type: "post",

		data: $(this).serialize(),
		success: function (err) {
			var json = JSON.parse(err);
			//console.log(json);
			
			alert(json.url);
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
	});
	ev.preventDefault();
	});



	</script>
	
	<script src="<?= base_url('assets/cleave.min.js');?>"></script>
	<script>
//new Cleave("#login_rut",{delimiters:[".",".","-"],blocks:[2,3,3,1],uppercase:!0});
	</script>

</body>

</html>