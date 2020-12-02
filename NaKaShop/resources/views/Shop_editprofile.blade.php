@extends('layouts.shop')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">UpdateProfile</div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="UpdateProfile"  >
                        <input type="hidden" name ="product_id" value="{{$product->product_id}}" >
                        <input type="hidden" name ="shop_id" value="{{$product->shop_id}}" >
                    @csrf
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">ชื่อสินค้า :</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                name="product_name"  value="{{$product->product_name}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">จำนวนสินค้า :</label>
                        <div class="col-md-6">
                        <div class="custom-file">
                            <input id="duration" placeholder="0.00" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                             name="product_num"  value="{{$product->product_num}}" required autofocus 
                            >
                         
                        </div>
                    </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">ราคา/หน่วย :</label>

                            <div class="col-md-6">
                                <input id="duration" placeholder="0.00" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                 name="product_price"  value="{{$product->product_price}}" required autofocus 
                                >
                            </div>
                           
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">รูปภาพ :</label>
                        <div class="col-md-6">
                        <div class="custom-file">
                          <input type="file" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"  name="product_image" 
                          value="{{$product->product_image}}" required autofocus>
                         
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">หมวดหมู่</label>

                            <div class="col-md-6">
                                <select class="form-control" id="sel1" name="category_id" >
                                    @foreach ($Sh as $item)
                                        @if($item->category_id==$product->category_id)
                                        <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                                        @endif
                                    @endforeach 
                                    @foreach ($Sh as $item)
                                        @if($item->category_id!=$product->category_id)
                                        <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                                        @endif
                                    @endforeach 
                                      </select>
                            </div>
                    </div>

                   
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">รายละเอียดสินค้า</label>

                        <div class="col-md-6">
                            
                            <textarea id="name" type="text" rows="5" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                name="product_detail"  type="text" required autofocus>{{$product->product_detail}}</textarea>
                        </div>
                </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    บันทึก
                                </button>
                            </div>
                        </div>

                    </form>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection
