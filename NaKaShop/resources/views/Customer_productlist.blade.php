@extends('layouts.customer')

@section('content')
<div id="layoutSidenav_content">
                    
                            <main>
                                <!-- Color System -->
                                <h1 class="mt-4" ><i class="fas fa-box mr-1" style="color:#000000">สินค้าแนะนำ</i></h1>
                            <div class="row" >
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 300;"
                                                    src="pro.png" alt="">
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 " style="text-align: center"><p style="color:#000000">โคโคเน่ ครีม</p></div>
                                                <img class="px-3 px-sm-4 mt-3 mb-4 float-left" style="width: 10;"
                                                    src="star.png" alt="">
                                                   
                                           
                                            <br>
                                           
                                            <div style="text-align: right"><h5 style="color:#000000" >ราคา 60 บาท</h5></div>
                                            <div style="text-align: right"><p >(จำนวน 32 หลอด)</p></div>
                                            <div style="text-align:right" ><a href="Customer_detailproduct"><button type="button" class="btn btn-info">รายละเอียด</button></a></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" width="200"
                                                    src="lo.png" alt="">
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 " style="text-align: center"><p style="color:#000000">น้ำมันมะพร้าวสกัดเย็น</p></div>
                                                <img class="px-3 px-sm-4 mt-3 mb-4 float-left" style="width: 10;"
                                                    src="star.png" alt="">
                                                   
                                           
                                            <br>
                                           
                                            <div style="text-align: right"><h5 style="color:#000000" >ราคา 120 บาท</h5></div>
                                            <div style="text-align: right"><p >(จำนวน 33 ขวด)</p></div>
                                            <div style="text-align:right" ><a href="Customer_detailproduct"><button type="button" class="btn btn-info" >รายละเอียด</a></button></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img lass="img-fluid px-3 px-sm-4 mt-3 mb-4" width="150"
                                                    src="pro2.png" alt="">
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 " style="text-align: center"><p style="color:#000000">สบู่สับปะรดน้ำผึ้ง</p></div>
                                                <img class="px-3 px-sm-4 mt-3 mb-4 float-left" style="width: 10;"
                                                    src="star.png" alt="">
                                                   
                                           
                                            <br>
                                           
                                            <div style="text-align: right"><h5 style="color:#000000" >ราคา 60 บาท</h5></div>
                                            <div style="text-align: right"><p >(จำนวน 15 หลอด)</p></div>
                                            <div style="text-align:right"><a href="Customer_detailproduct"><button type="button" class="btn btn-info">รายละเอียด</a></button></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            

</div>

                                {{-- <div class="container-fluid">
                                    <h1 class="mt-4"><i class="fas fa-box mr-1"></i>สินค้าแนะนำ</h1>
                                    
                        
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-table mr-1"></i>ตะกร้าสินค้า
                                        </div>
                                        <div class="card-body text-left">
                                        <div class="card">
                                        <div class="row">
                                            <div class="col-1">
                                            </div>
                                            <div class="col-2">
                                            <img src="k.png" class="rounded float-left" alt="...">
                                            </div>
                                            <div class="col">
                                            <div class="card-body text-left">
                                            <h5 class="text">ไม้กวาด</h5>
                                            <p class="card-text ">height action.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                            <div class="card-footer text-right">
                                             <small class="text-muted">
                                            <a class="btn btn-outline-warning ">-</a> &nbsp; 1 &nbsp;
                                            <a class="btn btn-outline-warning ">+</a>&nbsp;
                                            <a  class="btn btn-outline-success " ><i
                                              class="fas fa-edit mr-1"></i>สั่งซื้อ</a> </small>
                                            </div>
                                        </div>
                                        </div>
                                        <br>
                                        <div class="card">
                                        <div class="row">
                                            <div class="col-1">
                                            </div>
                                            <div class="col-2">
                                            <img src="k.png" class="rounded float-left" alt="...">
                                            </div>
                                            <div class="col">
                                            <div class="card-body text-left">
                                            <h5 class="text">ไม้กวาด</h5>
                                            <p class="card-text ">height action.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                            <div class="card-footer text-right">
                                             <small class="text-muted">
                                            <a class="btn btn-outline-warning ">-</a> &nbsp; 1 &nbsp;
                                            <a class="btn btn-outline-warning ">+</a>&nbsp;
                                            <a  class="btn btn-outline-success " ><i
                                              class="fas fa-edit mr-1"></i>สั่งซื้อ</a> </small>
                                            </div>
                                        </div>
                                    </div> --}}
                              
                                    
            
                     
@endsection
