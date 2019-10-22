@extends('adminlte::page')
@section('content')
    <div class="panel">
        <div class="panel-body">
            <form role="form" method="post" action="{{ route('product.store')}}">
                 @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <span class="form-label">Destination</span>
                            <input class="form-control text-input" type="text" name='name' placeholder="Enter Name Destination">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <span class="form-label">Price</span>
                            <input class="form-control text-input" type="number" min='0' name='price' placeholder="Rp:">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>	
                    <div class="row">
                        <div class="col-sm-1">
                        <button href="{{ route('product.index') }}" type="submit" class="btn btn-warning btn-block">
                            {{ __('Save') }}
                        </button>
                    </div> 
                </div>						 
            </form>
        </div>
    </div>
@endsection