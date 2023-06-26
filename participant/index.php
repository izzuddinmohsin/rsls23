<?php 
require('../db/db_connect.php'); 
require('../db/auth.php');

$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query) or die(mysqli_connect_error());
$rows = mysqli_num_rows($result);
$user = mysqli_fetch_assoc($result);
$id_user = $user['id'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
   $id_scope = $_POST['id_scope'];
   $id_category = $_POST['id_category'];
   $file_link = $_POST['file_link'];

   // Insert the file information into the 'file' table
   $sql = "INSERT INTO file (id_user, id_category, id_scope, file_link) 
           VALUES ('$id_user', '$id_category', '$id_scope', '$file_link')";
   $sql_run = mysqli_query($conn, $sql);

   if ($sql_run) {
       //echo "Information saved to the database.";
   } else {
       echo "Error: " . mysqli_error($conn);
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

    <title>Participant RSLS 23 - Dashboard</title>

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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-2">Participant<sup> RSLS</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">
                        
            <!-- Heading -->
            <div class="sidebar-heading">
                Participant Management
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Document Submission</span></a>
            </li>

            <!-- Nav Item  -->
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Participant Account</span></a>
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
                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Document Submission</h1>
                    </div>
                    <div class="row center">

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Abstract Submission</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">7 July 2023</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                             Paperwork Submission</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">4 August 2023</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                             Notification Of Selection</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">6 October 2023</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                             Journal Punlication</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Before 30 November 2023</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                             Journal Printing</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Before 31 December 2023</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                             Journal Circulation</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Before 31 January 2024</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-7">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Upload Link Document</h6>
                                </div>

                                <div class="card-body">
                                    <p>The participants need to send the document through a link such as google drive or outlook. </p>
                                    <p>The document link you upload must be:</p>
                                    <ol>
                                        <li>Each link for each document is different.</li>
                                        <li>It is recommended to create a shortlink to facilitate the process of saving your document link. It is recommended to use bit.ly.</li>
                                        <li>Each of your documents must be in pdf format.</li>
                                        <li>It is recommended to name your document with an appropriate name such as yourname_fullpaper.pdf.</li>
                                        <li>Each participant is only can choose one scope.</li>
                                    </ol>
                                    <p>It is hoped that you will be able to comply with the guidelines that we set.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Link document submission form</h6>
                                </div>

                                <div class="card-body">        
                                        <form action="" id="manage-user" method="POST" enctype="multipart/form-data">	
                                            <div class="form-group">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <label for="title">Scope</label>
                                                    <select name="id_scope" id="id_scope" class="custom-select">
                                                        <option value="">-Select Type Unit-</option>
                                                        <<?php
                                                        $sql = "SELECT * FROM scope;";
                                                        $sql_run = mysqli_query($conn, $sql);
                                                        while($row = mysqli_fetch_array($sql_run)){
                                                            echo '<option value="' . $row['id_scope'] . '">' . $row['scope_name'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>                                            </div>
                                                <div class="col-sm-12">
                                                    <label for="password">Category</label>
                                                    <select name="id_category" id="id_category" class="custom-select">
                                                        <option value="">-Select Type Unit-</option>
                                                        <?php
                                                        $sql = "SELECT * FROM category;";
                                                        $sql_run = mysqli_query($conn, $sql);
                                                        while($row = mysqli_fetch_array($sql_run)){
                                                            echo '<option value="' . $row['id_category'] . '">' . $row['category_name'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="name">Link Document/File</label>
                                                    <input type="Text" class="form-control form-control-user" name="file_link" id="file_link">
                                                </div>
                                            </div> 
                                        <br>
                                        <div class="card-footer">
                                            <div class="col-md-4">
                                                <div class="row">
                                                <button class=" btn btn-md btn-primary mr-2" id="submit" type="submit">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Link Submitted</h6>
                                </div>
                                <div class="card-body">                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Scope</th>
                                                    <th>Category</th>
                                                    <th>File Link</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Scope</th>
                                                    <th>Category</th>
                                                    <th>File Link</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php  
                                        $username = $_SESSION['username'];                                              
                                        $sql = "SELECT f.id_file, f.file_link, u.username, u.email, s.scope_name, c.category_name, r.title, r.full_name, r.phone_number, r.register_as, r.address, r.university, r.research_field
                                        FROM file AS f
                                        JOIN users AS u ON f.id_user = u.id
                                        JOIN scope AS s ON f.id_scope = s.id_scope
                                        JOIN category AS c ON f.id_category = c.id_category
                                        JOIN registration AS r ON u.id = r.id_login
                                        WHERE U.username ='$username'";
                                        $sql_run = mysqli_query($conn, $sql);
                                        while($row= mysqli_fetch_array($sql_run)){
                                                            ?>
                                            <tr>
                                                <td><?php echo $row['scope_name']; ?></td>
                                                <td><?php echo $row['category_name']; ?></td>
                                                <td><?php echo $row['file_link']; ?></td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon py-0" data-toggle="dropdown">
                                                            Action
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item edit_data" href="<?php echo $row['file_link']; ?>" target="_blank"><span class="fa fa-edit text-primary"></span> View</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item delete_data" href="deleteFile.php?id=<?php echo $row['id_file']; ?>" ><span class="fa fa-trash text-danger"></span> Delete</a>
                                                    </div>
                                            </td>
                                            </tr> <?php } ?>
                                            </tbody>
                                        </table>
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
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>