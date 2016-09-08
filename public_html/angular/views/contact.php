<!-- contact form based on @deepdivedylan code-->
<div class="container-fluid">
	<h3>Contact Us!</h3>
	<p> No project is too small to make a positive impact in the world or too big to be accomplished!! Have a
		conversation with us!!</p>

</div>
<div class="col-md-8 col-md-offset-2">
	<form name="contactForm" id="contactForm" class="form-horizontal" ng-controller="ContactFormController"
			ng-submit="submit(formData, contactForm.$valid);" novalidate>
		<div class="container-fluid">

			<div class="form-group">
				<label for="name">Name</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i aria-hidden="true" class="fa fa-user"></i>
					</div>
					<input class="form-control ng-untouched ng-pristine ng-invalid" id="name" name="name"
							 ng-reflect-name="name"
							 type="text">
				</div>
				<div class="alert alert-danger" ng-reflect-hidden="true" hidden="">
					Name is required
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i aria-hidden="true" class="fa fa-envelope"></i>
					</div>
					<input class="form-control ng-untouched ng-pristine ng-invalid" id="email" name="email" required=""
							 ng-reflect-model="" ng-reflect-name="email" type="email">
					<div class="alert alert-danger" ng-reflect-hidden="true" hidden="">
						Email is required
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i aria-hidden="true" class="fa fa-pencil"></i>
						</div>
						<input class="form-control ng-untouched ng-pristine ng-invalid" id="subject" name="subject"
								 required=""
								 ng-reflect-model="" ng-reflect-name="subject" type="text">
					</div>
					<div class="alert alert-danger" ng-reflect-hidden="true" hidden="">
						Subject is required
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
			<textarea class="form-control ng-untouched ng-pristine ng-valid" cols="30" id="message" name="message"
						 rows="10"
						 ng-reflect-model="" ng-reflect-name="message"></textarea>
				</div>
				<div class="form-group">

					<!--this is for spam prevention google recaptcha key-->
					<div class="g-recaptcha" data-sitekey="6LfgoykTAAAAAOAw8bjRU5E-xwNR-GK1H5E4vHWQ"></div>
					
					<button class="btn btn-lg btn-primary" type="submit"> Send</button>
					<button class="btn btn-lg btn-default" type="reset">Clear</button>
				</div>
			</div>
		</div>
</div>
</form>
<!--Site Key
6LfgoykTAAAAAOAw8bjRU5E-xwNR-GK1H5E4vHWQ
Secret Key
6LfgoykTAAAAANxNMAc7JacTtzQFtZgWT0SntIG6-->