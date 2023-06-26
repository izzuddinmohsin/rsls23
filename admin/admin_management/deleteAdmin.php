<?php
require('../../db/db_connect.php');
require('../../db/auth.php');

if (isset($_GET['id'])) {
    $Id = $_GET['id'];

    $deleteQuery = "DELETE FROM admin WHERE id_login = $Id";
    $deleteResult = mysqli_query($conn, $deleteQuery);
    $deleteQuery2 = "DELETE FROM users WHERE id = $Id";
    $deleteResult2 = mysqli_query($conn, $deleteQuery2);

    if ($deleteResult) {
        if ($deleteResult2) {
            header('Location: index.php'); 
            exit();
        } else {        echo "Error deleting the admin: " . mysqli_error($conn);
        }
    } else {        echo "Error deleting the admin: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request. admin ID is missing.";
}
?>