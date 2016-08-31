<?php require_once("public_html/php/partials/head-utils.php");?>
<body class="sfooter">
	<div class="sfooter-content">

		<!--begin header-->
		<?php require_once("public_html/php/partials/header.php") ?>

		<!--begin main content -->
		<main>
			<div class="container-fluid">

				<div ng-view></div>

			</div>
		</main>
	</div>
	<!--begin footer-->
	<?php require_once("public_html/php/partials/footer.php");?>
</body>

// modification in the contact form, the swiftmailer mailer file
won't require form data validate for jquery

angular form validation
 
PHP mailer needs to change

@davidmancini github look for the mailer
install google recaptcha on try blockand swiftmailer