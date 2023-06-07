<?php
$con = mysqli_connect('localhost', 'root', '', 'project');

if (isset($_GET['deleteid'])) {
    $deleteId = $_GET['deleteid'];

    // Delete the record from the database
    $deleteQuery = "DELETE FROM info1 WHERE id = '$deleteId'";
    mysqli_query($con, $deleteQuery);
}

mysqli_close($con);

// Redirect back to the view page after deletion
header("Location: view.php");
exit();
?>
