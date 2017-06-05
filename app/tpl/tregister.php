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

	<p class="body_title">¿Que quieres hacer?</p>

</div>
<?php
	include 'footer_common.php';
?>
