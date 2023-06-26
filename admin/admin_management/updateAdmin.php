<?php
require('../../db/db_connect.php'); 
require('../../db/auth.php');

if (isset($_GET['id'])) {
    $Id = $_GET['id'];
    
    $sql = "SELECT * FROM users JOIN admin ON users.id = admin.id_login WHERE admin.id_login = $Id";
    $sql_run = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($sql_run);
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $admin_name = $_POST['admin_name'];
    $admin_phone = $_POST['admin_phone'];
    $admin_address = $_POST['admin_address'];

    $update_query = "UPDATE users SET username='$username', password='$password', email='$email' WHERE id = $Id";
    $update_query2 = "UPDATE admin SET admin_name='$admin_name', admin_phone='$admin_phone', admin_address='$admin_address' WHERE id_login = $Id";

    if (mysqli_query($conn, $update_query)) {
        if (mysqli_query($conn, $update_query2)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Directory</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

     <!-- Page Wrapper -->
     <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-2">Admin<sup> RSLS</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Participant Management
    </div>

    <!-- Nav Item  -->
    <li class="nav-item">
        <a class="nav-link" href="../participant_management/index.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Participant Directory</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="../document_submission/index.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Document Submission</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Heading -->
    <div class="sidebar-heading">
        Admin Management
    </div>

    <!-- Nav Item  -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Admin Directory</span></a>
    </li>
    <!-- Nav Item  -->
    <li class="nav-item">
        <a class="nav-link" href="registerAdmin.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Admin Registration</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['username']; ?></span>
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../profile.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../../logout.php" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->
                
                 <!-- Begin Page Content -->
                   
                 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Admin Account Details</h1>

<div class="card card-outline card-primary">
    <div class=" card card-outline  ">
            <div class="container-fluid">
                <div id="msg"></div> <br>

                <form action="" id="manage-user" method="POST">	
                    <div class="form-group">
                        <label for="admin_name">Name</label>
                        <input type="text" name="admin_name" id="admin_name" class="form-control" value="<?php echo $row['admin_name']?>" >
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username']?>" >
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="text" name="password" id="password" class="form-control" value="<?php echo $row['password']?>" >
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="admin_phone">Phone</label>
                            <input type="text" class="form-control form-control-user" name="admin_phone"id="admin_phone" value="<?php echo $row['admin_phone']?>" >
                        </div>
                        <div class="col-sm-6">
                            <label for="name">Email</label>
                            <input type="text" class="form-control form-control-user" name="email" id="email" value="<?php echo $row['email']?>" >
                        </div>
                    </div>
                                        
                    <div class="form-group">
                        <label for="username">Access Level</label>
                        <input type="text" name="access_level" id="access_level" class="form-control" value="<?php echo $row['access_level']?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" id="admin_address" name="admin_address" rows="3"><?php echo $row['admin_address']?></textarea>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12">
                            <div class="row">
                              <button class="btn btn-sm btn-primary mr-2" id="submit" type="submit" name="submit">Save</button>
                              <a class="btn btn-sm btn-secondary" href="index.php">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
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
                        <span>Copyright &copy; RSLS 23</span>
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
                    <a class="btn btn-primary" href="../../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>