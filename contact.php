<?php
	$pageTitle = 'B-Boy Rey-S | Contact';
	$htmlClasses = 'contact';

	if (isset($_POST['userSubmit'])) {
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$secretKey = '6LezERIUAAAAAIzTZ2g4dTfDxdErMw78xgrDWSxe';

		$response = file_get_contents(
			$url 
			. '?secret=' . $secretKey
			. '&response=' . $_POST['g-recaptcha-response']
			. '&remoteip=' . $SERVER['REMOTE_ADDR']
		);
		$data = json_decode($response);

		if (isset($data -> success) AND $data -> success === true) {
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
			header('Location: contact.php?captchaPass=true#userForm');
		} else {
			header('Location: contact.php?captchaFail=true#userForm');
		}
	} 

	include 'includes/header.php';
?>

		<!--
			- using google recaptcha
				- disabled redirecting to thank you page
				- disabled 'send yourself a copy'
				- added red and green classes
		-->

		<section class='container-contact'>
			<header class='mobile'>
				<img class='logo' src='images/logo.png' width='60' height='auto'>
				<h1>B-boy Rey-S</h1>
			</header>

			<div class='row-large'>
				<div class='columns'>
					<h2>A Little About Me</h2>
					<div class='border'>
						<p>I’m a front-end web developer by day, breakdance warrior by night, and this is my dance portfolio. I live in San Diego, enjoy puzzles, and have a weakness for ramen.</p>
						<p>Drop a hello! If you want to hire me for a private lesson, workshop, or an event, please provide details such as date, time, and location.</p>
					</div>
					<div class='container-social-media'>
						<h2>See What I'm Up To</h2>
						<div class='social-media border'>
							<ul>
								<li><a href='docs/randy-reyes-resume-performer.pdf' target='_blank'><i class='fa fa-file-text-o'></i>&nbsp;&nbsp;R&eacute;sum&eacute;</a></li>
								<li><a href='https://www.facebook.com/rqreyes' target='_blank'><i class='fa fa-facebook-square'></i>Facebook</a></li>
								<li><a href='https://www.instagram.com/rqreyes/' target='_blank'><i class='fa fa-instagram'></i>Instagram</a></li>
								<li><a href='https://www.youtube.com/user/rqreyes1' target='_blank'><i class='fa fa-youtube-square'></i>YouTube</a></li>
								<li><a href='https://www.linkedin.com/in/rqreyes' target='_blank'><i class='fa fa-linkedin-square'></i>LinkedIn</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class='columns' id='userForm'>
					<h2>Let's Chat Sometime</h2>
					<form class='border' action='' method='post'>
						<?php if(isset($_GET[captchaPass])) { ?>
							<p class='green'>Thank you! I'll get in touch shortly.</p>
						<?php } ?>
						<div class='row-medium'>
							<div class='columns'>
								<label>First Name *
									<input type='text' name='userFirstName' maxlength='50' required>
								</label>
							</div>
							<div class='columns'>
								<label>Last Name *
									<input type='text' name='userLastName' maxlength='50' required>
								</label>
							</div>
						</div>
						<div class='row-medium'>
							<div class='columns'>
								<label>E-mail Address *
									<input type='email' name='userEmail' maxlength='50' required>
								</label>
							</div>
							<div class='columns'>
								<label>Phone Number
									<input type='tel' name='userPhone' maxlength='50'>
								</label>
							</div>
						</div>
						<label class='message'>Questions / Comments *
							<textarea name='userMessage' maxlength='500' required></textarea>
						</label>
<!-- 						<label>
							<input type='checkbox' name='userCopy' value='copy'>
							Send a copy to yourself
						</label> -->
						<?php if(isset($_GET[captchaFail])) { ?>
							<p class='red'>Captcha failed. Please try again.</p>
						<?php } ?>
						<div class='g-recaptcha' data-sitekey='6LezERIUAAAAAJ6xBW15HLc0irREp_HvgQHBrdlv' data-theme='dark'></div>
						<input type='submit' name='userSubmit' value='Submit'>
					</form>
				</div>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<script src='scripts/script.js'></script>
	</body>
</html>