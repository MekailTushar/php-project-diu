<?php
$con = mysqli_connect('localhost', 'root', '', 'project');

if (isset($_GET['updateid'])) {
    $updateId = $_GET['updateid'];

    // Fetch the record from the database
    $selectQuery = "SELECT * FROM info1 WHERE id = '$updateId'";
    $result = mysqli_query($con, $selectQuery);
    $row = mysqli_fetch_assoc($result);

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $sid = $_POST['sid'];
        $dept = $_POST['dept'];
        $phone = $_POST['phone'];

        // Update the record in the database
        $updateQuery = "UPDATE info1 SET name = '$name', sid = '$sid', dept = '$dept', phone = '$phone' WHERE id = '$updateId'";
        mysqli_query($con, $updateQuery);

        // Redirect back to the view page after update
        header("Location: view.php");
        exit();
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h3 class="text-center">Update Student Information</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="sid">Student ID:</label>
                <input type="text" class="form-control" id="sid" name="sid" value="<?php echo $row['sid']; ?>" required>
            </div>
            <div class="form-group">
                <label for="dept">Department:</label>
                <input type="text" class="form-control" id="dept" name="dept" value="<?php echo $row['dept']; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required>
            </div>
           <br> <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>

