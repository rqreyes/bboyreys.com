<?php
	if (isset($_POST['userCopy']) && $_POST['userCopy'] == 'copy') {
		$userFirstName = $_POST['userFirstName'];
		$userLastName = $_POST['userLastName'];
		$userEmail = $_POST['userEmail'];
		$userPhone = $_POST['userPhone'];
		$userMessage = $_POST['userMessage'];

		$to = $userEmail;
		$subject = 'bboyreys.com Contact Form Submission';
		$message =
			'First Name: ' . $userFirstName . '<br>
			Last Name: ' . $userLastName . '<br>
			Email Address: ' . $userEmail . '<br>
			Phone Number: ' . $userPhone . '<br>
			<br>
			Questions / Comments: ' . $userMessage . '<br>';

		mail($to, $subject, $message, 'Content-type:text/html');
	}

	$submit = $_POST['userSubmit'];

	if ($submit == 'Submit') {
		$userFirstName = $_POST['userFirstName'];
		$userLastName = $_POST['userLastName'];
		$userEmail = $_POST['userEmail'];
		$userPhone = $_POST['userPhone'];
		$userMessage = $_POST['userMessage'];

		$to = 'rqreyes@gmail.com';
		$subject = 'bboyreys.com Contact Form Submission';
		$message =
			'First Name: ' . $userFirstName . '<br>
			Last Name: ' . $userLastName . '<br>
			Email Address: ' . $userEmail . '<br>
			Phone Number: ' . $userPhone . '<br>
			<br>
			Questions / Comments: ' . $userMessage . '<br>';

		mail($to, $subject, $message, 'Content-type:text/html');
	}
?>

<?php
	$pageTitle = 'B-Boy Rey-S | Thank You';
	$robots = '<meta name="robots" content="noindex, nofollow">';
	$htmlClasses = 'contact extra';
	include 'includes/header.php';
?>

		<section class='container-contact'>
			<header class='mobile'>
				<img class='logo' src='images/logo.png' width='60' height='auto'>
				<h1>B-boy Rey-S</h1>
			</header>

			<div class='container-content-extra'>
				<h1>Thank You</h1>
				<h2>I'll get in touch shortly</h2>
			</div>
		</section>

<?php include 'includes/footer.php' ?>

		<script src='scripts/script.js'></script>
	</body>
</html>