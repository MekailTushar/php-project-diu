<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $id = $_POST['sid'];
    $dept = $_POST['dept'];
    $phone = $_POST['phone'];
    $lend = $_POST['lend'];

    $error = array();
    if ($name == NULL) {
        $error['name'] = "Enter Your Name";
    }
    if ($id == NULL) {
        $error['sid'] = "Enter Your Student ID";
    }
    if ($phone == NULL) {
        $error['phone'] = "Enter Your Phone Number";
    }
    if ($lend == NULL) {
        $error['lend'] = "Enter Lend Date";
    }

    if (count($error) == 0) {
        $con = mysqli_connect('localhost', 'root', '', 'project');
        $query = mysqli_query($con, "INSERT INTO info1(name,sid,dept,phone,lend) VALUES('$name','$id','$dept','$phone','$lend')");

        if ($query) {
            // Redirect to a success page
            header("Location: success.php");
            exit();
        } else {
            $message = "Insert Failed";
            $alertClass = "alert-danger";
        }
    }
}
?>

<html>
<head>
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            background-color: #ffffff;
        }

        .card-header {
            background-color: #007bff;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center mb-0">Library Management System</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($message)): ?>
                            <div class="alert <?= $alertClass ?>" role="alert">
                                <?= $message ?>
                            </div>
                        <?php endif; ?>
                        <form action="insert.php" method="POST">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                                <?php if(isset($error['name'])): ?>
                                    <div class="text-danger"><?= $error['name'] ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <input type="number" name="sid" class="form-control" placeholder="Enter Your Student ID">
                                <?php if(isset($error['sid'])): ?>
                                    <div class="text-danger"><?= $error['sid'] ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="dept" class="form-control" placeholder="Enter Your Department Name">
                            </div>
                            <div class="mb-3">
                                <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone Number">
                                <?php if(isset($error['phone'])): ?>
                                    <div class="text-danger"><?= $error['phone'] ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <input type="date" name="lend" class="form-control" placeholder="Enter Lend Date">
                                <?php if(isset($error['lend'])): ?>
                                    <div class="text-danger"><?= $error['lend'] ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="register" class="btn btn-primary" value="Submit">
                                

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
