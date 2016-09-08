app.controller("ContactFormController", ["$scope", function($scope) {
	/**
	 * state variable to store the alerts generated from the submit event
	 * @type {Array}
	 **/
	$scope.alerts = [];

	/**
	 * state variable to keep track of the data entered into the form fields
	 * @type {Object}
	 **/
	$scope.formData = {"name": null, "email": null, "subject": null, "message": null};


	/**
	 * method to reset form data when the submit and cancel buttons are pressed
	 **/
	$scope.reset = function() {
		$scope.formData = {name: null, email: null, subject: null, message: null};
		$scope.contactForm.$setUntouched();
		$scope.contactForm.$setPristine();
	};

	/**
	 * method to process the action from the submit button
	 *
	 * @param formData object containing submitted form data
	 * @param validated true if passed validation, false if not
	 **/
	$scope.submit = function(formData, validated) {
		if(validated === true) {
			$scope.alerts[0] = {
				type: "success",
				msg: "Thank you! We'll get back to you shortly"
			};
		} else {
			$scope.alerts[0] = {
				type: "danger",
				msg: "Uh-oh, you tried clicking submit with invalid data!"
			};
		}
		$scope.reset();
	};
}]);

