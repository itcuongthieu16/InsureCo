<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>INSURANCE CRUD</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                        <h4>.
                            <a href="../index.php" class="btn btn-primary float-end">MENU</a>
                        </h4>
                    </div>
                    <div class="card-header">
                        <h4>INSURANCE DETAILS
                            <a href="insurance-create.php" class="btn btn-primary float-end">ADD INSURANCE</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>INSU_CODE</th>
                                    <th>INSU_NAME</th>
                                    <th>INSU_DURATION</th>
                                    <th>INSU_VALUE</th>
                                    <th>TYPE_INSU_CODE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM insurance";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $insurance) {
                                ?>
                                        <tr>
                                            <td><?= $insurance['INSU_CODE']; ?></td>
                                            <td><?= $insurance['INSU_NAME']; ?></td>
                                            <td><?= $insurance['INSU_DURATION']; ?></td>
                                            <td><?= $insurance['INSU_VALUE']; ?></td>
                                            <td><?= $insurance['TYPE_INSU_CODE']; ?></td>
                                            <td>
                                                <a href="insurance-view.php?id=<?= $insurance['INSU_CODE']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="insurance-edit.php?id=<?= $insurance['INSU_CODE']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_insurance" value="<?= $insurance['INSU_CODE']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>