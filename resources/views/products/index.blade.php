@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('products.create') }} " class="btn btn-primary my-3">สร้างสินค้า</a>
        <div class="row">
            <div class="col-4">
                <h5>ชือสินค้า</h5>
            </div>
            <div class="col-4">
                <h5>ราคา</h5>
            </div>
            <div class="col-4">
                <h5></h5>
            </div>
            @foreach ($productsVeiw as $item)
                <div class="col-4"> {{ $item->name }} </div>
                <div class="col-4"> {{ $item->price }} </div>
                <div class="col-4"> <a href="{{ route('products.edit', $item->id) }}">แก้ไข</a> </div>
            @endforeach

        </div>

    </div>
@endsection
