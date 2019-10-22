<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Price | B-Travel - Banyuwangi</title>

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
							<div class="form-header">
								<h1>Price</h1>
							</div>
								
						<div class="col-md-6">
							<br>
                                <a href="{{ route('order.store') }}" class="btn btn-warning float-right">New Booking</a>
						</div>
						<form action="">
							<div class="card">
								<div class="card-body">
									@include ('layouts.alert')
									<table id="table-posts" class="table table-striped" style="width:100%">
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
													<td>
														<a href="{{ route('delete', $item->id) }}" class="btn btn-sm btn-warning">Delete</a>
													</td>
												</tr>
											@endforeach                                
										</tbody>
									</table>
									<br>
									<div class="row">
										<div class="col-sm-2">
											<a href="{{ route('order.verify') }}" class="btn btn-warning btn-block">
												{{ __('Payment') }}
											</a>
										</div>
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
