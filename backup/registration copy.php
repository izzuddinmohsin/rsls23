<?php
    require('db/db_connect.php');
    session_start();
    
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['submit'])){
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username); 
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $register_as = $_REQUEST['register_as'];
        $access_level = $register_as; // Assign the same value to access_level
        $trn_date = date("Y-m-d H:i:s");
        $university = $_REQUEST['university'];
        $title = $_REQUEST['title'];
        $full_name = $_REQUEST['full_name'];
        $phone_number = $_REQUEST['phone_number'];
        $address = $_REQUEST['address'];
        $research_field = $_REQUEST['research_field'];
        
        $query = "INSERT INTO `users` (username, password, register_as, access_level, email, trn_date, title, full_name, phone_number, address, research_field, university)
        VALUES ('$username', '".md5($password)."', '$register_as', '$access_level', '$email', '$trn_date', '$title', '$full_name', '$phone_number', '$address', '$research_field','$university')";

        $result = mysqli_query($conn, $query);
            
        if ($result) {
            header("Location: login.php");
            $_SESSION['success'] = '<div class="alert alert-success" role="alert"> Successfully registered</div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />

    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #a1c4fd;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
        }

        .bg-indigo {
            background-color: #4835d4;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class="container py-3 h-100">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 10px;">
                <li class="nav-item">
                    <a class="nav-link" href="./"><i class="fas fa-arrow-left"></i> Back</a>
                </li>
            </ul>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <form action="" method="post">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Event Registeration</h3>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="text" name="username" id="form3Examplev1"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev4">Username</label>
                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input name="email" type="email" id="form3Examplev4"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev4">E-mail</label>
                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="password" name="password" id="form3Examplev1"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev4">Password</label>
                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <select class="form-select" name="title">
                                                    <option value="">--Select Title--</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Prof">Prof</option>
                                                </select>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="text" name="full_name" id="form3Examplev1"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev4">Full Name</label>
                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input name="phone_number" type="text" id="form3Examplev4"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev4">Phone Number</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5 text-white">-</h3>

                                            <div class="mb-4 pb-2">
                                                <select class="form-select" name="register_as">
                                                    <option value="">--Register As--</option>
                                                    <option value="Presenter">Presenter</option>
                                                    <option value="Participant">Participant</option>
                                                </select>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="text" name="address" id="form3Examplea2"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea2">Address</label>
                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline ">
                                                    <input type="text" name="university" id="form3Examplea3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea3">University</label>
                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline ">
                                                    <input type="text" name="research_field" id="form3Examplea3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea3">Research Field</label>
                                                </div>
                                            </div>
                                            <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="form2Example3c" />
                                                <label class="form-check-label" for="form2Example3">
                                                    I do accept the <a href="#!"><u>Terms and Conditions</u></a> of your
                                                    site.
                                                </label>
                                            </div>

                                            <button type="submit" class="btn btn-lg bg-secondary text-white"
                                                style="padding-left: 2.5rem; padding-right: 2.5rem;"
                                                name="submit">Register</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

</body>

</html>