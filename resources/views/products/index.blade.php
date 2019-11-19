@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($products as $item)

                    <p>{{$item ->productName}}</p>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection



