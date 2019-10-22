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
                        <table id="table-posts" class="table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Person</th>
                                    <th>Status</th>
                            
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user->id }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->details()->count() }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ route('order.lunas', $item->id) }}" class="btn btn-sm btn-primary">Lunas</a>
                                            <a href="{{ route('order.detail', $item->id) }}" class="btn btn-sm btn-default">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                        	
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection