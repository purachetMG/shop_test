@extends('main')

@section('content')
<br>


<div class="wrapper fadeInDown">
    <h1>เพิ่มสินค้า</h1>
    <div id="formContent">
  
        <form action="{{ route('show.validate_product') }}" method="POST" enctype="multipart/form-data">
            
            @csrf  
            <input type="text" name="product_name" class="form-control" placeholder="ชื่อสินค้า" />
					@if($errors->has('product_name'))
						<span class="text-danger">{{ $errors->first('product_name') }}</span>
					@endif

            <input type="number" name="quantity" class="form-control" placeholder="จำนวนสินค้า" />
					@if($errors->has('quantity'))
						<span class="text-danger">{{ $errors->first('quantity') }}</span>
					@endif
            <input type="number" name="price" class="form-control" placeholder="ราคาสินค้า" />
					@if($errors->has('price'))
						<span class="text-danger">{{ $errors->first('price') }}</span>
					@endif
            <input type="text" name="note" class="form-control" placeholder="รายละเอียด" />
					@if($errors->has('note'))
						<span class="text-danger">{{ $errors->first('note') }}</span>
					@endif
            <input type="file" name="images" class="form-control" placeholder="รูป" />
					@if($errors->has('images'))
						<span class="text-danger">{{ $errors->first('images') }}</span>
					@endif
        <input type="submit" class="fadeIn fourth" value="ยืนยัน">
    
      </form>
  
    </div>
  </div>


@endsection('content')