@extends('layouts.shop')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card  text-white shadow">
                <div class="card-body">

                                    <div class="card-body">
            <div class="col-md-10 col-md-offset-1">
                <?php $i = 0; ?>
                @foreach($Sh as $key)
                <?php $i++?>
                <img src="<?php echo $key->shop_logo ?>" width="150" style="float:left; border-radius:50%; margin-right:25px;">
                <h3 style="color: #000000">ชื่อร้าน : {{$key->shop_name}}</h3>
                <h5 style="color: #000000">ชื่อ-สกุล: {{$key->shop_owner}}</h5>
                <h5 style="color: #000000">อีเมล : {{$key->shop_email}}</h5>
                <h5 style="color: #000000">รหัสผ่าน : {{$key->shop_password}}</h5>
                <h5 style="color: #000000">เบอร์โทร : {{$key->shop_tel}}</h5>
                <h5 style="color: #000000">ที่อยู่ : {{$key->shop_address}}</h5>
                <a href="Shop_editprofile{{$shop_id}}"><button class="btn btn-warning">แก้ไข</button></a>
                @endforeach
            </div>
                                    </div>
                </div>
        </div>
        </div>
    </div>
</div>
@endsection
