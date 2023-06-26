<?php
        require('db/db_connect.php');
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['submit'])){
            // removes backslashes
	        $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
	        $username = mysqli_real_escape_string($conn,$username);
	        $password = stripslashes($_REQUEST['password']);
	        $password = mysqli_real_escape_string($conn,$password);
	        //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
	        $result = mysqli_query($conn,$query) or die(mysqli_connect_error());
	        $rows = mysqli_num_rows($result);
            $user = mysqli_fetch_assoc($result);
            if($rows==1){
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $user['id'];

                if($user['access_level']=="admin"){

                    header("Location: admin/index.php");

                }else{
                    header("Location: participant/index.php");

                }
	            
            }else{

                $_SESSION['error'] = '<div class="alert alert-danger" role="alert"> Username/Password is incorrect.</div>';

	        }
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
    

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <section>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 20px;">
            <li class="nav-item">
                <a class="nav-link" href="./"><i class="fas fa-arrow-left"></i> Back</a>
            </li>
        </ul>

        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="assets/image/logo2.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post">

                        <?php
                            if(isset($_SESSION['error'])) {
                                $errorMessage = $_SESSION['error'] ;
                                unset($_SESSION['error']);
                                echo $errorMessage;
                            }elseif(isset($_SESSION['success'])){
                                $successMessage = $_SESSION['success'] ;
                                unset($_SESSION['success']);
                                echo $successMessage;
                            }
                        ?>

                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in</p>
                            </button>
                        </div>


                        <div class="divider d-flex align-items-center my-4">
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter Username" name="username" />
                            <label class="form-label" for="form3Example3">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" name="password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-lg bg-secondary text-white"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">Login</button>

                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="registration.php"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-secondary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                2023 RSLS '23
            </div>
            <!-- Copyright -->
        </div>
    </section>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</body>

</html>