@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add new Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="productCode" class="col-md-4 col-form-label text-md-right">{{ __('Product Code') }}</label>

                            <div class="col-md-6">
                                <input id="productCode" type="text" class="form-control @error('productCode') is-invalid @enderror" name="productCode" value="{{ old('productCode') }}" required autocomplete="productCode" autofocus>

                                @error('productCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="productName" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="productName" type="text" class="form-control @error('productName') is-invalid @enderror" name="productName" value="{{ old('productName') }}" required autocomplete="productName">

                                @error('productName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reorderPoint" class="col-md-4 col-form-label text-md-right">{{ __('Reorder Point') }}</label>

                            <div class="col-md-6">
                                <input id="reorderPoint" type="text" class="form-control @error('reorderPoint') is-invalid @enderror" name="reorderPoint" required autocomplete="reorderPoint">

                                @error('reorderPoint')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idealStock" class="col-md-4 col-form-label text-md-right">{{ __('Ideal Stock') }}</label>

                            <div class="col-md-6">
                                <input id="idealStock" type="text" class="form-control" name="idealStock" required autocomplete="idealStock">
                                @error('idealStock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="unitPrice" class="col-md-4 col-form-label text-md-right">{{ __('Unit Price') }}</label>

                            <div class="col-md-6">
                                <input id="unitPrice" type="text" class="form-control" name="unitPrice" required autocomplete="unitPrice">
                                @error('unitPrice')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Product') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
