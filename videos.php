<?php
	$pageTitle = 'B-Boy Rey-S | Videos';
	$styleAdd =
		"<!-- Malihu Scrollbar -->
		<link rel='stylesheet' href='scripts/malihu-scrollbar/jquery.mCustomScrollbar.min.css'>

		<!-- Unite Gallery -->
		<link rel='stylesheet' href='scripts/unitegallery/css/unite-gallery.css' type='text/css'>";
	include 'includes/header.php';
?>

		<video controls poster="/images/videos-this-christmas.jpg">
            <source src="videos/2016-christmas.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="caption">This Christmas</p>
		<section class='container-gallery'>
			<div class='videos' id='gallery' style='display:none;'>
				<img alt='Thorsday'
					data-type='youtube'
					src='images/videos-thorsday.jpg'
					data-videoid='gaMWvcnL1CI'>

				<img alt='Antithesis Apparel'
					data-type='youtube'
					src='images/videos-antithesis-apparel.jpg'
					data-videoid='CPE-uUOprcU'>

				<img alt='The Spacies & Jeremus - Loud'
					data-type='youtube'
					src='images/videos-loud.jpg'
					data-videoid='F9T722Qrngs'>

				<img alt='THX Beats Feat. Bad Lucc, Problem & Travis Barker - Everythang'
					data-type='youtube'
					src='images/videos-everythang.jpg'
					data-videoid='b-5SU5bwHzA'>

				<img alt='Janitor - Jazz Infliction 96'
					data-type='youtube'
					src='images/videos-jazz-infliction-96.jpg'
					data-videoid='5hpTUSUDr_Y'>

				<img alt='Izm White Feat. Main Flow - Up in the Sky'
					data-type='youtube'
					src='images/videos-up-in-the-sky.jpg'
					data-videoid='lkCuGLMps6M'>

				<img alt='Deep Rooted - Crazy'
					data-type='youtube'
					src='images/videos-crazy.jpg'
					data-videoid='7LASs0A5hCg'>

				<img alt='Headspin Tutorial'
					data-type='youtube'
					src='images/videos-headspin-tutorial.jpg'
					data-videoid='1i7Wr6tZwyE'>
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
				gallery_width: 1200,
				tiles_space_between_cols: 8,
				tiles_space_between_cols_mobile: 8,
				tiles_min_columns: 1,
				tiles_max_columns: 3,
				tile_enable_textpanel: true,
				tile_textpanel_source: "title",
				tile_textpanel_always_on: true,
				tile_textpanel_title_font_family: 'sakkal-majalla-bold, Arial, sans-serif',
				tile_textpanel_title_text_align: 'center',
				tile_textpanel_title_font_size: 16
			});
		</script>

		<script src='scripts/script.js'></script>
	</body>
</html>