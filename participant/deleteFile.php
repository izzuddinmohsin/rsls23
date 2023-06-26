<?php
require('../db/db_connect.php');
require('../db/auth.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM file WHERE id_file = $id";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        header('Location: index.php'); 
        exit();
    } else {
        echo "Error deleting the link: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request. file ID is missing.";
}
?>