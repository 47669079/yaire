<?php
	include 'head_common.php';
	?>
	<div class="theme-default">
		<div id="slider" class="nivoSlider">
		<img src="<?= 'pub/images/slider/1.png'; ?>" data-thumb="<?= 'pub/images/slider/1.png'; ?>" alt="la mejor autoescuela online" data-transition="slideInLeft"/>
		<img src="<?= 'pub/images/slider/2.png'; ?>" data-thumb="<?= 'pub/images/slider/2.png'; ?>" alt="solo 1 de cada 10 personas suspende"  data-transition="slideInLeft"/>
		<img src="<?= 'pub/images/slider/3.png'; ?>" data-thumb="<?= 'pub/images/slider/3.png'; ?>" alt="nosotros resumimos los test" data-transition="slideInLeft" />
		<img src="<?= 'pub/images/slider/4.png'; ?>" data-thumb="<?= 'pub/images/slider/4.png'; ?>" alt="estudia la teorica totalmente gratis" data-transition="slideInLeft"/>
		</div>
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?= 'pub/js/jquery.nivo.slider.js'; ?>"></script>

	<script type="text/javascript">
	$(window).load(function() {
	$('#slider').nivoSlider({
	effect: 'random',
	slices: 15,
	boxCols: 8,
	boxRows: 4,
	animSpeed: 500,
	pauseTime: 10000,
	startSlide: 0,
	directionNav: true,
	controlNav: true,
	controlNavThumbs: false,
	pauseOnHover: true,
	manualAdvance: false,
	prevText: 'Prev',
	nextText: 'Next',
	randomStart: false,
	beforeChange: function(){},
	afterChange: function(){},
	slideshowEnd: function(){},
	lastSlide: function(){},
	afterLoad: function(){}
	});

	});
	</script>

<div class="container">

	<div class="grid_mobile">
		<img src="<?= 'pub/images/gratis.png'; ?>" alt="la teorica es gratis"/>
		<img src="<?= 'pub/images/facil.png'; ?>" alt="la forma mas facil de aprobar el teorico"/>
		<img src="<?= 'pub/images/dinamico.png'; ?>" alt="hecho por jovenes para jovenes"/>
	</div>

	<div class="grid">

		<figure class="effect-julia">
			<img src="<?= 'pub/images/gratis.png'; ?>" alt="la teorica es gratis"/>
			<figcaption>

				<div>
					<p>Para qué gastar el dinero en hacer test</p>
					<p>si nosotros te lo damos gratis</p>
					<p>¿a que molamos?</p>
				</div>
			</figcaption>
		</figure>

		<figure class="effect-julia">
			<img src="<?= 'pub/images/facil.png'; ?>" alt="la forma mas facil de aprobar el teorico"/>
			<figcaption>

				<div>
					<p>Test resumidos por profesores</p>
					<p>con mucho amor por y para tí</p>
				</div>
			</figcaption>
		</figure>

		<figure class="effect-julia">
			<img src="<?= 'pub/images/dinamico.png'; ?>" alt="hecho por jovenes para jovenes"/>
			<figcaption>

				<div>
					<p>Interfaz sencilla y dinámica</p>
					<p>creada por y para jóvenes</p>
				</div>
			</figcaption>
		</figure>

	</div>

	<p class="body_title">¿Aún no te hemos convencido?,<bold> esperemos que nuestros alumnos sí </bold> </p>

	<div class="opinions_container">

		<div class="opinion_container">

				<div class="opinion_top">

					<img src="<?= 'pub/images/users/selfie1.jpg'; ?>" alt="alumno de ya ire"/>

					<div>
						<label class="opinion_name">Toni Motos Fernandez </label>
						<label class="opinion_text"> ha opinado de </label>
						<label class="opinion_company"> Ya iré: </label>
						<label class="opnion_stars">4.5★</label>
					</div>

				</div>

				<label class="opinion_coment">Nunca iba a la autoescuela, con ya iré en cualquier momento puedes sacarte el carnet, ¡me encanta!</label>

		</div>

		<div class="opinion_container">

				<div class="opinion_top">

					<img src="<?= 'pub/images/users/selfie2.jpg'; ?>" alt="alumno de ya ire"/>

					<div>
						<label class="opinion_name">Kiko Mata Moros </label>
						<label class="opinion_text"> ha opinado de </label>
						<label class="opinion_company"> Ya iré: </label>
						<label class="opnion_stars">5★</label>
					</div>

				</div>

				<label class="opinion_coment">Estaba de Erasmus y no sabía como sacarme el teorico, ¡ya iré ha sido mi salvación!</label>

		</div>

		<div class="opinion_container">

				<div class="opinion_top">

					<img src="<?= 'pub/images/users/selfie3.jpg'; ?>" alt="alumno de ya ire"/>

						<div>
							<label class="opinion_name">Ana Perez Molina </label>
							<label class="opinion_text"> ha opinado de </label>
							<label class="opinion_company"> Ya iré: </label>
							<label class="opnion_stars">4.2★</label>
						</div>

				</div>

				<label class="opinion_coment">No tenía muy claro si apuntarme porque es un método muy diferente al habitual y estoy gratamente sorprendida, ¡gracias!</label>

		</div>

		<div class="opinion_container">

				<div class="opinion_top">

					<img src="<?= 'pub/images/users/selfie4.jpg'; ?>" alt="alumno de ya ire"/>

					<div>
						<label class="opinion_name">Mari Carmen Padial </label>
						<label class="opinion_text"> ha opinado de </label>
						<label class="opinion_company"> Ya iré: </label>
						<label class="opnion_stars">4.8★</label>
					</div>

				</div>

				<label class="opinion_coment">¡Lo recomendaré a todos mis amigos! Antes parecía que hacía siempre los mismos test y no acababa, esto es una maravilla</label>

		</div>

	</div>

</div>

<?php
	include 'footer_common.php';
?>
