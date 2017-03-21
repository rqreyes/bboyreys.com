<?php
	$pageTitle = 'B-Boy Rey-S | Home';
	$styleAdd =
		"<!-- Owl Carousel -->
		<link rel='stylesheet' href='scripts/owl-carousel/owl.carousel.css'>
		<link rel='stylesheet' href='scripts/owl-carousel/owl.theme.css'>";
	include 'includes/header.php';
?>
		<section class='home'>
			<header class='mobile'>
				<img class='logo' src='images/logo.png' width='60' height='auto'>
				<h1>B-boy Rey-S</h1>
			</header>

			<div class='owl-carousel owl-theme'>
				<div class='owl-slide'><img src='images/home-1.jpg'></div>
				<div class='owl-slide'><img src='images/home-2.jpg'></div>
				<div class='owl-slide'><img src='images/home-3.jpg'></div>
				<div class='owl-slide'><img src='images/home-4.jpg'></div>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>

		<!-- Owl Carousel -->
		<script src='scripts/owl-carousel/owl.carousel.js'></script>
		<script>
			$(document).ready(function() {
				var time = 8; // time in seconds

				var $progressBar,
				$bar, 
				$elem, 
				isPause, 
				tick,
				percentTime;
		
				//Init the carousel
				$('.owl-carousel').owlCarousel({
					slideSpeed : 1000,
					paginationSpeed : 500,
					singleItem : true,
					afterInit : progressBar,
					afterMove : moved,
					startDragging : pauseOnDragging
				});
		
				//Init progressBar where elem is $('.owl-carousel')
				function progressBar(elem){
					$elem = elem;
					//build progress bar elements
					buildProgressBar();
					//start counting
					start();
				}
		
				//create div#progressBar and div#bar then prepend to $('.owl-carousel')
				function buildProgressBar(){
					$progressBar = $('<div>',{
						id:'progressBar'
					});
					$bar = $('<div>',{
						id:'bar'
					});
					$progressBar.append($bar).appendTo($elem);
				}
		
				function start() {
					//reset timer
					percentTime = 0;
					isPause = false;
					//run interval every 0.01 second
					tick = setInterval(interval, 10);
				}
		
				function interval() {
					if(isPause === false){
						percentTime += 1 / time;
						$bar.css({
							width: percentTime+'%'
						});
						//if percentTime is equal or greater than 100
						if(percentTime >= 100){
							//slide to next item 
							$elem.trigger('owl.next')
						}
					}
				}
		
				//pause while dragging 
				function pauseOnDragging(){
					isPause = true;
				}
		
				//moved callback
				function moved(){
					//clear interval
					clearTimeout(tick);
					//start again
					start();
				}
			});
		</script>

		<script src='scripts/script.js'></script>
	</body>
</html>