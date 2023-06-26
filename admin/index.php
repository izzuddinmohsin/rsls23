<?php require('../db/auth.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin RSLS 23 - Dashboard</title>

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
                <div class="sidebar-brand-text mx-2">Admin<sup> RSLS</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
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
                <a class="nav-link" href="participant_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Participant Directory</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="document_submission/index.php">
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
                <a class="nav-link" href="admin_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Admin Directory</span></a>
            </li>
            <!-- Nav Item  -->
            <li class="nav-item">
                <a class="nav-link" href="admin_management/registerAdmin.php">
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
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12 mb-6">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Welcome to the Administrator site</h6>
                                </div>
                                <div class="card-body">
                                    <p>
                                    The Admin site is a web-based interface designed specifically for administrators to access 
                                    and manage various functionalities related to participant information, document submissions, 
                                    admin accounts, and registration. Authorized administrators can perform the following tasks:
                                    </p>
                                    <ol>
                                        <li>Participant Directory:</li>
                                        <ul>
                                            <li>Display the complete list of participants registered in the system. This directory 
                                                provides an overview of participant details such as names, contact information, and 
                                                any other relevant information.</li>
                                            <li>Enable administrators to view, update, and delete participant information as required. 
                                                This functionality ensures accurate and up-to-date participant records and facilitates 
                                                effective management of participant data.</li>
                                        </ul>
                                        <li>Document Submission:</li>
                                        <ul>
                                            <li>Present a list of document submissions made by participants. This feature allows administrators 
                                                to view the submissions, including document names, submission dates, and participant details.</li>
                                            <li>Provide the capability to view and delete the submitted documents. Administrators can review 
                                                the content of the documents and remove any irrelevant or inappropriate submissions, ensuring 
                                                the integrity and relevance of the document database.</li>
                                        </ul>
                                        <li>Admin Directory:</li>
                                        <ul>
                                            <li>Showcase a comprehensive list of all administrators within the system. The directory includes 
                                                information such as admin names, roles, and contact details.</li>
                                            <li>Enable administrators to edit and delete admin information when necessary. This functionality 
                                                ensures efficient administration by allowing updates to admin details and the removal of accounts as required.</li>
                                        </ul>
                                        <li>Admin Registration:</li>
                                        <ul>
                                            <li>Facilitate the registration process for new administrators. This functionality allows individuals to create their 
                                                admin accounts within the system.</li>
                                            <li>Provide a user-friendly interface for prospective administrators to enter their information.</li>
                                            <li>Once registered, new administrators gain access to the admin site, granting them the ability to perform various 
                                                administrative tasks based on their assigned roles and permissions.</li>
                                        </ul>
                                    </ol>
                                    <p>
                                    The Admin site streamlines administrative tasks, empowering administrators to effectively manage participant information, 
                                    document submissions, and admin accounts. It ensures accurate record-keeping, maintains data integrity, and facilitates the 
                                    growth and management of the administrative team.
                                    </p>
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

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>