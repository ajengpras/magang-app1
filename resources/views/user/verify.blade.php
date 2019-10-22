<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Verify | B-Travel - Banyuwangi</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css2/bootstrap.min.css" /> 

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css2/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				@include('layouts.alert')
				<div class="row">
						<div class="booking-form">
						<div class="col-md-6">
						</div>
						<form action="">
							<div class="row">
								<div class="page-wrapper">
									<div class="col-lg-12">
										<!--konten pilihan start-->
										<div class="jumbotron">
												<h5>Selamat anda sudah berhasil membuat pesanan ini!!!</h5>
												<h5> Data yang anda masukkan sudah kami terima. Untuk memudahkan pembayaran anda kami hanya menerima pembayaran ditempat. Tunjukkan identitas sewaktu ingin melakukan pembayaran dan perjalanan.</h5>
												
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									@include ('layouts.alert')
									<table id="table-posts" class="table table" style="width:100%">
										<thead>
											<tr>
												<th>No.</th>
												<th>Order ID</th>
												<th>Name</th>
												<th>Identity</th>
												<th>Phone</th>
												<th>Date</th>
												<th>Destination</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($order_details as $item)
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td>{{ $item->order->id }}</td>
													<td>{{ $item->name }}</td>
													<td>{{ $item->identity }}</td>
													<td>{{ $item->phone }}</td>
													<td>{{ $item->date }}</td>
													<td>{{ $item->product->name }}</td>
													<td>Rp. {{ number_format($item->product->price, 0, ',', '.') }}</td>
												</tr>
											@endforeach                                
										</tbody>
									</table>
									<br>
									<div class="row">
										<div class="col-sm-8">
											<p>Total: Rp. {{ number_format($total, 0, ',', '.') }}</p>
										</div>
									</div>	
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
