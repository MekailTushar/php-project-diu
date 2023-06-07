<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
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
            background-color: #28a745;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center mb-0">Success</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            Insert Successful
                        </div>
                        <div class="text-center">
                            <a href="insert.php" class="btn btn-primary">Back to Form</a>

                            <a href="view.php" class="btn btn-secondary">View Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
