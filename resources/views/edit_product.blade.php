@extends('main')

@section('content')
<br>


<div class="wrapper fadeInDown">
    <h1>แก้ไขสินค้า</h1>
    <div id="formContent">
  
        <form action="{{ route('show.update_product',$product->id) }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            <input type="text" name="product_name" class="form-control" placeholder="ชื่อสินค้า" value="{{ $product->product_name }}" />
					@if($errors->has('product_name'))
						<span class="text-danger">{{ $errors->first('product_name') }}</span>
					@endif

            <input type="number" name="quantity" class="form-control" placeholder="จำนวนสินค้า" value="{{ $product->quantity }}" />
					@if($errors->has('quantity'))
						<span class="text-danger">{{ $errors->first('quantity') }}</span>
					@endif
            <input type="number" name="price" class="form-control" placeholder="ราคาสินค้า" value="{{ $product->price }}" />
					@if($errors->has('price'))
						<span class="text-danger">{{ $errors->first('price') }}</span>
					@endif
            <input type="text" name="note" class="form-control" placeholder="รายละเอียด" value="{{ $product->note }}" />
					@if($errors->has('note'))
						<span class="text-danger">{{ $errors->first('note') }}</span>
					@endif
            <input type="file" name="images" class="form-control" placeholder="รูป" value="{{ $product->images }}" />
					@if($errors->has('images'))
						<span class="text-danger">{{ $errors->first('images') }}</span>
					@endif
        <input type="submit" class="fadeIn fourth" value="ยืนยัน">
    
      </form>
  
    </div>
  </div>



@endsection('content')