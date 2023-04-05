<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Transferencia de Dinero</title>
	<!-- Enlaces a los archivos CSS de Bootstrap y Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- Estilos personalizados -->

    
	<style>
		body {
			background-color: #212529;
			color: #fff;
			font-family: Arial, sans-serif;
			font-size: 1.2rem;
			padding-top: 50px;
		}

		.container {
			border: 1px solid #ccc;
			border-radius: 10px;
			padding: 30px;
			background-color: #fff;
			box-shadow: 0px 0px 10px #ccc;
		}

		.title {
			font-size: 2.5rem;
			margin-bottom: 30px;
			text-align: center;
		}

		.icon-container {
			position: fixed;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			z-index: -1;
		}

		.icon-container i {
			position: absolute;
			font-size: 10rem;
			opacity: 0.1;
		}

		.icon-container i.fa-dollar-sign {
			top: -100px;
			left: -200px;
		}

		.icon-container i.fa-coins {
			bottom: -100px;
			right: -200px;
		}

	</style>
</head>
<body>
	<div class="icon-container">
		<i class="fas fa-dollar-sign"></i>
		<i class="fas fa-coins"></i>
	</div>
	<div class="container">
		<div class="title">Formulario de Transferencia de Dinero</div>
		<div class="row justify-content-center">
			<div class="col-md-6">
                <form action="bdd/equals.php" method="post">
					<div class="mb-3">
						<label for="cuenta" class="form-label">ID de la cuenta:</label>
						<input type="text" class="form-control" name="cuentaa" placeholder="Id de una cuenta">
					</div>
					<div class="mb-3">
						<label for="monto" class="form-label">Monto a enviar:</label>
						<input type="text" class="form-control" name="dinero" placeholder="Ingrese la cantidad de dinero">
					</div>
					<div class="mb-3">
						<label for="destinatario" class="form-label">ID del destinatario:</label>
						<input type="text" class="form-control" name="destinatario" placeholder="Id de otra cuenta">
					</div>
					<button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Enviar</button>
				</form>
			</div>
		</div>
	</div>
	
