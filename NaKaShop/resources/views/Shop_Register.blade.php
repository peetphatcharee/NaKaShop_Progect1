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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/NaKaShop/public/">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
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
                    <i class="fas fa-fw fa-wrench"></i>
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

                 

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                


                

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 " style="color: #000000">สมัครสมาชิกร้านค้า</h1>
                 
                    </div>
                    <div class="col-md-12">
                        <div class="card  text-white shadow">
                            <div class="card-body">
                                
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-9">
                                               
                                                   
                                    
                                                    <div class="card-body">
                                                        <form method="post" enctype="multipart/form-data" action="register_shop"  >
                                                            
                                                        @csrf
                                                        <div class="form-group row">
                                                                <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">ชื่อ-สกุล:</label>
                                                                <div class="col-md-6">
                                                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                                                    name="shop_owner"  value="" required autofocus>
                                                                </div>
                                                        </div>
                                    
                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000"> ชื่อร้าน :</label>
                                                            <div class="col-md-6">
                                                            <div class="custom-file">
                                                                <input id="duration" placeholder="" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                                                name="shop_name"  value="" required autofocus 
                                                                >
                                                             
                                                            </div>
                                                        </div>
                                                        </div>
                                    
                                                        <div class="form-group row">
                                                                <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">อีเมล :</label>
                                    
                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="shop_email" value="" required>
                                    
                                                                </div>
                                                               
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">รหัสผ่าน :</label>
                                                            <div class="col-md-6">
                                                            <div class="custom-file">
                                                                <input id="duration" placeholder="" type="password" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                                                name="shop_password"  value="" required autofocus >
                                                             
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="form-group row">
                                                                <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">เบอร์โทร</label>
                                    
                                                                <div class="col-md-6">
                                                                    <div class="custom-file">
                                                                        <input id="duration" placeholder="" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                                                        name="shop_tel"  value="" required autofocus >
                                                                       
                                                                      </div>
                                                                </div>
                                                        </div>
                                    
                                                       
                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">ที่อยู่</label>
                                    
                                                            <div class="col-md-6">
                                                                
                                                                <textarea  placeholder="" id="name" type="text" rows="5" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                                                    name="shop_address"  value="" required autofocus></textarea>
                                                            </div>
                                                    </div>
                                    
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000000">โลโก้ร้าน :</label>
                                                        <div class="col-md-6">
                                                        <div class="custom-file">
                                                          <input type="file" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  name="shop_logo" >
                                                         
                                                        </div>
                                                    </div>
                                                    </div>
                                    
                                                        <div class="form-group row mb-0">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        สมัคร
                                                                    </button>
                                                                </div>
                                                            </div>
                                    
                                                        </form>
                                                        
                                                    </div>
                                                
                                            </div>
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