@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 m-auto">
                <h3 class="text-center">เพิ่มข้อมูลสินค้า</h3>
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <label for="name">name</label>
                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                    <label for="price"> price</label>
                    <input class="form-control" type="number" name="price" value="{{ $product->price }}">
                    <input type="submit" value="แก้ไข" class="btn btn-primary my-3">
                </form>
            </div>
        </div>

    </div>
@endsection
