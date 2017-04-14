jQuery(document).ready(function($) {
	//Vars
	Conekta.setPublishableKey("key_KJysdbf6PotS2ut2");
	Conekta.setLanguage("es");

	$("#card-form").submit(function(event) {
		var $form = $(this);
		$form.find("input").prop("disabled", true);
		Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
		return false;
	});

	var conektaSuccessResponseHandler = function(token) {
		var $form = $("#card-form");
		$form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
		$form.get(0).submit();
	};

	var conektaErrorResponseHandler = function(response) {
		var $form = $("#card-form");
		$form.find(".card-errors").text(response.message);
		$form.find("input").prop("disabled", false);
	};

});


