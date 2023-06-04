@extends('main')

@section('content')
<br>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 text-center">
        <h1>สินค้าทั้งหมด</h1>
        </div>
        <div>
            <a href="{{ route('show.add_product') }}" class="btn btn-success m-3">เพิ่มสินค้า</a>
        </div>
        
        <table class="table table-bordered">
            <tr>
                    <th>รูปสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคา</th>
                    <th>หมายเหตุ</th>
                
            </tr>
        @foreach ($prod as $product)
                <tr>
                   
                    <td><img src="{{ asset($product->images) }}" width="60" height="60" class="img img-responsive" alt=""></td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->note }}</td>
                    @endforeach
                </tr>
            
        </table>
      
    </div>
</div>


@endsection('content')