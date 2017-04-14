<?php
require_once("../lib/Conekta.php");
\Conekta\Conekta::setApiKey("key_KJysdbf6PotS2ut2");
\Conekta\Conekta::setApiVersion("2.0.0");


	$order = \Conekta\Order::create(
		array(
			"line_items" => array(
				array(
					"name" => "Tacos",
					"unit_price" => 1000,
					"quantity" => 12
				)//first line_item
			), //line_items
			"shipping_lines" => array(
				array(
					"amount" => 1500,
					"carrier" => "mi compañia"
				)
			), //shipping_lines
			"currency" => "MXN",
			"customer_info" => array(
				"customer_id" => "cus_2fkJPFjQKABcmiZWz"
			), //customer_info
			"shipping_contact" => array(
				"phone" => "5555555555",
				"receiver" => "Bruce Wayne",
				"address" => array(
					"street1" => "Calle 123 int 2 Col. Chida",
					"city" => "Cuahutemoc",
					"state" => "Ciudad de Mexico",
					"country" => "MX",
					"postal_code" => "06100",
					"residential" => true
				)//address
			), //shipping_contact
			"charges" => array(
				array(
					"payment_method" => array(
					"payment_source_id" => "card_2fkJPFjQKABcmiZWy",
					"type" => "card"
				)//payment_method
			) //first charge
		) //charges
	)//order
	);


	$payment = $order->status;
	echo "=========".$payment;
?>