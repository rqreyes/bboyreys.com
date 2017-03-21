<?php
	$pageTitle = 'B-Boy Rey-S | Photos';
	$styleAdd =
		"<!-- Malihu Scrollbar -->
		<link rel='stylesheet' href='scripts/malihu-scrollbar/jquery.mCustomScrollbar.min.css'>

		<!-- Unite Gallery -->
		<link rel='stylesheet' href='scripts/unitegallery/css/unite-gallery.css' type='text/css'>";
	include 'includes/header.php';
?>

		<section class='container-gallery'>
			<div id='gallery' style='display:none;'>
				<!-- dance -->
				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-1-tn.jpg'
					data-image='images/dance-1.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-2-tn.jpg'
					data-image='images/dance-2.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-3-tn.jpg'
					data-image='images/dance-3.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-4-tn.jpg'
					data-image='images/dance-4.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-5-tn.jpg'
					data-image='images/dance-5.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-6-tn.jpg'
					data-image='images/dance-6.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-7-tn.jpg'
					data-image='images/dance-7.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-8-tn.jpg'
					data-image='images/dance-8.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-9-tn.jpg'
					data-image='images/dance-9.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-10-tn.jpg'
					data-image='images/dance-10.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-11-tn.jpg'
					data-image='images/dance-11.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-12-tn.jpg'
					data-image='images/dance-12.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/dance-13-tn.jpg'
					data-image='images/dance-13.jpg'>

				<!-- joelson -->
				<img alt='B-boy Rey-S dance'
					data-thumb='images/joelson-1-tn.jpg'
					data-image='images/joelson-1.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/joelson-2-tn.jpg'
					data-image='images/joelson-2.jpg'>

				<!-- water -->
				<img alt='B-boy Rey-S dance'
					data-thumb='images/water-1-tn.jpg'
					data-image='images/water-1.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/water-2-tn.jpg'
					data-image='images/water-2.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/water-3-tn.jpg'
					data-image='images/water-3.jpg'>

				<!-- lifestyle -->
				<img alt='B-boy Rey-S dance'
					data-thumb='images/lifestyle-1-tn.jpg'
					data-image='images/lifestyle-1.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/lifestyle-2-tn.jpg'
					data-image='images/lifestyle-2.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/lifestyle-3-tn.jpg'
					data-image='images/lifestyle-3.jpg'>

				<!-- insomniac -->
				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-1-tn.jpg'
					data-image='images/insomniac-1.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-2-tn.jpg'
					data-image='images/insomniac-2.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-3-tn.jpg'
					data-image='images/insomniac-3.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-4-tn.jpg'
					data-image='images/insomniac-4.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-5-tn.jpg'
					data-image='images/insomniac-5.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-6-tn.jpg'
					data-image='images/insomniac-6.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-7-tn.jpg'
					data-image='images/insomniac-7.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-8-tn.jpg'
					data-image='images/insomniac-8.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/insomniac-9-tn.jpg'
					data-image='images/insomniac-9.jpg'>

				<!-- model -->
				<img alt='B-boy Rey-S dance'
					data-thumb='images/model-1-tn.jpg'
					data-image='images/model-1.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/model-2-tn.jpg'
					data-image='images/model-2.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/model-3-tn.jpg'
					data-image='images/model-3.jpg'>

				<img alt='B-boy Rey-S dance'
					data-thumb='images/model-4-tn.jpg'
					data-image='images/model-4.jpg'>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>

		<!-- Malihu Scrollbar -->
		<script src='scripts/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js'></script>
		<script>
			function isMobile() {
				return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
			}

			if(!isMobile()) {
				$('section').mCustomScrollbar({
					theme: 'rounded-dots',
					scrollButtons: { enable: true }
				});
			}
		</script>

		<!-- Unite Gallery -->
		<script src='scripts/unitegallery/js/unitegallery.min.js'></script>
		<script src='scripts/unitegallery/js/ug-theme-tiles.js'></script>
		<script>
			$('#gallery').unitegallery({
				theme_appearance_order: 'shuffle',
				tiles_space_between_cols: 8,
				tiles_space_between_cols_mobile: 8,
				tiles_max_columns: 5,
				lightbox_type: 'compact',
				lightbox_overlay_opacity: 0.8,
				lightbox_slider_image_border: false,
				lightbox_slider_image_shadow: false,
				lightbox_show_textpanel: false
			});
		</script>

		<script src='scripts/script.js'></script>
	</body>
</html>