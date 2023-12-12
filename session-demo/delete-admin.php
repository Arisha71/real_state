<?php

// Including include/config.php file for database connection
include("config.php");

// Sanitize the input to prevent SQL injection
$admin_id = isset($_GET['id']) ? mysqli_real_escape_string($cn, $_GET['id']) : '';

// Query to check the number of admin profiles
$admin_count_query = "SELECT COUNT(*) as count FROM admin";
$count_result = mysqli_query($cn, $admin_count_query);

// Check if the query was successful
if ($count_result) {
    $row = mysqli_fetch_assoc($count_result);
    $admin_count = $row['count'];

    // Check if there is only one admin profile
    if ($admin_count > 1) {
        // Perform the delete operation
        $delete_query = "DELETE FROM admin WHERE id = $admin_id";
        $delete_result = mysqli_query($cn, $delete_query);

        // Check if the delete query was successful
        if ($delete_result) {
            session_start();
           $_SESSION['status'] = 'Data has been deleted successfully';
           header("Location:view-admin.php");

        } else {
            echo "Error deleting admin entry: " . mysqli_error($cn);
        }
    } else {
        session_start();
        $_SESSION['statuss'] = 'Cannot delete the last admin entry. At least one admin entry must remain.';
        header("Location:view-admin.php");
    }

    // Free the result set
    mysqli_free_result($count_result);
} else {
    echo "Error counting admin profiles: " . mysqli_error($cn);
}
// Close the database connection
mysqli_close($cn);
?>

