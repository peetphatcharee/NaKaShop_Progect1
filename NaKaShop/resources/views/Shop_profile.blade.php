@extends('layouts.shop')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Profile</div>

              
                <div class="card-body">
                   
                    <br>
                    <div style="overflow:auto">   
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  
          
                                    <th style="color: #000000">ชื่อ-สกุล</th>
                                    <th style="color: #000000">ชื่อร้าน</th>
                                    <th style="color: #000000">อีเมล</th>
                                    <th style="color: #000000">รหัสผ่าน</th>
                                    <th style="color: #000000">เบอร์โทร</th>
                                    <th style="color: #000000">ที่อยู่</th>
                                    <th style="color: #000000">โลโก้</th>
                                    <th></th>
                                   
                                    @if (auth::user() != '')
                                    
                                    @endif
          
                                  </tr>                          
                                </thead>
                            <tbody>
                              <?php $i = 0; ?>
                        @foreach($Sh as $key)
                        <?php $i++?>
              
                              <tr>
                                <td><p style="color: #000000">{{$key->shop_owner}}</p></td>
                                <td><p style="color: #000000">{{$key->shop_name}}</p></td>
                                <td><p style="color: #000000">{{$key->shop_email}}</p></td>
                                <td><p style="color: #000000">{{$key->shop_password}}</p></td>
                                <td><p style="color: #000000">{{$key->shop_tel}}</p></td>
                                <td><p style="color: #000000">{{$key->shop_address}}</p></td>
                                <td><img src="<?php echo $key->shop_logo ?>" width="150"></td>
                                <td><a href="Shop_editproduct"><button class="btn btn-warning">แก้ไข</button></a></td>
                              </tr>
                              @endforeach
                            </table>
                
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection
