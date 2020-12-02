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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-store fa-4x"></i>
                   {{-- <img src="online-shop.png" width="30" height="30"> --}}
                </div>
                <div class="sidebar-brand-text mx-3">NAKA<sup>SHOP</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

          
            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user-cog fa-lg"></i>
                    <span>สมัครสมาชิก</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
                        <a class="collapse-item" href="Shop_Register">ร้านค้า</a>
                        <a class="collapse-item" href="Customer_register">ลูกค้า</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="login_Shop"  data-target="#collapseUtilities"aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-lock fa-lg"></i>
                    <span>เข้าสู่ระบบ</span>
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

                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div id="layoutSidenav_content">
                           
                          
                            <img src="2.png" class="float-left" alt="..." width="600" height="300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="3.png" class="float-right" alt="Paris" width="450" height="300"> 
                         <br>
                         <br>
                            <img src="4.png" class="float-left" alt="..." width="600" height="300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="1.png" class="float-right" alt="Paris" width="450" height="300"> 
                         
                                {{-- <div class="container-fluid">
                                    <h1 class="mt-4"><i class="fas fa-box mr-1"></i>OTOP SHOP</h1>
                                    <ol class="breadcrumb mb-4">
                                        <a >WELCOME</a>
                                    </ol>
                        
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-table mr-1"></i>สินค้า OTOP
                                        </div>
                                        <div class="card-body text-left">
                        <div class="card-group">
                          <div class="card">
                            <img src="google_logo.jpg" style="height: 180px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">กระตร้าสานไม้ไผ่</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><a  class="btn btn-outline-success"><i
                                class="fas fa-edit mr-1"></i>สั่งซื้อ</a>
                             <a class="btn btn-outline-warning"><i
                                class="fas fa-edit mr-1"></i>เพิ่มลงตะกร้า</a></small>
                            </div>
                          </div>
                          <div class="card">
                            <img src="..." style="height: 180px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">หมูยอแม่ศรี</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                            <div class="card-footer">
                              <small class="text-muted"><a  class="btn btn-outline-success"><i
                                class="fas fa-edit mr-1"></i>สั่งซื้อ</a>
                             <a class="btn btn-outline-warning"><i
                                class="fas fa-edit mr-1"></i>เพิ่มลงตะกร้า</a></small>
                            </div>
                          </div>
                          <div class="card">
                            <img src="..." style="height: 180px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ไม้กวาด</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><a  class="btn btn-outline-success"><i
                                class="fas fa-edit mr-1"></i>สั่งซื้อ</a>
                             <a class="btn btn-outline-warning"><i
                                class="fas fa-edit mr-1"></i>เพิ่มลงตะกร้า</a></small>
                            </div>
                          </div>
                          <div class="card">
                            <img src="..." style="height: 180px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ไม้กวาด</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><a  class="btn btn-outline-success"><i
                                class="fas fa-edit mr-1"></i>สั่งซื้อ</a>
                             <a class="btn btn-outline-warning"><i
                                class="fas fa-edit mr-1"></i>เพิ่มลงตะกร้า</a></small>
                            </div>
                          </div>
                          
                        <br>
                        <div class="card-group">
                          <div class="card">
                            <img src="..." style="height: 180px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><a  class="btn btn-outline-success"><i
                                class="fas fa-edit mr-1"></i>สั่งซื้อ</a>
                             <a class="btn btn-outline-warning"><i
                                class="fas fa-edit mr-1"></i>เพิ่มลงตะกร้า</a></small>
                            </div>
                          </div>
                          <div class="card">
                            <img src="..." style="height: 180px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><a  class="btn btn-outline-success"><i
                                class="fas fa-edit mr-1"></i>สั่งซื้อ</a>
                             <a class="btn btn-outline-warning"><i
                                class="fas fa-edit mr-1"></i>เพิ่มลงตะกร้า</a></small>
                            </div>
                          </div>
                          <div class="card">
                            <img src=" " style="height: 180px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><a  class="btn btn-outline-success"><i
                                class="fas fa-edit mr-1"></i>สั่งซื้อ</a>
                             <a class="btn btn-outline-warning"><i
                                class="fas fa-edit mr-1"></i>เพิ่มลงตะกร้า</a></small>
                            </div>
                          </div>
                          <div class="card">
                            <img src="" style="height: 180px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ไม้กวาด</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><a  class="btn btn-outline-success"><i
                                class="fas fa-edit mr-1"></i>สั่งซื้อ</a>
                             <a class="btn btn-outline-warning"><i
                                class="fas fa-edit mr-1"></i>เพิ่มลงตะกร้า</a></small>
                            </div>
                          </div>
                          
                        </div>
                        
                    </div>

                
                            </div>--}}
                        </div>
                    </div> 

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                           

                        </div>

                        <div class="col-lg-6 mb-4">

                

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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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