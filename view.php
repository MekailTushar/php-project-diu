<html>
<head>
    <title>View Students Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .table-container {
            margin-top: 20px;
        }

        /* Custom table styling */
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }

        .table-striped tbody tr:hover {
            background-color: #f1f8ff;
        }

        .btn-delete {
            color: #dc3545;
            font-weight: bold;
        }

        .btn-delete:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-update {
            color: #17a2b8;
            font-weight: bold;
        }

        .btn-update:hover {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-search {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-search:hover {
            background-color: #ffca2c;
            border-color: #ffca2c;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 pt-4 mt-4 border border-success">
                <h3 class="text-center">DIU Library Management System</h3>

                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Student ID</th>
                                <th>Department</th>
                                <th>Phone</th>
                                <th>Lend Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'project');
                            $result = mysqli_query($con, "SELECT * FROM info1");
                            while ($row = mysqli_fetch_assoc($result)):
                                $id = $row['id'];
                                $name = $row['name'];
                                $sid = $row['sid'];
                                $dept = $row['dept'];
                                $phone = $row['phone'];
                                $lend = $row['lend'];
                            ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $sid; ?></td>
                                <td><?php echo $dept; ?></td>
                                <td><?php echo $phone; ?></td>
                                <td><?php echo $lend; ?></td>
                                <td><a class="btn btn-delete" href="delete.php?deleteid=<?php echo $row['id']; ?>">Delete</a></td>
                                <td><a class="btn btn-update" href="update.php?updateid=<?php echo $row['id']; ?>">Update</a></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-3">
                    <a class="btn btn-search" href="insert.php">Add Student</a><br><br>
                </div>
                
                
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

</body>
</html>
