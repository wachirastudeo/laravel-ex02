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
        </div>

        @foreach ($productsVeiw as $item)
            <div class="row my-3">
                <div class="col-4"> {{ $item->name }} </div>
                <div class="col-4"> {{ $item->price }} </div>
                <div class="col-2"> <a class="btn btn-warning" href="{{ route('products.edit', $item->id) }}">แก้ไข</a>
                </div>
                <div class="col-2">
                    <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">ลบ</button>
                    </form>

                </div>
            </div>
        @endforeach



    </div>
@endsection
