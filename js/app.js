(function($){
	'use strict';
	//vars
	Conekta.setPublishableKey('key_KJysdbf6PotS2ut2');

	var app = {
		init: function(){
			$("#card-form").submit(function(event) {
				var $form = $(this);
				// Previene hacer submit más de una vez
				$form.find("button").prop("disabled", true);
				Conektatoken.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
				return false;
			});
			var conektaSuccessResponseHandler = function(token) {
				var $form = $("#card-form");
				//Inserta el token_id en la forma para que se envíe al servidor
				$form.append($("<input type='hidden' id='conektaTokenId'>").val(token.id));
				$form.get(0).submit(); //Hace submit
			};
			var conektaErrorResponseHandler = function(response) {
				var $form = $("#card-form");
				$form.find("#card-errors").text(response.message_to_purchaser);
				$form.find("button").prop("disabled", false);
			};
		},
		ConektaSucess: function(){

		},
	};
	//Init
	app.init();
})(jQuery);
