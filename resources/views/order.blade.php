<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking | V-Travel - Banyuwangi</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css2/bootstrap.min.css" /> 

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css2/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
							<h1>Book a travel</h1>
						</div>
						<form role="form" method="post" action="{{ route('order.store')}}">
							@csrf
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control text-input" type="text" name='name' placeholder="Enter your name" id='nama'>
										@error('name')
                                    	<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    	</span>
                                		@enderror
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">No. Identity</span>
										<input class="form-control text-input" type="number" name='identity' placeholder="Enter your No. Identity">
										@error('identity')
                                    	<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                   		 </span>
                               			 @enderror
									</div>
								</div>
                            </div>
							<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
								        <span class="form-label">Phone</span>
								        <input class="form-control text-input" type="number" name='phone' placeholder="Enter your phone number">
								        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
								    <div class="col-sm-6">
									    <div class="form-group">
										    <span class="form-label">Pickup Date</span>
										    <input class="form-control text-input" type="date"  name='date' id='datepicker' required >
										    <span class="invalid-feedback" role="alert">
										    	<p id="p" style="color: red;"></p>
										    </span>
										    @error('date')
                                  		    <span class="invalid-feedback" role="alert">
                                      	    <strong>{{ $message }}</strong>
                                 		    </span>
                              			    @enderror
									    </div>
                                    </div>
							</div>	
							
                            <div class="form-group">
                                    <span class="form-label">Destination</span>
                                    <select class="form-control text-input" type="text" name='product_id' placeholder="Enter ZIP/Location">
										@foreach ($products as $item)
											<option value="{{ $item->id }}">{{ $item->name }}</option>
										@endforeach
                                    </select>
                                    <span class="select-arrow"></span>
                                    @error('product_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <br>
                            <div class="form-group row mb-0">  
                                <div class="col-sm-2">
                                    <button href="{{ route('order.index') }}" type="submit" class="btn btn-warning btn-block">
                                        {{ __('Book Now ->') }}
                                     </button>
                                </div>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript">
	
		$('#datepicker').on("change keyup paste",function(){
			var getDate = $('#datepicker').val();
			var d1 = new Date(getDate);
			var d = new Date();
			var error ="tanggal yang anda masukkan telah lewat";
			var date=d.getFullYear()+"-"+(d.getMonth() + 1)+"-"+d.getDate();
			if (d1 < d){
				error ="tanggal yang anda masukkan telah lewat";
				$('#datepicker').val("");
			}
			else{
				error=""
			}
			
			$('#p').html(error);
			alert(error);
		})


		$(document).ready(function(){
			
		})
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<!--
	$("#nama").on("change keyup paste", function(){
   			 var nama = $('#nama').val();
			$('p').html(nama);
		})
-->
</html>
