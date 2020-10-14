<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation(
					array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
					)
				);

			endwhile; // End the loop.
			// ////////////////////////////////////////formulario Hoteles/////////////////////////////
			?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>INTERBOOKING | HOTELES</title>
	<link href="https://fonts.googleapis.com/css?family=Arial:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style_hoteles.css" />
	
</head>

<body>
	                    
                        <!-- Inicia grupo cabecera -->
    <div id="interbooking" class="section">
        <div class="section-center">
			<div class="container">
				<div class="row">
                    <div class="interbooking-form">
                        <form>
                            <div class="form-group">
                                <div class="form-layout">
								<img src ="img/logo.png" whit="90" height="80" > <h1> HOTELES </h1> 
                                </div>                                									
								<input class="form-control" type="text" autocomplete="on" placeholder="Indique su destino: Pais, Provincia, Ciudad, Cód.Postal ...." required>
								<span class="form-label"> </span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<input class="form-control" type="date" required>
										<span class="form-label">Llegada</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="form-control" type="date" required>
										<span class="form-label">Salida</span>
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
											<option value="" selected hidden>HABITACION</option>
											<option>Individual</option>
                                            <option>Doble</option>
                                            <option>Triple</option>
											<option>Quad</option>
											<option>King</option>
											<option>Twin</option>
											<option>Doble-Doble</option>
											<option>Mini Suite</option>
											<option>Suite</option>
                                            <option>Master Suite</option>
                                            <option>Penhouse</option>
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
								<div class="col-md-4">
									<div class="form-group">
									<select class="form-control" required>
                                            <option value="" selected hidden>Nacionalidad</option>
											<option>Argentina</option>
                                            <option>Paraguay</option>
                                            <option>Brasil</option>
											<option>Uruguay</option>                                            
                                            <option>Chile</option>
											<option>Bolivia</option>
											<option>Perú</option>
											<option>Colombia</option>
											<option>Puerto Rico</option>
                                            <option>Venezuela</option>
                                            <option>Panamá</option>
                                            <option>Guyana</option>
                                            <option>Ecuador</option>
											<option>Honduras</option>
											<option>Guatemala</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">NACIONALIDAD</span>
										<!-- <input class="form-control" type="nacionality" placeholder="Ingrese Nacionalidad del Cliente"> -->
										<!--<span class="form-label">Nacionalidad</span> -->
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<input class="form-control" type="tel/cel." placeholder="Ingrese Número de Contacto y Correo Electrónico">
										<span class="form-label">Teléfono</span>
									</div>
								</div>
                            </div>
                            <!-- Finaliza grupo medio -->


							<div class="form-btn">
								<button class="submit-btn">CHEQUEAR DISPONIBILIDAD </button>

							



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









		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
