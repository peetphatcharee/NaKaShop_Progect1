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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Shop_productlist{{$shop_id}}">
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
        <a class="nav-link collapsed" href="Shop_productlist{{$shop_id}}"  data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
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
    <li class="nav-item">
        <a class="nav-link collapsed" href="#"  data-target="#collapseUtilities"aria-expanded="true" aria-controls="collapseUtilities">
            <i class='fas fa-poll'></i>
            <span>รายงาน</span>
        </a>
        
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="cart"  data-target="#collapseUtilities"aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span> ตะกร้า</span>
        </a>
        
    </li> --}}

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
                                <a class="dropdown-item" href="Shop_profile{{$shop_id}}">
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
                        <h1 class="h3 mb-0" style="color: #000000">รายการสินค้า</h1>
                 
                    </div>
                    <div class="col-md-12">
                        <div class="card  text-white shadow">
                            <div class="card-body">
                                
                                  
                                   
                                               
                                                   
                                    
                                                <div class="card-body">
                                                    <div align="right"> <a href="Shop_addproduct{{$shop_id}}" class="btn btn-success"><i class='fas fa-plus-circle'>&nbsp;เพิ่มสินค้า</i></a> </div>
                                                    <br>
                                                    <div style="overflow:auto">   
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                  
                                          
                                          
                                                                   
                                                                    @if (auth::user() != '')
                                                                    
                                                                    @endif
                                          
                                                                  </tr>                          
                                                                </thead>
                                                            <tbody>
                                                              <?php $i = 0; ?>
                                                        @foreach($Sh as $key)
                                                        <?php $i++?>
                                              
                                                              <tr style="width: 100%">
                                                                <td style="width: 20%">
                                                                   
                                                                    <img src="<?php echo $key->product_image ?>" width="200">
                                                                    
                                                                    </td>
                                                                <td style="width: 40%" >
                                                                    <p style="color: #000000">รหัสสินค้า&nbsp;:&nbsp;{{$key->product_id}}</p>
                                                                    <p style="color: #000000">ชื่อสินค้า&nbsp;:&nbsp;{{$key->product_name}}</p>
                                                                    <p style="color: #000000">ราคา &nbsp;:&nbsp;{{$key->product_price}}</p>
                                                                     <a href="Shop_detailproduct{{$key->product_id}}_{{$shop_id}}" class="btn btn-outline-info"><i class='fas fa-exclamation-circle'></i>&nbsp;รายละเอียดเพิ่มเติม</a>
                                
                                                                </td>
                                                              
                                                                <td style="width: 40%">
                                
                                                                  <a href="Shop_editproduct{{$key->product_id}}_{{$shop_id}}"><button class="btn btn-warning"><i class='fas fa-edit'></i>แก้ไข</button></a> 
                                                        
                                                                  <a href="del{{$key->product_id}}_{{$shop_id}}"><button class="btn btn-danger"><i class='fas fa-trash-alt'></i>ลบ</button></a>
                                                                 
                                                                </td>
                                                              </tr>
                                                              @endforeach
                                                            </table>
                                                
                                            </div>
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