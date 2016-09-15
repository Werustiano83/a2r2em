// code extracted from David Mancini github
//@davidmancini

app.controller("contactFormController", ["$http", "$scope", function($http, $scope) {
	/**
	 * State variable to store alerts generated from submit event
	 * @type {Array}
	 **/
	$scope.alerts = [];

	/**
	 * State variable that keeps track of data entered
	 * @type {Object}
	 **/
	$scope.formData = {name:null, email:null, subject:null, message:null};

	/**
	 * Method to reset form data when submit and cancel buttons are pressed
	 **/
	$scope.reset = function() {
		$scope.formData = {name:null, email:null, subject:null, message:null};
		$scope.quoteForm.$setUntouched();
		$scope.quoteForm.$setPristine();
	};

	/**
	 * Method to process action from submit button
	 *
	 * @param formData object containing submitted form data
	 * @param validated true if pressed validation, false if not
	 **/
	$scope.submit = function(formData, validated) {
		if(validated === true){
			$http.post("php/mailer.php", formData)
				.then(function(reply) {
					$scope.alerts[0] = {
						type: "danger",
						msg: reply.data.message
					};
					if(reply.data.status === 200) {
						$scope.alerts[0].type = "Your message has been sent successfully";
					}
				});
		} else {
			$scope.alerts[0] = {
				type: "danger",
				msg: "Please review your information and try again."
			};
		}
		$scope.reset();
	};
}]);

