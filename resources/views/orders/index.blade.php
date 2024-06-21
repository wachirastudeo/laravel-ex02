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
                            <th> จัดการ</th>


                        </tr>
                    </thead>
                    @if ($order)
                        <tbody>
                            @foreach ($order->order_details as $item)
                                <tr>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>
                                        <div class="container">

                                            <div class="raw text-center btn-group">
                                                <div class="col-6 px-3">
                                                    <form action="{{ route('orders.update', $order->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" value="decrease" name="value">
                                                        <input type="hidden" value="{{ $item->product_id }}"
                                                            name="product_id">

                                                        <button class="btn btn-danger" type="submit">
                                                            -
                                                        </button>
                                                    </form>

                                                </div>
                                                <div class="col-6">
                                                    <form action="{{ route('orders.update', $order->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" value="increase" name="value">
                                                        <input type="hidden" value="{{ $item->product_id }}"
                                                            name="product_id">

                                                        <button class="btn btn-success" type="submit">
                                                            +
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{ $order->total }}</td>
                                <td>
                                    <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="value" value="checkout">
                                        <button type="submit" class="btn btn-primary">check out</button>
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                    @endif
                </table>
            </div>
        </div>



    </div>
@endsection
