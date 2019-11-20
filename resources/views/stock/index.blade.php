@extends('layouts.master')


@section('title')
Products
@endsection
@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Products Table</h4>
            </div>
            <div class="card-body">
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
                        @foreach ($products as $item)
                        <tr>
                                <td>
                                        {{$item ->productCode}}
                                </td>
                                <td>
                                        {{$item ->productName}}
                                </td>
                                <td>
                                        {{$item ->reorderPoint}}
                                </td>
                                <td>
                                        {{$item ->idealStock}}
                                </td>
                                <td class="text-right">
                                        {{$item ->unitPrice}}
                                </td>
                              </tr>

                    @endforeach


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
