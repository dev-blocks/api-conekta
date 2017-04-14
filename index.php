<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>API Conekta PHP</title>

	<!--CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<header role="header">
			<div class="jumbotron">
				<div class="container">
					<h1>API Conekta</h1>
					<p>Learn more</p>
				</div>
			</div>
		</header>

		<main role="main">
			<div class="container">
				<h3>Primeros pasos</h3>
				<ul class="nav">
					<li>
						<p>Agregar algún CDN de jQuery v-1.10.2+</p>
					</li>
					<li>
						<p>Agregar file conekta.js</p>
					</li>
					<li>
						<p>Crear tu file para declarar las functions de Conekta</p>
					</li>
				</ul>

				<!--CARD-->
				<section role="card">
					<h3>Pagos con Tarjeta</h3>
					<!--FORM-->
					<form action="controller/payment.php" method="POST" accept-charset="utf-8" id="card-form">
						<div class="card-errors"></div>
						<div class="form-group">
							<label for="">Nombre del tarjetahabiente</label>
							<input type="text" size="20" data-conekta="card[name]" class="form-control"  placeholder="Banco">
						</div>
						<div class="form-group">
							<label for="">Número de tarjeta de crédito</label>
							<input type="text" size="20" data-conekta="card[number]" class="form-control"  placeholder="4242 - 4242 - 4242 - 4242">
						</div>
						<div class="form-group">
							<label for="">CVC</label>
							<input type="text" size="4" data-conekta="card[cvc]" class="form-control"  placeholder="123">
						</div>
						<div class="form-group">
							<label for="">Fecha de expiración (MM/AAAA)</label>
							<div class="row">
								<div class="col-md-6">
									<input type="text" size="2" data-conekta="card[exp_month]" class="form-control"  placeholder="02">
								</div>
								<div class="col-md-6">
									<input type="text" size="4" data-conekta="card[exp_year]" class="form-control"  placeholder="2020">
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn">Submit</button>
						</div>
					</form>
					<!--FORM-->
				</section>
				<!--CARD-->
			</div><!--container-->
		</main>

		<footer class="footer" role="footer">
			<div class="container">
				<p>Conekta <?= date('Y') ?></p>
			</div>
		</footer>

		<!--JS-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
		<script src="js/app.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>