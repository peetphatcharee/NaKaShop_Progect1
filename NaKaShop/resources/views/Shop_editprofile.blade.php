@extends('layouts.shop')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">UpdateProfile</div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="UpdateProfile"  >
                        
                        <input type="hidden" name ="shop_id" value="{{$shop->shop_id}}" >
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">ชื่อ-สกุล:</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                            name="shop_owner"  value="{{$shop->shop_owner}}" required autofocus>
                        </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000"> ชื่อร้าน :</label>
                    <div class="col-md-6">
                    <div class="custom-file">
                        <input id="duration" placeholder="" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                        name="shop_name"  value="{{$shop->shop_name}}" required autofocus 
                        >
                     
                    </div>
                </div>
                </div>

                <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">อีเมล :</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                            name="shop_email" value="{{$shop->shop_email}}" required>

                        </div>
                       
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">รหัสผ่าน :</label>
                    <div class="col-md-6">
                    <div class="custom-file">
                        <input id="duration" placeholder="" type="password" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                        name="shop_password"  value{{$shop->shop_password}} required autofocus >
                     
                    </div>
                </div>
                </div>
                <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">เบอร์โทร</label>

                        <div class="col-md-6">
                            <div class="custom-file">
                                <input id="duration" placeholder="" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                name="shop_tel"  value="{{$shop->shop_tel}}" required autofocus >
                               
                              </div>
                        </div>
                </div>

               
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">ที่อยู่</label>

                    <div class="col-md-6">
                        
                        <textarea  placeholder="" id="name" type="text" rows="5" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                            name="shop_address"  value="" required autofocus>{{$shop->shop_address}}</textarea>
                    </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">โลโก้ร้าน :</label>
                <div class="col-md-6">
                <div class="custom-file">
                  <input type="file" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  
                  name="shop_logo" value="{{$shop->shop_logo}}" required autofocus>
                </div>
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
