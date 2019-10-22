@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <br>
                <form action="">
                @csrf
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
                                    <p>Total : Rp. {{ number_format($total, 0, ',', '.') }}</p>
                                </div>
                            </div>	
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection