<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NAKA SHOP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background: #124A4A" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-store fa-4x"></i>
                </div>
                <div class="sidebar-brand-text mx-3">NAKA<sup>SHOP</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

          
            <!-- Divider -->
            <hr class="sidebar-divider">

           

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="Shop_productlist{shop_id}"  data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-shopping-bag fa-lg"></i>
            <span>สินค้า</span>
        </a>

    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#"  data-target="#collapseUtilities"aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-cart-plus"></i>
            <span>คำสั่งซื้อ</span>
        </a>
        
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#"  data-target="#collapseUtilities"aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-shipping-fast"></i>
            <span>การจัดส่งสินค้า</span>
        </a>
        
    </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #0DC1AB">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                 
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small" style="color: #000000">{{session('name')}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{session('img')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login_Shop" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container my-auto">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0" style="color: #000000">แก้ไขสินค้า</h1>
                 
                    </div>
                    <div class="col-md-12">
                        <div class="card  text-white shadow">
                            <div class="card-body">

                                                <div class="card-body">
                                                    <form method="post" enctype="multipart/form-data" action="updateproduct"  >
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>NAKA SHOP&copy;2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ออกจากระบบ</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">ต้องการออกจากระบบหรือไม่</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-primary" href="login_Shop">ตกลง</a>
                </div>
            </div>
        </div>
    </div>div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>