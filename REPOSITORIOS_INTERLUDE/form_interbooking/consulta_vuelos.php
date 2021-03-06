<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>INTERBOOKING | VUELOS</title>
	<link href="https://fonts.googleapis.com/css?family=ArialRaleway:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="wp-content/themes/twentyseventeen/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="wp-content/themes/twentyseventeen/style_2.css" />
	
</head>

<body>
                        
                        <!-- Inicia grupo cabecera -->
    <div id="booking" class="section">
        <div class="section-center">
			<div class="container">
				<div class="row">
                    <div class="booking-vuelos">
                        <form>
                            <div class="form-group">
                                <div class="form-header">
								<img src ="img/logo.png" whit="90" height="80" > <h1> VUELOS </h1>
                                </div>
                                 <input class="form-control" type="text" autocomplete="on" placeholder="Indique su destino: Pais, Provincia, Ciudad, Cód.Postal ....">
								<span class="form-label"> </span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<input class="form-control" type="date" required>
										<span class="form-label">Ida</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="form-control" type="date" required>
										<span class="form-label">Vuelta</span>
									</div>
                                </div>
                                <div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
                                            <option value="" selected hidden>DIAS</option>
											<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
											<option>4</option>                                            
                                            <option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
											<option>14</option>
											<option>15</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">DIAS DE ESTADIA</span>
									</div>
                                </div>
                                
                                <!-- Finaliza grupo cabecera -->
							</div>
                            <div class="row">
                                <div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>CATERGORIAS</option>
											<option>Vuelos regulares</option>
                                            <option>Charter</option>
                                            <option>Low Cost</option>
											<option>Directo-non stop</option>
											<option>Directo</option>
											<option>One Way</option>
											<option>Largo Recorrido</option>
											<option>Intercontinentales</option>
											<option>De Cabotaje</option>
											                                       
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Habitaciones</span>
									</div>
                                </div>
								<div class="col-md-3">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>ADULTOS</option>
											<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>											
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adultos</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>MENORES</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Menores</span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>BEBE</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
											
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">BEBE</span>
									</div>
								</div>
                            </div>
                            <!-- Inicia grupo medio -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Ingrese EMAIL del Cliente">
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel/cel." placeholder="Ingrese Número de Contacto">
										<span class="form-label">Teléfono</span>
									</div>
								</div>
                            </div>
                            <!-- Finaliza grupo medio -->


							<div class="form-btn">
								<button class="submit-btn">BUSCAR VUELOS </button>
								

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body>

</html>