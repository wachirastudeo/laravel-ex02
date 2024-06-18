@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th> ชื่อสินค้า</th>
                            <th> ราคา</th>
                            <th> จำนวน</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->order_details as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>400</td>
                                <td>1</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>



    </div>
@endsection
