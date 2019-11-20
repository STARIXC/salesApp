@extends('layouts.master')


@section('title')
Products
@endsection
@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Sales</h4>
            </div>
            <div class="card-body">
                    <form class="col-12">
                            <div class="form-row">
                              <div class="col-7">
                                <div class="form-group">
                                        <select id="my-select" class="form-control" name="">
                                                <option>Select Product</option>
                                                @foreach ($products as $item)
                                                <option value="{{$item ->id}}">{{$item ->productCode}}- {{$item ->productName}}-{{$item ->reorderPoint}}</option>

                                            @endforeach

                                    </select>
                                </div>
                              </div>
                              <div class="col-1">
                                <input type="text" class="form-control" placeholder="Quantity">
                              </div>
                              <div class="col-2">
                                <button class="btn btn-primary" type="submit">Text</button>
                              </div>
                            </div>
            </form>


            <hr class="grey">

              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Product Code
                    </th>
                    <th>
                      Product Name
                    </th>
                    <th>
                        Reorder Point
                    </th>
                    <th>
                            Ideal Stock
                        </th>
                    <th class="text-right">
                      Unit Price
                    </th>
                  </thead>
                  <tbody>



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
</div>

@endsection
@section('scripts')

@endsection
