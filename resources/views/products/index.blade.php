@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('products.create') }} " class="btn btn-primary">สร้างสินค้า</a>
        <div class="row">
            <div class="col-4">product 1</div>
            <div class="col-4">product 2</div>
            <div class="col-4">product 3</div>
        </div>

    </div>
@endsection
